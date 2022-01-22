<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Http\Form;
use App\Http\Requests\Branch\StoreRequest;

class BranchController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = Branch::search()->paginate(15);
        return view('admin.branch.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $branch = new Branch;
        return view('admin.branch.create', compact('branch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request){
        if(Branch::create($request->all())){
            return redirect()->route('branch.index')->with('success', 'Thêm chi nhánh thành công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch){
        return view('admin.branch.edit', compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch){
        $branch->update($request->only('name', 'link_url', 'status'));
        return redirect()->route('branch.index')->with('success', 'Cập nhật chi nhánh thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch){
        if($branch->delete())
            return redirect()->route('branch.index')->with('success', 'Xóa chi nhánh thành công');
        return redirect()->route('branch.index')->with('error', 'Đã có lỗi xảy ra');
    }
}
