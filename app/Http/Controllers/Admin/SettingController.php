<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = Setting::search()->paginate(15);
        return view('admin.setting.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $Setting = new Setting;
        return view('admin.setting.create', compact('Setting'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request){
        if(Setting::create($request->all())){
            return redirect()->route('Setting.index')->with('success', 'Thêm chi nhánh thành công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $Setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $Setting){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $Setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $Setting){
        return view('admin.setting.edit', compact('Setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $Setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $Setting){
        $Setting->update($request->only('name', 'link_url', 'status'));
        return redirect()->route('Setting.index')->with('success', 'Cập nhật chi nhánh thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $Setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $Setting){
        if($Setting->delete())
            return redirect()->route('Setting.index')->with('success', 'Xóa chi nhánh thành công');
        return redirect()->route('Setting.index')->with('error', 'Đã có lỗi xảy ra');
    }
}
