<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Menu\StoreRequest;
use App\Models\Menu;
use App\Http\Services\Menu\MenuService;
class MenuController extends Controller
{
    protected $menuService;
    public function __contruct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }
    public function index()
    {
        $title = 'Menu';
        $data = Menu::search()->paginate(15);
        return view('admin.menu.index', compact('data', 'title'));
    }
    public function create()
    {
        $title = 'Create Menu';
        $model = new Menu;
        return view('admin.menu.create', compact('model', 'title'));
    }
    public function edit(Menu $menu)
    {
        $title = 'Update Menu ' . $menu->name;
        return view('admin.menu.edit', compact('menu', 'title'));
    }
    public function update(StoreRequest $request, Menu $menu)
    {
        $old = $menu->banner;
        $old_thumbnailUrl = $menu->seo_thumbnailUrl;
        $old_mobile = $menu->banner_mobile;
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
            $request->merge(['banner' => $fileName]);
        }
        if ($request->hasFile('thumbnailUrl')) {
            if ($request->thumbnailUrl->isValid()) {
                $file = $request->thumbnailUrl;
                $ext = $file->extension();
                //$fileName = $file->getClientOriginalName();
                $fileName = md5(uniqid()) . '.' . $ext;
                $file->move($path, $fileName);
            }
            $request->merge(['seo_thumbnailUrl' => $fileName]);
        }
        if ($request->hasFile('mobile')) {
            if ($request->mobile->isValid()) {
                $file = $request->mobile;
                $ext = $file->extension();
                //$fileName = $file->getClientOriginalName();
                $fileName = md5(uniqid()) . '.' . $ext;
                $file->move($path, $fileName);
            }
            $request->merge(['banner_mobile' => $fileName]);
        }
        if ($request->banner && $old && file_exists($path . '/' . $old)) {
            unlink($path . '/' . $old);
        } elseif (empty($request->banner)) {
            $request->merge(['banner' => $old]);
        }
        if ($request->seo_thumbnailUrl && $old_thumbnailUrl && file_exists($path . '/' . $old_thumbnailUrl)) {
            unlink($path . '/' . $old_thumbnailUrl);
        } elseif (empty($request->seo_thumbnailUrl)) {
            $request->merge(['seo_thumbnailUrl' => $old_thumbnailUrl]);
        }
        if ($request->banner_mobile && $old_mobile && file_exists($path . '/' . $old_mobile)) {
            unlink($path . '/' . $old_mobile);
        } elseif (empty($request->banner_mobile)) {
            $request->merge(['banner_mobile' => $old_mobile]);
        }
        $slug = (string)Str::slug($request->input('name'), '-');
        $request->merge(['slug' => $slug]);
        $menu->update($request->only('name', 'slug', 'priority', 'banner', 'banner_title', 'banner_description', 'banner_mobile', 'is_show', 'status', 'seo_title', 'seo_description', 'seo_thumbnailUrl'));
        return redirect()->route('menu.index')->with('success', 'Update menu success');
    }
    public function store(StoreRequest $request)
    {
        //$result = $this->menuService->create($request);
        try {
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
                $request->merge(['banner' => $fileName]);
            }
            if ($request->hasFile('thumbnailUrl')) {
                if ($request->thumbnailUrl->isValid()) {
                    $file = $request->thumbnailUrl;
                    $ext = $file->extension();
                    //$fileName = $file->getClientOriginalName();
                    $fileName = md5(uniqid()) . '.' . $ext;
                    $file->move($path, $fileName);
                }
                $request->merge(['seo_thumbnailUrl' => $fileName]);
            }
            if ($request->hasFile('mobile')) {
                if ($request->mobile->isValid()) {
                    $file = $request->mobile;
                    $ext = $file->extension();
                    //$fileName = $file->getClientOriginalName();
                    $fileName = md5(uniqid()) . '.' . $ext;
                    $file->move($path, $fileName);
                }
                $request->merge(['banner_mobile' => $fileName]);
            }
            // Menu::create([
            //     'name' => (string)$request->input('name'),
            //     'slug' => (string)Str::slug($request->input('name'), '-'),
            //     'priority' => (int)$request->input('priority'),
            //     'banner' => (string)$request->input('banner'),
            //     'banner_title' => (string)$request->input('banner_title'),
            // ]);
            Menu::create($request->all());
        } catch (\Exception $error) {
            //Session::flash('error', $error->getMessage());
            return false;
        }
        return redirect()->route('menu.index')->with('success', 'Add menu success');
    }
}
