@php
    $status = config('adminstatus');
@endphp
<div class="form-group">
    <label>Photo</label>
    <div class="custom-file">
        <input name="photo_upload" type="file" class="custom-file-input" id="customFile"/>
        <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    @if(!empty($model->photo))
        <div style="padding-top:10px">
            <img src="{{asset('uploads/'.$model->photo)}}" width="100"/>        
        </div>
    @endif
    @error('photo_upload')
        <div class="fv-plugins-message-container">
            <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
        </div>
    @enderror
</div>
<div class="form-group">
    <label>Logo</label>
    <div class="custom-file">
        <input name="logo_img" type="file" class="custom-file-input" id="customFile"/>
        <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    
    @if(!empty($model->logo))
        <div style="padding-top:10px">
            <img src="{{asset('uploads/'.$model->logo)}}" width="100"/>        
        </div>
    @endif
    @error('logo_img')
        <div class="fv-plugins-message-container">
            <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
        </div>
    @enderror
</div>
<div class="form-group">
    <label>Link</label>
    <input name="link" type="text" value="{{old('link')??$model['link']}}" class="form-control form-control-solid" placeholder="Link url" />
    @error('link')
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
    <label>Description</label>
    <textarea name="description" id="model">{{old('description')??$model->description}}</textarea>
    @error('description')
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
@section('js')
<script src="{{asset('assets/admin/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js?v=7.0.6')}}"></script>
<script type="text/javascript">
var KTCkeditor = function () {
    // Private functions
    var demos = function () {
        ClassicEditor
            .create( document.querySelector( '#model' ) )
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

// Initialization
jQuery(document).ready(function() {
    KTCkeditor.init();
});
</script>
@endsection