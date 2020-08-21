@extends('adminlte::page')
@section('plugins.summernote', true)
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
@section('css')
    <link href="/css/main.css" rel="stylesheet">
@stop
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
                        <option value="{{ $template->id }}" class="list-group-item" name="{{$template->name}}"> {{ $template->name }} </option>
                    @endforeach
                </select>
            </form>


            <form class="form-submit" enctype="multipart/form-data" method="post">
                    {{ method_field('PUT') }}
                    {{csrf_field()}}

                <input type="hidden" name="template_id" value="{{$basicTemplate->id}}">
                <input type="hidden" class="layout_id" name="layout_id" value="{{$layouts->first()->id}}">

                <p>Choose type of layouts by click of input</p>
                <input class="form-control input-show-select" id="select2-block_type-container" title="Типы блоков" placeholder="select type layout">

                <div>
                    <ul class="list-group col-md-8 mx-auto type-layouts" style="display: none">
                        @foreach($layouts as $layout)
                            <li id="{{$layout->id}}" value="{{$layout->description}}" class="list-group-item list-layouts"><img alt="" src="/images/{{$layout->image}}" style="max-width: 50%"> {{$layout->description}}</li>
                        @endforeach
                    </ul>
                </div>

                @include('form-templates.'.$basicTemplate->name)

                <div class="box-footer text-center">
                    <button type="submit" class="btn btn-primary col-md-4">Submit</button>
                </div>

            </form>
        </div>
    </div>

    <script src="{{asset('js/form-manipulated.js')}}"></script>
@endsection