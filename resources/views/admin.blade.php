@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('css')
    <link href="/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@stop
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
@stop

@section('title', 'Users | Lara Admin')

@section('content_header')
    <a class="btn btn-primary float-right" href="{{route('page')}}">Create page</a>
    <h1>Pages</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
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
                            <th>Change layout</th>
                            <th>Add video</th>
                            <th>Status video</th>
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

                                <td>
                                    <span>{{$page->templates->name}}</span>
                                </td>
                                <td>

                                    <form action="{{route('update-template',['slug' => $page->slug])}}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="template_id" class="template_id" id="{{$page->id}}">
                                        <input type="hidden" name="layout_id" class="layout_id" id="{{$page->id}}">

                                            <select id="{{$page->id}}" class="my-select show-tick col-md-7" data-live-search="true" data-style="btn-info">
                                                @foreach($layouts as $layout)
                                                    <option id="{{$layout->getTemplate->first()->id}}" title="{{$layout->getTemplate->first()->name}}" data-layout="{{$layout->id}}" {{ ($layout->id == $page->pageHasLayout->id ? "selected":"") }}>{{$layout->description}}</option>
                                                @endforeach
                                            </select>

                                        <button id="{{$page->id}}" class="btn btn-primary text-center float-right save" type="submit" disabled>Save</button>
                                    </form>

                                </td>
                                <td>

                                    <button id="{{$page->id}}" class="btn btn-info text-center" data-toggle="modal" data-target="#exampleModalCenter{{$page->id}}">Add</button>
                                    <form method="post" action="{{route('add-video',['slug' => $page->slug])}}">
                                        {{ csrf_field() }}
                                        <div id="exampleModalCenter{{$page->id}}" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <span>Copy link to input</span>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="text" name="youtube" placeholder="Link video" class="form-control" required>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button id="{{$page->id}}" class="btn btn-info text-center" type="submit">Save</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </td>
                                <td>
                                    @if($page->video_status == 0)
                                            @php($status = 'On')
                                        @else
                                            @php($status = 'Off')
                                    @endif
                                    <a href="{{route('status-video',['slug' => $page->slug])}}" id="{{$page->id}}" class="btn btn-success text-center" role="button">{{$status}}</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>

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
        $(function () {
            $('.my-select').selectpicker();
        });

        $(".my-select").on("change",function () {
            var id = this.id;
            var selectedOption = $(".my-select#"+id+" option:selected");
            var layout_id = selectedOption.attr('data-layout');
            var template_id = selectedOption.attr('id');
            $('#'+id+'.template_id').val(template_id);
            $('#'+id+'.layout_id').val(layout_id);
            $('#'+id+'.save').prop("disabled", false);
        });

    </script>
@stop