<?php

namespace App\Http\Controllers;

use App\Diadiem;
use Illuminate\Http\Request;

class DiadiemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diadiem = Diadiem::all();
        return view('admin.pages.diadiem.diadiem',compact('diadiem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diadiem = Diadiem::all();
        return view('admin.pages.diadiem.add',compact('diadiem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('anh')){
            $file = $request->anh;
            //Lấy tên file
            $file_name = $file->getClientOriginalName();
            //Lấy loại file
            $file_type = $file->getClientOriginalExtension();
            //Lấy kích thước của file với đơn vị là byte
            $file_size = $file->getSize();
            if($file_type == 'png' || $file_type == 'jpg' || $file_type == 'jpeg')
            {
                if($file_size <= 1048576){
                    $file_name = date("D-m-yyyy").'_'.rand().'_'.$file_name;
                    if($file->move('images/upload/diadiem',$file_name)){
                            $data = $request->all();
                            $data['anh'] = $file_name;
                            Diadiem::create($data);
                            return redirect()->route('diadiem.index')->with('thongbao','Đã thêm thành công');
                    }
                }else{
                    return back()->with('error','File của bạn quá lớn');
                }
            }
            else{
                return back()->with('error','File không đúng định dạng');
            }
        }else{
            return back()->with('error', 'Bạn chưa thêm hình anh minh họa');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Diadiem  $diadiem
     * @return \Illuminate\Http\Response
     */
    public function show(Diadiem $diadiem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diadiem  $diadiem
     * @return \Illuminate\Http\Response
     */
    public function edit(Diadiem $diadiem,$id)
    {
        $dd = Diadiem::find($id);
        return view('admin.pages.diadiem.update',compact('dd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diadiem  $diadiem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diadiem $diadiem,$id)
    {
        $dd1 = Diadiem::find($id);
        $data = $request->all();
        if($request->hasFile('anh')){
            $file = $request->anh;
            //Lấy tên file
            $file_name = $file->getClientOriginalName();
            //Lấy loại file
            $file_type = $file->getClientOriginalExtension();
            //Lấy kích thước của file với đơn vị là byte
            $file_size = $file->getSize();
            if($file_type == 'png' || $file_type == 'jpg' || $file_type == 'jpeg')
            {
                if($file_size <= 1048576){
                    $file_name = date("D-m-yyyy").'_'.rand().'_'.$file_name;
                    if($file->move('images/upload/diadiem',$file_name)){
                            $data['anh'] = $file_name;
                            if(File::exists('images/upload/diadiem'.$dd1->anh)){
                                unlink('images/upload/diadiem'.$dd1->anh);
                            }
                           
                    }
                }else{
                    return back()->with('error','File của bạn quá lớn');
                }
            }
            else{
                return back()->with('error','File không đúng định dạng');
            }
        }else{
            $data['anh'] = $dd1->anh;

        }
        $dd1->update($data);
        $diadiem = Diadiem::all();
        return view('admin.pages.diadiem.diadiem',compact('diadiem'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diadiem  $diadiem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diadiem $diadiem,$id)
    {
        $dd = Diadiem::find($id);
        $dd->delete();
        return back();
    }
}
