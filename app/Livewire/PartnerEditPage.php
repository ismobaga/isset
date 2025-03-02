<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Partner;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class PartnerEditPage extends Component
{
    use WithFileUploads;

    public $partner;
    public $name;
    public $website;
    public $display;
    public $logo;
    public $newLogo;
    public $isCreating = false;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'website' => 'nullable|url|max:255',
            'display' => 'boolean',
            'newLogo' => $this->isCreating ? 'required|image|max:1024' : 'nullable|image|max:1024', // 1MB Max
        ];
    }

    public function mount(?Partner $partner)
    {
        if ($partner) {
            $this->partner = $partner;
            $this->name = $partner->name;
            $this->website = $partner->website;
            $this->display = $partner->display;
            $this->logo = $partner->logo;
        } else {
            $this->isCreating = true;
            $this->display = true;
        }
    }

    public function save()
    {
        $validatedData = $this->validate();

        if ($this->isCreating) {
            $partner = new Partner();
        } else {
            $partner = $this->partner;
        }

        $partner->name = $this->name;
        $partner->website = $this->website;
        $partner->display = $this->display;

        if ($this->newLogo) {
            // Delete old logo if it exists and we're updating
            if (!$this->isCreating && $partner->logo) {
                Storage::disk('public')->delete($partner->logo);
            }

            // Store the new logo
            $partner->logo = $this->newLogo->store('images/partners', 'public');
        }

        $partner->save();

        session()->flash('message', $this->isCreating ? 'Partner created successfully.' : 'Partner updated successfully.');

        return redirect()->route('partners.index');
    }

    public function render()
    {
        return view('livewire.partner-edit-page');
    }
}
