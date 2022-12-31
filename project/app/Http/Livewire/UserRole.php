<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
// use Illuminate\Database\Eloquent\Model;


class UserRole extends Component
{   
    public User $user;
    public $role;
    public $user_role;

    public function mount()
    {
        $this->user_role = $this->user->role;
    }

    public function render()
    {
        return view('livewire.user-role');
    }

    public function updating($role, $value)
    {
        if ($value == 1 || $value == 2) {
            $this->user->setAttribute($this->role, $value)->save();
        }else {
            return redirect(request()->header('Referer'));
        }
        
    }
    
}
