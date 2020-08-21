@extends('adminlte::page')
@section('plugins.Datatables', true)
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
@section('css')
    <link href="/css/main.css" rel="stylesheet">
@stop
@section('title', 'Users | Lara Admin')

@section('content_header')
    <a class="btn btn-primary float-right" href="{{route('page')}}">Create page</a>
    <h1>Pages</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="box">
                <div class="box-header">
                </div>
                <div class="box-body">
                    <table id="laravel_datatable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Slug</th>
                            <th>Details</th>
                            <th>Current template</th>
                            <th>Change template</th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach ($pages as $page)
                            <tr>
                                <td>{{ $page->id }}</td>
                                <td>{{ $page->slug }}</td>
                                <td>
                                        <a href="{{route('wow-page',['slug' => $page->slug])}}" class="btn btn-primary text-center">Show</a>
                                        <a href="{{route('edit-page',['slug' => $page->slug])}}" class="btn btn-info text-center">Edit</a>
                                        <a href="{{route('delete-page',['slug' => $page->slug])}}" class="btn btn-danger text-center">Delete</a>
                                </td>

                                <th>
                                    <span class="font-weight-bold">{{$page->templates->name}}</span>
                                </th>
                                <td>
                                    {{--@php($templates = ['basic','first'])--}}
                                    <form action="{{route('save-filter-page',['slug' => $page->slug])}}" method="post">
                                    {{ csrf_field() }}
                                        <input type="hidden" name="template_id" class="template_id">
                                    <div class="dropdown float-left">
                                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton{{$page->id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           Select template
                                        </button>
                                      <div class="dropdown-menu">
                                        @foreach($templates as $template)
                                            @if($template->id!= $page->tempate_idl)
                                                <a href="#" data-attribute="{{$template->id}}" id="{{$page->id}}" class="dropdown-item" name="{{$template->name}}">{{$template->name}}</a>
                                            @else
                                                <a href="#" data-attribute="{{$template->id}}" id="{{$page->id}}" class="dropdown-item active" name="{{$template->name}}">{{$template->name}}</a>
                                              @endif
                                        @endforeach
                                      </div>

                                    </div>

                                        <button id="{{$page->id}}" class="btn btn-info text-center float-right save" type="submit" disabled>Save</button>
                                    </form>

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

    <script>
        $(document).ready( function () {
            $('#laravel_datatable').DataTable({ "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false});

        });

        $('a.dropdown-item').on('click',function () {

            var id = $(this).attr('id');
            $('#'+id+'.save').prop("disabled", false);
            var value = $(this).attr('name');
            $('.template_id').val($(this).attr('data-attribute'));
            $('#dropdownMenuButton'+id+'').html(value);
        })
    </script>
@stop