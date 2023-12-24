<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index(){
        // $result = DB::table('units')
        //         ->select('units.nama_unit', 'units.deskripsi_unit', 'units.slug', 'units.is_available', 'prices.price', 'galleries.image')
        //         ->join('prices', 'units.id', '=', 'prices.unit_id')
        //         ->join('galleries', 'galleries.unit_id', '=', 'units.id')
        //         ->where('prices.type', '=', 'day')
        //         ->where('galleries.is_thumbnail', '=', 1)
        //         ->get();

        $result = DB::select("SELECT
            units.*, galleries.image,
            MAX(CASE WHEN prices.type = 'day' THEN prices.price END) AS 'day_price',
            MAX(CASE WHEN prices.type = 'week' THEN prices.price END) AS 'week_price',
            MAX(CASE WHEN prices.type = 'month' THEN prices.price END) AS 'month_price',
            MAX(CASE WHEN prices.type = 'year' THEN prices.price END) AS 'year_price'
        FROM units
        LEFT JOIN galleries ON units.id = galleries.unit_id AND galleries.is_thumbnail = 1
        LEFT JOIN prices ON units.id = prices.unit_id
        WHERE units.deleted_at IS NULL
        GROUP BY units.id, galleries.image");

        $iklan = DB::select("SELECT * FROM advertisements");

        $galeri = DB::select("SELECT `galleries`.*, `units`.`nama_unit` FROM `galleries` LEFT JOIN `units` ON `galleries`.`unit_id` = `units`.`id` LIMIT 20;");
        
        $data = [
            'unit' => $result,
            'advertisement' => $iklan,
            'galleries' => $galeri
        ];
        
        return view('index', $data);
    }

    public function detailunit($slug){
        $unit = Unit::where('slug', '=', $slug)->firstOrFail();
        
        $price = $unit->prices;
        
        $priceDay = $price->firstWhere('type', 'day')->price ?? null;
        $priceWeek = $price->firstWhere('type', 'week')->price ?? null;
        $priceMonth = $price->firstWhere('type', 'month')->price ?? null;
        $priceYear = $price->firstWhere('type', 'year')->price ?? null;
        
        
        $data = [
            'unit' => $unit,
            'facility' => $unit->facilities,
            'gallery' => $unit->galleries,
            'priceDay' => $priceDay,
            'priceWeek' => $priceWeek,
            'priceMonth' => $priceMonth,
            'priceYear' => $priceYear,
        ];

        return view('detailunit', $data);
    }

    public function detailbooking($slug){
        $getData = DB::table('units')
        ->where('slug', '=', $slug)
        ->get();
        
        $unit = Unit::findOrFail($getData[0]->id);
        
        $price = $unit->prices;
        
        $priceDay = $price->firstWhere('type', 'day')->price ?? 0;
        $priceWeek = $price->firstWhere('type', 'week')->price ?? 0;
        $priceMonth = $price->firstWhere('type', 'month')->price ?? 0;
        $priceYear = $price->firstWhere('type', 'year')->price ?? 0;
        
        
        $data = [
            'unit' => $unit,
            'facility' => $unit->facilities,
            'gallery' => $unit->galleries,
            'priceDay' => $priceDay,
            'priceWeek' => $priceWeek,
            'priceMonth' => $priceMonth,
            'priceYear' => $priceYear,
        ];
        
        return view('detailbooking', $data);
    }

    public function faq()
    {
        $faq = Faq::orderBy('order')->get();

        return view('faq', compact('faq'));
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
