@extends('adminlte::page')
@section('plugins.Datatables', true)
@include('layouts.chank.header')

@section('title', 'Users | Lara Admin')
@section('content_header')
    <a class="btn btn-primary float-right" href="{{route('page')}}">Создать страницу</a>
    <h1>Список страниц</h1>
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
                            <th></th>
                            <th>Слаг</th>
                            <th>Детали</th>
                            <th>Добавить LeeLoo</th>
                            <th>Изменить вид страницы</th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach ($pages as $page)
                            <tr>
                                <td>{{ $page->id }}</td>
                                <td>{{ $page->slug }}</td>
                                <td>
                                        <a href="{{route('main-page',['slug' => $page->slug])}}" class="btn btn-primary text-center">Показать</a>
                                        <a href="{{route('edit-page',['slug' => $page->slug])}}" class="btn btn-info text-center">Редактировать</a>
                                        <a href="{{route('delete-page',['slug' => $page->slug])}}" class="btn btn-danger text-center">Удалить</a>
                                </td>

                                <td>
                                    @if($page->leeloo_id)
                                    <button id="{{$page->id}}" class="btn btn-success text-center" data-toggle="modal" data-target="#leeLooModal{{$page->id}}">Добавить</button>
                                    @else
                                        <button id="{{$page->id}}" class="btn btn-secondary text-center" data-toggle="modal" data-target="#leeLooModal{{$page->id}}">Добавить</button>
                                    @endif


                                        <form method="post" action="{{route('add-leeloo',['slug' => $page->slug])}}">
                                            {{ csrf_field() }}
                                            <div id="leeLooModal{{$page->id}}" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <span>Копируйте leeloo_id в input</span>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="text" name="leeloo_id" placeholder="Копируйте сюда id LeeLoo" class="form-control" required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                                            <button id="{{$page->id}}" class="btn btn-info text-center" type="submit">Сохранить</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>

                                </td>
                                <td>

                                    <form action="{{route('update-template',['slug' => $page->slug])}}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="layout_id" class="layout_id" id="{{$page->id}}">

                                        <select id="{{$page->id}}" class="my-select show-tick col-md-7" data-live-search="true" data-style="btn-info">
                                            @foreach($layouts as $layout)
                                                <option id="{{$layout->id}}" data-layout="{{$layout->id}}" {{ ($layout->id == $page->pageHasLayout->id ? "selected":"") }}>{{$layout->description}}</option>
                                            @endforeach
                                        </select>
                                        <button id="{{$page->id}}" class="btn btn-primary text-center float-right save" type="submit" disabled="">Сохранить</button>
                                    </form>

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
                "language": {
                    search: 'Поиск по страницам',
                    searchPlaceholder: 'Введите слово и enter',
                    info : 'Показаны с _START_ по _END_ страницу из _TOTAL_',
                    paginate: {
                        "next":       "Следующая",
                        "previous":   "Предыдущая"
                    }
                },
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

        $('.container-fluid').addClass('added-class');
        $('.wrapper').addClass('added-class');


        var maxLength = 15;
        $('.my-select > option').text(function(i, text) {
            if (text.length > maxLength) {
                return text.substr(0, maxLength) + '...';
            }
        });
    </script>
@stop