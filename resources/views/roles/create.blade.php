@extends('layouts.app')


@section('content')
    <div class="row">



        <div class="col s12">
            <div class="card-panel">
                <div class="row box-title">
                    <div class="col s12">
                        <h5 class="content-headline">Add New Role</h5>


                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                            {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Permission:</strong>
                                        <br/>

                                        @foreach($permission as $value)
                                            {{ Form::checkbox('permission[]', $value->id, false, array('class' => '', 'id' => 'cb'.$value->id)) }}
                                            <label for="cb{{ $value->id }}">{{ $value->name }}</label>
                                            <br/>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="material-icons left">save</i>Save</button>
                                    <a class="waves-effect waves-light btn" href="{{ route('roles.index') }}"><i class="material-icons left">fast_rewind</i>Back</a>
                                </div>
                            </div>
                            {!! Form::close() !!}


                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection