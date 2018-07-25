@extends('layouts.app')


@section('content')


    <div class="row">



        <div class="col s12">
            <div class="card-panel">
                <div class="row box-title">
                    <div class="col s12">
                        <h5 class="content-headline">Show Product</h5>
                        <div class="pull-right">
                            <p><a class="waves-effect waves-light btn" href="{{ route('products.index') }}"><i class="material-icons left">fast_rewind</i> Back</a></p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {{ $product->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Details:</strong>
                                {{ $product->detail }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection