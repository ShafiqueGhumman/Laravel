<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BlogModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function admin_blog_add(Request $request){
        // echo "ABc";
        return view('bakend.blog.add');
    }
    public function admin_blog_add_post(Request $request){
        // dd($request->all());
        $insertRecord = new BlogModel;
        $insertRecord->title = trim($request->title);
        $insertRecord->description = trim($request->description);

        if(!empty($request->file('image'))){
            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' .$file->getClientOriginalExtension();
            $file->move('public/blog/', $filename);
            $insertRecord->image = $filename;
        }
        $insertRecord->description_text_editor = trim($request->description_text_editor);

        $insertRecord->save();
        return redirect('admin/blog')->with('success', 'Add Blog data Successfully');
    }
    public function admin_blog_edit($id , Request $request){
        // echo $id;
        $data['getrecord'] = BlogModel::find($id);
        return view('bakend.blog.edit',$data);
    }
    public function admin_blog_edit_update($id, Request $request){
        // dd($request->all());
        $updateRecord = BlogModel::find($id);
        $updateRecord->title = trim($request->title);

        if(!empty($request->file('image'))){
            if(!empty($updateRecord->image) && file_exists('public/blog/'.$updateRecord->image))
            {
                unlink('public/blog/'.$updateRecord->image);
            }
            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/blog/',$filename);
            $updateRecord->image = $filename;
        }
        $updateRecord->description = trim($request->description);
        $updateRecord->description_text_editor = trim($request->description_text_editor);
        $updateRecord->save();
        return redirect('admin/blog')->with('success','Blog Page Updated Successfully');
    }
    public function admin_blog_delete($id , Request $request){
        // echo $id;
        $deleteRecord = BlogModel::find($id);
        if(!empty($deleteRecord->image) && file_exists('public/blog/'.$deleteRecord->image))
            {
                unlink('public/blog/'.$deleteRecord->image);
            }
        $deleteRecord->delete();
        return redirect('admin/blog')->with('error','Record Deleted Successfully');
    }
}
