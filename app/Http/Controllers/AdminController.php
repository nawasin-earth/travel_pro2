<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Travel;
use App\Models\Travel360;
use App\Models\Recommend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{
    public function manageU()
    {
        return view('admin.manageU');
    }




    public function addTravel()
    {
        $user = Auth::user();
        $data = Travel::all();
            $uniqueProvinces = DB::table('travel')->distinct()->pluck('province_t');
        $userData = [
            'id' => $user->id,
            'likedItems' => json_encode($user->likedItems),
        ];
    
        return view('admin.addTravel', compact('user', 'uniqueProvinces', 'userData', 'data'));
    }
    
public function addDetail($id)
{
    $item = Travel::find($id);
    if (!$item) {
        abort(404);
    }

    $images360 = Travel360::where('travel_id', $id)->get();
    $user = Auth::user();

    // ดึงข้อมูลจากตาราง recommend โดยใช้ travel_id
    $Recommend = Recommend::where('travel_id', $id)->first();

    return view('admin.adddetail', compact('item', 'user', 'images360', 'Recommend'));
}


    
public function storeTravel(Request $request)
{
    $data = $request->validate([
        'name_t' => 'required|string',
        'province_t' => 'required|string',
        'description_t' => 'required|string',
        'address' => 'required|string',
        'time' => 'required|string',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
        'season' => 'required|string',
        'coordinates' => 'required|string',
        'contact' => 'nullable|string',
        'website' => 'nullable|string',
        'detail' => 'required|string',
        'admission' => 'nullable|string',
        'restaurant_name' => 'nullable|string',
        'restaurant_link' => 'nullable|string',
        'cafe_name' => 'nullable|string',
        'cafe_link' => 'nullable|string',
        'hotel_name' => 'nullable|string',
        'hotel_link' => 'nullable|string',
    ]);

    // Upload regular images
    $imagePaths = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imageName = $this->generateUniqueFileName($image);
            $image->move(public_path('images'), $imageName);
            $imagePaths[] = $imageName;
        }
    }

    // Create Travel record
    $travel = Travel::create([
        'name_t' => $data['name_t'],
        'province_t' => $data['province_t'],
        'description_t' => $data['description_t'],
        'address' => $data['address'],
        'time' => $data['time'],
        'image' => implode(',', $imagePaths), // Store multiple regular images
        'season' => $data['season'],
        'coordinates' => $data['coordinates'],
        'contact' => $data['contact'],
        'website' => $data['website'],
        'detail' => $data['detail'],
        'admission' => $data['admission'],
        'updated_by' => auth()->id(),
    ]);

    // Upload 360 images
    if ($request->has('image_360_link')) {
        $image360Links = $request->input('image_360_link');
        foreach ($image360Links as $link) {
            // Remove square brackets and escape characters from the URL
            $link = trim($link, '[]"');
            $travel->travel360()->create([
                'image_360_link' => $link
            ]);
        }
    }

    // Save recommendation data with file URLs
    $recommendData = [
        'travel_id' => $travel->id,
        'restaurant_name' => $data['restaurant_name'],
        'restaurant_link' => $data['restaurant_link'],
        'cafe_name' => $data['cafe_name'],
        'cafe_link' => $data['cafe_link'],
        'hotel_name' => $data['hotel_name'],
        'hotel_link' => $data['hotel_link'],
    ];

    // Upload recommend images
    if ($request->hasFile('restaurant_image')) {
        $recommendData['restaurant_image'] = $request->file('restaurant_image')->store('public/images');
    }

    if ($request->hasFile('cafe_image')) {
        $recommendData['cafe_image'] = $request->file('cafe_image')->store('public/images');
    }

    if ($request->hasFile('hotel_image')) {
        $recommendData['hotel_image'] = $request->file('hotel_image')->store('public/images');
    }

    Recommend::create($recommendData);

    return back()->with('success', 'Travel spot added successfully!');
}

    
    private function generateUniqueFileName($file)
    {
        $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $uniqueFileName = $fileName . '_' . time() . '.' . $extension;
    
        return $uniqueFileName;
    }
    
    public function delete($id)
{
    // Find the travel record by ID
    $travel = Travel::find($id);

    // Check if the travel record exists
    if (!$travel) {
        return back()->with('error', 'Travel record not found!');
    }

    // Delete the travel record
    $travel->delete();

    // Redirect back with success message
    return back()->with('success', 'Travel record deleted successfully!');
}


    
    public function addNews()
    {
        return view('admin.addNews');
    }

        // Method to store news data
        public function storeNews(Request $request)
        {
            // Validate the incoming request
            $request->validate([
                'title' => 'required|string|max:255',
                'subtitle' => 'required|string|max:255',
                'province' => 'required|string|max:255',
                'content' => 'required|string',
                'imageUrl' => 'nullable|string|max:255',
                'startDate' => 'required|date',
                'endDate' => 'required|date',
            ]);
    
            // Create a new News instance and store the data
            $news = new News();
            $news->title = $request->title;
            $news->subtitle = $request->subtitle;
            $news->province = $request->province;
            $news->content = $request->content;
            $news->imageUrl = $request->imageUrl;
            $news->startDate = $request->startDate;
            $news->endDate = $request->endDate;
            $news->save();
    
            // Redirect back with a success message
            return redirect()->back()->with('success', 'News added successfully!');
        }
        

    public function manageUsers()
    {
        try {
            // Fetch users with type = 0
            $users = User::where('type', 0)->get();
    
            return view('admin.manageU', ['users' => $users]);
        } catch (\Exception $e) {
            // Log the error or redirect to an error page
            return redirect()->route('errorPage');
        }
    }
    
    public function deleteUser($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return response()->json(['message' => 'User deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error deleting user'], 500);
        }
    }

    // app/Http/Controllers/AdminController.php
public function addUser(Request $request)
{
    try {
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|max:255',
            'type' => 'required|in:0,1',
            'province' => 'required|string|max:255',
        ]);

        // Create a new user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // You should hash the password
        $user->type = $request->type;
        $user->province = $request->province;
        $user->save();

        return redirect()->route('admin.manageU')->with('success', 'User added successfully!');
    } catch (\Exception $e) {
        // Log the error or redirect to an error page
        return redirect()->route('errorPage')->with('error', 'Error adding user');
    }
}

    


// In your AdminController

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

        return view('admin.profileAdmin', compact('provinces', 'user'));
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();
    
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'province' => 'required|string',
            // Remove 'profile_image' validation
        ]);
    
        // Update user information
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->province = $request->input('province');
    
        $user->save();
    
        return redirect()->route('admin.profileAdmin')->with('success', 'Profile updated successfully');
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

    return redirect()->route('admin.profileAdmin')->with('success', 'Password updated successfully.');
}



public function edit($id)
{
    $item = Travel::find($id);
    if (!$item) {
        abort(404);
    }
    $travel360 = Travel360::where('travel_id', $id)->get();
    $recommends = Recommend::where('travel_id', $id)->get();

    return view('admin.edit', compact('item', 'travel360', 'recommends'));
}
public function updateTravel(Request $request, $id)
{
    $item = Travel::find($id);
    if (!$item) {
        abort(404);
    }

    $data = $request->validate([
        'name_t' => 'required|string',
        'province_t' => 'required|string',
        'description_t' => 'required',
        'detail' => 'required',
        'address' => 'required',
        'time' => 'required',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
        'season' => 'required|string',
        'coordinates' => 'required|string',
        'contact' => 'nullable|string',
        'website' => 'nullable|string',
        'admission' => 'nullable|string',
    ]);

// Upload regular images
$imagePaths = [];
if ($request->hasFile('images')) {
    // Delete old images
    foreach (explode(',', $item->image) as $oldImage) {
        $oldImagePath = public_path('images/' . $oldImage);
        if (file_exists($oldImagePath) && is_file($oldImagePath)) {
            unlink($oldImagePath);
        }
    }

    // Upload new images
    foreach ($request->file('images') as $image) {
        $imageName = $this->generateUniqueFileName($image);
        $image->move(public_path('images'), $imageName);
        $imagePaths[] = $imageName;
    }
} else {
    // Keep the old images if no new images are uploaded
    $imagePaths = explode(',', $item->image);
}



    // Update Travel record
    $item->update([
        'name_t' => $data['name_t'],
        'province_t' => $data['province_t'],
        'description_t' => $data['description_t'],
        'address' => $data['address'],
        'time' => $data['time'],
        'image' => implode(',', $imagePaths), // Store multiple regular images
        'season' => $request->input('season'),
        'coordinates' => $request->input('coordinates'),
        'contact' => $request->input('contact'),
        'website' => $request->input('website'),
        'admission' => $request->input('admission'),
        'detail' => $request->input('detail'),
        'updated_by' => auth()->id(),
    ]);

            // Update Travel360 records
            if ($request->has('image_360_link')) {
                $image360Links = $request->input('image_360_link');
                // Retrieve existing Travel360 records
                $existing360Records = Travel360::where('travel_id', $id)->get();
                
                // Update existing records or create new ones
                foreach ($image360Links as $index => $link) {
                    if (isset($existing360Records[$index])) {
                        // Update existing record
                        $existing360Records[$index]->update(['image_360_link' => $link]);
                    } else {
                        // Create new record
                        Travel360::create([
                            'travel_id' => $id,
                            'image_360_link' => $link
                        ]);
                    }
                }
            }
    
            // Update Recommend record
$recommendData = [
    'travel_id' => $item->id,
    'restaurant_name' => $request->input('restaurant_name'),
    'restaurant_link' => $request->input('restaurant_link'),
    'cafe_name' => $request->input('cafe_name'),
    'cafe_link' => $request->input('cafe_link'),
    'hotel_name' => $request->input('hotel_name'),
    'hotel_link' => $request->input('hotel_link'),
];

// Upload recommend images
if ($request->hasFile('restaurant_image')) {
    $recommendData['restaurant_image'] = $request->file('restaurant_image')->store('public/images');
}

if ($request->hasFile('cafe_image')) {
    $recommendData['cafe_image'] = $request->file('cafe_image')->store('public/images');
}

if ($request->hasFile('hotel_image')) {
    $recommendData['hotel_image'] = $request->file('hotel_image')->store('public/images');
}

Recommend::updateOrCreate(['travel_id' => $item->id], $recommendData);


return redirect()->route('admin.detail', ['id' => $item->id])->with('success', 'แก้ไขข้อมูลเรียบร้อยแล้ว');
}




public function travelList()
{
    // ดึงข้อมูลที่ต้องการจากฐานข้อมูล
    $data = Travel::all(); // ดึงข้อมูลทั้งหมดจากโมเดล Travel
    $uniqueProvinces = DB::table('travel')->distinct()->pluck('province_t'); // ดึงจังหวัดที่ไม่ซ้ำกันจากตาราง travel
    $user = Auth::user(); // ดึงข้อมูลผู้ใช้ปัจจุบัน

    // ส่งข้อมูลไปยังมุมมอง
    return view('admin.travelList', compact('data', 'uniqueProvinces', 'user'));
}


public function rank()
{
    $travels = Travel::all();

    return view('admin.rank', compact('travels'));
}







}
