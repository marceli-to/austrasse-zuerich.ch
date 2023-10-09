<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Actions\GetData as GetDataAction;

class GetData extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'get:data';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Calls the get data action';

  /**
   * Execute the console command.
   */
  public function handle()
  {
    $this->info('Getting data...');
    $data = (new GetDataAction)->execute();
    dd($data[0]);
    $this->info('Getting data done!');
  }
}
