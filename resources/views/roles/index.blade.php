@extends('layouts.app')


@section('content')
    <div class="row">



        <div class="col s12">
            <div class="card-panel">
                <div class="row box-title">
                    <div class="col s12">
                        <h5 class="content-headline">Roles</h5>


                        @if ($message = Session::get('success'))

                            <p><span class="success-bg project-status">{{ $message }}</span></p>
                            <!--<div class="alert alert-success">
                                <p></p>
                            </div>-->
                        @endif
                        <div class="pull-right">
                            @can('role-create')
                                <p><a class="waves-effect waves-light btn" href="{{ route('roles.create') }}"> <i class="material-icons left">add</i>Create New Role</a></p>
                            @endcan
                        </div>


                        <table class="striped">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <form id="action-form" action="{{ route('roles.destroy',$role->id) }}" method="POST">
                                        <div class="action-btns">
                                        <a class="btn-floating success-bg" href="{{ route('roles.show',$role->id) }}"><i class="material-icons">visibility</i>Show</a>
                                        @can('role-edit')
                                            <a class="btn-floating warning-bg" href="{{ route('roles.edit',$role->id) }}"><i class="material-icons">edit</i>Edit</a>
                                        @endcan
                                            @csrf
                                            @method('DELETE')
                                        @can('role-delete')


                                                    <a class="btn-floating error-bg" href="{{ route('roles.destroy',$role->id) }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('action-form').submit();"><i class="material-icons">delete</i>Delete</a>


                                        @endcan
                                        </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {!! $roles->render() !!}


@endsection