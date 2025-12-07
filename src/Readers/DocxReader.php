<?php

namespace Vijay\DocumentPreview\Readers;

use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Writer\HTML;

class DocxReader
{
    protected string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function toHtmlPreview(): string
    {
        \$phpWord = IOFactory::load(\$this->path);
        \$temp = storage_path('app/doc_preview_' . uniqid() . '.html');
        \$writer = new HTML(\$phpWord);
        \$writer->save(\$temp);
        return file_get_contents(\$temp);
    }
}