<?php

namespace App\Http\Livewire\Admin;

use App\Models\Categoria;
use CreateCategoriasTable;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoriaComponent extends Component
{
    use WithPagination;

        public function borrar($id){
            $categoria = Categoria::find($id);
            $categoria->delete();
            session()->flash('mensje','La Categoria ha sido Eliminada');
            
        }

    public function render()
    {
        $categorias = Categoria::paginate(10);
        return view('livewire.admin.admin-categoria-component',['categorias'=>$categorias])->layout('layouts.base');
    }
}
