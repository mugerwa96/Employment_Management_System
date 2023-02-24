<?php

namespace App\Http\Livewire\Country;

use Livewire\Component;

class Countryindex extends Component
{
    public function render()
    {
        return view('livewire.country.countryindex')
                    ->extends('layouts.AdminPanel.layout.admin')
                    ->section('main-content');
    }
}
