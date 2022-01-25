<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Form;
use App\Http\Requests\Globalnetwork\StoreRequest;
use App\Models\Globalnetwork;

class NetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Global Network';
        $data = Globalnetwork::search()->paginate(15);
        return view('admin.network.index', compact('data', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add New Global Network';
        $network = new Globalnetwork;
        return view('admin.network.create', compact('network', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        if (Globalnetwork::create($request->all())) {
            return redirect()->route('network.index')->with('success', 'Thêm chi nhánh thành công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Globalnetwork  $network
     * @return \Illuminate\Http\Response
     */
    public function show(Globalnetwork $network)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Globalnetwork  $network
     * @return \Illuminate\Http\Response
     */
    public function edit(Globalnetwork $network)
    {
        return view('admin.network.edit', compact('network'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Globalnetwork  $network
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Globalnetwork $network)
    {
        $network->update($request->only('name', 'link_url', 'status'));
        return redirect()->route('network.index')->with('success', 'Cập nhật chi nhánh thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Globalnetwork  $network
     * @return \Illuminate\Http\Response
     */
    public function destroy(Globalnetwork $network)
    {
        if ($network->delete())
            return redirect()->route('network.index')->with('success', 'Xóa chi nhánh thành công');
        return redirect()->route('network.index')->with('error', 'Đã có lỗi xảy ra');
    }
}
