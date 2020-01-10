<?php

namespace App\Http\Controllers;

use App\Tour;
use App\Hotel;
use App\Diadiem;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tour = Tour::all();
        $hotel = Hotel::all();
        $dd = Diadiem::all();
        return view('admin.pages.tour.tour',compact('tour','hotel','dd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tour = Tour::all();
        $hotel = Hotel::all();
        $dd = Diadiem::all();
        return view('admin.pages.tour.add',compact('tour','hotel','dd'));
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
                    if($file->move('images/upload/product',$file_name)){
                            $data = $request->all();
                            $data['anh'] = $file_name;
                            Tour::create($data);
                            return redirect()->route('tour.index')->with('thongbao','Đã thêm thành công');
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
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour,$id)
    {
        $tour = Tour::find($id);
        $hotel = Hotel::all();
        $dd = Diadiem::all();
        return view('admin.pages.tour.update',compact('tour','hotel','dd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour,$id)
    {
        $tour = Tour::all();
        $tour1 = Tour::find($id);
        $hotel = Hotel::all();
        $dd = Diadiem::all();
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
                    if($file->move('images/upload/product',$file_name)){
                            $data['anh'] = $file_name;
                            if(File::exists('images/upload/product'.$tour1->anh)){
                                unlink('images/upload/product'.$tour1->anh);
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
            $data['anh'] = $tour1->anh;

        }
        $tour1->update($data);
        return view('admin.pages.tour.tour',compact('tour','hotel','dd'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour,$id)
    {
        $tour = Tour::find($id);
        $tour->delete();
        return back();
    }
}
