<?php

namespace Vijay\DocumentPreview\Readers;

class VideoReader
{
    protected string \$path;
    public function __construct(string \$path) { \$this->path = \$path; }
    public function toHtmlPreview(): string
    {
        return "<video controls width='100%' src='".asset(\$this->path)."'></video>";
    }
}