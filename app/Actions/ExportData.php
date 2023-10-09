<?php
namespace App\Actions;
use App\Actions\GetData;
use Illuminate\Support\Facades\Storage;

class ExportData
{
  public function execute()
  { 
    $apartments = (new GetData)->execute();

    foreach($apartments as $apartment)
    {
      $csv_data[] = [
        'object_category' => $apartment['object_category'],
        'object_type' => $apartment['object_type'],
        'reference' => $apartment['reference'],
        'ref_property' => $apartment['ref_property'],
        'ref_house' => $apartment['ref_house'],
        'ref_object' => '' . $apartment['ref_object'] . '',
        'short_title' => $apartment['short_title'],
      ];
    }

    // Create csv and send to browser
    $filename = "apartments.csv";
    $delimiter = ",";
    $f = fopen('php://memory', 'w');
    // Set column headers
    $fields = array('object_category', 'object_type', 'reference', 'ref_property', 'ref_house', 'ref_object', 'short_title');
    fputcsv($f, $fields, $delimiter);
    // Output each row of the data, format line as csv and write to file pointer
    foreach ($csv_data as $line) {
      $status = fputcsv($f, $line, $delimiter);
    }
    // Move back to beginning of file
    fseek($f, 0);
    // Set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    // Output all remaining data on a file pointer
    fpassthru($f);
    exit;
  }
}