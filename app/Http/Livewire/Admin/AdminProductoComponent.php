<?php

namespace App\Http\Livewire\Admin;  

use Livewire\Component;
use App\Models\Producto;
use Livewire\WithPagination;

class AdminProductoComponent extends Component
{
    use WithPagination;

    public function borrarProducto($id){
        $producto = Producto::find($id);
        $producto->delete();
        session()->flash('mensje','La producto ha sido Eliminado');
        
    }
    public function render()
    {
        $productos = Producto::paginate(15);
        return view('livewire.admin.admin-producto-component',['productos'=>$productos])->layout('layouts.base');
    }
}
