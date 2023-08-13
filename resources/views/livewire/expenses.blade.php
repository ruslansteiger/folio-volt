<?php

use function Livewire\Volt\{computed, state};
use Asantibanez\LivewireCharts\Models\PieChartModel;

state(food: 0, shopping: 0, travel: 0);

$incrementFood = fn () => $this->food++;
$incrementShopping = fn () => $this->shopping++;
$incrementTravel = fn () => $this->travel++;

$expenses = computed(
    fn () => (new PieChartModel())
        ->setTitle("Expenses by Type")
        ->addSlice("Food", $this->food, "#f6ad55")
        ->addSlice("Shopping", $this->shopping, "#fc8181")
        ->addSlice("Travel", $this->travel, "#90cdf4"),
);

?>

<div class="text-center">
    <button wire:click="incrementFood">+ Food</button>
    <button wire:click="incrementShopping">+ Shopping</button>
    <button wire:click="incrementTravel">+ Travel</button>

    <livewire:livewire-pie-chart
        key="{{ $this->expenses->reactiveKey() }}"
        :pie-chart-model="$this->expenses"
    />
</div>
