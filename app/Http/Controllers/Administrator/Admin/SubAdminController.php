<?php

namespace App\Http\Controllers\Administrator\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Library\Structure;
use Validator;
use App\Models\Vendor;
use Illuminate\Support\Facades\DB;

class SubAdminController extends Controller
{
    use Structure;
    
    /**
     * Show the application dashboard.
     */
    public function index()
    {
        $data['vendors']=Vendor::where('status','Y')->where('approved','requested')->get();
        $data['cities']=DB::table('categories')->where('status', 'Y')->get();
        return view('administrator.admin.sub-admins')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), 
            [ 
              'name' => 'required',  
              'email' => 'required|email|unique:admins',  
              'phone' => 'required|numeric|unique:admins',  
              'password' => 'required|min:6',  
              'confirm_password' => 'required|same:password',  
            ]);

        if ($validator->fails()) {
            return response()->json($this->structure(false, $validator->errors()->first()), 200);
        }

        $admin = new Admin();

        $admin->name = ucwords($request->name);
        $admin->email = strtolower($request->email);
        $admin->phone = $request->phone;
        $admin->role = 'vendor';
        $admin->password = bcrypt($request->password);
        $admin->name = ucwords($request->name);

        try {
            $admin->save();
            return response()->json($this->structure(true, 'Sub Admin Added Successfully!'), 200);
        } catch (\Throwable $th) {
            return response()->json($this->structure(false, "Something went wrong, Try again!"), 200);
        }
    }

    /**
     * Show data in datatable.
     */
    public function data(Request $request){

      //  $data = Vendor::where('role', 'vendor')->where('approved', 'requested')->orderBy('id', 'desc')->get();

     // $data = DB::table('vendors')->where('vendors.status', 'Y')->where('vendors.approved', 'requested');
     // ->join('categories as c','c.vendor_id','vendors.id');

     $data = DB::table('vendors')->where('vendors.status', 'Y')->where('vendors.approved', 'requested')
     ->join('categories as c','c.vendor_id','vendors.id')->orderBy('vendors.id', 'desc');


     if($request->vendor!=null)
     {
         $data->where('vendor_id',$request->vendor);
     }

     if($request->city!=null)
     {
         $data->where('buisness_city',$request->city);
     }
 
     if($request->status!=null)
     {
         $data->where('is_active',$request->status);
     }

     if($request->buisness_type!=null)
     {
         $data->where('category',$request->buisness_type);
     }

      $data=$data->get();
     
        return datatables()->of($data)
        
        ->addColumn('name', function ($data) {
            return $data->name;
        })

        ->addColumn('category', function ($data) {

          //  $category=DB::table('categories')->where('vendor_id',$data->id)->value('type');
          $vendor_id=DB::table('categories')->where('id',$data->id)->value('vendor_id');
          $category=DB::table('vendors')->where('id',$vendor_id)->value('category');

            $category_name="";
            if($category=='transport')
            {
                $category_name='Transport';
            }
            if($category=='food')
            {
                $category_name='Food';
            }
            if($category=='accomodation')
            {
                $category_name='Accomodation';
            }
            return $category_name;
        })

        ->addColumn('enquiry_number', function ($data) {
            $enquiry_number=DB::table('categories')->where('id',$data->id)->value('enquiry_number');
            return $enquiry_number;
        })

        ->addColumn('action', function ($data) {


            $button = '<div class="ui" style="width: 150px;">';

            // if ($data->is_active == 'Yes') {
            //     $button .= '<a href="javascript:void(0)" name="disable" data-value="'.$data->id.'" class="status-btn btn btn-sm btn-danger" style="padding:.700rem .666rem;"><i class="bx bx-block"></i>Reject</a>';
            // }else{
            //     $button .= '<a href="javascript:void(0)" name="enable" data-value="'.$data->id.'" class="status-btn btn btn-sm btn-success" style="padding:.700rem .666rem;"><i class="bx bx-check"></i>Approve</a>';
            // }
            $button .= '<a href="javascript:void(0)" name="view" data-value="'.$data->id.'" class="view btn btn-sm btn-primary" style="padding:.700rem .666rem;"><i class="bx bx-info-circle style="font-size:14px;"></i></a>';

            $button .= ' <a href="javascript:void(0)" name="approve" data-value="'.$data->id.'" class="approve btn btn-sm btn-success" style="padding:.700rem .666rem ;"><i class="bx bx-check" style="font-size:14px;"></i></a>';
           
            $button .= ' <a href="javascript:void(0)" name="reject" data-value="'.$data->id.'" class="reject btn btn-sm btn-danger" style="padding:.700rem .666rem;"><i class="bx bx-x" style="font-size:14px;"></i></a>';
           
            $button .= ' <a href="javascript:void(0)" name="delete" data-value="'.$data->id.'" class="delete btn btn-sm btn-danger" style="padding:.700rem .666rem;"><i class="bx bx-trash" style="font-size:14px;"></i></a>';
           
        
           
            $button .= '</div>';
            return $button;
        })
        
        ->addColumn('status', function ($data) {

            $vendor_id=DB::table('categories')->where('id',$data->id)->value('vendor_id');
            $is_active=DB::table('vendors')->where('id',$vendor_id)->value('is_active');

            if ($is_active == 'Yes') {
                return '<span class="badge badge-light-info">Active</span>';
            }
            return '<span class="badge badge-light-danger">In-Active</span>';
        })
        
        ->addColumn('contact', function ($data) { 
            $contact = '';
            if ($data->mobile) {
                $contact .= '<span style="display:block;" class="subadmin-contact">'.$data->mobile.'</a></span>'; 
            }
            if ($data->email) {
                 $contact .= '<span style="display:block;" class="subadmin-contact">'.$data->email.'</a></span>';
            }
            return $contact;
        })
        
        ->setRowClass(function ($user) {
                    return 'vendor-edit-btn';
        })
        
        ->setRowAttr([
            'style' => 'cursor:pointer;',
            'data-value' => '{{$id}}|{{$name}}|{{$email}}',
        ])
        
        ->rawColumns(['name','category','action','enquiry_number', 'contact', 'status'])->make(true);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        $validator = Validator::make($request->all(), 
            [ 
              'name' => 'required',  
              'email' => 'required|email',  
              'phone' => 'required|numeric',
            ]);

        if ($validator->fails()) {
            return response()->json($this->structure(false, $validator->errors()->first()), 200);
        }

        if ($admin = Admin::find($request->sub_admin_id)) {

            if (Admin::where('id', '!=', $admin->id)->where('email', $request->email)->count()) {
                return response()->json($this->structure(false, "Email is already exist!"), 200);
            }
            if (Admin::where('id', '!=', $admin->id)->where('phone', $request->email)->count()) {
                return response()->json($this->structure(false, "Phone is already exist!"), 200);
            }

            $admin->name = ucwords($request->name);
            $admin->email = strtolower($request->email);
            $admin->phone = $request->phone;
            $admin->role = 'vendor';
            $admin->updated_at = date('Y-m-d h:i:s');

            try {
                
                if ($request->password) {
                
                    if ($request->password != $request->confirm_password) {
                        return response()->json($this->structure(false, "Passwword & confirm password must be match!"), 200);
                    }
                    $request->password = bcrypt($request->password);
                }
                
                $admin->save();
                return response()->json($this->structure(true, 'Sub Admin Updated Successfully!'), 200);
            } catch (\Throwable $th) {
                return response()->json($this->structure(false, "Internal server error!"), 200);
            }
        }
        return response()->json($this->structure(false, "Something went wrong, Try again!"), 200);
    }

    public function approve(Request $request){

        if ($request->status == 'approve') {
           $data = ['approved' => 'approved'];
        }

        
        $vendor_id=DB::table('categories')->where('id',$request->id)->value('vendor_id');

        $response = Vendor::where('role', 'vendor')->where('id', $vendor_id)->update($data);

        if ($response > 0) {
           
            return response()->json($this->structure(true, "Vendor Approved Succesfully"), 200);
        }
        return response()->json($this->structure(false, "Somethingg went wrong, try again!"), 200);
    }

    public function reject(Request $request){

        if ($request->status == 'reject') {
           $data = ['approved' => 'rejected'];
        }
         
        $vendor_id=DB::table('categories')->where('id',$request->id)->value('vendor_id');

        $response = Vendor::where('role', 'vendor')->where('id', $vendor_id)->update($data);

        if ($response > 0) {
           
            return response()->json($this->structure(true, "Vendor Rejected Succesfully"), 200);
        }
        return response()->json($this->structure(false, "Something went wrong, try again!"), 200);
    }

    public function delete(Request $request){

        if ($request->status == 'delete') {
           $data = ['status' => 'N'];
        }
         
        $vendor_id=DB::table('categories')->where('id',$request->id)->value('vendor_id');

        $response = Vendor::where('role', 'vendor')->where('id', $vendor_id)->update($data);

        if ($response > 0) {
           
            return response()->json($this->structure(true, "Vendor Deleted Succesfully"), 200);
        }
        return response()->json($this->structure(false, "Something went wrong, try again!"), 200);
    }

    public function view_vendor(Request $request){

        $data = DB::table('categories')->where('vendor_id', $request->id)->get();
       
         return response()->json(['data'=>$data ]);
       
    }

    public function profile(Request $request,$id){
       // dd($request->id);
        $id=$request->id;
        $vendor_id=DB::table('categories')->where('id',  $id)->value('vendor_id');
        $data['vendor']=Vendor::where('id',$vendor_id)->first();
        $data['detail']=DB::table('categories')->where('vendor_id', $vendor_id)->first();
        
        return view('administrator.admin.profile_vendor')->with($data);
       
    }

    public function approved_vendor(Request $request)
    {
        $data['vendors']=Vendor::where('status','Y')->where('approved','approved')->get();
        $data['cities']=DB::table('categories')->where('status', 'Y')->get();
       
        return view('administrator.admin.approved_vendor')->with($data);
    }


    public function approved(Request $request){

      //  $data = Vendor::where('role', 'vendor')->where('approved', 'approved')->where('status', 'Y')->orderBy('id', 'desc');

        $data = DB::table('vendors')->where('vendors.status', 'Y')->where('vendors.approved', 'approved')
        ->join('categories as c','c.vendor_id','vendors.id')->orderBy('vendors.id', 'desc');

        // dd($data);

        if($request->vendor!=null)
        {
            $data->where('vendor_id',$request->vendor);
        }

        if($request->city!=null)
        {
            $data->where('buisness_city',$request->city);
        }
    
        if($request->status!=null)
        {
            $data->where('is_active',$request->status);
        }

        if($request->buisness_type!=null)
        {
            $data->where('category',$request->buisness_type);
        }

       // $data = $data->select('vendors.*', 'c.vendor_id')->get();
           $data = $data->get();
      //  dd( $data );
        return datatables()->of($data)
        
        ->addColumn('name', function ($data) {
            return $data->name;
        })

        ->addColumn('category', function ($data) {

            $vendor_id=DB::table('categories')->where('id',$data->id)->value('vendor_id');
            $category=DB::table('vendors')->where('id',$vendor_id)->value('category');
           // dd($category);
            $category_name="";
            if($category=='transport')
            {
                $category_name='Transport';
            }
            if($category=='food')
            {
                $category_name='Food';
            }
            if($category=='accomodation')
            {
                $category_name='Accomodation';
            }
            return $category_name;
        })

        ->addColumn('enquiry_number', function ($data) {

            $enquiry_number=DB::table('categories')->where('id',$data->id)->value('enquiry_number');
            return $enquiry_number;
        })

        ->addColumn('action', function ($data) {

            $vendor_id=DB::table('categories')->where('id',$data->id)->value('vendor_id');
            $is_active=DB::table('vendors')->where('id',$vendor_id)->value('is_active');

            $button = '<div class="ui" style="width: 150px;">';

            $button .= ' <a href="javascript:void(0)" name="view" data-value="'.$data->id.'" class="view btn btn-sm btn-primary" style="padding:.700rem .666rem;"><i class="bx bx-info-circle"></i></a>';
           
            if ($is_active == 'Yes') {
                $button .= ' <a href="javascript:void(0)" name="disable" data-value="'.$data->id.'" class="disable btn btn-sm btn-danger" style="padding:.700rem .666rem;"><i class="bx bx-block"></i></a>';
            }else{
                $button .= ' <a href="javascript:void(0)" name="enable" data-value="'.$data->id.'" class="enable btn btn-sm btn-success" style="padding:.700rem .666rem;"><i class="bx bx-x"></i></a>';
            }
           
            $button .= ' <a href="javascript:void(0)" name="delete" data-value="'.$data->id.'" class="delete btn btn-sm btn-warning" style="padding:.700rem .666rem;"><i class="bx bx-trash"></i></a>';
           
            $button .= '</div>';
            return $button;
        })
        
        ->addColumn('status', function ($data) {
            $vendor_id=DB::table('categories')->where('id',$data->id)->value('vendor_id');
            $is_active=DB::table('vendors')->where('id',$vendor_id)->value('is_active');
            if ($is_active == 'Yes') {
                return '<span class="badge badge-light-info">Active</span>';
            }
            return '<span class="badge badge-light-danger">In-Active</span>';
        })
        
        ->addColumn('contact', function ($data) {
            $contact = '';
            if ($data->mobile) {
                $contact .= '<span style="display:block;" class="subadmin-contact"><a'.$data->mobile.'" style="color:#0a187c;">'.$data->mobile.'</a></span>';  }
            if ($data->email) {
                 $contact .= '<span style="display:block;" class="subadmin-contact"><a'.$data->email.'" style="color:#0a187c;">'.$data->email.'</a></span>';
            }
            return $contact;
        })
        
        ->setRowClass(function ($user) {
                    return 'vendor-edit-btn';
        })
        
        ->setRowAttr([
            'style' => 'cursor:pointer;',
            'data-value' => '{{$id}}|{{$name}}|{{$email}}',
        ])
        
        ->rawColumns(['name','category','action','enquiry_number', 'contact', 'status'])->make(true);
    }

    public function disable(Request $request){

        if ($request->status == 'disable') {
           $data = ['is_active' => 'No'];
        }

        $vendor_id=DB::table('categories')->where('id',$request->id)->value('vendor_id');

        $response = Vendor::where('role', 'vendor')->where('id', $vendor_id)->update($data);

        if ($response > 0) {
           
            return response()->json($this->structure(true, "Vendor Blocked Succesfully"), 200);
        }

        return response()->json($this->structure(false, "Somethingg went wrong, try again!"), 200);

    }

    public function enable(Request $request){

        if ($request->status == 'enable') {
           $data = ['is_active' => 'Yes'];
        }

        $vendor_id=DB::table('categories')->where('id',$request->id)->value('vendor_id');

        $response = Vendor::where('role', 'vendor')->where('id', $vendor_id)->update($data);
        
        if ($response > 0) {
           
            return response()->json($this->structure(true, "Vendor Unblocked Succesfully"), 200);
        }
        return response()->json($this->structure(false, "Something went wrong, try again!"), 200);
    }


}
