# Filament Menus

Menu View Generator Using Livewire

## Installation

You can install the package via composer:

```bash
composer require 3x1io/filament-menus
```

load livewire component

```bash
php artisan livewire:discover
```

and now clear cache


```bash
php artisan optimize:clear
```

## Usage

go to route `admin/menus` and create a new menu and you will get the code of livewire component

you can build a menu just by using this command as a livewire component

```php 
@livewire('menu', ['key' => "header"])
```

where `header` is a key of menu and you will get the code ready on the Table list of menus

you can use custome view ex:

```php 
@livewire('menu', ['key' => "header", 'view'=> "livewire.menu"])
```

by default we use Tailwind as a main view with this code 

```php
@foreach ($menu as $item)
<a class="text-gray-500" href="{{ $item['url'] }}" @if($item['blank']) target="_blank" @endif>
    <span class="flex justify-between">
        @if(isset($item['icon']) && !empty($item['icon']))
        <x-icon class="w-4 h-4 mx-2" name="{{ $item['icon'] }}"></x-icon>
        @endif
        {{ $item['title'] }}
    </span>
</a>
@endforeach
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [3x1](https://github.com/3x1io)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
