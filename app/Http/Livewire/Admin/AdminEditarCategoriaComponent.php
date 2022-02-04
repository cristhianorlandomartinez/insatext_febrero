<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


class AdminEditarCategoriaComponent extends Component
{
    use WithFileUploads;
    public $nombre;
    public $slug;
    public $descripcion_corta;
    public $descripcion;
    public $precio_regular;
    public $precio_compra;
    public $disponibilidad;
    public $destacar;
    public $sku;
    public $cantidad;
    public $imagen;
    public $categoria_id;
    public $nueva_imagen;
    public $producto_id;
  
    public function mount(){
        $this->disponibilidad = 'disponible';
        $this->destacar = 0;
    }
    
    public function copiarNombre(){
        $this->slug = Str::slug($this->nombre,'-');
    }

    public function agregarProducto(){
       $producto = new Producto();  
       $producto->nombre = $this->nombre;
       $producto->slug = $this->slug;
       $producto->descripcion_corta = $this->descripcion_corta;
       $producto->descripcion = $this->descripcion;
       $producto->precio_regular = $this->precio_regular;
       $producto->precio_compra = $this->precio_compra;
       $producto->disponibilidad = $this->disponibilidad;
       $producto->destacar = $this->destacar;
       $producto->sku = $this->sku;
       $producto->cantidad = $this->cantidad;
       $nueva_imagen=Carbon::now()->timestamp.'.' .$this->imagen->extension();
       $this->imagen->storeAs('products',$nueva_imagen);
       $producto->imagen = $nueva_imagen;
       $producto->categoria_id = $this->categoria_id; 
       $producto->save();
       session()->flash('mensaje','El Producto ha sido Creado');         
    }

    public function render()
    {
        $categorias = Categoria::all();
        return view('livewire.admin.admin-agregar-producto-component', ['categorias'=> $categorias])->layout('layouts.base');
    }
}


  