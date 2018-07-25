@extends('layouts.app')


@section('content')
    <div class="row">



        <div class="col s12">
            <div class="card-panel">
                <div class="row box-title">
                    <div class="col s12">
                        <h5 class="content-headline">Users</h5>


                        @if ($message = Session::get('success'))

                            <p><span class="success-bg project-status">{{ $message }}</span></p>
                            <!--<div class="alert alert-success">
                                <p></p>
                            </div>-->
                        @endif
                        <div class="pull-right">
                            @can('role-create')
                                <p><a class="waves-effect waves-light btn" href="{{ route('users.create') }}"> <i class="material-icons left">add</i>Create New User</a></p>
                            @endcan
                        </div>


                        <table class="striped bordered ">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($data as $key => $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if(!empty($user->getRoleNames()))
                                            @foreach($user->getRoleNames() as $v)
                                                <span class="success-bg project-status">{{ $v }}</span>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <form id="action-form" action="{{ route('users.destroy',$user->id) }}" method="POST">
                                            <div class="action-btns">
                                                <a class="btn-floating success-bg" href="{{ route('users.show',$user->id) }}"><i class="material-icons">visibility</i>Show</a>

                                                    <a class="btn-floating warning-bg" href="{{ route('users.edit',$user->id) }}"><i class="material-icons">edit</i>Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                    <a class="btn-floating error-bg" href="{{ route('users.destroy',$user->id) }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('action-form').submit();"><i class="material-icons">delete</i>Delete</a>

                                            </div>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </table>


                        {!! $data->render() !!}
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection