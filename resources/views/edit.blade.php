@extends('adminlte::page')
@section('plugins.summernote', true)
@include('layouts.chank.header')
@section('title', 'Edit page')

@section('content')

    <div class="row">
        <div class="col-md-12 mx-auto form-container">
            <div class="box-header">
                <h3 class="box-title">Редактировать страницу</h3>
            </div>
            {{--<form class="form-sign" enctype="multipart/form-data" action="{{route('change-template-edit',['slug' => $info->slug])}}" method="post">--}}
                {{--{{csrf_field()}}--}}

                {{--<label>Выберите тип шаблона кликом на селект</label>--}}
                {{--<select class="form-control select-template" name="template_id" onchange="this.form.submit()">--}}

                {{--@foreach($templates as $template)--}}
                    {{--<option value="{{ $template->id }}" {{ ( $info->template_id == $template->id) ? 'selected' : '' }} class="list-group-item" name="{{$template->name}}"> {{ $template->name }} </option>--}}
                {{--@endforeach--}}
                {{--</select>--}}
            {{--</form>--}}

            <form class="form-submit" enctype="multipart/form-data" method="post" action="{{route('store-page',['slug' => $info->slug])}}">
                {{csrf_field()}}

                <input type="hidden" name="template_id" value="{{$info->template_id}}">
                <input type="hidden" class="layout_id" name="layout_id" value="{{$info->pageHasLayout->id}}">

                <label>Выберите тип страницы кликом на поле ниже</label>
                <select class="select-layout show-tick col-md-12" data-live-search="true">
                    @foreach($layouts as $layout)
                        <option value="{{$layout->description}}" data-layout="{{$layout->id}}" data-content="<img src='/images/{{$layout->image}}' style='max-width: 15%'></img> {{$layout->description}}" {{ ($info->pageHasLayout->id == $layout->id ? "selected":"") }}></option>
                    @endforeach
                </select>

                @include('form-templates.'.$info->templates->name)

                <div class="box-footer text-center">
                    <button type="submit" class="btn btn-primary col-md-4">Сохранить страницу</button>
                </div>

            </form>
        </div>

    </div>

    <script src="{{asset('js/page-update.js')}}"></script>
@endsection
