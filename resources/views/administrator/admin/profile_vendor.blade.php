@extends('administrator.layouts/verticalLayoutMaster')

@section('title', 'Vendor Profile')

@section('content')

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css ') }}">
    
   
  
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/sweetalert2.min.css') }}">
<!-- Page layout -->
<style type="text/css">
      table th {
        font-size: 10px !important;
        padding: 10px !important;
      }
      table tbody td {
        font-size: 11px !important;
        padding: 10px !important;
      }

      .select2-container {
        width: 100% !important;
      }

      .dt-buttons{
        float: left !important;
        padding-bottom: 10px;
      }

      .dataTables_filter,
        .dataTables_length {
          display: inline-block;
          margin-left: 1em;
        }
    </style>



<link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/pages/page-user-profile.min.css') }}">
<!-- BEGIN: Content-->
<style type="text/css">
  .select2-container {
    width: 100% !important;
  }
</style>

<style type="text/css">
  .list-group-item {
    display: inline-flex !important;
    padding: 15px;
    font-size: 17px;
  }

  .dt-buttons{
    float: left !important;
    padding-bottom: 10px;
  }

  .list-group .list-group-item i {
    font-size: 1.5rem !important;
  }

  table th {
    font-size: 10px !important;
    padding: 10px !important;
  }
  table tbody td {
    font-size: 11px !important;
    padding: 10px !important;
  }
</style>

<style>
  #widgets-Statistics .row .col-xl-2 .card:hover{
    box-shadow: -8px 12px 18px 0 rgba(25,42,70,.13);
  }
  #widgets-Statistics .row .col-xl-2 .card{
    cursor: pointer;
    box-shadow: 0px 0px 0px 0 rgba(25,42,70,.13);
    /*clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);*/
    clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0% 0%);
  }
  .active-label{
    box-shadow: -8px 12px 18px 0 rgb(25 42 70 / 38%) !important;
    background-color: #E34400;
    color: white !important;
  }
  .active-label p{
    color: #E34400 !important;
  }
  .active-label h2{
    color: #E34400 !important;
  }

  .deal-add-label{
    cursor: pointer;
    background-color: #80808063;  
    clip-path: polygon(75% 0%, 93% 48%, 78% 100%, 0% 100%, 10% 49%, 0% 0%); 
    height:35px;
  }
  .deal-add-label-active{
    cursor: pointer;
    background-color: #32557f;
    clip-path: polygon(75% 0%, 93% 48%, 78% 100%, 0% 100%, 10% 49%, 0% 0%); 
    height:35px;
  }
  .deal-add-label p, .deal-add-label-active p{
    position: relative;
    top: 6px;
    color: white;
    text-align: center;
    font-size: 13px;
  }

  .page-user-profile .user-profile-text {
     bottom: 90px !important; 
  }

  @media (max-width: 767px) {
    .page-user-profile .user-profile-text {
        left: 30%;
    }

    .team-tabs{
      padding-top: 120px !important;
    }

}
</style>

<div class="card">
  <div class="card-body pt-1">
   
  
      <section id="ajax-datatable">
        <div class="row">
         

            <div class="card">
              <input type="hidden" id="user-id" value="{{isset($vendor->id) ? $vendor->id : ''}}"/>
              <div class="col-md-4">
                <div class="user-profile-images">
                      <div>&nbsp;</div>
                        <img src="{{ asset('assets/img/pages/user.png') }}" class="user-profile-image rounded"
                          alt="user profile image" height="140" width="140">
                      </div>
                </div>
              </div>

              <div class="col-md-8">
              <div class="user-profile-text mt-0">
                <h4 class="mb-0 text-bold-500 profile-text-color" style="font-family: 'Lato';letter-spacing: 0.5px; padding-bottom: 10px;">{{isset($vendor->name) ? $vendor->name : '-'}}</h4>
                <h5 class="mb-0 text-bold-500 profile-text-color" style="font-family: 'Lato';letter-spacing: 0.5px; padding-bottom: 10px;">91+{{isset($vendor->mobile) ? $vendor->mobile : '-'}}</h4>
                <h5 class="mb-0 text-bold-500 profile-text-color" style="font-family: 'Lato';letter-spacing: 0.5px; padding-bottom: 10px;">{{isset($vendor->email) ? $vendor->email : '-'}}</h4>
                <h4 class="mb-0 text-bold-500 profile-text-color" style="font-family: 'Lato';letter-spacing: 0.5px; padding-bottom: 10px;">Vendor</h4>
               
                
              
              
             
          

              <div class="team-tabs">
                <ul class="nav user-profile-nav justify-content-center justify-content-md-start nav-pills border-bottom-0 mb-0" role="tablist">

                <li class="nav-item">
                    <a class="nav-link d-flex px-1 active" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile" role="tab" aria-selected="true"><i class="bx bxs-user-circle" style="margin-right: 5px!important;"></i><span class="d-none d-md-block">Overview</span></a>
                  </li> &nbsp&nbsp&nbsp&nbsp

                  <li class="nav-item">
                    <a class="nav-link d-flex px-1" id="bookings-tab" data-toggle="tab" href="#bookings" aria-controls="bookings" role="tab" aria-selected="false"><i class="ficon bx bx-chart" style="margin-right: 5px!important;"></i><span class="d-none d-md-block">Bookings</span></a>
                  </li> &nbsp&nbsp&nbsp&nbsp

                  <li class="nav-item">
                    <a class="nav-link d-flex px-1" id="orders-tab" data-toggle="tab" href="#orders" aria-controls="orders" role="tab" aria-selected="false"><i class="bx bxs-group" style="margin-right: 5px!important;"></i><span class="d-none d-md-block">Orders</span></a>
                  </li>&nbsp&nbsp&nbsp&nbsp

                  <li class="nav-item">
                    <a class="nav-link d-flex px-1" id="service-tab" data-toggle="tab" href="#service" aria-controls="service" role="tab" aria-selected="false"><i class="bx bxs-group" style="margin-right: 5px!important;"></i><span class="d-none d-md-block">Service Plans</span></a>
                  </li>


                </ul>
              </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>


            <div class="row">
              <div class="col-lg-12">
                <div class="tab-content">

                 <!-- <div class="tab-pane active" id="bookings" aria-labelledby="bookings-tab" role="tabpanel">-->
                 <div class="tab-pane" id="bookings" aria-labelledby="bookings-tab" role="tabpanel">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                          <h5 class="card-title" style="color:red;"><b>Bookings</b></h5>
                          </div>
                          <div class="col-12">
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered w-100" id="bookings-table">
                                <thead>
                                  <tr>
                                    <th>Name</th>
                                    <th>Details</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>    
                                <tbody>
                                  
                            
                                </tbody>                               
                              </table>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
            


                  <div class="tab-pane active" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-6 col-12">
                            <h5 class="card-title" style="color:red;"><b>Profile details</b></h5>
                            <ul class="list-unstyled">
                             
                          <li><p><b>Name :   </b>  {{isset($vendor->name) ? $vendor->name : ''}} </p></li>
                          <li><p><b>Mobile : </b>  {{isset($vendor->mobile) ? $vendor->mobile : ''}}</p></li>
                          <li><p><b>Email :  </b>  {{isset($vendor->email) ? $vendor->email : ''}} </p></li>
                          <li><p><b>Date :   </b>  {{isset($vendor->created_at) ? $vendor->created_at : ''}} </p></li>
                          

                            </ul>
                         


                          </div>
                          <div class="col-sm-6 col-12">
                            <h6><small class="text-muted">Account Status</small></h6>
                            <p style="color: green;">Active</p>
                          </div>                       
                        </div>

                      </div>
                    </div>
                  </div>




                  <div class="tab-pane" id="service" aria-labelledby="service-tab" role="tabpanel">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-6 col-12">
                           
                            @if(isset($detail))
                            <h5 class="card-title" style="color:red;"><b>Service Plan</b></h5>
                            <ul class="list-unstyled">
                          
                          <li><p><b>Accomodation Type:</b>  {{isset($detail->accomodation_type) ? $detail->accomodation_type : ''}} </p></li>
                          <li><p><b>Accomodation Name:</b>  {{isset($detail->accomodation_name) ? $detail->accomodation_name : ''}} </p></li>
                          <li><p><b>Accomodation Address:</b>  {{isset($detail->accomodation_address) ? $detail->accomodation_address : ''}} </p></li>
                          <li><p><b>Enquiry Number:</b>  {{isset($detail->enquiry_number) ? $detail->enquiry_number : ''}} </p></li>
                        

                            </ul>
                         @endif 


                          </div>
                          <div class="col-sm-6 col-12">
                          <h5 class="card-title">.</h5>
                          <ul class="list-unstyled">
                          <li><p><b>Buisness Name:</b>  {{isset($detail->buisness_name) ? $detail->buisness_name : ''}} </p></li>
                          <li><p><b>Buisness Address:</b>  {{isset($detail->buisness_address) ? $detail->buisness_address : ''}} </p></li>
                          <li><p><b>GST:</b>  {{isset($detail->gst) ? $detail->gst : ''}} </p></li>
                          <li><p><b>Buisness City:</b>  {{isset($detail->buisness_city) ? $detail->buisness_city : ''}} </p></li>
                        

                            </ul>
                          </div>                       
                        </div>

                      </div>
                    </div>
                  </div>


                  <div class="tab-pane" id="orders" aria-labelledby="orders-tab" role="tabpanel">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                          <h5 class="card-title" style="color:red;"><b>Orders</b></h5>
                          </div>
                          <div class="col-12">
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered w-100" id="orders-table">
                                <thead>
                                  <tr>
                                  <th>Name</th> 
                                  <th>Details</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                  </tr>
                                </thead>   
                                <tbody>
                                <!-- <tfoot>
            <tr>
                <td colspan="4"><b>Total</b></td>
                <td id="raw_material"></td><td id="raw_material_total_unit"></td><td></td><td></td><td id="total_amt"></td><td id="paid_amt"></td><td id="bal"></td><td></td><td></td>
           
            </tr>
        </tfoot> -->

                                </tbody>                                
                              </table>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
           
      </section>

    </div>
  </div>
</div>
<!-- END: Content-->



@endsection

<!--Page Scripts -->
@section('page-script')
@include('administrator.modal.addSubAdmin')

<script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script src="{{ asset('app-assets/js/scripts/pages/bootstrap-toast.min.js') }}"></script>
  <script src="{{ asset('app-assets/js/scripts/extensions/sweet-alerts.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>

   
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>


</script>
@endsection































