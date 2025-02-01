<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostIndexPage extends Component
{
    public function render()
    {
        $posts = Post::with('category')->paginate(10);

        return view('livewire.post-index-page', compact('posts'))
            ->layout('layouts.front');
    }
}
