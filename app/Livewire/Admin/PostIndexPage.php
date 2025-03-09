<?php

namespace App\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class PostIndexPage extends Component
{
    use WithPagination;

    public $search = '';
    public $confirmingPostDeletion = false;
    public $postIdToDelete;

    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function confirmPostDeletion($postId)
    {
        $this->confirmingPostDeletion = true;
        $this->postIdToDelete = $postId;
    }

    public function deletePost()
    {
        $post = Post::findOrFail($this->postIdToDelete);

        // Delete the image file if it exists
        if ($post->image && Storage::disk('public')->exists($post->image)) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();

        $this->confirmingPostDeletion = false;
        session()->flash('message', 'Post deleted successfully.');
    }

    public function render()
    {
        $posts = Post::where('title', 'like', '%' . $this->search . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.admin.post-index-page', [
            'posts' => $posts
        ])->layout('layouts.app');
    }
}
