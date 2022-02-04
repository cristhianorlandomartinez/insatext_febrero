	<main id="main" class="main-site">
		<div class="container">
			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">Inicio</a></li>
					<li class="item-link"><span>Procesar Pago</span></li>
				</ul>
			</div>			
			<div class=" main-content-area">
			<form wire:submit.prevent="crearOrden">
			  <div class="row">
				  <div class="wrap-address-billing">
						<h3 class="box-title">Dirección Principal</h3>
							<form action="#" method="get" name="frm-billing">
									<p class="row-in-form">
										<label for="fname">Nombre Completo<span>*</span></label>
										<input type="text" name="fname" value="" wire:model="nombre" placeholder="Escriba su nombre(s) Completo">
										@error('nombre')<span class = "text-danger" {{$message}}></span> @enderror
									</p>
									<p class="row-in-form">
										<label for="lname">Apellidos<span>*</span></label>
										<input  type="text" name="lname" value="" wire:model="apellidos" placeholder="Escriba sus Apellidos">
										@error('apellidos')<span class = "text-danger" {{$message}}></span> @enderror
									</p>
									<p class="row-in-form">
										<label for="email">Email:</label>
										<input type="email" name="email" value="" wire:model="email" placeholder="Escriba su email">
										@error('email')<span class = "text-danger" {{$message}}></span> @enderror
									</p>
									<p class="row-in-form">
										<label for="phone">Número Celular<span>*</span></label>
										<input type="number" name="phone" value="" wire:model="celular" placeholder="Escriba su número de celular">
										@error('celular')<span class = "text-danger" {{$message}}></span> @enderror
									</p>
									<p class="row-in-form">
										<label for="phone">Teléfono<span>*</span></label>
										<input type="number" name="phone" value="" wire:model="telefono" placeholder="Escriba su número de Teléfono">
										@error('telefono ')<span class = "text-danger" {{$message}}></span> @enderror
									</p>
									<p class="row-in-form">
										<label for="add">Dirección:</label>
										<input type="text" name="add" value="" wire:model="direccion" placeholder="Escriba su Dirección">
										@error('direccion')<span class = "text-danger" {{$message}}></span> @enderror
									</p>
									<p class="row-in-form">
										<label for="country">País<span>*</span></label>
										<input type="text" name="country" value="" wire:model="pais" placeholder="Escriba su País">
										@error('pais')<span class = "text-danger" {{$message}}></span> @enderror
									</p>
									<p class="row-in-form">
										<label for="zip-code">Código Postal:</label>
										<input type="number" name="zip-code" value="" wire:model="codigo_p" placeholder="Escriba su código postal">
										@error('codigo_p')<span class = "text-danger" {{$message}}></span> @enderror
									</p>
									<p class="row-in-form">
										<label for="city">Ciudad<span>*</span></label>
										<input type="text" name="city" value="" wire:model="ciudad" placeholder="Ciudad">
										@error('ciudad')<span class = "text-danger" {{$message}}></span> @enderror
									</p>
									<p class="row-in-form">
										<label for="city">Departamento<span>*</span></label>
										<input type="text" name="city" value="" wire:model="departamento" placeholder="Departamento">
										@error('departamento')<span class = "text-danger" {{$message}}></span> @enderror
									</p>
									<p class="row-in-form fill-wife">
										<label class="checkbox-field">
											<input name="different-add" id="different-add" value="1" type="checkbox" wire:model="direccion_diferente">
											<span>¿Desea enviar a otro Destino?</span>
										</label>
								   </p>
						    </div>			
				      </div>
				@if($direccion_diferente)
					<div class="wrap-address-billing">				
						<h3 class="box-title">Dirección Secundaria</h3>
							<div class="billing-address">
									<p class="row-in-form">
										<label for="fname">Nombre Completo<span>*</span></label>
										<input type="text" name="fname" value="" wire:model="nombre_" placeholder="Escriba su nombre(s) Completo">
										@error('nombre_')<span class = "text-danger" {{$message}}></span> @enderror
									</p>
								<p class="row-in-form">
									<label for="lname">Apellidos<span>*</span></label>
									<input  type="text" name="lname" value="" wire:model="apellidos_" placeholder="Escriba sus Apellidos">
									@error('apellidos_')<span class = "text-danger" {{$message}}></span> @enderror
								</p>
								<p class="row-in-form">
									<label for="email">Email:</label>
									<input type="email" name="email" value="" wire:model="email_" placeholder="Escriba su email">
									@error('email_')<span class = "text-danger" {{$message}}></span> @enderror
								</p>
								<p class="row-in-form">
									<label for="phone">Número Celular<span>*</span></label>
									<input type="number" name="phone" value="" wire:model="celular_" placeholder="Escriba su número de celular">
									@error('celular_')<span class = "text-danger" {{$message}}></span> @enderror
								</p>
								<p class="row-in-form">
									<label for="phone">Teléfono<span>*</span></label>
									<input type="number" name="phone" value="" wire:model="telefono_" placeholder="Escriba su número de teléfono">
									@error('telefono_')<span class = "text-danger" {{$message}}></span> @enderror
								</p>
								<p class="row-in-form">
									<label for="add">Dirección:</label>
									<input type="text" name="add" value="" wire:model="direccion_" placeholder="Escriba su Dirección">
									@error('direccion_')<span class = "text-danger" {{$message}}></span> @enderror
								</p>
								<p class="row-in-form">
									<label for="country">País<span>*</span></label>
									<input type="text" name="country" value="" wire:model="pais_" placeholder="Escriba su País">
									@error('pais_')<span class = "text-danger" {{$message}}></span> @enderror
								</p>
								<p class="row-in-form">
									<label for="zip-code">Código Postal:</label>
									<input type="number" name="zip-code" value="" wire:model="codigo_p_" placeholder="Escriba su código postal">
									@error('codigo_p_')<span class = "text-danger" {{$message}}></span> @enderror
								</p>
								<p class="row-in-form">
									<label for="city">Ciudad<span>*</span></label>
									<input type="text" name="city" value="" wire:model="ciudad_" placeholder="Ciudad">
									@error('ciudad_')<span class = "text-danger" {{$message}}></span> @enderror
								</p>
								<p class="row-in-form">
									<label for="city">Departamento<span>*</span></label>
									<input type="text" name="city" value="" wire:model="departamento_" placeholder="Departamento">
									@error('departamento_')<span class = "text-danger" {{$message}}></span> @enderror
								</p>
					       </div>
					</div>
				@endif
	    </div>			
				<div class="summary summary-checkout">
					<div class="summary-item payment-method">
						<h4 class="title-box">Método de Pago</h4>
						<div class="choose-payment-methods">
							<label class="payment-method">
								<input name="payment-method" id="payment-method-codigo" value="codigo" type="radio" wire:model="metodopago">
								<span>Pago con Código</span>
								<span class="payment-desc">El Sistema Genera un codigo para que pueda pagar en efectivo en sucursales</span>
							</label>
							@error('metodopago')<span class = "text-danger" {{$message}}></span> @enderror
							<label class="payment-method">
								<input name="payment-method" id="payment-method-tarjeta" value="tarjeta" type="radio" wire:model="metodopago">
								<span>Tarjeta Débito / Crédito</span>
								<span class="payment-desc">Debe tener tarjeta vigente y autoriada de su banco para realizar la compra en linea</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-paypal" value="paypal" type="radio" wire:model="metodopago">
								<span>Paypal</span>
								<span class="payment-desc">Puede pagar con su Tarjeta Paypal</span>								
							</label>
						</div>	
						@if(Session::has('checkout'))
							<p class="summary-info grand-total"><span>Total</span> <span class="grand-total-price">$ {{Session::get('checkout')['total']}}</span></p>
						@endif	
						<button type="submit" class="btn btn-medium">Realizar Pago</button>
					</div>
					<div class="summary-item shipping-method">
						<h4 class="title-box f-title">Método de envío</h4>
						<p class="summary-info"><span class="title">Tarifa Plana</span></p>
						<p class="summary-info"><span class="title">Fijo $0</span></p>
						<h4 class="title-box">Código de descuento</h4>
						<p class="row-in-form">
							<label for="coupon-code">Ingresar Código:</label>
							<input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">	
						</p>
						<a href="#" class="btn btn-medium">Aplicar	</a>
					</div>
				</div>          
			</div>
		</form>	
	</div>
</main>
	
