<?php
use App\Helpers\Enum;
?>
@php
    $status = config('adminstatus');
@endphp
<div class="form-group">
    <label>Name</label>
    <input name="name" type="text" value="{{old('name')??$model['name']}}" class="form-control form-control-solid" placeholder="Name" />
    @error('name')
        <div class="fv-plugins-message-container">
            <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
        </div>
    @enderror
</div>
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
    <label>Banner Title</label>
    <input name="banner_title" type="text" value="{{old('banner_title')??$model['banner_title']}}" class="form-control form-control-solid" placeholder="Banner Title" />
    @error('name')
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
    <label>Status</label>
    <select class="form-control form-control-solid" name="status">
        @foreach($status as $key => $st)
            <option value="{{$key}}" {{ $model['status'] === $key ? 'selected' : '' }}>{{$st}}</option>
        @endforeach
    </select>
</div>
<hr>
<h3>SEO</h3>
<div class="form-group">
    <label>Title</label>
    <input name="seo_title" type="text" value="{{old('seo_title')??$model['seo_title']}}" class="form-control form-control-solid" placeholder="Meta Title" />
    @error('seo_title')
        <div class="fv-plugins-message-container">
            <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
        </div>
    @enderror
</div>
<div class="form-group">
    <label>Description</label>
    <input name="seo_description" type="text" value="{{old('seo_description')??$model['seo_description']}}" class="form-control form-control-solid" placeholder="Meta Description" />
    @error('seo_description')
        <div class="fv-plugins-message-container">
            <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
        </div>
    @enderror
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