@extends('layout.master')
@section('content')

	<!-- SECTION -->
		<div class="section mt-5">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="row billing-details">
							<div class="mb-3">
								<h3 class="title">Billing address</h3>
							</div>
							<div class="col-8 mb-3">
								<label for="name" class="form-label">Full Name</label>
								<input class="form-control" type="text" id="name" name="first-name" placeholder="Your Name" value="{{ Auth::guard('cus')->user()->customer_name }}">
							</div>
							<div class="col-8 mb-3">
								<label for="email" class="form-label">Email</label>
								<input class="form-control" type="email" id="email" name="email" placeholder="exam@email.com" value="{{ Auth::guard('cus')->user()->email }}">
							</div>
							<div class="col-8 mb-3">
								<label for="address" class="form-label">Address</label>
								<input class="form-control" type="text" name="address" placeholder="Your Address" value="{{ Auth::guard('cus')->user()->address }}">
							</div>
							<div class="col-8 mb-3">
								<label for="phone" class="form-label">Phone Number</label>
								<input class="form-control" type="tel" name="phone" placeholder="Telephone" value="{{ Auth::guard('cus')->user()->phone }}">
							</div>
						</div>
						<!-- /Billing Details -->

						<!-- Order notes -->
						<div class="col-8 mb-3">
							<label for="Notes" class="form-label">Notes</label>
							<textarea class="form-control" id="Notes" placeholder="Order Notes"></textarea>
						</div>
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
                            
							<div class="order-products">
                            @foreach($cart->items as  $item)
								<div class="order-col">
                               
									<div>{{ $item['quantity'] }}x {{ $item['product_name'] }}</div>
									<div>{{ number_format($item['price']*$item['quantity'],0,',','.') }} VND</div>
								</div>
                            @endforeach
							</div>
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">{{number_format($cart ->total_price,0,',','.')}}VND</strong></div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						<a href="#" class="btn btn-primary order-submit">Place order</a>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
@stop