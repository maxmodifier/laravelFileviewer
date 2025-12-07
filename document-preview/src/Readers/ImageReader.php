<?php

namespace Vijay\DocumentPreview\Readers;

class ImageReader
{
    protected string \$path;
    public function __construct(string \$path) { \$this->path = \$path; }
    public function toHtmlPreview(): string
    {
        return "<img src='".asset(\$this->path)."' style='max-width:100%;' />";
    }
}