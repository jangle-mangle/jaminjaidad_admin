<?php

namespace App\Http\Controllers\User;

use Storage;
use DateTime;
use Datatable;
use Validator;
use App\Models\User;
use App\Models\Enquiry;
use App\Models\Booking;
use App\Models\BookingDetails;
use App\Models\Secret;
use App\Models\Vendor;
use App\Models\Searches;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use SebastianBergmann\Diff\Diff;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PhpParser\Node\Stmt\Foreach_;

class UserController extends Controller
{
    public function index()
    {   
        $data['food']= DB::table('foods')->get(); 
        $data['transport']= DB::table('transports')->get(); 
        $data['accomodation']= DB::table('accomodations')->get(); 

        return view('index')->with($data);
    }
    public function enquiry_form(Request $request)
    {
        $enquiry = new Enquiry(); 
        $enquiry->name = $request->name; 
        $enquiry->email = $request->email; 
        $enquiry->question = $request->question; 
        
        $enquiry->save(); 
        return redirect('/')->with('status','Thank You');
    }

    public function about()
    {
        return view('user.about');
    }

    public function blog()
    {
        return view('user.blog');
    }
    public function terms_and_condition()
    {
        return view('user.terms_and_condition');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function checkout()
    {
        return view('user.checkout');
    }

    public function user_register()
    {
        return view('user.register');
    }

    public function education(Request $request, $id)
    {
        $data['id'] = $request->id;
        $data['exams'] = DB::table('exams')->where('is_active','Yes')->where('status','Y')->get(); 
        return view('user.education_details')->with($data);
    }

    public function home_page()
    {
        return view('user.home_page');
    }



    public function verify_number(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'mobile' => 'required|digits:10',
        ]);

        if ($validation->fails()) {
            $otp = 1234;
            return response()->json(['status' => false, 'message' => 'Mobile Number must be 10 digits', 'data' => $request->mobile, "otp" => $otp ]);
        }

        // $smsLibrary = new SmsLibrary;

        $user = User::where('mobile', $request->mobile)->first();

        if ($user) {
            $otp = 1234;
            //$final_otp = $smsLibrary->generateOTP($request->mobile);

            $data = [
                'user_id' => $user->id,
                'mobile' => $request->mobile,
                'otp' => $otp,
                // 'otp'=>$final_otp,

            ];

            $insert = Secret::create($data);

            if ($insert) {
                //  $send = $smsLibrary->send_sms($request->mobile, $final_otp);

                return response()->json([
                    'status' => true,
                    'message' => 'OTP has sent to your mobile number',
                    'data' => $request->mobile,
                    "otp" => $otp
                ]);
            }
        } else {
            $otp = 1342;
            // $final_otp = $smsLibrary->generateOTP($request->mobile);
            $secret_data = [

                'mobile' => $request->mobile,
                'otp' => $otp,
                //'otp'=>$final_otp,

            ];

            $insert = Secret::create($secret_data);

            if ($insert) {
                // $send = $smsLibrary->send_sms($request->mobile, $final_otp);
                return response()->json(['status' => true,  'message' => 'OTP has sent to your mobile number', 'data' => $request->mobile]);
            }
        }
    }


    public function verify_otp(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'mobile' => 'required|digits:10',
            'otp' => 'required|digits:4',
        ]);

        if ($validation->fails()) {
            return response()->json(['status' => false, 'message' => $validation->errors()->first(), 'data' => $request->mobile]);
        }

        $secrets = Secret::where('mobile', $request->mobile)->where('is_used', 0)->orderby('id', 'desc')->first();
        $currentTime = date('Y-m-d H:i:s');
        if (isset($secrets)) {

            $otp_expired_at = Date("Y-m-d H:i:s", strtotime("5 minutes", strtotime($secrets->created_at)));

            if ($currentTime > $otp_expired_at) {
                return response()->json(['status' => true, 'message' => 'OTP Expired', 'mobile' => $request->mobile]);
            }

            if ($request->otp != $secrets->otp) {
                return response()->json(['status' => true, 'message' => 'Incorrect OTP', 'mobile' => $request->mobile]);
            }

            $secrets_update = Secret::where('mobile', $request->mobile)->update(['is_used' => 1]);
            
            $user = User::where('mobile', $request->mobile)->first();
            // dd($user) ; 
            if ($user) {
                $token =  $user->createToken('jaminjaidad')->accessToken;
                if (Auth::guard('user')->loginUsingId($user->id)) {
                    return response()->json([
                        'status' => true,
                        'flag' => '1',
                        'message' => 'Login Successfull',
                        'token' => $token,
                        'data' => $user,
                    ]);
                }
            } else {
                return response()->json(['status' => true, 'flag' => '2', 'message' => 'Mobile number is not Registered', 'data' => null]);
            }
        } else {
            return response()->json(['status' => false, 'message' => 'Invalid OTP', 'data' => $request->mobile]);
        }
    }


    public function resend_otp(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'mobile' => 'required|digits:10',
        ]);

        if ($validation->fails()) {
            return response()->json(['status' => false, 'message' => $validation->errors()->first(), 'data' => $request->mobile]);
        }

        $otp = 1234;

        $secret_data = [

            'mobile' => $request->mobile,
            'otp' => $otp,
            'created_at' => date('Y-m-d H:i:s')
        ];

        $insert = Secret::create($secret_data);
        if ($insert) {
            return response()->json(['status' => true, 'message' => 'OTP Resended to your registered mobile number', 'data' => $request->mobile]);
        } else {
            return response()->json(['status' => false, 'message' => 'Something went wrong', 'data' => $request->mobile]);
        }
    }




    public function submit_details(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'mobile' => 'required|digits:10',
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if ($validation->fails()) {
            return response()->json(['status' => false, 'message' => $validation->errors()->first(), 'data' => $request->all()]);
        }

        $count_user = User::where('mobile', $request->mobile)->count();

        if ($count_user) {
            return response()->json(['status' => false, 'message' => 'Mobile Number already exist', 'data' => $request->all()]);
        }

        $data = [
            'mobile' => $request->mobile,
            'name' => $request->name,
            'email' => $request->email,
        ];

        $user = User::create($data);

        if ($user) {
            return response()->json([
                'status' => true,
                'message' => 'Details submitted successfully',
                'id' => $user->id,
                'data' => $user,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong!',
                'data' => $data,
            ]);
        }
    }

    public function education_submit(Request $request)
    { 
        // dd($request->all()); 
        $validation = Validator::make($request->all(), [
            'highest_qualification' => 'required',
            'current_preparation' => 'required',
            'guardian_name' => 'required',
            'guardian_number' => 'required',
            'guardian_relation' => 'required',
            'id' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json(['status' => false, 'message' => $validation->errors()->first(), 'data' => $request->all()]);
        }

        $data = [
            'highest_qualification' => $request->highest_qualification,
            'current_preparation' => $request->current_preparation,
            'guardian_name' => $request->guardian_name,
            'guardian_number' => $request->guardian_number,
            'guardian_relation' => $request->guardian_relation,
        ];

        // dd($data);

        $user = User::where('id', $request->id)->update($data);
        $get_user = User::where('id', $request->id)->first();
        if ($get_user) {
            $token =  $get_user->createToken('hometoexam')->accessToken;
            if (Auth::guard('user')->loginUsingId($get_user->id)) {
                return response()->json([
                    'status' => true,
                    'flag' => '1',
                    'message' => 'Login Successfull',
                    'token' => $token,
                    'data' => $get_user,
                ]);
            }
        } else {
            return response()->json(['status' => false, 'flag' => '2', 'message' => 'Something went wrong', 'data' => $data]);
        }
    }


    public function get_profile(Request $request)
    {
        $id = auth()->user()->id;
        $data = User::where('id', $id)->first();
        if (isset($data)) {
            $image = asset("storage/profile/" . $data->profile_pic);
            $data->profile_pic = $image;
        }
        $data = $data;
        if ($data) {
            return response()->json(['status' => true, 'message' => 'Data fetched Successfully', 'data' => $data]);
        } else {
            return response()->json(['status' => false, 'message' => 'No data found', 'data' => $data]);
        }
    }

    public function edit_profile(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json(['status' => false, 'message' => $validation->errors()->first(), 'data' => $request->all()]);
        }

        if ($request->file('profile_pic')) {
            $ext = $request->file('profile_pic')->getClientOriginalExtension();
            $profile_pic = rand(100000000, 999999999) . '_profile_pic.' . $ext;

            $uploadPath = 'public/profile';

            if (!Storage::exists($uploadPath)) {
                Storage::makeDirectory($uploadPath, 0775, true); //creates directory
            }
            $request->file('profile_pic')->storeAs($uploadPath, $profile_pic);
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'highest_qualification' => $request->highest_qualification,
            'current_preparation' => $request->current_preparation,
            'guardian_name' => $request->guardian_name,
            'guardian_number' => $request->guardian_number,
            'guardian_relation' => $request->guardian_relation,
            'profile_pic' => $profile_pic,
        ];

        $user = User::where('id', auth()->user()->id)->update($data);
        $get_user = User::where('id', auth()->user()->id)->first();

        if ($user) {
            return response()->json(['status' => true, 'message' => 'Data Updated Successfully', 'data' => $get_user]);
        } else {
            return response()->json(['status' => false, 'message' => 'Something went wrong !!', 'data' => $data]);
        }
    }

    public function get_banner(Request $request)
    {

        $datas = DB::table('banners')->where('status', 'Y')->where('is_active', 'Yes')->get();

        if (isset($datas[0])) {
            foreach ($datas as $row) {
                $image = NULL;
                if (isset($row->image)) {
                    $image = asset("storage/banners/" . $row->image);
                }
                $row->image = $image;
            }
        }

        $data = $datas;

        if ($data) {
            return response()->json(['status' => true, 'message' => 'Data fetched Successfully', 'data' => $data]);
        } else {
            return response()->json(['status' => true, 'message' => 'No data found', 'data' => $data]);
        }
    }




    public function update_location(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'loc_longitude' => 'required',
            'loc_latitude' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json(['status' => false, 'message' => $validation->errors()->first(), 'data' => $request->all()]);
        }

        $data = [
            'loc_longitude' => $request->loc_longitude,
            'loc_latitude' => $request->loc_latitude,
            'loc_address' => $request->loc_address,
        ];

        $user = User::where('id', auth()->user()->id)->update($data);
        $get_user = User::where('id', auth()->user()->id)->first();

        if ($user) {
            return response()->json(['status' => true, 'message' => 'Data Updated Successfully', 'data' => $get_user]);
        } else {
            return response()->json(['status' => false, 'message' => 'Something went wrong !!', 'data' => $data]);
        }
    }



    public function post_property(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'project_name' => $request->created_by == 'Developer' ? 'required' :   '',
            'rera_no' => $request->created_by == 'Developer' ? 'required' :   '',
            'type_of_property' => 'required',
            'squre' => 'required',
            'size' => 'required',
            'dimension' => $request->created_by != 'Developer' ? 'required' :   '',
            'size_squre' => '',
            'road_touch' => $request->created_by != 'Developer' ? 'required' :   '',
            'plot_facing' => $request->created_by != 'Developer' ? 'required' :   '',
            'airport' => $request->created_by != 'Developer' ? 'required' :   '',
            'railway' => $request->created_by != 'Developer' ? 'required' :   '',
            'bus_stand' => $request->created_by != 'Developer' ? 'required' :   '',
            'hospital' => $request->created_by != 'Developer' ? 'required' :   '',
            'school' => $request->created_by != 'Developer' ? 'required' :   '',
            'city' => 'required',
            'locality' => 'required',
            'sub_locality' => '',
            'address' => 'required',
            'basic_requirement' => $request->created_by != 'Developer' ? 'required' :   '',
            'price' => 'required',
            'price_squre' => 'required',
            'photos' => 'required',
            'file' => 'required',
            'youtube_link' => 'required',
            'drone_link' => 'required',
            'description' => $request->created_by == 'Developer' ? 'required' :   '',
            'ammeties' => $request->created_by == 'Developer' ? 'required' :   '',
            'no_of_plot' => $request->created_by == 'Developer' ? 'required' :   '',
            'property_type' => 'required',
            'created_by' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json(['status' => false, 'message' => $validation->errors()->first()]);

        }
            $data = $request->all() ; 
            $photos= [] ; 
            if ($request->hasFile('photos')) {
                $photo = $request->file('photos') ; 
                $ext = $photo->getClientOriginalExtension();
                $photo_name = time()  .'_photo_'.'.'. $ext;
                $uploadPath = 'public/photo';
                if (!Storage::exists($uploadPath)) {
                    Storage::makeDirectory($uploadPath, 0775, true);
                }
                $photo->storeAs($uploadPath, $photo_name);
                $data['photos'] = $photo_name ; 
            }
            if ($request->hasFile('file')) {
                $file = $request->file('file') ; 
                $ext = $file->getClientOriginalExtension();
                $file_name = time()  .'_file_'.'.'. $ext;
                $uploadPath = 'public/file';
                if (!Storage::exists($uploadPath)) {
                    Storage::makeDirectory($uploadPath, 0775, true);
                }
                $file->storeAs($uploadPath, $file_name);
                $data['file'] = $file_name ; 
            }
            $data['user_id'] = Auth::user()->id ;
            $insert = DB::table('properties')->insert($data) ; 
            if ($insert) {
                return response()->json(['status' => true, 'message' => 'Property Submit Successfully Wait For Admin Approval']);
            }
            else { 
                return response()->json(['status' => flase, 'message' => 'Something Went Wrong']);
            }
    }
    public function my_property(Request $request) { 

        $property = DB::table('properties')->where('user_id', Auth::user()->id);
        if (isset($request->status)) {
            $property->where('status',$request->status) ; 
        }
        if (isset($request->created_by)) {
            $property->where('created_by',$request->created_by) ; 
        }
       $data =  $property->orderBy('id','DESC')->get() ; 
        return response()->json(['status' => true, 'message' => 'Data Fetched Successfully', 'data' => $data]);
    }
    public function all_properties(Request $request) { 
        $property = DB::table('properties')->where('user_id', Auth::user()->id) ; 
        if (isset($request->property_type)) {
            $property->where('property_type',$request->property_type) ; 
        }
       $data =  $property->orderBy('id','DESC')->get() ; 
        return response()->json(['status' => true, 'message' => 'Data Fetched Successfully', 'data' => $data]);
    }
    public function enquiry(Request $request) { 
        $validation = Validator::make($request->all(), [
            'property_type' => 'required',
            'created_by' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json(['status' => false, 'message' => $validation->errors()->first()]);
        }
     }
}
