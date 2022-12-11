<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Content;
use App\Http\Services\Menu\MenuService;
use App\Http\Requests\Content\StoreRequest;
class ContentController extends Controller
{
    public function index()
    {
        $title = 'Content';
        $data = Content::orderBy('menu_id', 'ASC')->orderBy('content_section')->search()->paginate(50);
        return view('admin.content.index', compact('data', 'title'));
    }
    public function create()
    {
        $title = 'Create Content';
        $content = new Content;
        $menu = MenuService::getList();
        return view('admin.content.create', compact('content', 'title', 'menu'));
    }
    public function edit(Content $content)
    {
        $title = 'Update Content';
        $menu = MenuService::getList();
        return view('admin.content.edit', compact('content', 'title', 'menu'));
    }
    public function store(StoreRequest $request)
    {
        $path = base_path() . '/public/uploads';
        if (!File::exists($path)) {
            File::makeDirectory($path, '0777', true);
        }
        $request->merge([
            'title' => jsonEncodeHasText($request->input('title')),
            'description' => jsonEncodeHasText($request->input('description'))
        ]);
        $image_lang = $request->input('img_lang');
        if($image_lang){
            if ($request->hasFile('images_upload')) {
                $images = [];
                foreach($request->images_upload as $key => $image){
                    $ext = $image->extension();
                    $fileName = md5(uniqid()) . '.' . $ext;
                    $image->move($path, $fileName);
                    $images[$key] = $fileName;
                }
                $request->merge(['images' => jsonEncodeHasText($images)]);
            }
            if ($request->hasFile('images_mobile_upload')) {
                $images_mobile = [];
                foreach($request->images_mobile_upload as $key => $image){
                    $ext = $image->extension();
                    $fileName = md5(uniqid()) . '.' . $ext;
                    $image->move($path, $fileName);
                    $images_mobile[$key] = $fileName;
                }
                $request->merge(['images_mobile' => jsonEncodeHasText($images_mobile)]);
            }
            $request->merge(['img_lang' => 1]);
        }else if ($request->hasFile('photo_upload')) {
            if ($request->photo_upload->isValid()) {
                $file = $request->photo_upload;
                $ext = $file->extension();
                //$fileName = $file->getClientOriginalName();
                $fileName = md5(uniqid()) . '.' . $ext;
                $file->move($path, $fileName);
            }
        }
        
        if (Content::create($request->all())) {
            return redirect()->route('content.index')->with('success', 'Add content success');
        }
    }
    public function update(StoreRequest $request, Content $content)
    {
        $old = $content->photo;
        $old_mobile = $content->photo_mobile;
        $path = base_path() . '/public/uploads';
        if (!File::exists($path)) {
            File::makeDirectory($path, '0777', true);
        }
        $request->merge([
            'title' => jsonEncodeHasText($request->input('title')),
            'description' => jsonEncodeHasText($request->input('description'))
        ]);
        $image_lang = $request->input('img_lang');
        if($image_lang){
            $old_images = json_encode($content->images);
            $old_images_mobile = json_encode($content->images_mobile);
            if ($request->hasFile('images_upload')) {
                $images = [];
                foreach($request->images_upload as $key => $image){
                    $ext = $image->extension();
                    $fileName = md5(uniqid()) . '.' . $ext;
                    $image->move($path, $fileName);
                    $images[$key] = $fileName;
                }
                $request->merge(['images' => jsonEncodeHasText($images)]);
            }
            if ($request->hasFile('images_mobile_upload')) {
                $images_mobile = [];
                foreach($request->images_mobile_upload as $key => $image){
                    $ext = $image->extension();
                    $fileName = md5(uniqid()) . '.' . $ext;
                    $image->move($path, $fileName);
                    $images_mobile[$key] = $fileName;
                }
                $request->merge(['images_mobile' => jsonEncodeHasText($images_mobile)]);
            }
            if ($request->images && $old_images && file_exists($path . '/' . $old_images)) {
                unlink($path . '/' . $old_images);
            } elseif (empty($request->images)) {
                $request->merge(['images' => $old_images]);
            }
            if ($request->images_mobile && $old_images_mobile && file_exists($path . '/' . $old_images_mobile)) {
                unlink($path . '/' . $old_images_mobile);
            } elseif (empty($request->images_mobile)) {
                $request->merge(['images_mobile' => $old_images_mobile]);
            }
            $request->merge(['img_lang' => 1]);
            $content->update($request->only('title', 'description', 'menu_id', 'content_section', 'priority', 'img_lang', 'images', 'images_mobile'));
        }else{
            $request->merge(['img_lang' => 0]);
            if ($request->hasFile('photo_upload')) {
                if ($request->photo_upload->isValid()) {
                    $file = $request->photo_upload;
                    $ext = $file->extension();
                    //$fileName = $file->getClientOriginalName();
                    $fileName = md5(uniqid()) . '.' . $ext;
                    $file->move($path, $fileName);
                }
                $request->merge(['photo' => $fileName]);
            }
            if ($request->hasFile('mobile')) {
                if ($request->mobile->isValid()) {
                    $file = $request->mobile;
                    $ext = $file->extension();
                    //$fileName = $file->getClientOriginalName();
                    $fileName = md5(uniqid()) . '.' . $ext;
                    $file->move($path, $fileName);
                }
                $request->merge(['photo_mobile' => $fileName]);
            }
        
            if ($request->photo && $old && file_exists($path . '/' . $old)) {
                unlink($path . '/' . $old);
            } elseif (empty($request->photo)) {
                $request->merge(['photo' => $old]);
            }
            if ($request->photo_mobile && $old_mobile && file_exists($path . '/' . $old_mobile)) {
                unlink($path . '/' . $old_mobile);
            } elseif (empty($request->photo_mobile)) {
                $request->merge(['photo_mobile' => $old_mobile]);
            }
            $content->update($request->only('title', 'photo', 'photo_mobile', 'description', 'menu_id', 'content_section', 'priority'));
        }  
        $url = route('content.index');
        $url .= '?page_id='.$request->menu_id.'&content_section='.$request->content_section;      
        return redirect($url)->with('success', 'Update content success');
    }
    public function destroy(Content $content)
    {
        if ($content->delete())
            return redirect()->route('content.index')->with('success', 'Delete global network success');
        return redirect()->route('content.index')->with('error', 'Errors');
    }
}
