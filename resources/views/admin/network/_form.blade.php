@php
    $status = config('adminstatus');
@endphp
@section('css')
<style>
    .dropzone.dropzone-default .dz-remove{
        font-size: 12px!important;
    }
</style>
@endsection
<div class="form-group">
    <label>Title</label>
    <input name="title" type="text" value="{{old('title')??$model['title']}}" class="form-control form-control-solid" placeholder="Title" />
    @error('title')
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
@if($model->id)
<div class="form-group">
    <label>Logo partner</label>
    <div class="dropzone dropzone-default dropzone-primary" id="kt_dropzone_2">
        <div class="dropzone-msg dz-message needsclick">
            <h3 class="dropzone-msg-title">Drop files here and auto upload.</h3>
            <span class="dropzone-msg-desc">Upload up to 10 files</span>
        </div>
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
<div class="alert alert-custom alert-outline-success fade show mb-5" role="alert">
    <div class="alert-icon"><i class="flaticon2-bell-4"></i></div>
    <div class="alert-text" id="fileStatus"></div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="ki ki-close"></i></span>
        </button>
    </div>
</div>

@endif
<div class="form-group">
    <label>Status</label>
    <select class="form-control form-control-solid" name="status">
        @foreach($status as $key => $st)
            <option value="{{$key}}" {{ $model['status'] === $key ? 'selected' : '' }}>{{$st}}</option>
        @endforeach
    </select>
</div>
@if($model->id)
@php 
$items = App\Models\Networkitem::getList($model->id);
$listItem = [];
foreach($items as $item){
    $tmp = [];
    $tmp['photo'] = $item->photo;
    $tmp['name'] = $item->original_name;
    $tmp['size'] = $item->file_size;
    $tmp['type'] = $item->file_size;
    $tmp['accepted'] = true;
    $tmp['id'] = $item->id;
    array_push($listItem, $tmp);
}
@endphp
@section('js')
<script type="text/javascript">
    var uploadedDocumentMap = {}
    $('#kt_dropzone_2').dropzone({
        url: "{{route('admin.uploadfile')}}", // Set the url for your upload script location
        paramName: "files", // The name that will be used to transfer the file
        maxFiles: 20,
        maxFilesize: 4, // MB
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        params: {"global_id": "{{$model->id}}"},
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        init:function() {
            @if(!empty($listItem) && count($listItem)>0)
            var files = {!! json_encode($listItem) !!}
            for (var i in files) {
                var file = files[i]
                this.options.addedfile.call(this, file)
                file.previewElement.classList.add('dz-complete')
                this.options.thumbnail.call(this, file, "{{asset('uploads')}}/" + files[i].photo);
            }
            @endif
        },
        addRemoveLinks: true,
        removedfile: function(file) {
            var name = file.photo;             
            var id = file.id;
            $.ajax({
                type: 'post',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                url: '{{route('admin.deletefile')}}',
                data: {name: name, id: id},
                sucess: function(data){
                    console.log('success: ' + data);
                }
            });
            var _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        },
        success: function (file, response) {
            // $('form').append('<input type="hidden" name="listfiles[]" value="' + response.name + '">')
            // uploadedDocumentMap[file.name] = response.name
            $('#fileStatus').html('File upload success')
        },
        accept: function(file, done) {
            done();
        }
    });
</script>
@endsection
@endif