<div>
        <div class="container" style="padding: 30px 0;">
            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('mensaje'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('mensaje')}}
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                         Detalles de la orden
                                        </div>
                                        <div class="col-md-6">
                                          <a href="{{route('user.orden')}}" class="btn btn-primary pull-right">Ver Órdenes</a>
                                          @if($orden->estado=='ordenado')
                                            <a href="#" wire:click.prevent="cancelarOrden" class="btn btn-primary pull-right">Cancelar Órden</a>
                                          @endif
                                        </div>                                    
                            </div>
                            <div class="panel-body">
                              <table class="table table-light">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Id</th>
                                                <td>{{$orden->id}}</td>
                                                 <th>Fecha</th>
                                                <td>{{$orden->crated_at}}</td>
                                                 <th>Estado</th>
                                                <td>{{$orden->estado}}</td>
                                                @if ($orden->estado=="enviado")
                                                      <th>Fecha de Entrega</th>
                                                      <td>{{$orden->fecha_envio}}</td>
                                                  @else ($orden->estado=="cancelado")
                                                      <th>Fecha de Cancelado</th>
                                                      <td>{{$orden->fecha_cancel}}</td>                                                      
                                                @endif
                                            </tr>                                      
                                     </table> 

                                        <div class="wrap-iten-in-cart">
									<h3 class="box-title">Nombre de Productos</h3>
							<ul class="products-cart">
										@foreach($orden->ordenItem as $item)
											<li class="pr-cart-item">
												<div class="product-image">
													<figure><img src="{{ ('assets/images/products')}}/{{$item->producto->imagen}}" alt="{{$item->producto->imagen}}"></figure>
												</div>
												<div class="product-name">
													<a class="link-to-product" href="{{route('producto.detalles' , ['slug'=>$item->producto->slug])}}">{{$item->producto->nombre}}</a>
												</div>
												<div class="price-field produtc-price"><p class="price">{{$item->precio_compra}}</p></div>
												<div class="quantity">
													<div class="quantity-input">
														<h5>{{$item->qty}}</h5>
													</div>
												</div>
												<div class="price-field sub-total"><p class="price">{{$item->precio_compra*$item->qty}}</p></div>
											</li>
					      	 			 @endforeach																	
									</ul>
						        </div>
                                <div class="summary">
                                    <div class="orden-summary">
                                        <h4 class="title">Detalles de la Cuenta</h4>    
                                        <P class="summary-info"><span class="title">Subtotal</span><b class="index">$ {{$orden->subtotal}}</b></p>
                                        <P class="summary-info"><span class="title">IVA</span><b class="index">$ {{$orden->tax}}</b></p>
                                        <P class="summary-info"><span class="title">Envío</span><b class="index">Envío Gratis</b></p>
                                        <P class="summary-info"><span class="title">Total</span><b class="index">$ {{$orden->total}}</b></p>
                                    </div>
                                </div>
                           </div>
                       </div>                  
                 </div>
           </div>
            <div class="row">   
                <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                    Dirección de Facturación
                            </div>
                            <div class="panel-body">
                            <table class="table table-light">                                    
                                        <tr>
                                            <th>Nombre Completo</th>
                                            <td>{{$orden->nombre}}</td>
                                            <th>Apellidos</th>
                                            <td>{{$orden->apellidos}}</td>
                                        </tr>
                                         <tr>
                                            <th>Correo Electroníco</th>
                                            <td>{{$orden->email}}</td>
                                            <th>Celular</th>
                                            <td>{{$orden->celular}}</td>
                                        </tr>
                                         <tr>
                                            <th>Dirección</th>
                                            <td>{{$orden->direccion}}</td>                                           
                                        </tr>
                                         <tr>
                                            <th>País</th>
                                            <td>{{$orden->pais}}</td>
                                            <th>Código Postal</th>
                                            <td>{{$orden->codigo_p}}</td>
                                        </tr>
                                </table>

                            </div>
                       </div>                  
                 </div>
           </div>
              @if($orden->dir_diferente)
                    <div class="row">   
                        <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                            Dirección de Envío
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-light">                                    
                                                <tr>
                                                    <th>Nombre Completo</th>
                                                    <td>{{$orden->shipping->nombre_}}</td>
                                                    <th>Apellidos</th>
                                                    <td>{{$orden->shipping->apellidos_}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Correo Electroníco</th>
                                                    <td>{{$orden->shipping->email_}}</td>
                                                    <th>Celular</th>
                                                    <td>{{$orden->shipping->celular_}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Dirección</th>
                                                    <td>{{$orden->shipping->direccion_}}</td>                                           
                                                </tr>
                                                <tr>
                                                    <th>País</th>
                                                    <td>{{$orden->shipping->pais_}}</td>
                                                    <th>Código Postal</th>
                                                    <td>{{$orden->shipping->codigo_p_}}</td>
                                                </tr>
                                        </table>
                                    </div>
                            </div>                  
                        </div>
                 </div>
              @endif
            <div class="row">   
                <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                    Detalles de la Transacción
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <th>Tipo de Transacción</th>
                                        <td>{{$orden->transaccion->m_pago}}</td>  
                                    </tr>
                                     <tr>
                                        <th>Tipo de Transacción</th>
                                        <td>{{$orden->transaccion->estad_pago}}</td>  
                                    </tr>
                                     <tr>
                                        <th>Tipo de Transacción</th>
                                        <td>{{$orden->transaccion->created_at}}</td>  
                                    </tr>
                                </table>
                            </div>
                       </div>                  
                 </div>
           </div>
      </div>
</div>

