@extends('products.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left"><br>

                <h2>Product</h2>

            </div>

            <div class="pull-right"><br>

                <a class="btn btn-secondary" href="{{ route('products.index') }}"> Back</a>

            </div>

        </div>

    </div>

    <br>
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                {{ $product->name }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">
    
                    
    
                    <img src="/image/{{ $product->image }}" width="400px">
    
                </div>
    
            </div>

            <div class="form-group">

                <strong>Details:</strong>

                {{ $product->detail }}

            </div>

        </div>

    </div>

@endsection