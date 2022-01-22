<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testers;
use Illuminate\Http\Request;
use App\Http\Requests\Testers\StoreRequest;
use App\Http\Requests\Testers\UpdateRequest;

class TestersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = Testers::search()->paginate(15);
        return view('admin.testers.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $tester = new Testers;
        return view('admin.testers.create', compact('tester'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request){
        if($request->hasFile('photo_upload')){
            if($request->photo_upload->isValid()){
                $file = $request->photo_upload;
                $ext = $file->extension();
                //$fileName = $file->getClientOriginalName();
                $fileName = md5(uniqid()).'.'.$ext;
                $file->move(public_path('uploads'), $fileName);
            }
            $request->merge(['photo' => $fileName]);
        }
        if(Testers::create($request->all())){
            return redirect()->route('testers.index')->with('success', 'Thêm máy xét nghiệm thành công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testers  $testers
     * @return \Illuminate\Http\Response
     */
    public function show(Testers $testers){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testers  $testers
     * @return \Illuminate\Http\Response
     */
    public function edit(Testers $tester){
        return view('admin.testers.edit', compact('tester'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testers  $testers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Testers $tester){
        //dd($tester);
        if($request->hasFile('photo_upload')){
            if($request->photo_upload->isValid()){
                $file = $tester->photo_upload;
                $ext = $file->extension();
                //$fileName = $file->getClientOriginalName();
                $fileName = md5(uniqid()).'.'.$ext;
                $file->move(public_path('uploads'), $fileName);
            }
            $tester->merge(['photo' => $fileName]);
        }
        $tester->update($request->only('name', 'photo', 'content', 'status'));
        return redirect()->route('testers.index')->with('success', 'Cập nhật máy xét nghiệm thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testers  $testers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testers $tester){
        $old_photo = $tester->photo;
        if($tester->delete()){
            @unlink(public_path('uploads/'.$old_photo));
            return redirect()->route('testers.index')->with('success', 'Xóa máy xét nghiệm thành công');
        }
        return redirect()->route('testers.index')->with('error', 'Đã có lỗi xảy ra');
    }
}
