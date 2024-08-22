<?php

namespace App\Http\Controllers\Administrator\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Library\Structure;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Vendor;
use Storage;

class HomeController extends Controller
{
    use Structure;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('administrator.admin.home');
    }

    public function password_update(Request $request){
        
        $validator = Validator::make($request->all(), 
            [ 
              'current_password' => 'required|min:6',  
              'password' => 'required|min:6',  
              'confirm_password' => 'required|same:password|min:6',  
            ]);

        if ($validator->fails()) {
            return response()->json($this->structure(false, $validator->errors()->first()), 200);
        }

        try {
            $admin = Admin::findOrFail(Auth::guard('admin')->user()->id);
        } catch (\Exception $e) {
            return response()->json($this->structure(false, 'Something went wrong!'), 200);
        }

        if (!(Hash::check($request->current_password, $admin->password))) {
            return response()->json($this->structure(false, 'Old password is not currect!'), 200);
        }

        $admin->password = Hash::make($request->password);
        $admin->updated_at = date('Y-m-d h:i:s');

        if ($admin->save()) {
            return response()->json($this->structure(true, 'Password has changed Successfully!'), 200);
        }
        return response()->json($this->structure(false, 'Something went wrong!'), 200);
    }



  
   

   
    public function promotions()
    {
        return view('administrator.admin.promotions');
    }
    
    public function banner()
    {
        return view('administrator.admin.promotion.banner.banner_list');
    }

    public function bannerDataTable(Request $request)
    {
    
    $data = DB::table('banners')->where('status', 'Y')->orderBy('id', 'desc')->get();
       

        return datatables()->of($data)
        
        ->addColumn('banner_image', function ($data) {
            $img = '-';
            if(isset($data->image))
            {
                $imgPath = asset("storage/banners/".$data->image);
                $img = '<img src="'.$imgPath.'" alt="image" border="0" width="130" height="100" class="img-rounded" align="center" />'; 
            }
            return $img;
        })

        ->addColumn('position', function ($data) {
            return $data->position;
        })

        ->addColumn('location', function ($data) {
            return $data->loc_address;
        })

        ->addColumn('action', function ($data) {

            $button = '<div class="ui" style="width: 150px;">';

            $button .= ' <a href="javascript:void(0)" name="edit" data-value="'.$data->id.'" class="edit btn btn-sm btn-primary" style="padding:.700rem .666rem;"><i class="bx bx-edit"></i></a>';
           
            if ($data->is_active == 'Yes') {
                $button .= ' <a href="javascript:void(0)" name="disable" data-value="'.$data->id.'" class="disable status-btn btn btn-sm btn-danger" style="padding:.700rem .666rem;"><i class="bx bx-block"></i></a>';
            }else{
                $button .= ' <a href="javascript:void(0)" name="enable" data-value="'.$data->id.'" class="enable status-btn btn btn-sm btn-success" style="padding:.700rem .666rem;"><i class="bx bx-check"></i></a>';
            }
          
            $button .= ' <a href="javascript:void(0)" name="delete" data-value="'.$data->id.'" class="delete btn btn-sm btn-danger" style="padding:.700rem .666rem;"><i class="bx bx-trash"></i></a>';
           
            $button .= '</div>';

            return $button;

        })
        
        ->addColumn('status', function ($data) {
            if ($data->is_active == 'Yes') {
                return '<span class="badge badge-light-info">Active</span>';
            }
            return '<span class="badge badge-light-danger">In-Active</span>';
        })
        
      
        ->rawColumns(['banner_image','position','location', 'status','action'])->make(true);
    }
    

    public function add_banner(Request $request)
    {
       return view('administrator.admin.promotion.banner.add_banner');
    }

    public function add_banner_detail(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'banner_image' => 'required',
            'loc_address' => 'required',
           
        ]);
        
        if ($request->banner_image==null) {
            return response()->json(['error'=> true, 'message' => 'Please select Banner image']);
        }

        if ($request->loc_address==null) {
            return response()->json(['error'=> true, 'message' => 'Please Select Banner Location']);
        }

        if($request->id==null)
        {
        $banner_image = NULL;

        if($request->file('banner_image'))
        {
            $ext = $request->file('banner_image')->getClientOriginalExtension();
            $banner_image = rand(100000000, 999999999).'_food.'.$ext;

          
            $uploadPath = 'public/banners';
            if(!Storage::exists($uploadPath))
            {
                Storage::makeDirectory($uploadPath, 0775, true); //creates directory
            }
            $request->file('banner_image')->storeAs($uploadPath, $banner_image);
        }

        $data=[
          
            'image'=> $banner_image,
            'position'=> $request->position,
            'loc_latitude' =>$request->loc_latitude,
            'loc_longitude' =>$request->loc_longitude,
            'loc_address'=>$request->loc_address,
        ];

        $insert=DB::table('banners')->insert($data);

         if($insert)
        {
        return response()->json(['error' => false,'message'=>'Data added Successfully']);
        }
        else{
            return response()->json(['error' => false,'message'=>'Something went wrong']);
        }
    }
    else{
        $banner_image = NULL;
        if($request->file('banner_image'))
        {
            $ext = $request->file('banner_image')->getClientOriginalExtension();
            $banner_image = rand(100000000, 999999999).'_food.'.$ext;

          
            $uploadPath = 'public/banners';
            if(!Storage::exists($uploadPath))
            {
                Storage::makeDirectory($uploadPath, 0775, true); //creates directory
            }
            $request->file('banner_image')->storeAs($uploadPath, $banner_image);
        }

        $data=[
          
            'image'=> $banner_image,
            'position'=> $request->position,
            'loc_latitude' =>$request->loc_latitude,
            'loc_longitude' =>$request->loc_longitude,
            'loc_address'=>$request->loc_address,
        ];

        $insert=DB::table('banners')->where('id',$request->id)->update($data);

        if($insert)
        {
        return response()->json(['error' => false,'message'=>'Data Updated Successfully']);
        }
        else{
            return response()->json(['error' => false,'message'=>'Something went wrong']);
        }
    }
    }

    public function edit_banner(Request $request,$id)
    {
        $data['banner']=DB::table('banners')->where('id',$request->id)->where('status','Y')->first();
       return view('administrator.admin.promotion.banner.edit_banner')->with($data);
    }


    public function banner_enable(Request $request){

        if ($request->status == 'enable') {
           $data = ['is_active' => 'Yes'];
        }
        $response = DB::table('banners')->where('id', $request->id)->update($data);

        if ($response > 0) {
           
            return response()->json($this->structure(true, "Data Activated Succesfully"), 200);
        }
        return response()->json($this->structure(false, "Something went wrong, try again!"), 200);
    }

    public function banner_disable(Request $request){

        if ($request->status == 'disable') {
           $data = ['is_active' => 'No'];
        }

        $response = DB::table('banners')->where('id', $request->id)->update($data);
        if ($response > 0) {
           
            return response()->json($this->structure(true, "Data Blocked Succesfully"), 200);
        }
        return response()->json($this->structure(false, "Something went wrong, try again!"), 200);
    }

    public function banner_delete(Request $request){

        if ($request->status == 'delete') {
           $data = ['status' => 'N'];
        }
        $response =  DB::table('banners')->where('id', $request->id)->update($data);
        if ($response > 0) {
           
            return response()->json($this->structure(true, "Data Deleted Succesfully"), 200);
        }
        return response()->json($this->structure(false, "Something went wrong, try again!"), 200);
    }

 
}

    


