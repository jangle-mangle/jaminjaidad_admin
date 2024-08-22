@extends('administrator.layouts/verticalLayoutMaster')

@section('title', 'Add Banner')

@section('content')

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css ') }}">
    
  
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/sweetalert2.min.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"/>

  
<style type="text/css">


#map { height: 250px; }

#map-search-box{
  position: relative;
}
.place-suggestion-list {
      position: absolute;
      height:auto;
      width: 100%;
      background: white;
      box-shadow: 0px 0px 2px 0px #888888;
      top: 40px;
      left:0px;
      display: none;
      z-index: 9000;
      font-size: 12px;
  }
  .place-suggestion-list ol{
      margin: 0px;
      padding: 0px;
      text-align: center;
      list-style-type: none;
      margin: 0px;
  }
  .suggestion-list-items{
      border: 1px solid #00000061;
      padding: 5px 0px;
  }

  .suggestion-list-items:hover{
      background: #656eef;
      color: white;
      cursor: pointer;
      box-shadow: -1px 1px 8px 0px #1a3ce56b;
      border:1px solid #5f4cff61;
  }
  #address_search{
    border-radius: 0px;
  }
  .add-to-list-btn{
    float: right;
  }
  .remove-address-btn{
    position: relative;
    top: -10px;
  }

  #addressTable .form-control{
    border: 0;
  }
</style>
  <!-- Page layout -->
<div class="card">
  <div class="card-body pt-1">
  <h4><b>Add Banner</b></h4>
    <div class="container">
    <br>
<div class="row">
<div class="col-md-12">
    <form id="add_banner" >
    @csrf
    <input type="hidden" id="id" name="id" value="{{$banner->id}}">

    <label class="form-label" for="text"><b>Banner Image</b></label>
    <input type="file" id="banner_image" class="form-control mb-2" name="banner_image" value="{{$banner->image}}"/>
    
    <label class="form-label" for="text"><b>Banner Position</b></label>
    <input type="text" id="position" class="form-control mb-2" name="position" placeholder="Enter Price" value="{{$banner->position}}"/>

</div>
    </div>
   <br>
   <label class="form-label" for="text"><b>Banner Location</b></label>
                            
                            <div class="faq-question-form custom-form mat-20 jb-frm">
                                    <!-- <div class="single-input">
                                       
                                        <input type="text" class="form--control radius-10 fructos" name="accomodation_location" placeholder="Enter Accommodation Location">
                                    </div> -->
                        <div class="row">
                        <div class="col-12 pt-1 pb-1 shadow">
                          <div id="map-search-box" style="flex:4;">
                            <input type="search" id="address_search" class="form-control" value="{{$banner->loc_address}}" placeholder="Search your location here...*" required />
                            <div class="place-suggestion-list"></div>
                          </div>
                          <div id="map"></div>
                          <div class="mt-1 row">
                            <!-- <div class="col-12">
                              <div class="form-group">
                                <label class="text-bold-600">Address<small style="color:grey;"> (Enter your full address here) <span class="text-danger">*</span></small></label>
                                <textarea id="address" name="address" class="form-control" placeholder="" required></textarea>
                              </div>
                            </div> -->
                            <input type="hidden" id="loc_latitude" name="loc_latitude" value="{{$banner->loc_latitude}}" required/>
                            <input type="hidden" id="loc_longitude" name="loc_longitude" value="{{$banner->loc_longitude}}" required/>
                            <input type="hidden" id="loc_address" name="loc_address" value="{{$banner->loc_address}}" required/>
                          </div>
                        </div>
                        </div>
                        </div>
                        <br><br>
    <button type="button" class="btn d-grid w-100 btn-success submit_btn" style="background-color:#E34400;color:white;">
                        Update
                    </button>

</form>
</div>         
  </div>
</div>
<!--Page layout -->
@endsection

<!--Page Scripts -->



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

    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
<script>


$(document).ready(function(){  


$(document).on("click", ".submit_btn",function(event) {

event.preventDefault();

let myForm = document.getElementById('add_banner');
var formData = new FormData(myForm);
formData.append('_token', '{{ csrf_token() }}');

$.ajax({
	type: "post",
	data: formData,
    url: "{{route('admin.edit_banner_detail')}}",
	cache:false,
	contentType: false,
	processData: false,
	success: function(result) {

    if (result.error == false) {
  
        Toast.fire({icon: 'success',title: result.message, closeButton: !0, tapToDismiss: !1,progressBar: true, timeOut: 1000});
        let URL ="{{route('admin.banner')}}";
        location.replace(URL);
	}
    else{
      Toast.fire({icon: 'error',title: result.message, closeButton: !0, tapToDismiss: !1,progressBar: true, timeOut: 1000});
 
    }
	
	}

});
});

});



$(document).ready( function () {
    //Map init
    // const alwaysDefaultlatitude = 23.4241;
    // const alwaysDefaultlongitude = 53.8478;
    // var defaultlatitude = 23.4241;
    // var defaultlongitude = 53.8478;
    const alwaysDefaultlatitude = $('#loc_latitude').val();
    const alwaysDefaultlongitude = $('#loc_longitude').val();
    var defaultlatitude =$('#loc_latitude').val();
    var defaultlongitude = $('#loc_longitude').val();

    var defaultZoom = 9;
    var nzoom = 12;

    var map = L.map('map', { center: [defaultlatitude, defaultlongitude], zoom: defaultZoom});
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);

    var myMarker = L.marker([defaultlatitude, defaultlongitude], {title: "Coordinates", alt: "Coordinates", draggable: true}).addTo(map).on('dragend', function() {
        var lat = myMarker.getLatLng().lat.toFixed(8);
        var lon = myMarker.getLatLng().lng.toFixed(8);
        var czoom = map.getZoom();
        if(czoom < 18) { nzoom = czoom + 2; }
        if(nzoom > 18) { nzoom = 18; }
        if(czoom != 18) { map.setView([lat,lon], nzoom); } else { map.setView([lat,lon]); }
        defaultlatitude = lat;
        defaultlongitude = lon;
        myMarker.bindPopup("Lat " + lat + "<br />Lon " + lon).openPopup();
    });

    //Search
    ;(function($){
        $.fn.extend({
            donetyping: function(callback,timeout){
                timeout = timeout || 200; // 1 second default timeout 1e3
                var timeoutReference,
                    doneTyping = function(el){
                        if (!timeoutReference) return;
                        timeoutReference = null;
                        callback.call(el);
                    };
                return this.each(function(i,el){
                    var $el = $(el);
                    // Chrome Fix (Use keyup over keypress to detect backspace)
                    // thank you @palerdot
                    $el.is(':input') && $el.on('keyup keypress paste change',function(e){
                        // This catches the backspace button in chrome, but also prevents
                        // the event from triggering too preemptively. Without this line,
                        // using tab/shift+tab will make the focused element fire the callback.
                        if (e.type=='keyup' && e.keyCode!=8) return;

                        // Check if timeout has been set. If it has, "reset" the clock and
                        // start over again.
                        if (timeoutReference) clearTimeout(timeoutReference);
                        timeoutReference = setTimeout(function(){
                            // if we made it here, our timeout has elapsed. Fire the
                            // callback
                            doneTyping(el);
                        },timeout);
                    }).on('blur',function(){
                        // If we can, fire the event since we're leaving the field
                        doneTyping(el);
                    });
                });
            }
        });
    })(jQuery);

    $('#address_search').donetyping(function(){
        var place = this.value;
        $.ajax({
            type: "get",
            url: "{{ route('admin.restaurant.search.location') }}?place="+place,
            success: function(result) {
              var options = '';
              result = JSON.parse(result);
              if (result.status == 'OK') {
                if (result.predictions.length) {

                    options = '<ol>';

                    result.predictions.forEach((value) => {
                      options += `<li class="suggestion-list-items" data-value="${value.place_id}">${value.description}</li>`;
                    });

                    options += '</ol>';
                }

                if (options) {
                    $(".place-suggestion-list").css("display", 'block').html(options);
                }else{
                    $(".place-suggestion-list").css("display", 'none');
                }
              }
            }
        });
    });

    $(document).on('click', '.suggestion-list-items', function() {
        var place_id = $(this).attr('data-value');
        $('#address_search').val($(this).text());
        $('#address').val($(this).text());
        $('#loc_address').val($(this).text());
        $.ajax({
            type: "get",
            url: "{{ route('admin.restaurant.search.location.suggestion') }}?place_id="+place_id,
            success: function(result) {
              $(".place-suggestion-list").css("display", 'none').html('');
              result = JSON.parse(result);
              if (result.status == 'OK') {
                if (result.results.length) {
                  let latitude = result.results[0].geometry.location.lat;
                  let longitude = result.results[0].geometry.location.lng;
                  $('#loc_latitude').val(latitude);
                  $('#loc_longitude').val(longitude);
                  chooseAddress(latitude, longitude);
                }
              }
            }
        });
    });

    function chooseAddress(latitude, longitude)
    {
      if(latitude && longitude){
        defaultlatitude = latitude;
        defaultlongitude = longitude;
        console.log(defaultlatitude, defaultlongitude);
        myMarker.closePopup();
        map.setView([latitude, longitude],18);
        myMarker.setLatLng([latitude, longitude]);
        lat = latitude.toFixed(8);
        lng = longitude.toFixed(8);
        myMarker.bindPopup("Lat " + lat + "<br />Lon " + lng).openPopup();
      }else{
        Toast.fire({
                  icon: 'error',
                  title: 'Address Not Found!!'
                })
      }
    }

    let addedLatitude = addedLongitude = [];
    $('#addressTable').on('click', '.remove-address-btn', function() {

        let tr = $(this).closest('tr');
        tr.remove();

        let latitude = tr.find('.latitude-value').val();
        let longitude = tr.find('.longitude-value').val();
        let location = tr.find('.location-value').val();

        addedLatitude = addedLatitude.filter(function(value) { return value === latitude });
        addedLongitude = addedLongitude.filter(function(value) { return value === longitude });

        $('#address-list-error').html(`${ $('#addressTable tr').length ? '' : 'No address found !!'}`)
    });
  });


</script>
































