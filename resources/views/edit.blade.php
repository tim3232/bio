@extends('adminlte::page')
@section('plugins.summernote', true)
@section('css')
    <link href="/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@stop
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
@stop
@section('title', 'Edit page')

@section('content')

    <div class="row">
        <div class="col-md-12 mx-auto form-container">
            <div class="box-header">
                <h3 class="box-title">Update Page</h3>
            </div>
            <form class="form-sign" enctype="multipart/form-data" action="{{route('change-template-edit',['slug' => $info->slug])}}" method="post">
                {{csrf_field()}}

                <p>Choose template by click of select</p>
                <select class="form-control select-template" name="template_id" onchange="this.form.submit()">

                @foreach($templates as $template)
                    <option value="{{ $template->id }}" {{ ( $info->template_id == $template->id) ? 'selected' : '' }} class="list-group-item" name="{{$template->name}}"> {{ $template->name }} </option>
                @endforeach
                </select>
            </form>

            <form class="form-submit" enctype="multipart/form-data" method="post" action="{{route('store-page',['slug' => $info->slug])}}">
                {{csrf_field()}}

                <input type="hidden" name="template_id" value="{{$info->template_id}}">
                <input type="hidden" class="layout_id" name="layout_id" value="{{$info->pageHasLayout->id}}">

                <p>Choose type of layouts by click select</p>
                <select class="select-layout show-tick col-md-12" data-live-search="true">
                    @foreach($layouts as $layout)
                        <option value="{{$layout->description}}" data-layout="{{$layout->id}}" data-content="<img src='/images/{{$layout->image}}' style='max-width: 15%'></img> {{$layout->description}}" {{ ($info->pageHasLayout->id == $layout->id ? "selected":"") }}></option>
                    @endforeach
                </select>

                @include('form-templates.'.$info->templates->name)

                <div class="box-footer text-center">
                    <button type="submit" class="btn btn-primary col-md-4">Submit</button>
                </div>

            </form>
        </div>

    </div>

    <script src="{{asset('js/page-update.js')}}"></script>
@endsection
