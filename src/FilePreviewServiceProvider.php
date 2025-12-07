<?php

namespace Vijay\DocumentPreview;

use Illuminate\Support\ServiceProvider;

class FilePreviewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'document-preview');

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/document-preview'),
        ], 'views');
    }

    public function register()
    {
        $this->app->singleton('filepreview', function () {
            return new FilePreview;
        });
    }
}