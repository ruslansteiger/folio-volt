<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Volt\Volt;

class VoltServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Volt::mount([
            resource_path('views/livewire'),
            app_path('pages'),
        ]);
    }
}
