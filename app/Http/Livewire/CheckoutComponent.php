<?php

namespace App\Http\Livewire;

use App\Models\Orden;
use Livewire\Component;
use App\Models\Shipping;
use App\Models\OrdenItem;
use App\Models\Transaccion;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutComponent extends Component
{
    public $direccion_diferente; 
    public $metodopago;
    public $fincompra;

    public $nombre;
    public $apellidos;
    public $email;
    public $celular;
    public $telefono;
    public $direccion;
    public $pais;
    public $codigo_p;
    public $ciudad;
    public $departamento;   
 
    public $nombre_;
    public $apellidos_;
    public $email_;
    public $celular_;
    public $telefono_ ;
    public $direccion_;
    public $pais_;
    public $codigo_p_;
    public $ciudad_;
    public $departamento_;

    public function updated($fields){
        $this->validateOnly($fields,[
            'nombre'=>'required',
            'apellidos'=>'required',
            'email'=>'required|email',
            'celular'=>'required|numeric',
            'telefono'=>'required|numeric',
            'direccion'=>'required',
            'pais'=>'required',
            'codigo_p'=>'required',
            'ciudad'=>'required',
            'departamento'=>'required',
            'metodopago'=>'required'
        ]);
        if($this->direccion_diferente){
            $this->validateOnly($fields,[
                'nombre_'=>'required',
                'apellidos_'=>'required',
                'email_'=>'required|email',
                'celular_'=>'required|numeric',
                'telefono_'=>'required|numeric',
                'direccion_'=>'required',
                'pais_'=>'required',
                'codigo_p_'=>'required',
                'ciudad_'=>'required',
                'departamento_'=>'required'              
         ]);
         }        
    }

    public function crearOrden(){
        $this->validate([
            'nombre'=>'required',
            'apellidos'=>'required',
            'email'=>'required|email',
            'celular'=>'required|numeric',
            'telefono'=>'required|numeric',
            'direccion'=>'required',
            'pais'=>'required',
            'codigo_p'=>'required',
            'ciudad'=>'required',
            'departamento'=>'required',
            'metodopago'=>'required'
     ]);

        $orden = new Orden();
        $orden->usuario_id = Auth::user()->id;
        $orden->subtotal = session()->get('checkout')['subtotal'];
        $orden->descuento = session()->get('checkout')['descuento'];
        $orden->impuesto = session()->get('checkout')['tax'];
        $orden->total = session()->get('checkout')['total'];        
        $orden->nombre = $this->nombre;
        $orden->apellidos = $this->apellidos;
        $orden->email = $this->email;
        $orden->celular = $this->celular;
        $orden->telefono = $this->telefono;
        $orden->direccion = $this->direccion;
        $orden->pais = $this->pais;
        $orden->codigo_p = $this->codigo_p;
        $orden->ciudad = $this->ciudad;
        $orden->estado  = 'ordenado'; 
        $orden->dir_diferente  = $this->direccion_diferente ? 1:0;
        $orden->save();
        
        foreach(Cart::instance('cart')->content() as $item){
            $ordenItem = new OrdenItem();
            $ordenItem->producto_id = $item->id;
            $ordenItem->orden_id = $orden->id;
            $ordenItem->precio = $item->model->precio_compra;
            $ordenItem->cantidad = $item->qty;
            $ordenItem->save();
    
        }
            if ($this->direccion_diferente){
                $this->validate([
                    'nombre_'=>'required',
                    'apellidos_'=>'required',
                    'email_'=>'required|email',
                    'celular_'=>'required|numeric',
                    'telefono_'=>'required|numeric',
                    'direccion_'=>'required',
                    'pais_'=>'required',
                    'codigo_p_'=>'required',
                    'ciudad_'=>'required',
                    'departamento_'=>'required'                
                  ]);   
                  $shipping = new Shipping(); 
                  $shipping->orden_id = $orden->id;                 
                  $shipping->nombre = $this->nombre_;
                  $shipping->apellidos = $this->apellidos_;
                  $shipping->email = $this->email_;
                  $shipping->celular = $this->celular_;
                  $shipping->telefono = $this->telefono;
                  $shipping->direccion = $this->direccion_;
                  $shipping->pais = $this->pais_;
                  $shipping->codigo_p = $this->codigo_p_;
                  $shipping->ciudad = $this->ciudad_;                 
                  $shipping->save();
        }
        if($this->metodopago=='codigo'){
            $transaccion = new Transaccion();
            $transaccion->usuario_id = Auth::user()->id;
            $transaccion->orden_id = $orden->id;
            $transaccion->m_pago = 'codigo';
            $transaccion->estad_pago = 'pendiente';
            $transaccion->save();

        }
        $this->fincompra=1;
        Cart::instance('cart')->destroy();
        session()->forget('checkout');        
    }

    public function verificarCompra(){
        if(!Auth::check()){
            return redirect()->route('login');            
        }
        else if($this->fincompra){
           return redirect()->route('gracias'); 
        }
        else if(!session()->get('checkout')){
            return redirect()->route('producto.cart'); 
        } 
    }
   
    
    public function render()
    {
        $this->verificarCompra();
        return view('livewire.checkout-component')->layout('layouts.base');
    }
}
