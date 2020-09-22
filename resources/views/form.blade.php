@extends('adminlte::page')
@section('plugins.summernote', true)
@include('layouts.chank.header')

@section('title', 'Create page')

@section('content')

    <div class="row">
        <div class="col-md-12 mx-auto form-container">
            <div class="box-header">
                <h3 class="box-title">Создать страницу</h3>
            </div>

            {{--<form class="form-sign" enctype="multipart/form-data" action="{{route('change-template-create')}}" method="post">--}}
                {{--{{csrf_field()}}--}}
                {{--<input type="hidden" id="layout_id" name="layout_id" value="{{$layouts->first()->id}}">--}}

                {{--<label>Выберите тип шаблона кликом на селект</label>--}}
                {{--<select class="form-control select-template" name="template_id" onchange="this.form.submit()">--}}
                    {{--@foreach($templates as $template)--}}
                        {{--<option value="{{ $template->id }}" class="list-group-item" name="{{$template->name}}"> {{ $template->name }} </option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
            {{--</form>--}}

            <form class="form-submit"  method="post" enctype="multipart/form-data" action="{{route('create-page')}}">
                    {{--{{ method_field('PUT') }}--}}
                    {{csrf_field()}}

                <input type="hidden" name="template_id" value="{{$basicTemplate->id}}">
                <input type="hidden" class="layout_id" name="layout_id" value="{{$layouts->where('name','basic')->first()->id}}">

                <label>Выберите тип страницы кликом на поле ниже</label>
                <select class="select-layout show-tick col-md-12" data-live-search="true">
                    @foreach($layouts as $layout)
                        <option value="{{$layout->description}}" data-layout="{{$layout->id}}" data-content="<img src='/images/{{$layout->image}}' style='max-width: 15%'></img> {{$layout->description}}" {{ ($layouts->where('name','basic')->first()->id == $layout->id ? "selected":"") }}>{{$layout->description}}</option>
                    @endforeach
                </select>


                @include('form-templates.'.$basicTemplate->name)
                <div class="box-footer text-center">
                    <button type="submit" class="btn btn-primary col-md-4">Создать страницу</button>
                </div>

            </form>
        </div>
    </div>

    <script src="{{asset('js/form-manipulated.js')}}"></script>
@endsection