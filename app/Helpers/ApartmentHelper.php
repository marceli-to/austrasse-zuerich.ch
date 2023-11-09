<?php
namespace App\Helpers;

class ApartmentHelper
{
  public static function isAvailable($apartment)
  {
    if (($apartment['status'] == 'pre' || $apartment['status'] == 'act' || $apartment['status'] == 'dis') && $apartment['reserved'] == false)
    {
      return true;
    }
  }

  public static function getState($apartment, $asKey = false)
  {
    if ($apartment['status'] == 'pre' || $apartment['status'] == 'act' || $apartment['status'] == 'dis')
    {
      if ($apartment['reserved'] == false)
      {
        return $asKey ? 'free' : 'frei';
      }
      else
      {
        return $asKey ? 'reserved' : 'reserviert';
      }
    }

    if ($apartment['status'] == 'arc' || $apartment['status'] == 'rem')
    {
      return $asKey ? 'taken' : 'vermietet';
    }
  }
}