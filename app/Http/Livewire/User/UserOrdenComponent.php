<?php

namespace App\Http\Livewire\User;

use App\Models\Orden;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserOrdenComponent extends Component
{
    public function render()
    {
        $ordenes = Orden::where('usuario_id',Auth::user()->id)->paginate(5);
        return view('livewire.user.user-orden-component', ['orden'=>$ordenes])->layout('layouts.base');
    }
}
