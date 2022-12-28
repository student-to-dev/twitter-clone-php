<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;
use App\Models\Post;
use App\Models\User;


class AllPosts extends Component
{
    public int $amount = 10;

    public int $offset = 0;

    public Collection $posts;

    public bool $showLoadMoreButton;


    public function mount() {
        $this->loadPosts();
        return view('front.index');
    }

    public function loadPosts()
    {   
        $posts = Post::where('status', 1)->offset($this->offset)->limit($this->amount)->orderBy('created_at', 'DESC')->get();
        $this->posts = isset($this->posts) ? $this->posts->merge($posts) : $posts;
        
        $this->offset += $this->amount;

        $this->showLoadMoreButton = Post::count() > $this->offset;

    }
     public function render()
    {
        return view('livewire.all-posts');
    }

    // public function show($id)
    // {
    //     return view('front.show', [
    //         'post' => Post::findOrFail($id)
    //     ]);
    // }
    public function show(Post $post, User $user)
{
    return view('front.show', compact('post', 'user'));
}

}
