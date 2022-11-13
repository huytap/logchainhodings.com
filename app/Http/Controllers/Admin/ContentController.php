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
        $data = Content::orderBy('menu_id', 'ASC')->orderBy('priority')->search()->paginate(50);
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
        $request->merge([
            'title' => jsonEncodeHasText($request->input('title')),
            'description' => jsonEncodeHasText($request->input('description'))
        ]);
        $content->update($request->only('title', 'photo', 'photo_mobile', 'description', 'menu_id', 'content_section', 'priority'));
        return redirect()->route('content.index')->with('success', 'Update content success');
    }
    public function destroy(Content $content)
    {
        if ($content->delete())
            return redirect()->route('content.index')->with('success', 'Delete global network success');
        return redirect()->route('content.index')->with('error', 'Errors');
    }
}
