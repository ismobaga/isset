<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Partner;
use Livewire\WithPagination;

class PartnerIndexPage extends Component
{
    use WithPagination;

    public $search = '';
    public $confirmingPartnerDeletion = false;
    public $partnerIdToDelete = null;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function confirmPartnerDeletion($partnerId)
    {
        $this->confirmingPartnerDeletion = true;
        $this->partnerIdToDelete = $partnerId;
    }

    public function deletePartner()
    {
        Partner::find($this->partnerIdToDelete)->delete();
        $this->confirmingPartnerDeletion = false;
        $this->partnerIdToDelete = null;
        session()->flash('message', 'Partner successfully deleted.');
    }

    public function toggleDisplay(Partner $partner)
    {
        $partner->update([
            'display' => !$partner->display,
        ]);
    }

    public function render()
    {
        $partners = Partner::where('name', 'like', '%' . $this->search . '%')
            ->orderBy('name')
            ->paginate(10);

        return view('livewire.partner-index-page', [
            'partners' => $partners,
        ]);
    }
}
