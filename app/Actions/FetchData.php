<?php
namespace App\Actions;
use Illuminate\Support\Facades\Storage;

class FetchData
{
  public function execute()
  {
    $api_uri = 'https://nidumsempach.api.melon.rent/api/v2/objects/?format=json';
    $data = file_get_contents($api_uri);
    Storage::disk('public')->put('apartements.json', $data);
  }
}