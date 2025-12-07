<?php

namespace Vijay\DocumentPreview\Facades;

use Illuminate\Support\Facades\Facade;

class FilePreview extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filepreview';
    }
}