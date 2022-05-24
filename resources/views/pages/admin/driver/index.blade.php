@extends('layouts.master')

@section('nav')

{{-- @if ($errors->any())

@endif --}}
<nav class="main-header  navbar-expand navbar-white navbar-light " style="padding: 5px !important;z-index: 1">
  <!-- Left navbar links -->
     <div class="row mx-0">
          <div class="col-sm-1">
            <a class="nav-link " data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color: gray"></i></a>
          </div>

          <div class="col-sm-5">
            <h4 style="font-weight: bold" class="mt-1"> Driver List</h4>
          </div>

          <div class="col-sm-3">
            <div class="input-group input-group-sm" >
              <form action="/driver-search" method="GET">
                <div class="input-group-append">
                 <input type="text" name="query" class="form-control shadow-none mt-1" placeholder="Search" style="height: 38px;" required>

                  <button type="submit" class="btn btn-default shadow-none">
                    <i class="fas fa-search mt-1" style=""></i>
                  </button>
                </div>
              </form>


            </div>
          </div>

          <div class="col-sm-3">
            {{-- modal --}}
               <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary  mt-1" data-toggle="modal" data-target="#exampleModalScrollable">
                       Add New Driver
                     </button>

                     <!-- Modal -->
                     <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                       <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                         <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalScrollableTitle">Driver Information</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                           <div class="modal-body">
                             <form action="/driver" method="POST" enctype="multipart/form-data">
                               @csrf
                               <div class="form-row">
                                 <div class="form-group col-md-4 mt-3">
                                   <label for="fname">First Name</label>
                                   <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
                                   {{-- <span style="color: red">
                                        @error('fname') <li>{{$message}}</li> @enderror
                                   </span> --}}
                                 </div>
                                 <div class="form-group col-md-4 mt-3">
                                   <label for="lname">Last Name</label>
                                   <input type="text" class="form-control"  name="lname" id="lname" placeholder="Last Name" required>
                                 </div>
                                 <div class="form-group col-md-4 mt-3">
                                   <label for="mobile">Mobile</label>
                                   <input type="text" class="form-control"  name="mobile" id="mobile" placeholder="Mobile" required>
                                 </div>
                               </div>
                               <div class="form-row">
                                 <div class="form-group col-md-4">
                                   <label for="email">Email Address</label>
                                   <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                                 </div>

                                 <div class="form-group col-md-4">
                                     <label for="gender">Gender</label>
                                     <select class="form-select" aria-label="Default select example" name="gender" id="gender" required>
                                       <option class="opt1" value="" disabled selected hidden>Select Gender</option>
                                       <option value="0">Male</option>
                                       <option value="1">Female</option>
                                     </select>
                                 </div>

                                 <div class="form-group col-md-4">
                                     <label for="birthdate">Birth Date(D/M/Y)</label>
                                     <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="Birth Date" required>
                                 </div>
                                 </div>

                                 <div class="form-row">
                                  <div class="form-group col-md-8">
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="approval">Approval</label>
                                        <select class="form-select" aria-label="Default select example" name="approval" id="approval" required>
                                          <option class="opt1" value="" disabled selected hidden>Set Approval</option>
                                          <option value="0">Pending</option>
                                          <option value="1">Approved</option>
                                          <option value="2">Declined</option>
                                        </select>
                                      </div>

                                      <div class="form-group col-md-6">
                                          <label for="status">Status</label>
                                          <select class="form-select" aria-label="Default select example" name="status" id="status" required>
                                            <option class="opt1" value="" disabled selected hidden>Select Status</option>
                                            <option value="0">Inactive</option>
                                            <option value="1">Active</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="vehicle_type">Vehicle Type</label>
                                          <select class="form-select" aria-label="Default select example" name="vehicle_type" id="vehicle_type" required>
                                            <option class="opt1" value="" disabled selected hidden>Select Vehicle</option>
                                            <option value="0">Gas Motorcycle</option>
                                            <option value="1">Electric Motorcycle</option>
                                            <option value="2">None</option>
                                          </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                      <label for="zipcode">Zip Code</label>
                                      <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="Zip Code" >
                                    </div>

                                </div>
                                <div class="form-row">

                                  <div class="form-group col-md-6">
                                    <label for="prof_image">Profile Image</label>
                                    <input type="file" class="form-control" name="prof_image" id="prof_image" >
                                  </div>

                                  <div class="form-group col-md-6">
                                    <label for="driver_license">Driver's License</label>
                                    <input type="file" class="form-control" name="driver_license" id="driver_license" >
                                  </div>

                              </div>

                            </div>
                            <div class="form-group col-md-4">
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <div class="form-group">
                                    <label for="address">Address</label>
                                      <input type="text" class="form-control mb-3" id="location2"  value="" name="address2" placeholder="Address" required>
                                      <input type="hidden" name="location_lat2" id="location_lat2">
                                      <input type="hidden" name="location_lang2" id="location_lang2">
                                      <input type="hidden" name="city2" id="city2">
                                      <input type="hidden" name="state2" id="state2">
                                      <input type="hidden" name="region2" id="region2">
                                      <input type="hidden" name="logs2" id="logs2">
                                      <div id="map_canvas2" style="width: 100%;height: 160px;"></div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="form-row" style="margin-top: -25px">
                            <div class="form-group col-md-4">
                              <label for="dead_of_sale">Dead of Sale</label>
                              <input type="file" class="form-control" name="dead_of_sale" id="dead_of_sale" >
                            </div>

                            <div class="form-group col-md-4">
                              <label for="health_cert">Health Certificate</label>
                              <input type="file" class="form-control" name="health_cert" id="health_cert" >
                            </div>

                            <div class="form-group col-md-4">
                              <label for="nbi">NBI Clearance</label>
                              <input type="file" class="form-control" name="nbi" id="nbi" >
                            </div>
                          </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
            {{-- modal --}}
        </div>
     </div>




    <!-- <li class="nav-item d-none d-sm-inline-block">
      <a href="../../index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li> -->


  <!-- Right navbar links -->

</nav>
@endsection

@section('content')
<style>
    .pac-container {
    background-color: #FFF;
    z-index: 99999;
    position: fixed;
    display: inline-block;
    float: left;
}
.modal{
    z-index: 99999;
}
.modal-backdrop{
    z-index: 10;
}
  </style>

<div class="container-fluid">
  @if (session('success'))
      <div class="alert alert-success">
        {{session('success')}}
      </div>
  @endif



  <div class="modal fade" id="editmodal" role="dialog" aria-labelledby="exampleModalLabel"
  aria-bs-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> Update Driver Information </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-bs-hidden="true">&times;</span>
              </button>
          </div>
               <div class="modal-body">
                              <form action="" method="POST" enctype="multipart/form-data" id="formid">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                  <div class="form-group col-md-4 mt-3">
                                    <label for="fname2">First Name</label>
                                    <input type="text" class="form-control" name="fname2" id="fname2" placeholder="First Name">
                                  </div>
                                  <div class="form-group col-md-4 mt-3">
                                    <label for="lname2">Last Name</label>
                                    <input type="text" class="form-control"  name="lname2" id="lname2" placeholder="Last Name">
                                  </div>
                                  <div class="form-group col-md-4 mt-3">
                                    <label for="mobile2">Mobile</label>
                                    <input type="text" class="form-control"  name="mobile2" id="mobile2" placeholder="Mobile">
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-4">
                                    <label for="email2">Email Address</label>
                                    <input type="email" class="form-control" name="email2" id="email2" placeholder="Email Address">
                                  </div>

                                  <div class="form-group col-md-4">
                                      <label for="gender">Gender</label>
                                      <select class="form-select" aria-label="Default select example" name="gender2" id="gender2" >
                                        <option class="opt1" value="" disabled selected hidden>Select Gender</option>
                                        <option value="0">Male</option>
                                        <option value="1">Female</option>
                                      </select>
                                  </div>

                                  <div class="form-group col-md-4">
                                      <label for="birthdate">Birth Date(D/M/Y)</label>
                                      <input type="date" class="form-control" name="birthdate2" id="birthdate2" placeholder="Birth Date">
                                  </div>
                                  </div>

                                  <div class="form-row">
                                    <div class="form-group col-md-8">
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="approval2">Approval</label>
                                          <select class="form-select" aria-label="Default select example" name="approval2" id="approval2" required>
                                            <option class="opt1" value="" disabled selected hidden>Set Approval</option>
                                            <option value="0">Pending</option>
                                            <option value="1">Approved</option>
                                            <option value="2">Declined</option>
                                          </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="status2">Status</label>
                                            <select class="form-select" aria-label="Default select example" name="status2" id="status2" required>
                                              <option class="opt1" value="" disabled selected hidden>Select Status</option>
                                              <option value="0">Inactive</option>
                                              <option value="1">Active</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="vehicle_type2">Vehicle Type</label>
                                            <select class="form-select" aria-label="Default select example" name="vehicle_type2" id="vehicle_type2" required>
                                              <option class="opt1" value="" disabled selected hidden>Select Vehicle</option>
                                              <option value="0">Gas Motorcycle</option>
                                              <option value="1">Electric Motorcycle</option>
                                              <option value="2">None</option>
                                            </select>
                                      </div>

                                      <div class="form-group col-md-6">
                                        <label for="zipcode2">Zip Code</label>
                                        <input type="text" class="form-control" name="zipcode2" id="zipcode2" placeholder="Zip Code" >
                                      </div>

                                  </div>
                                  <div class="form-row">

                                    <div class="form-group col-md-6">
                                      <label for="prof_image2">Profile Image
                                        <a href="" download="" id="download_prof_image">
                                          Download
                                        </a>
                                      </label>
                                      <input type="file" class="form-control" name="prof_image2" id="prof_image2" >
                                    </div>

                                    <div class="form-group col-md-6">
                                      <label for="driver_license2">Driver's License
                                        <a href="" download="" id="download_driver_license">
                                          Download
                                        </a>
                                      </label>
                                      <input type="file" class="form-control" name="driver_license2" id="driver_license2" >
                                    </div>

                                </div>

                              </div>
                              <div class="form-group col-md-4">
                                <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <div class="form-group">
                                      <label for="address2">Address</label>
                                        <input type="text" class="form-control mb-3" id="location"  value="" name="address" placeholder="Address" required>
                                        <input type="hidden" name="location_lat" id="location_lat">
                                        <input type="hidden" name="location_lang" id="location_lang">
                                        <input type="hidden" name="city" id="city">
                                        <input type="hidden" name="state" id="state">
                                        <input type="hidden" name="region" id="region">
                                        <input type="hidden" name="logs" id="logs">
                                        <div id="map_canvas" style="width: 100%;height: 160px;"></div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="form-row" style="margin-top: -25px">
                              <div class="form-group col-md-4">
                                <label for="dead_of_sale">Dead of Sale
                                  <a href="" download="" id="download_dead_of_sale_val">
                                    Download
                                  </a>
                                </label>
                                <input type="file" class="form-control" name="dead_of_sale" id="dead_of_sale" >
                              </div>

                              <div class="form-group col-md-4">
                                <label for="health_cert">Health Certificate
                                  <a href="" download="" id="download_health_cert">
                                    Download
                                  </a>
                                </label>
                                <input type="file" class="form-control" name="health_cert" id="health_cert" >
                              </div>

                              <div class="form-group col-md-4">
                                <label for="nbi">NBI Clearance
                                  <a href="" download="" id="download_nbi">
                                    Download
                                  </a>
                                </label>
                                <input type="file" class="form-control" name="nbi" id="nbi" >
                              </div>
                            </div>




              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
              </div>
          </form>
        </div>
      </div>
  </div>
</div>

              {{-- update modal --}}

 {{-- new order modal --}}

    <div class="modal fade " role="dialog" id="CheckOrder" aria-labelledby="CheckOrderTitle"
    aria-bs-hidden="true">
     <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
         <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CheckOrderTitle"> Active Orders</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-bs-hidden="true">&times;</span>
                </button>
            </div>
            <div style="">
               <ul id="save_msgList" ></ul>
            </div>
            <h4 id="success_message"></h4>
            <div class="modal-body">


                    {{-- cart --}}
              <div class="row">
                  <div class="col-12">

                      <div class=" card-body table-responsive p-0" style="z-index: -99999">
                        <table class="table table-head-fixed text-nowrap table-striped table-hover">
                          <thead class="thead-light">
                            <tr>
                              <th>Order ID</th>
                              <th>Store Name</th>
                              <th>Customer Name</th>
                              <th>Address</th>
                              <th>Total Amount</th>
                              <th>Order Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody class="OrderTbody">

                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>

                  </div>

              {{-- cart --}}
            </div>
            <div id="pagination">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="submit" name="neworder" class="btn btn-primary placeOrder">Place Order</button> --}}
            </div>
         </div>
       </div>
    </div>
           {{-- new order modal --}}
<div class="row">
          <div class="col-12">

              <div class="tablesizes card-body table-responsive p-0" style="z-index: -99999">
                <table class="table table-head-fixed text-nowrap table-striped table-hover">
                  <thead class="thead-light">
                    <tr>
                      <th>ID No.</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>Gender</th>
                      <th>Approval</th>
                      <th>Status</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach($drivers as $driver)
                    <tr>
                      <td>{{$driver ->id}}</td>
                      <td>{{$driver ->first_name}}</td>
                      <td>{{$driver ->last_name }}</td>
                      <td>{{$driver ->mobile}}</td>
                      <td>{{$driver ->email}}</td>
                      <td>
                        @if($driver->gender == 0)
                              Male
                        @else
                              Female
                        @endif

                      </td>
                      <td>
                          @if($driver->approval == 0)
                                Pending
                          @elseif($driver->approval == 1)
                                Approved
                          @else
                                Declined
                          @endif
                      </td>
                      <td>
                        @if($driver->status == 0)
                              Inactive
                        @else
                              Active
                        @endif
                      </td>
                      <td>
                          {{-- update modal --}}
                          <button type="button" class="btn editbtn" style="background: none;
                          color: inherit;
                          border: none;
                          padding: 0;
                          font: inherit;
                          cursor: pointer;
                          outline: inherit;
                          margin-top:-5px;
                          "> <i class="fas fa-edit"></i>Update </button>

                        <button type="button" value="{{$driver ->id}}" class="btn viewOrder" data-toggle="modal" data-target="#CheckOrder" style="background: none;
                            color: inherit;
                            border: none;
                            padding: 0;
                            font: inherit;
                            cursor: pointer;
                            outline: inherit;
                            margin-top:-5px;
                            "> <i class="fas fa-cart-arrow-down"></i>Check Orders</button>


                      </td>
                      <td style="display:none;">{{$driver ->gender}}</td>
                      <td style="display:none;">{{$driver ->birthdate}}</td>
                      <td style="display:none;">{{$driver ->address}}</td>
                      <td style="display:none;">{{$driver ->lat}}</td>
                      <td style="display:none;">{{$driver ->lng}}</td>
                      <td style="display:none;">{{$driver ->approval}}</td>
                      {{-- 15 --}}
                      <td style="display:none;">{{$driver ->status}}</td>
                      <td style="display:none;">{{$driver ->vehicle_type}}</td>
                      <td style="display:none;">{{$driver ->zipcode}}</td>
                      <td style="display:none;">{{$driver ->driver_license}}</td>
                      <td style="display:none;">{{$driver ->nbi}}</td>
                      <td style="display:none;">{{$driver ->dead_of_sale}}</td>
                      <td style="display:none;">{{$driver ->health_cert}}</td>
                      <td style="display:none;">{{$driver ->profile_image}}</td>
                      {{-- here --}}
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="mt-2">
              {{$drivers->links()}}
            </div>
          </div>
        </div>
</div>
{{--  --}}



  </body>
  </html>


  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKOU_JfykYBj4kDS8ryXPSd0kxsygDcGU&libraries=places"></script>


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


  <script>
    // function myFunction() {
    //   $('#exampleModalScrollable').modal('show');
    // }
    </script>


  <script type="text/javascript">

      var options = {
          map: "#canvass",
          country: 'ph',
          mapOptions: {
              streetViewControl: false
              //mapTypeId : google.maps.MapTypeId.HYBRID
          },
          markerOptions: {
              draggable: true
          }
      };
      $("#locations").geocomplete(options).bind("geocode:result", function(event, result){
          $('.pac-container').css('z-index', '9999');
          $('#defaults').hide();
          $('#canvass').show();
          $('#logss').html(result.formatted_address);
          $('#logss').val(result.formatted_address);
          $('.location-search').html(result.formatted_address)
          setCookie('posLat',result.geometry.location.lat(),'1');
          setCookie('posLan',result.geometry.location.lng(),'1');
          setCookie('address',result.formatted_address,'1');
          var map = $("#locations").geocomplete("map");
          map.setZoom(18);
          map.setCenter(result.geometry.location);

      });
      $("#locations").bind("geocode:dragged", function(event, latLng){
          $('.pac-container').css('z-index', '9999');
          console.log('Dragged Lat: '+latLng.lat());
          console.log('Dragged Lng: '+latLng.lng());
          var map = $("#locations").geocomplete("map");
          map.panTo(latLng);
          var geocoder = new google.maps.Geocoder();
          geocoder.geocode({'latLng': latLng }, function(results, status) {
              if (status == google.maps.GeocoderStatus.OK) {
                  if (results[0]) {
                      console.log(results[0].formatted_address);
                      setCookie('posLat',latLng.lat(),'1');
                      setCookie('posLan',latLng.lng(),'1');
                      setCookie('address',results[0].formatted_address,'1');
                      $('#location_lats').val(latLng.lat());
                      $('#location_langs').val(latLng.lng());
                      var road = results[0].address_components[1].long_name;
                      var town = results[0].address_components[2].long_name;
                      var county = results[0].address_components[3].long_name;
                      var country = results[0].address_components[4].long_name;
                      $('#locations').val(results[0].formatted_address);
                      $('.location-search').val(results[0].formatted_address);
                      $('.location-search').html(results[0].formatted_address);
                  }
              }
          });
      });
      $("#pincode-suggestionss").geocomplete({
          details: ".geo-details",
          detailsAttribute: "data-geo"

      }).bind("geocode:result", function (event, result) {
          $("#latss").val(result.geometry.location.lat());
          $("#lngss").val(result.geometry.location.lng());
          var parsedResult=$(result.adr_address);
          var stateVal=parsedResult.filter('.region').text();
          var CityVal=parsedResult.filter('.locality').text();
          var Cn=parsedResult.filter('.country-name').text();
          var postal_code=parsedResult.filter('.postal-code').text();
          //alert(result.adr_address);
          //$('#pincode').text('Deliver To '+postal_code);
          $('#postal_codes').val(postal_code);
          $('#setting_countrys').val(Cn);
          $('#setting_states').val(stateVal);

          if(CityVal!=""){
              $("#setting_citys").val(CityVal);
          }
      });
  </script>

  <script type="text/javascript">
      // ** UPDATES FOR AUTOCOMPLETE <!-- FOR GET LOCATION -->//
      @php


          if (empty($product_data->lat)  && empty($product_data->lng) ) {
              $latitude = 14.6091;
              $longtitude = 121.0223;
          }else{
              $latitude = $product_data->lat;
              $longtitude = $product_data->lng;
          }



          @endphp

      function initialize() {
            var mapOptions = {
              center: new google.maps.LatLng(@php echo $latitude; @endphp, @php echo $longtitude; @endphp),
                zoom: 13,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById('map_canvas'),
            mapOptions);
            var options = {  componentRestrictions: {country: "ph"} };
            var input = document.getElementById('location');
            var autocomplete = new google.maps.places.Autocomplete(input,options);

            autocomplete.bindTo('bounds', map);


            var infowindow = new google.maps.InfoWindow();
            var marker = new google.maps.Marker({
                map: map,
                draggable: true,
            });
            google.maps.event.addListener(marker, 'dragend', function(evt) {
                  document.getElementById('location_lat').value = this.getPosition().lat();
                  document.getElementById('location_lang').value = this.getPosition().lng();
              });
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                infowindow.close();
                var place = autocomplete.getPlace();

                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17); // Why 17? Because it looks good.
                }

                var image = new google.maps.MarkerImage(
                place.icon,
                new google.maps.Size(71, 71),
                new google.maps.Point(0, 0),
                new google.maps.Point(17, 34),
                new google.maps.Size(35, 35));
                marker.setIcon(image);
                marker.setPosition(place.geometry.location);

                var address = '';
                if (place.address_components) {
                    address = [(place.address_components[0] && place.address_components[0].short_name || ''), (place.address_components[1] && place.address_components[1].short_name || ''), (place.address_components[2] && place.address_components[2].short_name || '')].join(' ');
                }

                updateTextFields(place.geometry.location.lat(),place.geometry.location.lng());

                infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address + "<br>" + place.geometry.location);
                infowindow.open(map, marker);
            });

            // Sets a listener on a radio button to change the filter type on Places
            // Autocomplete.
            function setupClickListener(id, types) {
                var radioButton = document.getElementById(id);
                google.maps.event.addDomListener(radioButton, 'click', function () {
                    autocomplete.setTypes(types);
                });
            }

            setupClickListener('changetype-all', []);
            setupClickListener('changetype-establishment', ['establishment']);
            setupClickListener('changetype-geocode', ['geocode']);
        }
        google.maps.event.addDomListener(window, 'load', initialize);

        function updateTextFields(lat, lng) {
            $('#location_lat').val(lat);
            $('#location_lang').val(lng);
        }
  </script>



<script type="text/javascript">

  var options = {
      map: "#canvass",
      country: 'ph',
      mapOptions: {
          streetViewControl: false
          //mapTypeId : google.maps.MapTypeId.HYBRID
      },
      markerOptions: {
          draggable: true
      }
  };
  $("#locations").geocomplete(options).bind("geocode:result", function(event, result){
      $('.pac-container').css('z-index', '9999');
      $('#defaults').hide();
      $('#canvass').show();
      $('#logss').html(result.formatted_address);
      $('#logss').val(result.formatted_address);
      $('.location-search').html(result.formatted_address)
      setCookie('posLat',result.geometry.location.lat(),'1');
      setCookie('posLan',result.geometry.location.lng(),'1');
      setCookie('address',result.formatted_address,'1');
      var map = $("#locations").geocomplete("map");
      map.setZoom(18);
      map.setCenter(result.geometry.location);

  });
  $("#locations").bind("geocode:dragged", function(event, latLng){
      $('.pac-container').css('z-index', '9999');
      console.log('Dragged Lat: '+latLng.lat());
      console.log('Dragged Lng: '+latLng.lng());
      var map = $("#locations").geocomplete("map");
      map.panTo(latLng);
      var geocoder = new google.maps.Geocoder();
      geocoder.geocode({'latLng': latLng }, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
              if (results[0]) {
                  console.log(results[0].formatted_address);
                  setCookie('posLat',latLng.lat(),'1');
                  setCookie('posLan',latLng.lng(),'1');
                  setCookie('address',results[0].formatted_address,'1');
                  $('#location_lats').val(latLng.lat());
                  $('#location_langs').val(latLng.lng());
                  var road = results[0].address_components[1].long_name;
                  var town = results[0].address_components[2].long_name;
                  var county = results[0].address_components[3].long_name;
                  var country = results[0].address_components[4].long_name;
                  $('#locations').val(results[0].formatted_address);
                  $('.location-search').val(results[0].formatted_address);
                  $('.location-search').html(results[0].formatted_address);
              }
          }
      });
  });
  $("#pincode-suggestionss").geocomplete({
      details: ".geo-details",
      detailsAttribute: "data-geo"

  }).bind("geocode:result", function (event, result) {
      $("#latss").val(result.geometry.location.lat());
      $("#lngss").val(result.geometry.location.lng());
      var parsedResult=$(result.adr_address);
      var stateVal=parsedResult.filter('.region').text();
      var CityVal=parsedResult.filter('.locality').text();
      var Cn=parsedResult.filter('.country-name').text();
      var postal_code=parsedResult.filter('.postal-code').text();
      //alert(result.adr_address);
      //$('#pincode').text('Deliver To '+postal_code);
      $('#postal_codes').val(postal_code);
      $('#setting_countrys').val(Cn);
      $('#setting_states').val(stateVal);

      if(CityVal!=""){
          $("#setting_citys").val(CityVal);
      }
  });
</script>

<script type="text/javascript">
  // ** UPDATES FOR AUTOCOMPLETE <!-- FOR GET LOCATION -->//
  @php

      if (empty($product_data->lat)  && empty($product_data->lng) ) {
          $latitude = 14.6091;
          $longtitude = 121.0223;
      }else{
          $latitude = $product_data->lat;
          $longtitude = $product_data->lng;
      }


      @endphp

  function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(@php echo $latitude; @endphp, @php echo $longtitude; @endphp),
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById('map_canvas2'),
        mapOptions);
        var options = {  componentRestrictions: {country: "ph"} };
        var input = document.getElementById('location2');
        var autocomplete = new google.maps.places.Autocomplete(input,options);

        autocomplete.bindTo('bounds', map);


        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
            map: map,
            draggable: true,
        });
        google.maps.event.addListener(marker, 'dragend', function(evt) {
              document.getElementById('location_lat2').value = this.getPosition().lat();
              document.getElementById('location_lang2').value = this.getPosition().lng();
          });
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            infowindow.close();
            var place = autocomplete.getPlace();

            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17); // Why 17? Because it looks good.
            }

            var image = new google.maps.MarkerImage(
            place.icon,
            new google.maps.Size(71, 71),
            new google.maps.Point(0, 0),
            new google.maps.Point(17, 34),
            new google.maps.Size(35, 35));
            marker.setIcon(image);
            marker.setPosition(place.geometry.location);

            var address = '';
            if (place.address_components) {
                address = [(place.address_components[0] && place.address_components[0].short_name || ''), (place.address_components[1] && place.address_components[1].short_name || ''), (place.address_components[2] && place.address_components[2].short_name || '')].join(' ');
            }

            updateTextFields2(place.geometry.location.lat(),place.geometry.location.lng());

            infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address + "<br>" + place.geometry.location);
            infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
            var radioButton = document.getElementById(id);
            google.maps.event.addDomListener(radioButton, 'click', function () {
                autocomplete.setTypes(types);
            });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    function updateTextFields2(lat, lng) {
        $('#location_lat2').val(lat);
        $('#location_lang2').val(lng);
    }
</script>


<script>
  $(document).ready(function () {

      $('.editbtn').on('click', function () {

          $('#editmodal').modal('show');

          $tr = $(this).closest('tr');

          var data = $tr.children("td").map(function () {
              return $(this).text();
          }).get();

          console.log(data);

          let updateroute = "/driver/"+data[0].toString();
          $("#formid").attr("action", updateroute);

          $('#fname2').val(data[1]);
          $('#lname2').val(data[2]);
          $('#mobile2').val(data[3]);
          $('#email2').val(data[4]);

          let valGender = data[9].toString();
          $('#gender2 option[value="' + valGender +'"]').prop("selected", true);

          $('#birthdate2').val(data[10]);
          $('#location').val(data[11]);

          let valApproval = data[14].toString();
          $('#approval2 option[value="' + valApproval +'"]').prop("selected", true);

          let valStatus = data[15].toString();
          $('#status2 option[value="' + valStatus +'"]').prop("selected", true);
          // document.write(valStatus);
          // let test = data[11].toString();
          // document.write(test);
          let vehicle_type_val = data[16].toString();
          $('#vehicle_type2 option[value="' + vehicle_type_val +'"]').prop("selected", true);
          // document.write(vehicle_type_val);
          $('#zipcode2').val(data[17]);

          let driver_license_val = "uploads/driver/"+data[18].toString();
          $('#download_driver_license').prop("href", driver_license_val);

          let nbi_val = "uploads/driver/"+data[19].toString();
          $('#download_nbi').prop("href", nbi_val);

          let dead_of_sale_val = "uploads/driver/"+data[20].toString();
          $('#download_dead_of_sale_val').prop("href", dead_of_sale_val);

          let health_cert_val = "uploads/driver/"+data[21].toString();
          $('#download_health_cert').prop("href", health_cert_val);

          let prof_image_val = "uploads/driver/"+data[21].toString();
          $('#download_prof_image').prop("href", prof_image_val);


          // $('#prof_image2 option[value="' + valStatus +'"]');

          // $('#prof_image2').val(data[17]);
          // $('#gov_id').val(data[18]);
          // $('#buss_reg_cert').val(data[19]);
          // $('#bir_form').val(data[20]);







      });
  });
</script>

<script>
    $(document).ready(function () {

        $(document).on('click', '.viewOrder', function (e) {
                e.preventDefault();
                driver_id = $(this).val();
                fetchOrder();


        });

        $(document).on('change', '.sel_status', function (e) {
            e.preventDefault();
            selOrderStatus = $(this).val();
            order_id = $(this).find(':selected').data('oid');
            // alert(selOrderStatus);

            var data = {
                    'orderStatus': selOrderStatus,
                    'update_driver_id': driver_id,

                }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            console.log(driver_id);
            $.ajax({
                type: "PUT",
                url: "/update-order-status/" + order_id,
                data: data,
                dataType: "json",
                success: function (response) {
                        console.log(response);
                    if (response.status == 400) {
                        $('#save_msgList').html("");
                        $('#save_msgList').addClass(' alert-danger');
                        $.each(response.errors, function (key, err_value) {
                            $('#save_msgList').append('<li>' + err_value + '</li>');
                        });

                    } else {
                        $('#save_msgList').html("");
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);

                        setTimeout(function() {
                            $('#success_message').fadeOut('fast');
                        }, 3000); // <-- time in milliseconds
                        // $('#AddStudentModal').find('input').val('');
                        // $('.add_student').text('Save');
                        // $('#AddStudentModal').modal('hide');
                        fetchOrder();
                    }
                }
            });

        });

        function fetchOrder(){
            $.ajax({
                    type: "GET",
                    url: "/get-driver-orders/"+driver_id,
                    dataType: "json",
                    success: function (response) {
                        console.log(response)
                        if (response.data.data != null) {
                            console.log(response.pagination);
                            $('.OrderTbody').html("");
                            $.each(response.data.data, function (key, item) {
                                $('.OrderTbody').append('<tr><td>' + item.o_id + '</td><td>' + item.s_name + '</td><td>' + item.c_lname + '</td><td>' + item.c_address + '</td><td>' + item.o_total_amount + '</td>\
                                <td>' + (item.o_status == 0 ? 'Pending' : item.o_status == 1 ? 'Approved' :item.o_status == 2 ? 'Preparing' :item.o_status == 3 ? 'Ready' :item.o_status == 4 ? 'Order Assigned to Driver' : item.o_status == 5 ? 'On-The-Way' :item.o_status == 6 ? 'Delivered' :"Pending") + '</td>\
                                <td><select class="form-control sel_status" aria-label="Default select example" style="width:120px;">\
                                     <option class="opt1" value="" disabled selected hidden>Select Action</option>\
                                     <option value="4"  data-oid='+item.o_id+' '+ (item.o_status == 4 ? 'selected' : '')+'>Assigned Order</option>\
                                     <option value="5"  data-oid='+item.o_id+' '+ (item.o_status == 5 ? 'selected' : '')+'>On-The-Way</option>\
                                     <option value="6"  data-oid='+item.o_id+' '+ (item.o_status == 6 ? 'selected' : '')+'>Delivered</option>\
                                </select></td>\
                                \</tr>');


                                $('#pagination').html(response.pagination);


                            });



                        }
                    }
                });
        }

    });
    </script>
{{--  --}}
@endsection

