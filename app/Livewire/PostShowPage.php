<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostShowPage extends Component
{
    public $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.post-show-page', ['post' => $this->post])
            ->layout('layouts.front');
    }
}
