<?php
namespace App\Helpers;

class ApartmentHelper
{
  public static function isAvailable($apartment)
  {
    if ($apartment['state'] == 'free')
    {
      return true;
    }
    return false;
  }

  public static function getState($apartment)
  {
    $states = [
      'free' => 'frei',
      'reserved' => 'reserviert',
      'taken' => 'vermietet',
    ];
    return $states[$apartment['state']];
  }

  public static function getStateKey($apartment)
  {
    return $apartment['state'];
  }

}