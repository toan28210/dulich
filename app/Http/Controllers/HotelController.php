<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Diadiem;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel = Hotel::all();
        $dd = Diadiem::all();
        return view('admin.pages.hotel.hotel',compact('hotel','dd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotel = Hotel::all();
        return view('admin.pages.hotel.add',compact('hotel'));
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
                    if($file->move('images/upload/hotel',$file_name)){
                            $data = $request->all();
                            $data['anh'] = $file_name;
                            Hotel::create($data);
                            return redirect()->route('hotel.index')->with('thongbao','Đã thêm thành công');
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
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel,$id)
    {
        $hotel = Hotel::find($id);
        $dd = Diadiem::all();
        return view('admin.pages.hotel.update',compact('hotel','dd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel,$id)
    {
        $hotel = Hotel::all();
        $dd = Diadiem::all();
        $hotel1 = Hotel::find($id);
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
                    if($file->move('images/upload/hotel',$file_name)){
                            
                            $data['anh'] = $file_name;
                            if(File::exists('images/upload/hotel'.$hotel1->anh)){
                                unlink('images/upload/hotel'.$hotel1->anh);
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
            $data['anh'] = $hotel1->anh;

        }
        $hotel1->update($data);
        return view('admin.pages.hotel.hotel',compact('hotel','dd'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel,$id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();
        return back();
    }
}
