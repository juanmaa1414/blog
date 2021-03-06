<?php

namespace App\ViewModels;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Carbon;

class PostDetailViewModel extends FormViewModel
{
    public function __construct(Post $post)
    {
        parent::__construct($post);

        $this->published_at = $this->model->exists
            ? $this->model->published_at->format('Y-m-d\TH:i')
            : Carbon::now()->format('Y-m-d\TH:i');

        $this->categories = Category::select('id', 'name')->pluck('name', 'id');

        $this->currentTags = $this->model->tags->pluck('name');

        $this->tags = Tag::orderBy('name')->pluck('name');
    }

    protected function setTitle()
    {
        $this->title = $this->model->exists
            ? "Edit Post: {$this->model->title}"
            : 'Create Post';
    }

    protected function setAction()
    {
        $this->action = $this->model->exists
            ? route('backend.posts.update', $this->model)
            : route('backend.posts.store');
    }

    protected function setMethod()
    {
        $this->method = $this->model->exists
            ? 'PUT'
            : 'POST';
    }
}
