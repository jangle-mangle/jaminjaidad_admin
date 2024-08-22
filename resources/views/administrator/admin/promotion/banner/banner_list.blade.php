@extends('administrator.layouts/verticalLayoutMaster')

@section('title', 'Banner List')

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

      <!-- Ajax Sourced Server-side -->

<div class="card">
  <div class="card-body pt-1">
      <!-- Ajax Sourced Server-side -->
      <section id="ajax-datatable">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                
                <div class="row">
                  <div class="col-12 mb-1">
                    <h3 class="float-left"><b>Banner List</b></h3>
                    <div class="float-right">
                      <a class="btn btn-sm btn-danger add_banner">Add New</a>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card-datatable table-responsive">
                        <table class="table table-striped table-bordered w-100" id="bannerDataTable" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Banner Image</th>
                                    <th>Position</th>
                                    <th>Location</th>
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
</div>
</div>
<!--Page layout -->
@endsection

<!--Page Scripts -->
@section('page-script')


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

    bannerTable();

  function bannerTable(vendor='',city='') {

    var bannerDataTable = $('#bannerDataTable');
    bannerDataTable.DataTable().clear().destroy();
    bannerDataTable.DataTable({
          responsive: true,
          serverSide: true,
          processing: true,
          'ordering':true,
          dom: "<'row' <'col-12 mb-1' l>> Bfrtip",
          "aLengthMenu": [[25, 50, 100, 200, 300, 400, 500, 1000, -1], [25, 50, 100, 200, 300, 400, 500, 1000, "All"]],
          "iDisplayLength": 25,
          buttons: [
            {
              text: '<i class="bx bx-file"></i> CSV',
              className: 'btn-success btn btn-sm mb-0',
              attr: { id: 'csv' },
              extend : "csv",
              filename: 'Stock_In_details',
            },
            {
              text: '<i class="bx bx-printer"></i> Print',
              className: 'btn-warning btn btn-sm mb-0',
              extend : "print",
              attr: { id: 'print' },
              exportOptions: { columns: ":visible" },
            },
            {
              text: '<i class="bx bxs-file-pdf"></i> PDF',
              className: 'btn-danger btn btn-sm mb-0',
              extend : "pdfHtml5",
              exportOptions: { columns: ":visible" },
              attr: { id: 'pdf' },
              filename: 'Stock_In_details',
            },
            {
              text: '<i class="bx bx-copy-alt"></i> Copy',
              className: 'btn-info btn btn-sm mb-0',
              extend : "copyHtml5",
              exportOptions: { columns: [0, ":visible"] },
              attr: { id: 'copy' },
            },
          ],
          'order': [],
          ajax: {
            url: "./bannerDataTable",
        }, 
          "aoColumns": [
              {
                  mData: 'banner_image'
              },
              {
                  mData: 'position'
              },
              {
                  mData: 'location'
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
    //append a button in datatable.
    //$('#bannerDataTable_filter').append('<button type="button" class="btn add_banner ml-1" style="background-color:#E34400; color:white" data-toggle="modal" >Add Banner</button>');
    
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
    //               bannerDataTable.DataTable().ajax.reload();
    //           }
    //       });
    // }




    $(document).on('click', '.enable', function(e) {
        e.stopPropagation();
        var id = $(this).attr('data-value');
        var action = $(this).attr('name');

     

          Swal.fire({
            title: 'Are You Sure You want to Active this Data!',
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
              url: "./banner_enable",
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
                 // bannerDataTable.DataTable().ajax.reload();
                 bannerTable();
              }
          });
    }


    $(document).on('click', '.disable', function(e) {
        e.stopPropagation();
        var id = $(this).attr('data-value');
        var action = $(this).attr('name');

     

          Swal.fire({
            title: 'Are You Sure You want to Deactivate this data!',
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
              url: "./banner_disable",
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
                  //bannerDataTable.DataTable().ajax.reload();
                  bannerTable();
              }
          });
    }



    $(document).on('click', '.delete', function(e) {
        e.stopPropagation();
        var id = $(this).attr('data-value');
        var action = $(this).attr('name');

          Swal.fire({
            title: 'Are You Sure You want to Delete this data!',
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
              url: "./banner_delete",
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
                 // bannerDataTable.DataTable().ajax.reload();
                 bannerTable();
              }
          });
    }

 
    $(document).on('click', '.add_banner', function(e) {
        e.stopPropagation();
        let URL ="./add_banner";
        location.replace(URL);
    });


    $(document).on('click', '.edit', function(e) {
        e.stopPropagation();
        var id = $(this).attr('data-value');
        let URL ="./edit_banner"+"/"+id;
        location.replace(URL);
    });




});
});
</script>
@endsection































