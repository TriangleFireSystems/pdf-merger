<?php

require __DIR__ . "/../vendor/autoload.php";

$pdf = new TriangleFireSystems\PDFMerger\PDFMerger;

$pdf->addPDF(__DIR__ .'/example_001.pdf')
    ->addPDF(__DIR__ .'/example_002.pdf')
    ->addPDF(__DIR__ .'/example_003.pdf')
    ->merge('file', __DIR__ . '/result.pdf');

    //REPLACE 'file' WITH 'browser', 'download', 'string', or 'file' for output options
    //You do not need to give a file path for browser, string, or download - just the name.
