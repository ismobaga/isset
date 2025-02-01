<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Partner;
use App\Models\Post;

class HomePage extends Component
{
    public bool $showVideoModal = false;

    #[Layout('layouts.front')]
    public function render()
    {
        $partners = Partner::where('display', true)->get();
        $posts = Post::with('category')->take(5)->get();

        return view('livewire.home-page', compact('partners', 'posts'))
            ->layout('layouts.front');
    }
}
