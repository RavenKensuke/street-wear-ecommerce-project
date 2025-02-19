<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ColorModel;
use Illuminate\Support\Facades\Auth;

class ColorController extends Controller
{
    public function list(){

        $data['getRecord'] = ColorModel::getRecord();
        $data['header_title'] = 'Color'; 
        return view('admin.color.list', $data);
    }

    public function add(){
        
        $data['header_title'] = 'Add New Color'; 
        return view('admin.color.add', $data);
    }

    public function insert(Request $request){
        
        request()->validate([
            'name' => 'required|unique:color'
        ]);

        request()->validate([
            'code' => 'required|unique:color'
        ]);

        $color = new ColorModel;
        $color->name = trim($request->name);
        $color->code = trim($request->code);
        $color->status = trim($request->status);
        $color->created_by = Auth::user()->id;
        $color->save();

        return redirect('/admin/color/list')->with('success', 'New Color Is Added Successfully.');
    }

    public function edit($id){

        $data['getRecord'] = ColorModel::getSingle($id);
        $data['header_title'] = 'Edit Color'; 
        return view('admin.color.edit', $data);
    }

    public function update($id, Request $request){

        request()->validate([
            'name' => 'required|unique:color,name,'.$id
        ]);

        request()->validate([
            'code' => 'required|unique:color,code,'.$id
        ]);

        $color = ColorModel::getSingle($id);
        $color->name = trim($request->name);
        $color->code = trim($request->code);
        $color->status = trim($request->status);
        $color->save();

        return redirect('/admin/color/list')->with('success', 'Color Is Updated Successfully.');
    }

    public function delete($id){

            $color = ColorModel::getSingle($id);
            $color->is_delete = 1;
            $color->save();
            return redirect()->back()->with('success', "Color Is Deleted Successfully!");
    }
}
