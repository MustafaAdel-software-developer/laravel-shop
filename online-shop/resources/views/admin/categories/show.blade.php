@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="col-xs-12 col-md-6">
                <div class="prod-info-main prod-wrap clearfix"> 
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="product-image"> 
                             <img src="{{asset("storage/".$category->image)}}" class="w-75 img-responsive rounded mx-auto d-block">
                            </div>
                        </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="product-detail">
                    <h5 class="name">
                        <a href="#">{{$category->name}}</a>
                    </h5>
                </div>
                <div class="product-info smart-form">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="javascript:void(0);" class="btn btn-info">More info</a>
                            <a class="btn btn-danger" href="{{ url('admin/categories') }}">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- end category -->
    </div>
</div>

@endsection
