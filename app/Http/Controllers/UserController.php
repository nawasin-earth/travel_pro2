<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Travel;
use App\Models\Travel360;
use App\Models\Comment;
use App\Models\Recommend;

class UserController extends Controller
{
    public function profile()
    {
        $provinces = [
            'กรุงเทพมหานคร', 'สมุทรปราการ', 'นนทบุรี', 'ปทุมธานี', 'พระนครศรีอยุธยา',
            'อ่างทอง', 'ลพบุรี', 'สิงห์บุรี', 'ชัยนาท', 'สระบุรี',
            'ชลบุรี', 'ระยอง', 'จันทบุรี', 'ตราด', 'ฉะเชิงเทรา',
            'ปราจีนบุรี', 'นครนายก', 'สระแก้ว', 'นครราชสีมา', 'บุรีรัมย์',
            'สุรินทร์', 'ศรีสะเกษ', 'อุบลราชธานี', 'ยโสธร', 'ชัยภูมิ',
            'อำนาจเจริญ', 'หนองบัวลำภู', 'ขอนแก่น', 'อุดรธานี', 'เลย',
            'หนองคาย', 'มหาสารคาม', 'ร้อยเอ็ด', 'กาฬสินธุ์', 'สกลนคร',
            'นครพนม', 'มุกดาหาร', 'เชียงใหม่', 'ลำพูน', 'ลำปาง',
            'อุตรดิตถ์', 'แพร่', 'น่าน', 'แพร่', 'เชียงราย',
            'แม่ฮ่องสอน', 'นครสวรรค์', 'อุทัยธานี', 'กำแพงเพชร', 'ตาก',
            'สุโขทัย', 'พิษณุโลก', 'พิจิตร', 'เพชรบูรณ์', 'ราชบุรี',
            'กาญจนบุรี', 'สุพรรณบุรี', 'นครปฐม', 'สมุทรสาคร', 'สมุทรสงคราม',
            'เพชรบุรี', 'ประจวบคีรีขันธ์', 'ชุมพร', 'ระนอง', 'สุราษฎร์ธานี',
            'พังงา', 'ภูเก็ต', 'กระบี่', 'นครศรีธรรมราช', 'ตรัง',
            'พัทลุง', 'สตูล', 'สงขลา', 'ปัตตานี', 'ยะลา',
            'นราธิวาส', 'บึงกาฬ',
        ];
        
        $user = auth()->user(); // Assuming you are using authentication and retrieving the authenticated user

        return view('profile', compact('provinces', 'user'));
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();
    
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'province' => 'required|string',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image upload
        ]);
    
        // Update user information
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->province = $request->input('province');
    
        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            // Delete the existing profile image (if any)
            if ($user->profile_image) {
                Storage::disk('public')->delete($user->profile_image);
            }
    
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $imagePath;
        }
    
        $user->save();
    
        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }
    
    
    public function updatePassword(Request $request)
{
    $user = Auth::user();

    // Validate the form data
    $request->validate([
        'current_password' => 'required|password',
        'new_password' => 'required|string|min:8|confirmed',
    ]);

    // Check if the provided current password matches the user's actual password
    if (!Hash::check($request->current_password, $user->password)) {
        return redirect()->back()->with('error', 'The current password is incorrect.');
    }

    // Update the user's password
    $user->update([
        'password' => Hash::make($request->new_password),
    ]);

    return redirect()->route('profile')->with('success', 'Password updated successfully.');
}

public function travel()
{
    $data = travel::all();
    $uniqueProvinces = DB::table('travel')->distinct()->pluck('province_t');
    $user = Auth::user();
    $userData = [
        'id' => $user->id,
        'likedItems' => json_encode($user->likedItems), // Assuming you have a 'likedItems' property in your User model
    ];

    return view('travel', compact('data', 'uniqueProvinces', 'user', 'userData'));
}



public function showDetail($id)
{
    $item = Travel::find($id);
    $user = Auth::user();

    // Fetch 360 images for the given travel item
    $images360 = Travel360::where('travel_id', $id)->get();

    // Prepare user data for JavaScript
    $userData = [
        'id' => $user->id,
        'likedItems' => json_encode($user->likedItems),
    ];
    $Recommend = Recommend::where('travel_id', $id)->first();

    return view('detail', compact('item', 'user', 'userData', 'images360', 'Recommend'));
}



public function showForm($id)  //comment
{
    $user = Auth::user();
    $item = Travel::find($id);

    return view('comment', compact('user', 'item'));
}

public function favorite()
{
    $items = Travel::all();

    return view('favorite', compact('items'));
}


public function ranking()
{
    $travels = Travel::all();

    return view('ranking', compact('travels'));
}


public function news()
{
    return view('news');
}




}