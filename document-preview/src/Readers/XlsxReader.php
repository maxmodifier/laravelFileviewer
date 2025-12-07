<?php

namespace Vijay\DocumentPreview\Readers;

use PhpOffice\PhpSpreadsheet\IOFactory;

class XlsxReader
{
    protected string $path;
    public function __construct(string \$path) { \$this->path = \$path; }
    public function toHtmlPreview(): string
    {
        \$spreadsheet = IOFactory::load(\$this->path);
        \$writer = IOFactory::createWriter(\$spreadsheet, 'Html');
        \$temp = storage_path('app/xls_preview_' . uniqid() . '.html');
        \$writer->save(\$temp);
        return file_get_contents(\$temp);
    }
}