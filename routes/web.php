<?php

use Illuminate\Support\Facades\Route;
use Vijay\DocumentPreview\Facades\FilePreview;

Route::get('file-preview', function () {
    \$path = request('path');
    return FilePreview::show($path);
});