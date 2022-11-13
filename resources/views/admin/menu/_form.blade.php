@php
    use App\Helpers\Enum;
    $status = config('adminstatus');
    $languages = config('languages');
@endphp
<div class="row">
    <div class="col-xl-6">
        <h3 class="card-label">General info</h3>
        <div class="form-group">
            <label>Priority</label>
            <input name="priority" type="text" value="{{old('priority')??$model['priority']}}" class="form-control form-control-solid" placeholder="Priority" />
            @error('priority')
                <div class="fv-plugins-message-container">
                    <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Banner Photo</label>
            <div class="custom-file">
                <input name="photo_upload" type="file" class="custom-file-input" id="customFile"/>
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            @if(!empty($model->banner))
                <div style="padding-top:10px">
                    <img src="{{asset('uploads/'.$model->banner)}}" width="100"/>        
                </div>
            @endif
            @error('photo_upload')
                <div class="fv-plugins-message-container">
                    <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Banner Photo Mobile</label>
            <div class="custom-file">
                <input name="mobile" type="file" class="custom-file-input" id="customFile"/>
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            @if(!empty($model->banner_mobile))
                <div style="padding-top:10px">
                    <img src="{{asset('uploads/'.$model->banner_mobile)}}" width="100"/>        
                </div>
            @endif
            @error('mobile')
                <div class="fv-plugins-message-container">
                    <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Is show on menu</label>
            <select class="form-control form-control-solid" name="is_show">
                <option value="{{Enum::SHOW}}" {{ $model->is_show == Enum::SHOW ? 'selected' : '' }}>Show</option>
                <option value="{{Enum::HIDE}}" {{ $model->is_show == Enum::HIDE ? 'selected' : '' }}>Hide</option>
            </select>
        </div>
        <div class="form-group">
            <label>Property og:image thumbnailUrl</label>
            <div class="custom-file">
                <input name="thumbnailUrl" type="file" class="custom-file-input" id="customFile"/>
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            @if(!empty($model->seo_thumbnailUrl))
                <div style="padding-top:10px">
                    <img src="{{asset('uploads/'.$model->seo_thumbnailUrl)}}" width="100"/>        
                </div>
            @endif
            @error('thumbnailUrl')
                <div class="fv-plugins-message-container">
                    <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Status</label>
            <select class="form-control form-control-solid" name="status">
                @foreach($status as $key => $st)
                    <option value="{{$key}}" {{ $model['status'] === $key ? 'selected' : '' }}>{{$st}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-xl-6">
        <h3 class="card-label">Content by language</h3>
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
                        <label>Name</label>
                        <input name="name[{{$key}}]" type="text" value="{{old('name')??($model['name'][$key]??'')}}" class="form-control form-control-solid" placeholder="Name" />
                        @error('name')
                            <div class="fv-plugins-message-container">
                                <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Banner Title</label>
                        <input name="banner_title[{{$key}}]" type="text" value="{{old('banner_title')??($model['banner_title'][$key]??'')}}" class="form-control form-control-solid" placeholder="Banner Title" />
                        @error('name')
                            <div class="fv-plugins-message-container">
                                <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Banner Description</label>
                        <textarea name="banner_description[{{$key}}]"  class="form-control form-control-solid" placeholder="Banner Description" />
                        {{old('banner_description')??($model['banner_description'][$key]??'')}}
                        </textarea>
                        @error('banner_description')
                            <div class="fv-plugins-message-container">
                                <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                            </div>
                        @enderror
                    </div>
                    <hr>
                    <h3>SEO</h3>
                    <div class="form-group">
                        <label>Title</label>
                        <input name="seo_title[{{$key}}]" type="text" value="{{old('seo_title')??($model['seo_title'][$key]??'')}}" class="form-control form-control-solid" placeholder="Meta Title" />
                        @error('seo_title')
                            <div class="fv-plugins-message-container">
                                <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input name="seo_description[{{$key}}]" type="text" value="{{old('seo_description')??($model['seo_description'][$key]??'')}}" class="form-control form-control-solid" placeholder="Meta Description" />
                        @error('seo_description')
                            <div class="fv-plugins-message-container">
                                <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                            </div>
                        @enderror
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>