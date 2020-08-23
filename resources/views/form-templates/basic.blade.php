<div class="box-body">
    <div class="form-group">
        <label for="title">Title:</label>
        <textarea name="title" id="title" class="form-control title">{{isset($info->title) ? $info->title: ''}}</textarea>
        <p id="title" class="error text-center" style="display: none">Fill the field title!</p>
    </div>

    <div class="form-group">
        <label for="slugInput">Slug:</label>
        <input type="text" name="slug" class="form-control slug" value="{{isset($info->slug) ? $info->slug: ''}}">
        <p id="slug" class="error text-center" style="display: none">Fill the field slug!</p>
        <div class="fading text-center" style="display: none">This slug exists</div>
        <label id="firstName-error" class="error" for="slug"></label>
    </div>
</div>

<div class="form-group">
    <label for="description">Description:</label>
    <textarea name="description" class="form-control description" id="description">{{isset($info->description) ? $info->description: null}}</textarea>
    <p id="description" class="error text-center" style="display: none">Fill the field description!</p>
    <label id="firstName-error" class="error" for="description"></label>
</div>

<div class="form-group">
    <input type="file" class="image-input" id="image" name="image" onchange="loadImage(event)"  value="default">

    <label class="choose-button mx-auto" for="image">Choose jumbotron</label>
    <p id="image" class="error text-center" style="display: none">Upload only image: gif|jpg|png|bmp!</p>

    @if(!empty($info->image))
        <div id="preview-image" class="manipulate-image">
            <img id="image" class="image" src="{{!empty($info->image)? '/images/'.$info->image : ''}}">
            <a role="button" name="image" class="btn btn-danger float-right cancel-image text-white" onclick="cancelImage(this)">Cancel Image</a>
        </div>
    @else
        <div id="preview-image" class="manipulate-image">
            <img id="image" class="image" src="{{!empty($info->image)? '/images/'.$info->image : ''}}">
            <a role="button" name="image" class="btn btn-danger float-right cancel-image text-white" style="display: none" onclick="cancelImage(this)">Cancel Image</a>
        </div>
    @endif

</div>


<div class="form-group">
    <div>
        <input type="file" class="image-input" id="body_image" name="body_image" onchange="loadImage(event)" value="default">

        <label class="choose-button mx-auto" for="body_image">Choose body image</label>
        <p id="body_image" class="error text-center" style="display: none">Upload only image: gif|jpg|png|bmp!</p>


        @if(!empty($info->id))
            <div id="preview-image" class="manipulate-body_image">
                <img id="body_image" class="image" src="{{!empty($info->body_image)? '/images/'.$info->body_image : ''}}">
                <a role="button" name="body_image" class="btn btn-danger float-right cancel-body_image text-white" onclick="cancelImage(this)">Cancel Image</a>

            </div>
        @else
            <div id="preview-image" class="manipulate-body_image">
                <img id="body_image" class="image" src="{{!empty($info->body_image)? '/images/'.$info->body_image : ''}}">
                <a role="button" name="body_image" class="btn btn-danger float-right cancel-body_image text-white" style="display: none" onclick="cancelImage(this)">Cancel Image</a>

            </div>
        @endif

        <p id="upload-error" class="error text-center" style="display: none">Please upload image before send</p>

    </div>
</div>
