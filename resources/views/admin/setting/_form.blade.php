@php
    $status = config('adminstatus');
@endphp
<div class="form-group">
    <label>Tên chi nhánh</label>
    <input name="name" type="text" value="{{old('name')??$branch['name']}}" class="form-control form-control-solid" placeholder="Tên chi nhánh" />
    @error('name')
        <div class="fv-plugins-message-container">
            <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
        </div>
    @enderror
</div>
<div class="form-group">
    <label>Link facebook</label>
    <input name="link_url" type="text" value="{{old('link_url')??$branch['link_url']}}" class="form-control form-control-solid" placeholder="Link facebook" />
    @error('link_url')
        <div class="fv-plugins-message-container">
            <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
        </div>
    @enderror
</div>
<div class="form-group">
    <label>Trạng thái</label>
    <select class="form-control form-control-solid" name="status">
        @foreach($status as $key => $st)
            <option value="{{$key}}" {{ $branch['status'] === $key ? 'selected' : '' }}>{{$st}}</option>
        @endforeach
    </select>
</div>