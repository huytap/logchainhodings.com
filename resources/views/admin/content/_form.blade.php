@php
    $menu = App\Models\Menu::getList2();
    $languages = config('languages');
@endphp
<div class="row">
    <div class="col-xl-6">
        <h3 class="card-label">General info</h3>
        <div class="form-group">
            <label>Page</label>
            <select class="form-control form-control-solid" name="menu_id">
                <option value="">--Select a page--</option>
                @foreach($menu as $key => $st)
                    <option value="{{$st->id}}" {{ $st->id == $content['menu_id'] ? 'selected' : '' }}>{{$st->name['en']}}</option>
                @endforeach
            </select>
            @error('menu_id')
                <div class="fv-plugins-message-container">
                    <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Section Content</label>
            <input name="content_section" type="text" value="{{old('content_section')??$content['content_section']}}" class="form-control form-control-solid" placeholder="Section Content" />
            @error('content_section')
                <div class="fv-plugins-message-container">
                    <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Priority</label>
            <input name="priority" type="text" value="{{old('priority')??$content['priority']}}" class="form-control form-control-solid" placeholder="Priority" />
            @error('priority')
                <div class="fv-plugins-message-container">
                    <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                </div>
            @enderror
        </div>
        <div class="images">
            <div class="form-group">
                <label>Photo</label>
                <div class="custom-file">
                    <input name="photo_upload" type="file" class="custom-file-input" id="customFile"/>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                
                @if(!empty($content->photo))
                    <div style="padding-top:10px">
                        <img src="{{asset('uploads/'.$content->photo)}}" width="100"/>        
                    </div>
                @endif
                @error('photo_upload')
                    <div class="fv-plugins-message-container">
                        <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Photo Mobile</label>
                <div class="custom-file">
                    <input name="mobile" type="file" class="custom-file-input" id="customFile"/>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                
                @if(!empty($model->photo_mobile))
                    <div style="padding-top:10px">
                        <img src="{{asset('uploads/'.$model->photo_mobile)}}" width="100"/>        
                    </div>
                @endif
                @error('mobile')
                    <div class="fv-plugins-message-container">
                        <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <h3 class="card-label">Content by language</h3>
        @if(old('img_lang') == '1' || $model->img_lang == 1)
            <input type="checkbox" name="img_lang" id="img_lang" checked="checked"> Use image for language
        @else   
            <input type="checkbox" name="img_lang" id="img_lang"> Use image for language
        @endif
        <ul class="nav nav-tabs" data-remember-tab="tab_id" role="tablist">
            @foreach($languages as $key => $lang)
                <li class="nav-item">
                    @if($key=='en')
                        <a class="nav-link active" data-toggle="tab" href="#{{$key}}" role="tab">{{$lang}}</a>
                    @else 
                        <a class="nav-link" data-toggle="tab" href="#{{$key}}">{{$lang}}</a>
                    @endif
                </li>
            @endforeach
        </ul>
        <div class="tab-content" id="myTabContent">
            @foreach($languages as $key => $lang)
                @if($key=='en')
                    <div class="tab-pane fade show active" id="{{$key}}" role="tabpanel" aria-labelledby="{{$key}}-tab">
                @else
                    <div class="tab-pane fade" id="{{$key}}" role="tabpanel" aria-labelledby="{{$key}}-tab">
                @endif
                <div class="form-group">
                    <label>Title</label>
                    <input name="title[{{$key}}]" type="text" value="{{old('title')??($content['title'][$key]??'')}}" class="form-control form-control-solid" placeholder="Title" />
                    @error('title')
                        <div class="fv-plugins-message-container">
                            <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description[{{$key}}]" class="content" id="content_{{$key}}">{{old('description')??($model->description[$key]??'')}}</textarea>
                    @error('content')
                        <div class="fv-plugins-message-container">
                            <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                        </div>
                    @enderror
                </div>
                <div class="img_languages @if(!$content->img_lang) d-none @endif">
                    <div class="form-group">
                        <label>Photo</label>
                        <div class="custom-file">
                            <input name="images_upload[{{$key}}]" type="file" class="custom-file-input" id="customFile"/>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        
                        @if(!empty($content->images) && isset($content->images[$key]))
                            <div style="padding-top:10px">
                                <img src="{{asset('uploads/'.$content->images[$key])}}" width="100"/>        
                            </div>
                        @endif
                        @error('images')
                            <div class="fv-plugins-message-container">
                                <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Photo Mobile</label>
                        <div class="custom-file">
                            <input name="images_mobile_upload[{{$key}}]" type="file" class="custom-file-input" id="customFile"/>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        
                        @if(!empty($model->photo_mobile) && isset($model->images_mobile[$key]))
                            <div style="padding-top:10px">
                                <img src="{{asset('uploads/'.$model->images_mobile[$key])}}" width="100"/>        
                            </div>
                        @endif
                        @error('images_mobile')
                            <div class="fv-plugins-message-container">
                                <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@section('js')
<script src="{{asset('assets/admin/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js?v=7.0.6')}}"></script>
<script type="text/javascript">
var KTCkeditor = function () {
    // Private functions
    var demos = function () {
        ClassicEditor
            .create( document.querySelector( '#content_vi' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    }

    return {
        // public functions
        init: function() {
            demos();
        }
    };
}();
var KTCkeditor2 = function () {
    // Private functions
    var demos2 = function () {
        ClassicEditor
            .create( document.querySelector( '#content_en' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    }

    return {
        // public functions
        init: function() {
            demos2();
        }
    };
}();
// Initialization
jQuery(document).ready(function() {
    KTCkeditor.init();
    KTCkeditor2.init();
    $('#img_lang').change(function(){
        if($(this).is(':checked')){
            $('.img_languages').removeClass('d-none');
            $('.images').hide();
        }else{
            $('.img_languages').addClass('d-none');
            $('.images').show();
        }
    });
});
</script>
@endsection