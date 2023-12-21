<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $result = DB::table('units')
                ->select('units.nama_unit', 'units.deskripsi_unit', 'units.is_available', 'prices.price', 'galleries.image')
                ->join('prices', 'units.id', '=', 'prices.unit_id')
                ->join('galleries', 'galleries.unit_id', '=', 'units.id')
                ->where('prices.type', '=', 'day')
                ->where('galleries.is_thumbnail', '=', 1)
                ->get();
        
        $data = [
            'unit' => $result
        ];
        
        return view('index', $data);
    }
    public function index1(){
        return view('index-1');
    }
    public function index2(){
        return view('index-2');
    }
    public function allrooms(){
        return view('all-rooms');
    }
    public function roomdetails(){
        return view('room-details');
    }
    public function roomdetailsblock(){
        return view('room-details-block');
    }
    public function roomdetails1(){
        return view('room-details-1');
    }
    public function services(){
        return view('services');
    }
    public function menu(){
        return view('menu');
    }
    public function events(){
        return view('events');
    }
    public function aminities1(){
        return view('aminities1');
    }
    public function allrooms1(){
        return view('all-rooms1');
    }
    public function aminities(){
        return view('aminities');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function dbactivity(){
        return view('db-activity');
    }
    public function dbbooking(){
        return view('db-booking');
    }
    public function dbevent(){
        return view('db-event');
    }
    public function dbnewbooking(){
        return view('db-new-booking');
    }
    public function booking(){
        return view('booking');
    }
    public function contactus(){
        return view('contact-us');
    }
    public function blog(){
        return view('blog');
    }
    public function bloginner(){
        return view('blog-inner');
    }
    public function gallery(){
        return view('gallery');
    }
    public function gallery1(){
        return view('gallery1');
    }
    public function gallery2(){
        return view('gallery2');
    }
    public function collapsible(){
        return view('collapsible');
    }
    public function aboutus(){
        return view('about-us');
    }
    public function services1(){
        return view('services1');
    }
    public function typhogrid(){
        return view('typho-grid');
    }
    public function typoalert(){
        return view('typo-alert');
    }
    public function formfields(){
        return view('form-fields');
    }
    public function typoallhead(){
        return view('typo-all-head');
    }
    public function typobadgeslabels(){
        return view('typo-badges-labels');
    }
    public function typobuttons(){
        return view('typo-buttons');
    }
    public function typopagination(){
        return view('typo-pagination');
    }
    public function typoprogressbar(){
        return view('typo-progressbar');
    }
    public function preloading(){
        return view('preloading');
    }
    public function menu1(){
        return view('menu1');
    }
    public function typoslider(){
        return view('typo-slider');
    }
    public function typotable(){
        return view('typo-table');
    }
    public function sitemap(){
        return view('sitemap');
    }
    public function hoteldetails(){
        return view('hotel-details');
    }
    public function hoteldetail(){
        return view('hotel-detail');
    }
    public function detail(){
        return view('detail');
    }
    public function dbprofile(){
        return view('db-profile');
    }
}
