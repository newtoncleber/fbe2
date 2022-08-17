<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use App\Models\UserLevel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserIndex extends Component
{
    public $users;
    public $userLevels;

    public function mount()
    {
        $this->users = User::where('user_levels_id','<=', Auth::user()->userlevel->level)->orderBy('name')->get();
        $this->userLevels = UserLevel::where('level','<=',Auth::user()->userlevel->level)->get();
    }

    public function render()
    {
        return view('livewire.users.user-index');
    }
}
