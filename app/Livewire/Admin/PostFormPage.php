<?php

namespace App\Livewire\Admin;

use App\Models\Post;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Joelwmale\LivewireQuill\Traits\HasQuillEditor;

class PostFormPage extends Component
{
    use WithFileUploads;
    use HasQuillEditor;


    public Post $post;
    public $image;
    public $title = "";
    public $contenu = "";
    public $isEdit = false;
    // public $content = "";
    public $category_id = "";
    public $categories = [];

    protected function rules()
    {
        return [
            'title' => 'required|min:3|max:255',
            'contenu' => 'required|min:10',
            'category_id' => 'required|exists:categories,id',
            'image' => $this->isEdit ? 'nullable|image|max:1024' : 'required|image|max:1024',
        ];
    }

    public function mount(?Post $post)
    {
        $this->categories = Category::all();

        if ($post) {
            $this->post = $post;
            $this->isEdit = true;
            $this->contenu = $post->content;
            $this->category_id = $post->category_id;
            $this->title = $post->title;
        } else {
            $this->post = new Post();
        }
    }


    public function contentChanged($editorId, $content)
    {
        // $editorId is the id use when you initiated the livewire component
        // $content is the raw text editor content
        // dd($content);

        // save to the local variable...
        $this->contenu = $content;
    }

    public function save()
    {
        $valid = $this->validate();

        if ($this->image) {
            // Delete old image if we're updating
            if ($this->isEdit && $this->post->image && Storage::disk('public')->exists($this->post->image)) {
                Storage::disk('public')->delete($this->post->image);
            }

            // Store new image
            $imagePath = $this->image->store('posts', 'public');
            $this->post->image = $imagePath;
        }
        // $this->post->content = $this->content;
        $this->post->category_id = $valid['category_id'];
        $this->post->title = $valid['title'];
        $this->post->content = $valid['contenu'];

        $this->post->save();

        $message = $this->isEdit ? 'Post updated successfully.' : 'Post created successfully.';
        session()->flash('message', $message);

        return redirect()->route('admin.posts.index');
    }

    public function render()
    {
        return view('livewire.admin.post-form-page')
            ->layout('layouts.app');
    }
}
