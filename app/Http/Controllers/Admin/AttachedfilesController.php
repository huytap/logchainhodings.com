<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Enum;
use App\Models\Networkitem;

class AttachedfilesController extends Controller
{
    public function uploadfile(Request $request)
    {
        $path = base_path() . Enum::UPLOAD_FOLDER_NAME;
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $file = $request->file('files');
        $file_size = $file->getSize();
        $file_type = $file->getMimeType();

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        $totalRecordByGlobal = Networkitem::where('globalnetwork_id', $request->global_id)
            ->count();

        $item = new Networkitem();
        $item->photo = $name;
        $item->globalnetwork_id = $request->global_id;
        $item->priority = $totalRecordByGlobal;
        $item->file_size = $file_size;
        $item->file_type = $file_type;
        $item->original_name = $file->getClientOriginalName();
        $item->status = 0;
        $item->save();

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
            'type' => $file_type,
            'size' => $file_size
        ]);
    }

    public function deletefile(Request $request)
    {
        $id = $request->id;
        $filename =  $request->name;

        Networkitem::where('id', $id)->delete();
        $path = base_path() . Enum::UPLOAD_FOLDER_NAME . '/' . $filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return response()->json(['success' => $filename]);
    }
}
