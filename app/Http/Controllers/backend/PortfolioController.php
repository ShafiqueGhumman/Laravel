<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\PortfolioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function portfolio_add(Request $request)
    {
        return view('bakend.portfolio.add');
    }
    public function portfolio_add_post(Request $request)
    {
        // dd($request->all());
        $insertRecord = new PortfolioModel;
        $insertRecord->title = trim($request->title);

        if (!empty($request->file('image'))) {

            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/portfolio/', $filename);
            $insertRecord->image = $filename;
        }
        $insertRecord->save();

        return redirect('admin/portfolio')->with('success', 'Add portfolio data Successfully');
    }
    public function admin_portfolio_edit($id, Request $request)
    {
        $data['getrecord'] = PortfolioModel::find($id);
        return view('bakend.portfolio.edit',$data);
    }
    public function admin_portfolio_edit_post($id, Request $request)
    {
        // dd($request->all());
        $updateRecord = PortfolioModel::find($id);
        $updateRecord->title = trim($request->title);
        if(!empty($request->file('image'))){
            if(!empty($updateRecord->image) && file_exists('public/portfolio/'.$updateRecord->image))
            {
                unlink('public/portfolio/'.$updateRecord->image);
            }
            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/portfolio/',$filename);
            $updateRecord->image = $filename;
        }
        $updateRecord->save();

        return redirect('admin/portfolio')->with('success','Portfolio Page Successfully Updated');
    }
    public function admin_portfolio_delete($id, Request $request)
    {
        // echo $id;
        $deleteRecord = PortfolioModel::find($id);
        if(!empty($deleteRecord->image) && file_exists('public/portfolio/'.$deleteRecord->image))
            {
                unlink('public/portfolio/'.$deleteRecord->image);
            }
        $deleteRecord->delete();
        return redirect('admin/portfolio')->with('error','Record Deleted Successfully');

    }
}
