<?php

namespace Vijay\DocumentPreview\Readers;

use Smalot\PdfParser\Parser;

class PdfReader
{
    protected string $path;
    public function __construct(string \$path) { \$this->path = \$path; }
    public function toHtmlPreview(): string
    {
        \$parser = new Parser();
        \$pdf = \$parser->parseFile(\$this->path);
        return nl2br(\$pdf->getText());
    }
}