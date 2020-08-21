@extends('adminlte::page')
@section('plugins.summernote', true)
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
@section('css')
    <link href="/css/main.css" rel="stylesheet">
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
                <select class="form-control select-template" name="template_id" onchange="this.form.submit()">

                    @foreach($templates as $template)
                        <option value="{{ $template->id }}" {{ ( $changedTemplate->id == $template->id) ? 'selected' : '' }} class="list-group-item" name="{{$template->name}}"> {{ $template->name }} </option>
                    @endforeach
                </select>
            </form>

            <form class="form-sign" enctype="multipart/form-data" method="post" action="{{route('store-page',['slug' => $info->slug])}}">
                {{csrf_field()}}

                <input type="hidden" name="template_id" value="{{$changedTemplate->id}}">
                <input type="hidden" class="layout_id" name="layout_id" value="{{$info->pageHasLayout->id}}">
                <p>Choose type of layouts by click of input</p>
                <input class="form-control input-show-select" id="select2-block_type-container" title="Типы блоков" placeholder="select type layout">

                <div>
                    <ul class="list-group col-md-8 mx-auto type-layouts" style="display: none">
                        @foreach($layouts as $layout)
                            <li id="{{$layout->id}}" value="{{$layout->description}}" class="list-group-item list-layouts"><img alt="" src="/images/{{$layout->image}}" style="max-width: 50%"> {{$layout->description}}</li>
                        @endforeach
                    </ul>
                </div>

             @include('form-templates.'.$changedTemplate->name)

                <div class="box-footer text-center">
                    <button type="submit" class="btn btn-primary col-md-4">Submit</button>
                </div>

            </form>


        </div>

    </div>

    <script src="{{asset('js/page-update.js')}}"></script>
@endsection
