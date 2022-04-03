<?php

namespace io3x1\FilamentMenus;

use Livewire\Livewire;
use Filament\PluginServiceProvider;
use io3x1\FilamentMenus\Http\Livewire\Menu;
use io3x1\FilamentMenus\Resources\MenuResource;
use Spatie\LaravelPackageTools\Package;

class FilamentMenusProvider extends PluginServiceProvider
{

    public static string $name = 'filament-menus';

    protected array $resources = [
        MenuResource::class
    ];

    protected array $pages = [];

    public function configurePackage(Package $package): void
    {
        $package->name('filament-menus');
    }

    public function boot(): void
    {
        parent::boot();

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'filament-menus');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        Livewire::component('menu', Menu::class);
    }
}
