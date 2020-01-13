<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Hotel;
use App\Diadiem;
use App\Binhluan;
use App\News;
use Carbon;

class HomePageController extends Controller
{
    //ddaay Controller hien thi trang chu
    public function getIndex(){
        $tour = Tour::paginate(5);
        $hotel = Hotel::paginate(5);
        $dd = Diadiem::paginate(4);
        $dd1 = Diadiem::paginate(4);
        $dd2 = Diadiem::paginate(10);
        $hot_tour = Tour::where('soluotxem','>',1000)->paginate(5);
        $search = Tour::all();
        return view('client.pages.index',compact('tour','hotel','dd','hot_tour','dd1','dd2','search'));
    }
    public function getDetail($id){
        $tour = Tour::find($id);
        $hotel = Hotel::all();
        $dd = Diadiem::all();
        $dd2 = Diadiem::paginate(10);
        $yt_tour = Tour::orderBy('soluotxem')->paginate(5);
        $new = News::paginate(4);
        $comment = Binhluan::where('idTour',$id)->orderBy("created_at", 'desc')->paginate(10);
        return view('client.pages.detail.tourdetail',compact('tour','hotel','dd','dd2','yt_tour','comment','new'));
    }
    public function dem(Request $req){
        $id = $req->id;
        $soluotxem = $req->soluotxem;
        Tour::where('id',$id)->update(['soluotxem' => $soluotxem]);
    }
    public function hotel(){
        $hotel = Hotel::paginate(20);
        $tk_hotel = Hotel::all();
        $dd = Diadiem::all();
        $dd2 = Diadiem::paginate(10);
        return view('client.pages.hotel',compact('hotel','dd2','tk_hotel','dd'));
    }
    public function tour(){
        $tour = Tour::paginate(5);
        $nd_tour = Tour::all();
        $dd = Diadiem::all();
        $dd2 = Diadiem::paginate(10);
        $tintuc = News::paginate(5);
        $yt_tour = Tour::orderBy('soluotxem')->paginate(5);
        return view('client.pages.tour',compact('tour','dd2','nd_tour','dd','yt_tour','tintuc'));
    }
    public function getSearch(Request $req){
        $noidi = $req->noidi;
        $noiden = $req->noiden;
        $ngaykhoihanh = $req->departure_date;
        $gia = $req->gia;
        $giatour = '';
        $diadiem = '';
        $search = Tour::all();
        if($gia == 0){
            $giatour = Tour::where('gia','<',1000)->get();
        }else if($gia == 1){
            $giatour = Tour::where('gia','>=',1000)->where('gia','<',3000)->get();
        }else if($gia == 2){
            $giatour = Tour::where('gia','>=',3000)->where('gia','<',5000)->get();
        }else if($gia == 3){
            $giatour = Tour::where('gia','>=',5000)->get();
        }
        if($noidi != '' && $noiden !=''){
            $diadiem = Tour::where('noidi',$noidi)->orwhere('noiden',$noiden)->get();
        }
        if($ngaykhoihanh != '')
        {
            $diadiem = Tour::where('ngaykhoihanh',$ngaykhoihanh)->get();
        }
        
        return view('client.pages.search.search',compact('diadiem','giatour','search'));
    }
    public function getSearchTour(Request $req){
            $name = $req->tukhoa;
        $search = Tour::all();
        $noiden_tour = $req->nd_tour;
            if($name!= '' && $noiden_tour=='0'){
                $diadiem = Tour::where('name','like','%'.$name.'%')->get();
            }else if($name== '' && $noiden_tour!='0')
            {
                $diadiem = Tour::where('noiden',$noiden_tour)->get();
            }else if($name!= '' && $noiden_tour!='0'){
                $diadiem = Tour::where('name','like','%'.$name.'%')->where('noiden',$noiden_tour)->get();
            }
            return view('client.pages.search.search',compact('diadiem','search'));
    }
    public function getSearchHotel(Request $req){
        $khachsan = $req->ks;
        $diadiem = $req->dd;
        $giaks = $req->price;
        $dd = Diadiem::all();
        $ks = '';
        $gia ='';
        $ddks = '';
        if($giaks == '1'){
            $gia = Hotel::where('gia','<',1000)->get();
        }
        else if($giaks == 2){
            $gia = Hotel::where('gia','>=',1000)->where('gia','<',3000)->get();
        }else if($giaks == 3){
            $gia = Hotel::where('gia','>=',3000)->where('gia','<',5000)->get();
        }
        else if($giaks == 4){
            $gia = Hotel::where('gia','>=',5000)->get(); 
        }else{
            $gia ='';
        }
        if($giaks == 0 && $khachsan!='' && $diadiem == 0){
            $ks = Hotel::where('name','like','%'.$khachsan.'%')->get();
        }elseif($giaks == 0 && $khachsan=='' && $diadiem != 0){
            $ks = Hotel::where('idDiadiem',$diadiem)->get();
        }elseif($giaks != 0 && $khachsan=='' && $diadiem == 0){
            if($giaks == 1){
                $gia = Hotel::where('gia','<',1000)->get();
            }else if($giaks == 2){
                $gia = Hotel::where('gia','>=',1000)->where('gia','<',3000)->get();
            }else if($giaks == 3){
                $gia = Hotel::where('gia','>=',3000)->where('gia','<',5000)->get();
            }else if($giaks == 4){
                $gia = Hotel::where('gia','>=',5000)->get();
            }
        }
        return view('client.pages.search.search_hotel',compact('search','dd','ks','gia'));

    }

    public function getcontact(){
        $new = News::paginate(5);
        return view('client.pages.contact',compact('new'));
    }
    public function getintro(){
        $new = News::paginate(4);
        return view('client.pages.introduct',compact('new'));
    }
}
