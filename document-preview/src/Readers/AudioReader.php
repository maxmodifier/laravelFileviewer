<?php

namespace Vijay\DocumentPreview\Readers;

class AudioReader
{
    protected string \$path;
    public function __construct(string \$path) { \$this->path = \$path; }
    public function toHtmlPreview(): string
    {
        return "<audio controls src='".asset(\$this->path)."'></audio>";
    }
}