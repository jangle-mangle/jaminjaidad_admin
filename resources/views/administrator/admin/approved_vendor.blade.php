@extends('administrator.layouts/verticalLayoutMaster')

@section('title', 'Approved Vendors')

@section('content')

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css ') }}">
    
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/sweetalert2.min.css') }}">

  <style type="text/css">
      /* table th {
        font-size: 10px !important;
        padding: 10px !important;
      }
      table tbody td {
        font-size: 11px !important;
        padding: 10px !important;
      } */

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
          /* margin-left: 10em;  */
        }
        .dataTables_filter{
          margin-left: 46rem;
        }

    </style>

<!-- Page layout -->
<div class="card">
  <div class="card-body">

  <section class="list-group-navigation">
        <div class="row">
          <div class="col-md-12">
            <div class="card border-bottom" style="margin-bottom:0rem;">
              <div class="card-body">
              <form>
                      <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label class="form-control-label"><b>Search By Vendor</b></label>
                            <select class="form-control select2" id="vendor">
                              <option value="">Select All</option>
                           @foreach($vendors as $vendor)
                           <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                           @endforeach
                            </select>
                          </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label class="form-control-label"><b>Search By City</b></label>
                            <select class="form-control select2" id="city">
                              <option value="">Select All</option>
                              @foreach($cities as $city)
                              <option value="{{$city->buisness_city}}">{{$city->buisness_city}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label class="form-control-label"><b>Search By Buisness Type</b></label>
                            <select class="form-control select2" id="buisness_type">
                            <option value="" selected disabled>Select</option>
                              <option value="accomodation">Accomodation</option>
                              <option value="food">Food</option>
                              <option value="transport">Transport</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
                          <div class="form-group">
                            <label class="form-control-label"><b>Search By Status</b></label>
                            <select class="form-control select2" id="status">
                              <option value="" selected disabled>Select</option>
                              <option value="Yes">Active</option>
                              <option value="No">In-Active</option>
                             
                            </select>
                          </div>
                        </div>
                      
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-xs-12">
                          <div class="form-group mt-2">
                            <button type="button" id="search-btn" class="btn btn-danger">Search</button>
                          </div>
                        </div>
                      </div>
                </form>
                
                
              </div>
            </div>
          </div>
        </div>
      </section>
     
      <!-- Ajax Sourced Server-side -->

<div class="card">
  <div class="card-body pt-1">
      <section id="ajax-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                <h4><b>Approved Vendors</b></h4>
                  <br>
                    <div class="card-datatable table-responsive">
                        <table class="table table-striped table-bordered w-100" id="SubAdminTable" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Buisness Type</th>
                                    <th>Enquiry Number</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Ajax Sourced Server-side -->
  </div>
</div>
<!--Page layout -->
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

$(document).ready(function(){

$(function(){


  $("#search-btn").on("click", function(evt){
        evt.preventDefault();

        var vendor = $("#vendor").val();
        var city = $("#city").val();
        var buisness_type = $("#buisness_type").val();
        var status = $("#status").val();
       
      accomodationTable(vendor,city,buisness_type,status)
      });
    
        var vendor = $("#vendor").val();
        var city = $("#city").val();
        var buisness_type = $("#buisness_type").val();
        var status = $("#status").val();
     
      accomodationTable(vendor,city,buisness_type,status)

  function accomodationTable(vendor='',city='',buisness_type='',status='') {

    var SubAdminTable = $('#SubAdminTable');
    
    SubAdminTable.DataTable().clear().destroy();
    
    SubAdminTable.DataTable({
          responsive: true,
          serverSide: true,
          processing: true,
          'ordering':true,
          'order': [],
          ajax: {
            url: "./vendor/approved",
            data: { 
              vendor: vendor,
              city: city,
              buisness_type:buisness_type,
              status:status,
              }   
        }, 
          "aoColumns": [
              {
                  mData: 'name'
              },
              {
                  mData: 'contact'
              },
              {
                  mData: 'category'
              },
              {
                  mData: 'enquiry_number'
              },
              {
                  mData: 'status'
              },
              {
                  mData: 'action'
              },
          ],
          "columnDefs": [{
              targets: -1,
              className: 'text-right'
          }],
    });
  }
    // //append a button in datatable.
    // $('#SubAdminTable_filter').append('<button type="button" class="btn btn-primary add-vendor-modal-btn ml-1" data-toggle="modal" data-target="#add_sub_admin_modal">Add New</button>');
    
    // $(document).on('click', '.subadmin-contact', function(e) {
    //     e.stopPropagation();
    // });
    // $(document).on('click', '.status-btn', function(e) {
    //     e.stopPropagation();
    //     var id = $(this).attr('data-value');
    //     var action = $(this).attr('name');

    //     if (action == 'disable') {

    //       Swal.fire({
    //         title: 'You wont be able to retrive this!',
    //         showDenyButton: true,
    //         confirmButtonText: `Ok, Delete it.`,
    //         denyButtonText: `No, Cancel it.`,
    //       }).then((result) => {
    //         if (result.isConfirmed) {
    //           status_change(id, action);
    //         } 
    //       })
    //     }else{
    //       status_change(id, action);
    //     }
    // });

    // const status_change = (id = 0, action = 'enable') => {
    //   $.ajax({
    //           type: "post",
    //           url: "./vendor/status",
    //           data: { 'id' :id , 'status': action, '_token' : '{{ csrf_token() }}' },
    //           success: function(result) {
    //               if (result.error == true) {
    //                   Toast.fire({
    //                     icon: 'error',
    //                     title: result.message
    //                   })
    //               }else{
    //                   Toast.fire({
    //                     icon: 'success',
    //                     title: result.message
    //                   })
    //               }
    //               SubAdminTable.DataTable().ajax.reload();
    //           }
    //       });
    // }


    $(document).on('click', '.disable', function(e) {
        e.stopPropagation();
        var id = $(this).attr('data-value');
        var action = $(this).attr('name');


          Swal.fire({
            title: 'Are You Sure You want to Block this Vendor!',
            showDenyButton: true,
            showConfirmButton: true,
            confirmButtonText: `Yes`,
            denyButtonText: `Cancel`,
          }).then((result) => {
            if (result.isConfirmed) {
              status_disable(id, action);
            } 
          })
      
    });

    const status_disable = (id = "", action = "") => {
      $.ajax({
              type: "post",
              url: "./vendor/disable",
              data: { 'id' :id , 'status': action, '_token' : '{{ csrf_token() }}' },
              success: function(result) {
                  if (result.error == true) {
                      Toast.fire({
                        icon: 'error',
                        title: result.message
                      })
                  }else{
                      Toast.fire({
                        icon: 'success',
                        title: result.message
                      })
                  }
                //  SubAdminTable.DataTable().ajax.reload();
                accomodationTable();
              }
          });
    }


    $(document).on('click', '.enable', function(e) {
        e.stopPropagation();
        var id = $(this).attr('data-value');
        var action = $(this).attr('name');

     

          Swal.fire({
            title: 'Are You Sure You want to Unblock this Vendor!',
            showDenyButton: true,
            showConfirmButton: true,
            confirmButtonText: `Yes`,
            denyButtonText: `Cancel`,
          }).then((result) => {
            if (result.isConfirmed) {
              status_enable(id, action);
            } 
          })
      
    });

    const status_enable = (id = "", action = "") => {
      $.ajax({
              type: "post",
              url: "./vendor/enable",
              data: { 'id' :id , 'status': action, '_token' : '{{ csrf_token() }}' },
              success: function(result) {
                  if (result.error == true) {
                      Toast.fire({
                        icon: 'error',
                        title: result.message
                      })
                  }else{
                      Toast.fire({
                        icon: 'success',
                        title: result.message
                      })
                  }
                 // SubAdminTable.DataTable().ajax.reload();
                 accomodationTable();
              }
          });
    }



    $(document).on('click', '.delete', function(e) {
        e.stopPropagation();
        var id = $(this).attr('data-value');
        var action = $(this).attr('name');

          Swal.fire({
            title: 'Are You Sure You want to Delete this Vendor!',
            showDenyButton: true,
            showConfirmButton: true,
            confirmButtonText: `Yes`,
            denyButtonText: `Cancel`,
          }).then((result) => {
            if (result.isConfirmed) {
              status_delete(id, action);
            } 
          })
      
    });

    const status_delete = (id = "", action = "") => {
      $.ajax({
              type: "post",
              url: "./vendor/delete",
              data: { 'id' :id , 'status': action, '_token' : '{{ csrf_token() }}' },
              success: function(result) {
                  if (result.error == true) {
                      Toast.fire({
                        icon: 'error',
                        title: result.message
                      })
                  }else{
                      Toast.fire({
                        icon: 'success',
                        title: result.message
                      })
                  }
                 // SubAdminTable.DataTable().ajax.reload();
                 accomodationTable();
              }
          });
    }

  //  $('#SubAdminTable_filter').append('<button type="button" class="btn btn-primary add-sub-admin-modal-btn ml-1" data-toggle="modal" data-target="#add_sub_admin_modal">Add New</button>');

    $(document).on('click', '.view', function(e) {
        e.stopPropagation();

        var id = $(this).attr('data-value');

        let URL ="./vendor/profile" + "/" + id;
        location.replace(URL);
      

    });

});
});
</script>
@endsection































