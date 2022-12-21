<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\User;
use App\Http\Livewire\Auth;
use App\Http\Livewire\AllPosts;


class NewPost extends Component
{
    
    public $user_id;
    public $description;
    public $messageText = '';

    public $rules = [
        'description' => 'min:10|max:255',
        'user_id' => 'required'
    ];

    public function render()
    {
        return view('livewire.new-post');
    }

    public function updated($key, $value)
    {
        $this->validateOnly($key);
    }

    public function save()
    {
        $this->user_id = auth()->id();
        Post::create([
            'user_id' => $this->user_id,
            'description' => $this->description,
        ]);

        $this->messageText = 'Tweeted';
        $this->user_id = '';
        $this->description = '';

        return redirect()->to('/all-posts');
    }
}