@extends('products.layout')

@section('content')

    <div class="row" >

        <div class="col-lg-12 margin-tb">

            <div class="pull-left"><br>

                <h2>Product List</h2>

            </div>

        </div>

    </div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

    <table class="table table-bordered"><br><br>

        <tr>

            <th width="50px">No</th>
            <th width="150px">Image</th>
            <th width="200px">Name</th>
            <th width="250px">Details</th>
            <th width="200px">Action</th>

        </tr>

        @foreach ($products as $product)
        <tr>

            <td>{{ ++$i }}</td>

            <td><img src="/image/{{ $product->image }}" width="100px"></td>

            <td>{{ $product->name }}</td>

            <td>{{ Str::limit($product->detail, 50)}}</td>

            <td>

                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">View</a>


                </form>

            </td>

        </tr>

        @endforeach

    </table>

    {!! $products->links() !!}

@endsection