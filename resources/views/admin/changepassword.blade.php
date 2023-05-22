@php
    $menu_current = 'Setting';
    $route_item = 'setting.create';
    $status = config('adminstatus');
@endphp
@extends('layouts.admin')
@section('css')
    <style>
        td:nth-child(3){
            word-break: break-all;
        }
    </style>
@endsection
@section('content')
<div class="card card-custom gutter-b">
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">
                    Change Password
                </h3>
            </div>
            <div class="card-toolbar">
            </div>
        </div>
        
        <div class="card-body">
            @if(Session::has('success'))
                <x-alert type="success" icon="flaticon2-bell-4" content="{{Session::get('success')}}"/>
            @elseif(Session::has('error'))
                <x-alert type="danger" icon="flaticon-warning" content="{{Session::get('error')}}"/>
            @endif

            <form class="form" action="{{route('admin.updatepassword')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" name="new_password" class="form-control form-control-solid" placeholder="New Password" />
                    @error('new_password')
                        <div class="fv-plugins-message-container">
                            <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Confirm New Password</label>
                    <input type="password" name="confirm_new_password" placeholder="Confirm New Password" class="form-control form-control-solid"/>
                    @error('confirm_new_password')
                        <div class="fv-plugins-message-container">
                            <div data-field="memo" data-validator="notEmpty" class="fv-help-block">{{$message}}</div>
                        </div>
                    @enderror
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <a href="{{route('dashboard')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection