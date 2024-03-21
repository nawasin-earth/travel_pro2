<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Travel;
 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        // ดึงข้อมูลแหล่งท่องเที่ยวของจังหวัดหนองคาย
        $nongkhaiTravel = Travel::where('province_t', 'หนองคาย')->first();
        // ดึงข้อมูลแหล่งท่องเที่ยวของจังหวัดอุดรธานี
        $udonThaniTravel = Travel::where('province_t', 'อุดรธานี')->first();
        // ดึงข้อมูลแหล่งท่องเที่ยวของจังหวัดบึงกาฬ
        $buengKanTravel = Travel::where('province_t', 'บึงกาฬ')->first();
    
        return view('home', compact('nongkhaiTravel', 'udonThaniTravel', 'buengKanTravel'));
    }    
    
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $regularUserCount = DB::table('users')->where('type', 0)->count(); // จำนวนสมาชิกที่ type = 0
        $adminCount = DB::table('users')->where('type', 1)->count(); // จำนวนผู้ดูแลระบบที่ type = 1
        $travelCount = DB::table('travel')->count(); // จำนวนแหล่งท่องเที่ยวทั้งหมด
        
        $travels = Travel::select('travel.id', 'travel.name_t', 'travel.updated_at', 'users.name')
        ->leftJoin('users', 'travel.updated_by', '=', 'users.id')
        ->orderBy('travel.updated_at', 'desc') // เรียงลำดับตามวันที่แก้ไขล่าสุด จากใหม่ไปเก่า
        ->get();    


        return view('admin.adminHome', compact('regularUserCount', 'adminCount', 'travelCount', 'travels'));
    }
    
    
    
    


}