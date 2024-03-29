@php
    use App\Models\Content;
    $menu_current = 'Content';
    $route_item = 'content.create';
@endphp
@extends('layouts.admin')
@section('content')
<div class="card card-custom gutter-b">
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">
                    Content
                </h3>
            </div>
            <div class="card-toolbar">
                {{-- <div class="dropdown dropdown-inline mr-2">
                    <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="svg-icon svg-icon-md">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                        fill="#000000"
                                        opacity="0.3"
                                    />
                                    <path
                                        d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                        fill="#000000"
                                    />
                                </g>
                            </svg>
                        </span>
                        Export
                    </button>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <ul class="navi flex-column navi-hover py-2">
                            <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
                                Choose an option:
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon"><i class="la la-print"></i></span>
                                    <span class="navi-text">Print</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon"><i class="la la-copy"></i></span>
                                    <span class="navi-text">Copy</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon"><i class="la la-file-excel-o"></i></span>
                                    <span class="navi-text">Excel</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon"><i class="la la-file-text-o"></i></span>
                                    <span class="navi-text">CSV</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
                                    <span class="navi-icon"><i class="la la-file-pdf-o"></i></span>
                                    <span class="navi-text">PDF</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                <a href="{{route($route_item)}}" class="btn btn-primary font-weight-bolder">
                    <span class="fas fa-plus"></span>
                    Add new
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-7">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <form method="GET">
                            <div class="row align-items-center">
                                <div class="col-md-5 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-4 mb-0 d-none d-md-block">Page:</label>
                                        <select class="form-control" name="page_id" id="kt_datatable_search_status">
                                            <option value="">--All--</option>
                                            @foreach(App\Models\Menu::getList2() as $key => $st)
                                                <option value="{{$st->id}}" {{ request()->page_id == $st->id ? 'selected' : '' }}>{{$st['name']['en']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label  class="mr-4 mb-0 d-none d-md-block" for="">Content Section:</label>
                                        <input type="text" name="content_section" value="{{request()->content_section ? request()->content_section : ''}}" class="form-control">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-light-primary px-6 font-weight-bold">
                                    Search
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @if(Session::has('success'))
                <x-alert type="success" icon="flaticon2-bell-4" content="{{Session::get('success')}}"/>
            @elseif(Session::has('error'))
                <x-alert type="danger" icon="flaticon-warning" content="{{Session::get('error')}}"/>
            @endif
            <!--begin: Datatable-->
            <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="">
                <table class="table table-striped">
                    <thead class="datatable-head">
                        <tr class="datatable-row" style="left: 0px;">
                            <th scope="col">#</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Page</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content Section</th>
                            <th scope="col">Created At</th>
                            <th scope="col"><span style="width: 125px;">Action</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                        @php
                        $menu = App\Models\Menu::find($item->menu_id);    
                        $page = $menu?$menu->name['en']:'';
                        $cover = $item->photo ? 'uploads/'.$item->photo : 'assets/clients/images/cover-la-gi.png';
                        @endphp
                            <tr data-row="0" class="datatable-row" style="left: 0px;">
                                <td scope="row">{{($key+1)}}</td>
                                <td><img src="{{asset($cover)}}" width="100"/></td>
                                <td>{{$page}}</td>
                                <td>{{$item['title']['en']??''}}</td>
                                <td>{{$item['content_section']??''}}</td>
                                <td>{{$item['created_at']}}</td>                            
                                <td data-field="Actions">
                                    <span style="overflow: visible; position: relative; width: 125px;">
                                        <a href="{{route('content.edit', $item['id'])}}" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
                                            <span class="far fa-edit"></span>
                                        </a>
                                        <a href="{{route('content.destroy', $item['id'])}}" class="btn btn-sm btn-clean btn-icon btn-delete" title="Delete">
                                            <span class="fas fa-trash"></span>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="datatable-pager datatable-paging-loaded">
                    {{ $data->appends(request()->all())->links()}}
                </div>
            </div>
            <!--end: Datatable-->
        </div>
    </div>
</div>
<form method="post" class="delete_form" action="" id="studentForm">
    @csrf @method('DELETE')
</form>
@endsection
@section('js')
    <script type="text/javascript">
        $('.btn-delete').click(function(event){
            event.preventDefault();
            let _href = $(this).attr('href')
            $('#studentForm').attr('action', _href);
            if(confirm('Are you sure you want to delete this item?')){
                $('#studentForm').submit();
            }
        })
    </script>
@endsection