@extends('adminlte::page')
@section('plugins.summernote', true)
@include('layouts.chank.header')

@section('title', 'Create page')

@section('content')

    <div class="row">
        <div class="col-md-12 mx-auto form-container">
            <div class="box-header">
                <h3 class="box-title">Create Page</h3>
            </div>
            <form class="form-sign" enctype="multipart/form-data" action="{{route('change-template-create')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" id="layout_id" name="layout_id" value="{{$layouts->first()->id}}">
                <select class="form-control select-template" name="template_id" onchange="this.form.submit()">

                    @foreach($templates as $template)
                        <option value="{{ $template->id }}" {{ ( $changedTemplate->id == $template->id) ? 'selected' : '' }} class="list-group-item" name="{{$template->name}}"> {{ $template->name }} </option>
                    @endforeach
                </select>
            </form>

            <form class="form-submit" enctype="multipart/form-data" method="post">
                    {{ method_field('PUT') }}
                    {{csrf_field()}}

                <input type="hidden" name="template_id" value="{{$changedTemplate->id}}">
                <input type="hidden" class="layout_id" name="layout_id" value="{{$layouts->first()->id}}">

                <p>Choose type of layouts by click select</p>
                <select class="select-layout show-tick col-md-12" data-live-search="true">
                    @foreach($layouts as $layout)
                        <option value="{{$layout->description}}" data-layout="{{$layout->id}}" data-content="<img src='/images/{{$layout->image}}' style='max-width: 15%'></img> {{$layout->description}}">{{$layout->description}}</option>
                    @endforeach
                </select>

                @include('form-templates.'.$changedTemplate->name)

                <div class="box-footer text-center">
                    <button type="submit" class="btn btn-primary col-md-4">Submit</button>
                </div>

            </form>
        </div>
    </div>

    <script src="{{asset('js/form-manipulated.js')}}"></script>
@endsection