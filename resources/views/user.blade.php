@extends('adminlte::page')
@section('plugins.Datatables', true)
@include('layouts.chank.header')

@section('title', 'Appoint Admin')

@section('content_header')
    <a class="btn btn-primary float-right" href="{{route('page')}}">Create page</a>
    <h1>Users</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="box">
                <div class="box-header">
                </div>
                <div class="box-body">
                    <table id="laravel_datatables" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Add admin or delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td>
                                    @if($user->role != 'admin')
                                        <a href="{{route('add-admin',['id' => $user->id])}}" class="btn btn-primary text-center">Add</a>
                                    @else
                                        <a href="{{route('delete-user',['id' => $user->id])}}" class="btn btn-danger text-center">Delete</a>
                                    @endif

                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>

@stop
<script>
        $(document).ready( function () {
            $('#laravel_datatable').DataTable({ "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false});

        });
</script>