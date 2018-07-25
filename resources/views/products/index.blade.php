@extends('layouts.app')


@section('content')

    <div class="row">



        <div class="col s12">
            <div class="card-panel">
                <div class="row box-title">
                    <div class="col s12">
                        <h5 class="content-headline">Products</h5>


                        @if ($message = Session::get('success'))

                            <p><span class="success-bg project-status">{{ $message }}</span></p>
                            <!--<div class="alert alert-success">
                                <p></p>
                            </div>-->
                        @endif
                        <div class="pull-right">
                            @can('product-create')
                                <p><a class="waves-effect waves-light btn" href="{{ route('products.create') }}"> <i class="material-icons left">add</i>Create New Product</a></p>
                            @endcan
                        </div>
                        <table class="striped bordered ">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->detail }}</td>
                                    <td>
                                        <form id="action-form" action="{{ route('products.destroy',$product->id) }}" method="POST">
                                            <div class="action-btns">
                                            <a  class="btn-floating success-bg" href="{{ route('products.show',$product->id) }}"><i class="material-icons">visibility</i>Show</a>
                                            @can('product-edit')
                                                <a class="btn-floating warning-bg" href="{{ route('products.edit',$product->id) }}"><i class="material-icons">edit</i>Edit</a>
                                            @endcan


                                            @csrf
                                            @method('DELETE')
                                            @can('product-delete')
                                                    <a class="btn-floating error-bg" href="{{ route('products.destroy',$product->id) }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('action-form').submit();"><i class="material-icons">delete</i>Delete</a>
                                                <!--<button type="submit" class="btn-floating error-bg"><i class="material-icons">delete</i>Delete</button>-->
                                            @endcan
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        {!! $products->links() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection