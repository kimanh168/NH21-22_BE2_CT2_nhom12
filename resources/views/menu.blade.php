@extends('layout.master')
@section('content')
    <!-- Page Header Start -->
    <!-- <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Menu & Pricing</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Menu & Pricing</a>
            </div>
        </div>
    </div> -->
    <!-- Page Header End -->


    <!-- Products Start -->
    <div class="container-fluid about py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Menu & Pricing</h2>
                <h1 class="display-4 text-uppercase">Explore Our Cakes</h1>
            </div>
            <div class="row">
                <div class="col-md-2 pt-2">
                    @foreach($dulieu as $row)
                    <div class="form-check">
                        <input class="cateCheck form-check-input" name="cateCheck" type="checkbox" value="{{ $row->type_name }}" id="{{ $row->type_id }}" >
                        <label class="form-check-label" for="{{ $row->type_id }}">{{ $row->type_name }} ({{$row->products->count()}})</label>
                    </div>
                    @endforeach
                </div>
                <div class="hienthisp col-md-10 ">
                    <div class="list-product row">
                    <?php if(isset($sp_theoloai)): ?>
                    @foreach($sp_theoloai as $sp)
                        <div class="product mb-5 col-xs-3 col-md-4">
							<div class="product-img">
								<img class="hinhphone" src="../img/{{ $sp-> image }}" alt="" >
									<div class="product-label">
                                    @if( $sp-> promotion != 0 )
                                    <span class="sale">-{{ $sp-> promotion }}%</span>
                                    @endif
									</div>
							</div>
							<div class="product-body">
                                <div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart"></i><span class="tooltipp">add to wishlist</span></button>
									<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
									<button class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModal" data-product-id="{{ $sp->id }}"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
								</div>
									<h3 class="product-name"><a href="#">{{ $sp-> product_name }}</a></h3>
                                    @if( $sp-> promotion != 0 )
                                    <h4 class="product-price"> {{ number_format($sp->sale_price,0,',','.') }} VND <del class="product-old-price">{{ number_format($sp->price,0,',','.') }}</del></h4>
                                    @else
                                    <h4 class="product-price"> {{ number_format($sp->price,0,',','.') }} VND</h4>
                                    @endif
								</div>
								<div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</div>
							</div>
                            
                    @endforeach
                    <?php else : ?>
                    @foreach($tatcasp as $sp)
                                    <div class="product mb-5 col-xs-3 col-md-4">
										<div class="product-img">
											<img class="hinhphone" src="../img/{{ $sp-> image }}" alt="" >
												<div class="product-label">
                                                @if( $sp-> promotion != 0 )
                                                        <span class="sale">-{{ $sp-> promotion }}%</span>
                                                    @endif
												</div>
									    </div>
										<div class="product-body">
                                            <div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view" data-bs-toggle="modal" data-bs-target="#exampleModal" data-product-id="{{ $sp->id }}"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
											<h3 class="product-name"><a href="#">{{ $sp-> product_name }}</a></h3>
                                            @if( $sp-> promotion != 0 )
                                                <h4 class="product-price"> {{ number_format($sp->sale_price,0,',','.') }} VND <del class="product-old-price">{{ number_format($sp->price,0,',','.') }}</del></h4>
                                            @else
                                            <h4 class="product-price"> {{ number_format($sp->price,0,',','.') }} VND</h4>
                                            @endif
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
										</div>
									</div>
                    @endforeach
                    <div class="clearfix pt-3 pl-3">
                        {{$tatcasp->links()}}
                    </div>
                    <?php endif; ?>
                </div>
                </div>
            </div>
            <div class="tab-class text-center">
                <!-- <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active ">
                        <div class="row g-3">
                            <div class="col-lg-6"> 
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/" alt="" style="width: 200px; height: 185px;">
                                        <h4 class="bg-dark text-primary p-2 m-0"></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">                                    
                                        <h5 class="text-uppercase"></h5>
                                        <h5 class="text-uppercase"></h5>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title position-relative text-center mx-auto mb-4 pb-3" style="max-width: 600px;">
                        <h2 class="text-white font-secondary">Hello Summer</h2>
                        <h1 class=" text-uppercase text-white">30% DISCOUNT FOR THIS SUMMER</h1>
                    </div>
                    <p class="text-white mb-4">Delicious would like to send to those who love birthdays this season a new collection of cakes this Summer with the SEA theme. <br> 
                        Especially in this collection, we bring back Tiramisu - a cake that has caused a lot of memories for many Delicious customers, was once one of the most 
                        shipped cakes, before Durian Butter Cake was born. In addition, the beauty of this Summer Set can talk about the Longan Pepper cake decorated with the 
                        concept of the Beach, which will surely bring a new taste to Delicious' "dumb customers".</p>
                    <a href="" class="btn btn-primary border-inner py-3 px-5 me-3">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thông Tin Sản Phẩm</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    @endsection