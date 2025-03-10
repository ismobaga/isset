<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Category;
use Livewire\WithPagination;

class PostIndexPage extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedCategory = '';
    public $perPage = 9;

    protected $queryString = [
        'search' => ['except' => ''],
        'selectedCategory' => ['except' => ''],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingSelectedCategory()
    {
        $this->resetPage();
    }

    public function render()
    {
        $categories = Category::withCount('posts')->orderBy('name')->get();

        $postsQuery = Post::with('category')->latest();

        if ($this->search) {
            $postsQuery->where(function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('content', 'like', '%' . $this->search . '%');
            });
        }

        if ($this->selectedCategory) {
            $postsQuery->whereHas('category', function ($query) {
                $query->where('id', $this->selectedCategory);
            });
        }

        $posts = $postsQuery->paginate($this->perPage);

        return view('livewire.post-index-page', [
            'posts' => $posts,
            'categories' => $categories
        ])->layout('layouts.front');
    }
}
