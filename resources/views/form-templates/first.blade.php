 <div class="box-body">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <textarea name="title" id="title" class="form-control title">{{isset($info->title) ? $info->title: ''}}</textarea>
                        <p id="title" class="error text-center" style="display: none">Fill the field title!</p>
                    </div>

                    <div class="form-group">
                        <label for="slug">Slug:</label>
                        <input type="text" name="slug" class="form-control slug" value="{{isset($info->slug) ? $info->slug: ''}}">
                        <p id="slug" class="error text-center" style="display: none">Fill the field slug!</p>
                        <div class="fading text-center" style="display: none">This slug exists</div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="text">Text:</label>
                    <textarea name="text" class="form-control description">{{isset($info->text) ? $info->text: ''}}</textarea>
                    <p id="text" class="error text-center" style="display: none">Fill the field text!</p>
                </div>


                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" class="form-control description">{{isset($info->description) ? $info->description: ''}}</textarea>
                    <p id="description" class="error text-center" style="display: none">Fill the field description!</p>
                </div>

                <div class="form-group">
                    <input type="file" class="image-input" id="image" name="image" accept="image/jpeg,image/png,image/jpg,image/bmp" onchange="loadImage(event)">
                    <label class="choose-button mx-auto" for="image">Choose image</label>
                    <p id="image" class="error text-center" style="display: none">Upload only image: gif|jpg|png|bmp!</p>

                    @if(!empty($info->image))

                        <div class="card-body manipulate-image">
                            <img id="image" class="image" src="{{!empty($info->image)? '/images/'.$info->image : ''}}">
                            <a role="button" name="image" class="btn btn-danger float-right cancel-image text-white" onclick="cancelImage(this)">Cancel Image</a>
                        </div>

                    @else
                        <div class="card-body manipulate-image">
                            <img id="image" class="image" style="background: #CCD6E8" src="{{!empty($info->image)? '/images/'.$info->image : ''}}">
                            <a role="button" name="image" class="btn btn-danger float-right cancel-image text-white" style="display: none" onclick="cancelImage(this)">Cancel Image</a>
                        </div>
                    @endif

                    <p id="upload-error" class="error text-center" style="display: none">Please upload image before send</p>

                </div>