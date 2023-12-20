<?php

namespace OwainJones74\FilamentFileUploadChunked;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentFileUploadChunkedServiceProvider extends PackageServiceProvider
{
    protected array $scripts = [
        'file-upload-chunked' => __DIR__.'/../dist/file-upload-chunked.js',
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-file-upload-chunked')
            ->hasViews();
    }
}
