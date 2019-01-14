#PDFMerger for PHP (PHP 5 Compatible)

Original written by http://pdfmerger.codeplex.com/team/view
Forked from https://github.com/myokyawhtun/PDFMerger
Forked from https://github.com/clegginabox/pdf-merger

## Composer Updates & New Deps

Forked to use setasign\Fpdi instead of the abandoned one, it also now seems
to suggest a bridge 

```"trianglefiresystems/pdf-merger": "dev-master"```

### Example Usage
```php

$pdf = new \TriangleFireSystems\PDFMerger\PDFMerger;

$pdf->addPDF('samplepdfs/one.pdf', '1, 3, 4');
$pdf->addPDF('samplepdfs/two.pdf', '1-2');
$pdf->addPDF('samplepdfs/three.pdf', 'all');

//You can optionally specify a different orientation for each PDF
$pdf->addPDF('samplepdfs/one.pdf', '1, 3, 4', 'L');
$pdf->addPDF('samplepdfs/two.pdf', '1-2', 'P');

$pdf->merge('file', 'samplepdfs/TEST2.pdf', 'P');

// REPLACE 'file' WITH 'browser', 'download', 'string', or 'file' for output options
// Last parameter is for orientation (P for protrait, L for Landscape).
// This will be used for every PDF that doesn't have an orientation specified
```
