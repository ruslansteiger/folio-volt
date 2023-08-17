<x-layout.default>
    <h1>Hey Basel 👋🔥</h1>

    @volt
        <div id="counter">
            <button wire:click="increment">+</button>
            <h2>{{ $count }}</h2>
        </div>
    @endvolt
</x-layout.default>

<?php

use function Livewire\Volt\state;

state(count: 0);

$increment = fn () => $this->count++;
