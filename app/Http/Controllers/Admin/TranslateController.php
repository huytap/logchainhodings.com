<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class TranslateController extends Controller
{
    public function index(){
        $languages = \Lang::get('logchain');
        return view('admin.translate.index', compact('languages'));
    }
}