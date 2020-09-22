<div class="box-body">
    <div class="form-group">
        <label for="slugInput">Слаг(краткое название url):</label>
        <input type="text" name="slug" class="form-control slug" value="{{isset($info->slug) ? $info->slug: ''}}">
        <p id="slug" class="error text-center" style="display: none">Заполните поле слаг!</p>
        <div class="fading text-center" style="display: none">Этот слаг уже существует!</div>
        <label id="firstName-error" class="error" for="slug"></label>
    </div>

    <div class="form-group">
        <label for="title">Титул:</label>
        <textarea name="title" id="title" class="form-control title">{{isset($info->title) ? $info->title: ''}}</textarea>
        <p id="title" class="error text-center" style="display: none">Заполните поле титула!</p>
    </div>



</div>

<div class="form-group">
    <label for="subtitle">Подзаголовок:</label>
    <textarea name="text" class="form-control description" id="subtitle">{{isset($info->text) ? $info->text: null}}</textarea>
    {{--<p id="description" class="error text-center" style="display: none">Заполните поле описания!</p>--}}
    <label id="firstName-error" class="error" for="subtitle"></label>
</div>

<div class="form-group">
    <label for="description">Описание:</label>
    <textarea name="description" class="form-control description" id="description">{{isset($info->description) ? $info->description: null}}</textarea>
    <p id="description" class="error text-center" style="display: none">Заполните поле описания!</p>
    <label id="firstName-error" class="error" for="description"></label>
</div>

@if(!empty($info->youtube))
    <div class="form-group">
        <label>Обновить видео или включить/выключить:</label>

        <div class="input-group">
            <input type="text" name="youtube" class="form-control" value="{{$info->youtube}}" required>
            <span class="input-group-btn">
                    @if($info->video_status == 0)
                    @php($status = 'Включить')
                @else
                    @php($status = 'Выключить')
                @endif
                <a href="{{route('status-video',['slug' => $info->slug])}}" class="btn btn-success text-center" role="button">{{$status}}</a>
                </span>
        </div>
    </div>
@else

    <div class="form-group">
        <label>Добавление видео:</label>
        <input type="text" name="youtube" placeholder="Введите полный url видео" class="form-control">
    </div>
@endif



<div class="form-group">
    <input type="file" class="image-input" id="image" name="image" onchange="loadImage(event)"  value="default">

    <label class="choose-button mx-auto" for="image">Выберите картинку страницы</label>
    <p id="image" class="error text-center" style="display: none">Загружайте только картинку формата gif|jpg|png|bmp|jpeg</p>

    @if(!empty($info->image))
        <div id="preview-image" class="manipulate-image">
            <img id="image" class="image" src="{{!empty($info->image)? '/images/'.$info->image : ''}}">
            <a role="button" name="image" class="btn btn-danger float-right cancel-image text-white" onclick="cancelImage(this)">Удалить картинку</a>
        </div>
    @else
        <div id="preview-image" class="manipulate-image">
            <img id="image" class="image" src="{{!empty($info->image)? '/images/'.$info->image : ''}}">
            <a role="button" name="image" class="btn btn-danger float-right cancel-image text-white" style="display: none" onclick="cancelImage(this)">Удалить картинку</a>
        </div>
    @endif

</div>


<div class="form-group">
    <div>
        <input type="file" class="image-input" id="body_image" name="body_image" onchange="loadImage(event)" value="default">

        <label class="choose-button mx-auto" for="body_image">Выберите фото фона</label>
        <p id="body_image" class="error text-center" style="display: none">Загружайте только картинку формата gif|jpg|png|bmp!</p>


        @if(!empty($info->id))
            <div id="preview-image" class="manipulate-body_image">
                <img id="body_image" class="image" src="{{!empty($info->body_image)? '/images/'.$info->body_image : ''}}">
                <a role="button" name="body_image" class="btn btn-danger float-right cancel-body_image text-white" onclick="cancelImage(this)">Удалить картинку</a>

            </div>
        @else
            <div id="preview-image" class="manipulate-body_image">
                <img id="body_image" class="image" src="{{!empty($info->body_image)? '/images/'.$info->body_image : ''}}">
                <a role="button" name="body_image" class="btn btn-danger float-right cancel-body_image text-white" style="display: none" onclick="cancelImage(this)">Удалить картинку</a>

            </div>
        @endif

        <p id="upload-error" class="error text-center" style="display: none">Пожалуйста, выберите фото перед созданием страницы!</p>

    </div>
</div>
