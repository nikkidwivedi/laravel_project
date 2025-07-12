<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin', ['title' => 'Dashboard'])]
class Dashboard extends Component
{
    public function render()
    {
        // livewire/dashboard.blade.php should now START with <main> and NOT contain <x-layouts.admin>
        return view('livewire.dashboard');
    }
}
