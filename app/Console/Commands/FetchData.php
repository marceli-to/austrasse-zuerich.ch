<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Actions\FetchData as FetchDataAction;

class FetchData extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'fetch:data';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Calls the fetch data action';

  /**
   * Execute the console command.
   */
  public function handle()
  {
    $this->info('Fetching data...');
    $data = (new FetchDataAction)->execute();
    $this->info('Data fetched!');
  }
}
