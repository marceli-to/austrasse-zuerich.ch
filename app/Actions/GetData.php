<?php
namespace App\Actions;
use App\Actions\FetchData;
use Illuminate\Support\Facades\Storage;

class GetData
{
  
  // All possible listing status
  protected $listing_status_all = ["pre", "act", "dis", "arc", "rem"];
  protected $listing_status_active = ["pre", "act", "dis"];
  protected $listing_status_removed = ["arc", "rem"];

  // Your final listing status
  protected $status_free = "free";
  protected $status_reserved = "reserved";
  protected $status_taken = "taken";

  public function execute(): \Illuminate\Support\Collection
  { 
    // if there is no file or the existing file is older than 60 minutes, fetch new data
    if (
      !Storage::disk('public')->exists('apartements.json') || 
      Storage::disk('public')->lastModified('apartements.json') < now()->subMinutes(60)->timestamp
    )
    {
      (new FetchData)->execute();
    }
    $data = Storage::disk('public')->get('apartements.json');
    $data = collect(json_decode($data, true));
    $states = $this->getState($data);
    $data = $data->map(function ($apartment) use ($states) {
      $apartment['state'] = $states[$apartment['reference']] ?? $this->status_free;
      return $apartment;
    });

    // remove duplicates
    $data = $data->unique('reference');

    // for testing purposes add a couple of reserved states to:
    // 7908.01.0002, 7908.01.0101, 7908.01.0003
    $data = $data->map(function ($apartment) {
      if (in_array($apartment['reference'], ['7908.01.0002', '7908.01.0101', '7908.01.0003'])) {
        $apartment['state'] = $this->status_reserved;
      }
      return $apartment;
    });

    // for testing purposes add a couple of reserved states to:
    // 7908.02.0202, 7908.03.0401, 7908.03.0201
    $data = $data->map(function ($apartment) {
      if (in_array($apartment['reference'], ['7908.02.0202', '7908.03.0401', '7908.03.0201'])) {
        $apartment['state'] = $this->status_taken;
      }
      return $apartment;
    });

    return $data; 
  }

  private function getState($all_listings)
  {
    // Group status by listing reference (or id, if reference is missing)
    $listing_status = [];

    // first we handle all removed listings and set the status to rented
    $listing_status = $this->handleRemovedListings($all_listings, $listing_status);

    // then handle the active listings, set the status and if necessary overwrite it
    $listing_status = $this->handleActiveListings($all_listings, $listing_status);

    // Group listings by status
    $reserved_listings = [];
    $taken_listings = [];
    $free_listings = [];

    foreach ($listing_status as $listing_ref => $status)
    {
      if ($status == $this->status_reserved)
      {
        if (!in_array($listing_ref, $free_listings)) {
          $reserved_listings[] = $listing_ref;
        }
      }
      if ($status == $this->status_taken)
      {
        if (!in_array($listing_ref, $free_listings)) {
          $taken_listings[] = $listing_ref;
        }
      }
      if ($status == $this->status_free)
      {
        $free_listings[] = $listing_ref;
      }
    }

    $states = [];
    foreach ($all_listings as $listing)
    {
      $listing_ref = empty($listing["reference"]) ? $listing["pk"] : $listing["reference"];
      if (in_array($listing_ref, $reserved_listings))
      {
        if (!in_array($listing_ref, $free_listings)) {
          $states[$listing_ref] = $this->status_reserved;
        }
      } 
      elseif (in_array($listing_ref, $taken_listings))
      {
        if (!in_array($listing_ref, $free_listings)) {
          $states[$listing_ref] = $this->status_taken;
        }
      }
      else
      {
        $states[$listing_ref] = $this->status_free;
      }
    }

    return $states;
  }

  private function handleRemovedListings($all_listings, &$listing_status)
  {
    /*
    Go through all listings but ignores listings which are still active.
    All inactive listings will have a final status of "taken"
    */
    foreach ($all_listings as $listing) {
      if (in_array($listing["status"], $this->listing_status_active))
      {
        // skip listing if listing is active
        continue;
      }
      $listing_ref = empty($listing["reference"]) ? $listing["pk"] : $listing["reference"];
      $listing_status[$listing_ref] = $this->status_free;
    }
    return $listing_status;
  }

  private function handleActiveListings($all_listings, &$listing_status)
  {
    /*
    Go through all listings but ignores listings which are not active anymore.
    The final status will then be decided based on the "reserved" field of the listing.
    */

    foreach ($all_listings as $listing)
    {
      if (in_array($listing["status"], $this->listing_status_removed))
      {
        continue;
      }

      $listing_ref = empty($listing["reference"]) ? $listing["pk"] : $listing["reference"];

      // now identify the status of the listing based on the reserved label
      if ($listing["reserved"])
      {
        $listing_status[$listing_ref] = $this->status_reserved;
      }
      else
      {
        $listing_status[$listing_ref] = $this->status_free;
      }
    }
    return $listing_status;
  }
}