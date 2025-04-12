$zip_file = 'game.zip'; 


$zip = new \ZipArchive();
$zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

$invoice_file = 'invoices/aaa001.pdf';

$zip->addFile(storage_path($invoice_file), $invoice_file);
$zip->close();

return response()->download($zip_file);