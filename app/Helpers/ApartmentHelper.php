<?php
namespace App\Helpers;

class ApartmentHelper
{
  public static function isAvailable($apartment)
  {
    if ($apartment['status'] == 'pre' && $apartment['reserved'] == false)
    {
      return true;
    }
    return false;
  }

  public static function getState($apartment)
  {
    if ($apartment['status'] == 'pre' && $apartment['reserved'] == true)
    {
      return 'reserviert';
    }
    return 'vermietet';
  }

}