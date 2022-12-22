<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Post;
use App\Models\User;
use App\Http\Livewire\Auth;
use App\Http\Livewire\AllPosts;
use Image;
use Livewire\WithFileUploads;


class NewPost extends Component
{
    use WithFileUploads;
    
    public $user_id;
    public $description;
    public $messageText = '';
    public $photo;

    public $rules = [
        'description' => 'min:10|max:255|required',
        'user_id' => 'required',
        'photo' => 'image|max:1024'
    ];

    public function render()
    {
        return view('livewire.new-post');
    }

    public function updated($key, $value)
    {
        $this->validateOnly($key);
    }

    public function save(Request $request)
    {
        $this->user_id = auth()->id();                            
        $filename = $this->photo->store('photos1');
        Post::create([
            'user_id' => $this->user_id,
            'description' => $this->description,
            'image' => $filename
        ]);

        $this->messageText = 'Tweeted';
        $this->user_id = '';
        $this->description = '';
        // $this->photo->store('storage');

        return redirect()->to('/all-posts');
    }
}