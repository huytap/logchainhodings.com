<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Ecosystem;
use App\Http\Requests\Ecosystem\StoreRequest;
use Illuminate\Http\Request;

class EcosystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $title = 'Eco System';
        $data = Ecosystem::search()->paginate(15);
        return view('admin.ecosystem.index', compact('data', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $title = 'Create Eco System';
        $model = new Ecosystem;
        return view('admin.ecosystem.create', compact('model', 'title'));
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

        if($request->hasFile('logo_img')){
            if($request->logo_img->isValid()){
                $file = $request->logo_img;
                $ext = $file->extension();
                //$fileName = $file->getClientOriginalName();
                $fileName = md5(uniqid()).'.'.$ext;
                $file->move(public_path('uploads'), $fileName);
            }
            $request->merge(['logo' => $fileName]);
        }
        if(Ecosystem::create($request->all())){
            return redirect()->route('ecosystem.index')->with('success', 'Add eco system success');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ecosystem  $ecosystem
     * @return \Illuminate\Http\Response
     */
    public function show(Ecosystem $ecosystem){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ecosystem  $ecosystem
     * @return \Illuminate\Http\Response
     */
    public function edit(Ecosystem $ecosystem){
        $title = 'Update Eco System';
        return view('admin.ecosystem.edit', compact('ecosystem', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ecosystem  $ecosystem
     * @return \Illuminate\Http\Response
     */
        public function update(StoreRequest $request, Ecosystem $ecosystem){
        $old = $ecosystem->photo;
        $old_logo = $ecosystem->logo;
        $path = base_path() . '/public/uploads';
        if (!File::exists($path)) {
            File::makeDirectory($path, '0777', true);
        }

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

        if($request->hasFile('logo_img')){
            if($request->logo_img->isValid()){
                $file = $request->logo_img;
                $ext = $file->extension();
                //$fileName = $file->getClientOriginalName();
                $fileName = md5(uniqid()).'.'.$ext;
                $file->move(public_path('uploads'), $fileName);
            }
            $request->merge(['logo' => $fileName]);
        }

        if ($request->photo && $old && file_exists($path . '/' . $old)) {
            unlink($path . '/' . $old);
        } elseif(empty($request->photo)) {
            $request->merge(['photo' => $old]);
        }

        if ($request->logo && $old_logo && file_exists($path . '/' . $old_logo)) {
            unlink($path . '/' . $old_logo);
        } elseif (empty($request->logo)) {
            $request->merge(['logo' => $old_logo]);
        }

        $ecosystem->update($request->only('photo','priority', 'logo', 'description', 'link', 'status'));
        return redirect()->route('ecosystem.index')->with('success', 'Update eco system success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ecosystem  $ecosystem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ecosystem $ecosystem){
        $old_photo = $model->photo;
        $old_logo = $model->logo;
        if($model->delete()){
            @unlink(public_path('uploads/'.$old_photo));
            @unlink(public_path('uploads/'.$old_logo));
            return redirect()->route('ecosystem.index')->with('success', 'Delete eco system success');
        }
        return redirect()->route('ecosystem.index')->with('error', 'Errors');
    }
}
