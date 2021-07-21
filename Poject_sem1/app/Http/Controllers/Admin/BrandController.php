<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::all();
        return view('admin.pages.Brand.index_brand', compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        return view('admin.pages.Brand.Create_brand', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if ($request->has('logo')) {
            $file = $request->logo;
            $file_name = $file->getClientOriginalName();
            $file->move('uploads', $file_name);
        }

        $add = Brand::create([
            'name' => $request->name,
            'logo' => $file_name,
            'status' => $request->status,
            'category_id' => $request->category_id
        ]);


        if ($add) {
            return redirect()->route('brand.index')->with('success', 'thêm mới thành công');
        } else {
            return redirect()->back()->with('err', 'thêm mới thất bại');
        }
        // thêm màu sản phẩm
        return redirect()->route('brand.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::all();
        $brand = brand::find($id);
        return view('admin.pages.Brand.Edit_brand', compact('brand','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    
    {
      
        // dd($request->all());
        $data = Brand::find($id);
        if ($request->has('logo')) {
            $file = $request->logo;
            $file_name = $file->getClientOriginalName();
            $file->move('uploads', $file_name);
        } else {
            $file_name = $data->logo;
        }

        Brand::where('id', $id)->update([
            'name' => $request->name,
            'logo' => $file_name,
            'status' => $request->status,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brand::find($id)->delete();
        return redirect()->route('brand.index');
    }
}
