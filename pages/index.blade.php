<?php

use function Livewire\Volt\state;

state("count", 0);

$increment = fn () => $this->count++;

?>

<x-layout.default>
    <h1>Hey Basel with Counter 👋</h1>

    @volt
        <div class="mt-10 space-y-2 text-center text-5xl font-bold">
            <button wire:click="increment">+</button>
            <h1>{{ $count }}</h1>
        </div>
    @endvolt
</x-layout.default>
