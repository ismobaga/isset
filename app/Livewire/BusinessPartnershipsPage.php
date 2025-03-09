<?php

namespace App\Livewire;

use App\Models\Partner;
use Livewire\Component;

class BusinessPartnershipsPage extends Component
{
    public function render()
    {
        $partners = Partner::where('display', true)->get();

        return view('livewire.business-partnerships-page', [
            'partners' => $partners
        ])->layout('layouts.front');
    }
}
