<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Actions\GetData as GetDataAction;

class CheckDocuments extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'check:documents';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = '';

  /**
   * Execute the console command.
   */
  public function handle()
  {
    $data = (new GetDataAction)->execute();

    // document name
    // austrasse_zuerich_{{ $ref_house }}.{{ref_object}}.pdf

    // Loop over data and check if document exists in /public/media/pdf
    // If not, show info message
    // Go!

    $this->info('Checking documents...');
    
    foreach($data as $d)
    {
      $ref_house = $d['ref_house'];
      $ref_object = $d['ref_object'];
      $document = 'austrasse_zuerich_'.$ref_house.'.'.$ref_object.'.pdf';
      $path = public_path('media/pdf/'.$document);
      if(!file_exists($path))
      {
        $this->info('Document '.$document.' does not exist!');
      }
    }
    
    
    $this->info('Checking documents done!');


    



  }
}
