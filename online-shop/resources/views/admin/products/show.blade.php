@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="col-xs-12 col-md-6">
                <!-- First product box start here-->
                <div class="prod-info-main prod-wrap clearfix">
 
                      <div class="row">
 
                           <div class="col-md-5 col-sm-12 col-xs-12">
 
                            <div class="product-image">
 
                             <img src="{{asset("storage/".$product->image)}}" class="w-75 img-responsive rounded mx-auto d-block">
 
                       </div>
 
                  </div>
 
     <div class="col-md-7 col-sm-12 col-xs-12">
 
                  <div class="product-detail">
 
                               <h5 class="name">
 
                               <a href="#">
 
                               {{$product->name}}
 
                               </a>
 
                               <a href="#">
 
                               <span>/Category{{$product->category_id}}</span>
 
                               </a>                           
 
                        </h5>
 
                            <p class="price-container">
                            <span><strong>{{$product->price - ($product->price * $product->discount)}}</strong></span>
                             <span class="text-danger"><del>${{$product->price}}</del></span>
 
                           </p>
 
              <span class="tag1"></span>
 
   </div>
 
   <div class="description">
 
      <p>{{$product->description}}</p>
 
   </div>
 
      <div class="product-info smart-form">
 
         <div class="row">
 
         <div class="col-md-12">
 
             <a href="javascript:void(0);" class="btn btn-info">More info</a>
            <a class="btn btn-danger" href="{{ url('admin/categories') }}">Cancel</a>
 
 
       </div>
 
      <div class="col-md-12">
 
         <div class="rating">Rating:
 
          <label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
 
          <label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
 
          <label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
 
          <label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
 
          <label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
 
         </div>
 
       </div>
 
    </div>
 
   </div>
 
  </div>
 
  </div>
 </div>
 
 <!-- end product -->
 
</div>
</div>
 
</div>
@endsection
