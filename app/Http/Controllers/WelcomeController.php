<?php

namespace App\Http\Controllers;
use App\Models\Travel;
use App\Models\Travel360;
use App\Models\Recommend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index()
    {
        // ดึงข้อมูลแหล่งท่องเที่ยวของจังหวัดหนองคาย
        $nongkhaiTravel = Travel::where('province_t', 'หนองคาย')->first();
    
        // ดึงข้อมูลแหล่งท่องเที่ยวของจังหวัดอุดรธานี
        $udonThaniTravel = Travel::where('province_t', 'อุดรธานี')->first();
    
        // ดึงข้อมูลแหล่งท่องเที่ยวของจังหวัดบึงกาฬ
        $buengKanTravel = Travel::where('province_t', 'บึงกาฬ')->first();
    
        return view('welcome', compact('nongkhaiTravel', 'udonThaniTravel', 'buengKanTravel'));
    }    

    public function vTravel()
    {
        $data = travel::all();
        $uniqueProvinces = DB::table('travel')->distinct()->pluck('province_t');
        $user = Auth::user();
    
        return view('audience.vTravel', compact('data', 'uniqueProvinces', 'user'));
    }

    public function travelDetail($id)
    {
        $item = Travel::find($id);
        $user = Auth::user();
    
        // Fetch 360 images for the given travel item
        $images360 = Travel360::where('travel_id', $id)->get();
    
        $Recommend = Recommend::where('travel_id', $id)->first();
    
        return view('audience.vDetail', compact('item', 'user', 'images360', 'Recommend'));
    }
    
    public function vNews()
    {
        return view('audience.vNews');
    }
    
    public function vRanking()
{
    $travels = Travel::all();

    return view('audience.vRanking', compact('travels'));
}

public function vComment($id)  //comment
{
    $user = Auth::user();
    $item = Travel::find($id);

    return view('audience.vComment', compact('user', 'item'));
}





}
