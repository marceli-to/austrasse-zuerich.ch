<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Actions\GetData;

class ApartmentController extends Controller
{
  public function index()
  {
    return 
      view(
        'pages.apartments',
        [
          //'apartements' => (new GetData)->execute(),
        ]
      );
  }
}
