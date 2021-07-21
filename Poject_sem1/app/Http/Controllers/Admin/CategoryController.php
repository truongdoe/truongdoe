<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
// use App\Http\Requests\Add_Category;
use App\Http\Requests\AddCategory;

class CategoryController extends Controller
{
    //
    public function index(){
        $Category = Category::all();
        return view('admin.pages.Category.List_Category',compact('Category'));
      }
      public function Add_Category(){
       return view('admin.pages.Category.Add_Category');
   }
   
   public function Create(AddCategory $req){
 
       $sv = Category::Create($req->all());
    
       if ($sv) {
         return redirect()->route('List_category')->with('success','thêm mới thành công');
       }
     
     }
    //  sua
    public function Edit($id){
        $data = Category::find($id);
        return view('admin.pages.Category.Edit_Category',compact('data'));
    }
    // update
     public function Update($id,Request $req){
    Db::table('categories')->where('id',$id)->update([
       'name'=>$req->name,
       'status'=>$req->status,
    ]);
   return redirect()->route('List_category');
 }
//  xoa
 public function Delete($id){
    Db::table('categories')->where('id',$id)->delete();
    return redirect()->back();
   }
}

