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
            <h4 style="font-weight: bold" class="mt-1"> Customer List</h4>
          </div>

          <div class="col-sm-3">
            <div class="input-group input-group-sm" >
              <form action="/customer-search" method="GET">
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
                       Add New Customer
                     </button>

                     <!-- Modal -->
                     <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                       <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                         <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalScrollableTitle">Customer Information</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                           <div class="modal-body">
                             <form action="/customer" method="POST" enctype="multipart/form-data">
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
                                  <div class="form-group col-md-4">
                                    <label for="approval">Approval</label>
                                    <select class="form-select" aria-label="Default select example" name="approval" id="approval" required>
                                      <option class="opt1" value="" disabled selected hidden>Set Approval</option>
                                      <option value="0">Pending</option>
                                      <option value="1">Approved</option>
                                      <option value="2">Declined</option>
                                    </select>
                                  </div>

                                  <div class="form-group col-md-4">
                                      <label for="status">Status</label>
                                      <select class="form-select" aria-label="Default select example" name="status" id="status" required>
                                        <option class="opt1" value="" disabled selected hidden>Select Status</option>
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                      </select>
                                  </div>

                                  <div class="form-group col-md-4">
                                    <label for="prof_image">Profile Image</label>
                                    <input type="file" class="form-control" name="prof_image" id="prof_image" >
                                  </div>
                              </div>


                              <div class="form-row">
                                <div class="form-group col-md-4">
                                  <div class="form-group">
                                    <label for="address">Address</label>
                                      <input type="text" class="form-control mb-3" id="location2"  value="" name="address2" placeholder="Address" required>
                                      <input type="hidden" name="location_lat2" id="location_lat2" value="">
                                      <input type="hidden" name="location_lang2" id="location_lang2">
                                      <input type="hidden" name="city2" id="city2">
                                      <input type="hidden" name="state2" id="state2">
                                      <input type="hidden" name="region2" id="region2">
                                      <input type="hidden" name="logs2" id="logs2">
                                      <div id="map_canvas2" style="width: 100%;height: 160px;"></div>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                  <label for="is_verified">Verification</label>
                                  <select class="form-select" aria-label="Default select example" name="is_verified" id="is_verified" required>
                                    <option class="opt1" value="" disabled selected hidden>Select Verification</option>
                                    <option value="0">Not Verified</option>
                                    <option value="1">Verified</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <span id="test2">saasdd</span>
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

.select2-selection__rendered {
    line-height: 35px !important;
    margin-bottom:100px !important;
}
.select2-container .select2-selection--single {
    height: 37px !important;

    vertical-align: middle;
    color:gray;
}
.select2-selection__arrow {
    height: 35px !important;
}
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

{{-- update modal --}}
  <div class="modal fade" id="editmodal" role="dialog" aria-labelledby="exampleModalLabel"
  aria-bs-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> Update Customer Information </h5>
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
                                      <label for="gender2">Gender</label>
                                      <select class="form-select" aria-label="Default select example" name="gender2" id="gender2" >
                                        <option class="opt1" value="" disabled selected hidden>Select Gender</option>
                                        <option value="0">Male</option>
                                        <option value="1">Female</option>
                                      </select>
                                  </div>

                                  <div class="form-group col-md-4">
                                      <label for="birthdate2">Birth Date(D/M/Y)</label>
                                      <input type="date" class="form-control" name="birthdate2" id="birthdate2" placeholder="Birth Date">
                                  </div>
                                  </div>

                                  <div class="form-row">
                                    <div class="form-group col-md-4">
                                      <label for="approval2">Approval</label>
                                      <select class="form-select" aria-label="Default select example" name="approval2" id="approval2" required>
                                        <option class="opt1" value="" disabled selected hidden>Set Approval</option>
                                        <option value="0">Pending</option>
                                        <option value="1">Approved</option>
                                        <option value="2">Declined</option>
                                      </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="status2">Status</label>
                                        <select class="form-select" aria-label="Default select example" name="status2" id="status2" required>
                                          <option class="opt1" value="" disabled selected hidden>Select Status</option>
                                          <option value="0">Inactive</option>
                                          <option value="1">Active</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                      <label for="prof_image2">Profile Image
                                        <a href="" download="" id="download_prof_image">
                                           Download
                                        </a>
                                    </label>
                                      <input type="file" class="form-control" name="prof_image2" id="prof_image2" >
                                    </div>
                                </div>


                                <div class="form-row">
                                  <div class="form-group col-md-4">
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

                                  <div class="form-group col-md-4">
                                    <label for="is_verified2">Verification</label>
                                    <select class="form-select" aria-label="Default select example" name="is_verified2" id="is_verified2" required>
                                      <option class="opt1" value="" disabled selected hidden>Select Verification</option>
                                      <option value="0">Not Verified</option>
                                      <option value="1">Verified</option>
                                    </select>
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

  <div class="modal fade " role="dialog" id="NewOrder" aria-labelledby="NewOrderTitle"
  aria-bs-hidden="true">
   <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
       <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="NewOrderTitle"> Add New Order </h5>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-bs-hidden="true">&times;</span>
              </button>
          </div>
          <div style="">
             <ul id="save_msgList" ></ul>
          </div>
          <h4 id="success_message"></h4>
          <div class="modal-body">


              <form action="/order" method="POST" enctype="multipart/form-data" id="order_form">
                @csrf

                <div class="form-row">


                  <div class="form-group col-md-3">
                    <label for="sel_store">Stores</label><br>
                    <select class="form-control sel_store" aria-label="Default select example" name="store" id="sel_store"  required>
                      <option class="opt1" value="" disabled selected hidden>Select Stores</option>
                      {{-- @foreach($stores as $store)
                        <option value="{{ $store->id }}">{{ $store->store_name }}</option>
                      @endforeach --}}
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="sel_product">Products</label><br>
                    <select class="form-control sel_product" aria-label="Default select example" name="customer" id="sel_product"  required>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="sel_qty">Quantity</label>
                    <input type="number" class="form-control sel_qty" name="sel_qty" id="sel_qty" required>
                </div>

                <div class="form-group col-md-3">
                    <label for="addToCart"> Action</label><br>
                    <button type="button" class="btn btn-primary addToCart">Add to Cart</button>
                </div>

                </div>

            </form>

                  {{-- cart --}}
            <div class="row">
                <div class="col-12">

                    <div class=" card-body table-responsive p-0" style="z-index: -99999">
                      <table class="table table-head-fixed text-nowrap table-striped table-hover">
                        <thead class="thead-light">
                          <tr>

                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="OrderTbody">

                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>


                  <!-- /.card -->

                  <div class="mt-2">
                    {{-- {{$customers->links()}} --}}
                  </div>
                </div>
                 <hr>
                 <div class="row">
                    <div class="form-group col-md-12">
                        <div class="form-group">
                        <label for="addres3">Address</label>
                            <input type="text" class="form-control mb-3" id="location3"  value="" name="address3" placeholder="Address" required>
                            <input type="hidden" name="location_lat3" id="location_lat3" value="">
                            <input type="hidden" name="location_lang3" id="location_lang3">
                            <input type="hidden" name="city3" id="city3">
                            <input type="hidden" name="state3" id="state3">
                            <input type="hidden" name="region3" id="region3">
                            <input type="hidden" name="logs3" id="logs3">
                            <div id="map_canvas3" style="width: 100%;height: 160px;"></div>
                        </div>
                    </div>
                 </div>
                <div class="row">
                    <div class="col-3">
                        <label for="sum">Total Amount</label><br>
                        <p id="sum"></p>
                    </div>

                    <div class="col-3">
                        <label for="sf">Shipping Fee</label><br>
                        <p id="sf">Shipping Fee</p>
                      </div>

                      <div class="col-3">
                        <label for="km">Kilometer</label><br>
                        <p id="km">Kilometer</p>
                    </div>

                      <div class="col-3">
                        <label for="voucher">Voucher</label><br>
                        <p id="voucher">Voucher</p>
                    </div>



                 </div>


                 <div class="row">

                    <div class="col-3">
                        <label for="admin_earning">Admin Earning</label><br>
                        <p id="admin_earning">Admin Earning</p>
                      </div>

                        <div class="col-3">
                            <label for="vendor_earning">Vendor Earning</label><br>
                            <p id="vendor_earning">Vendor Earning</p>
                        </div>
                        <div class="col-3">
                            <label for="driver_earning">Driver Earning</label><br>
                            <p id="driver_earning">Driver Earning</p>
                        </div>
                 </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="neworder" class="btn btn-primary placeOrder">Place Order</button>
                </div>


            {{-- cart --}}
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
                      <th style="text-align: center;">Action</th>


                    </tr>
                  </thead>
                  <tbody>
                    @foreach($customers as $customer)
                    <tr>
                      <td>{{$customer ->id}}</td>
                      <td>{{$customer ->first_name}}</td>
                      <td>{{$customer ->last_name }}</td>
                      <td>{{$customer ->mobile}}</td>
                      <td>{{$customer ->email}}</td>
                      <td>
                        @if($customer->gender == 0)
                              Male
                        @else
                              Female
                        @endif

                      </td>
                      <td>
                          @if($customer->approval == 0)
                                Pending
                          @elseif($customer->approval == 1)
                                Approved
                          @else
                                Declined
                          @endif
                      </td>
                      <td>
                        @if($customer->status == 0)
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

                          <button type="button" value="{{$customer ->id}}" class="btn viewCart" data-toggle="modal" data-target="#NewOrder" style="background: none;
                          color: inherit;
                          border: none;
                          padding: 0;
                          font: inherit;
                          cursor: pointer;
                          outline: inherit;
                          margin-top:-5px;
                          "> <i class="fas fa-cart-arrow-down"></i>Order </button>


                      </td>
                      <td style="display:none;">{{$customer ->gender}}</td>
                      <td style="display:none;">{{$customer ->birthdate}}</td>
                      <td style="display:none;">{{$customer ->address}}</td>
                      <td style="display:none;">{{$customer ->lat}}</td>
                      <td style="display:none;">{{$customer ->lng}}</td>
                      <td style="display:none;">{{$customer ->approval}}</td>
                      <td style="display:none;">{{$customer ->status}}</td>
                      <td style="display:none;">{{$customer ->profile_image}}</td>
                      <td style="display:none;">{{$customer ->is_verified}}</td>

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
              {{$customers->links()}}
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
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
{{-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.0/jquery.validate.min.js"></script> --}}


{{--
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
  </script> --}}

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



{{-- <script type="text/javascript">

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
</script> --}}

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
            //   $('#location_lat2').val(this.getPosition().lat());
            //   $('#location_lang2').val(this.getPosition().lng());
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

        // $('#test2').text($('#location_lat2').val());

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

          let updateroute = "/customer/"+data[0].toString();
          $("#formid").attr("action", updateroute);

          $('#fname2').val(data[1]);
          $('#lname2').val(data[2]);
          $('#mobile2').val(data[3]);
          $('#email2').val(data[4]);
          $('#birthdate2').val(data[10]);
          let valGender = data[9].toString();
          $('#gender2 option[value="' + valGender +'"]').prop("selected", true);
          let valApproval = data[14].toString();
          $('#approval2 option[value="' + valApproval +'"]').prop("selected", true);
          let valStatus = data[15].toString();
          $('#status2 option[value="' + valStatus +'"]').prop("selected", true);
          $('#location').val(data[11]);
          // let test = data[11].toString();
          // document.write(test);

          let prof_img_val = "uploads/customer/"+data[16].toString();
          $('#download_prof_image').prop("href", prof_img_val);
          let valIsverified = data[17].toString();
          $('#is_verified2 option[value="' + valIsverified +'"]').prop("selected", true);







      });
  });
</script>
{{-- <script>
    $('#sel_store').select2({
        dropdownParent: $('#NewOrder')
    });

    $('#sel_product').select2({
        dropdownParent: $('#NewOrder')
    });

</script> --}}

<script>
    $(document).ready(function () {

        function calc_total(){

            var sum = 0;
            var zero = 0;
            var length = $('.total').length;
            if(length != 0){
                $(".total").each(function(){
                    sum += parseFloat($(this).text());
                    $('#sum').text(sum);
                });
            }else{
                $('#sum').text(zero);
            }


        }
       function getProd(){
        $(document).on('change', '.sel_store', function (e) {
            e.preventDefault();
            store_id = $(this).val();
            console.log(customer_id);
            var data = {
                'customer_id': customer_id,

            }
            $('#sel_product').find('option').not(':first').remove();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'get',
                url:'getStoreProd/'+store_id,
                dataType:'json',
                data:data,

                success:function (response) {
                    console.log(response);

                    // var len = 0;
                    // if (response.data != null) {
                    //     len = response.data.length;
                    // }

                    // if (len>0) {
                    //     for (var i = 0; i<len; i++) {
                    //         var id = response.data[i].id;
                    //         var name = response.data[i].product_name;

                            // var option = "<option value='"+id+"'>"+name+"</option>";

                            // $("#sel_product").append(option);

                            $("#sel_product").empty();
                            $.each(response.data, function (key, item) {
                            $('#sel_product').append('<option class="opt1" value="" disabled selected hidden>Select Product</option>\
                                                    <option value='+item.id+'>'+item.product_name+'</option>');

                            });
                    //     }
                    // }
                }
            });
         });

        }
        function getStores(customer_id){

            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url:'get-customer-stores/'+customer_id,
                    type:'get',
                    dataType:'json',

                    success:function (response) {
                        console.log(response);
                        // var len = 0;
                        if (response.data != null) {
                            // len = response.data.length;

                            $("#sel_store").empty();
                            $("#sel_product").empty();
                            $.each(response.data, function (key, item) {
                            $('#sel_store').append('<option class="opt1" value="" disabled selected hidden>Select Store</option>\
                                                    <option value='+item.id+'>'+item.store_name+'</option>');

                                get_customer_store_id = item.id
                            });
                            getProd();

                                // var option = "<option value='"+id+"'>"+store_name+"</option>";

                                // $("#sel_store").append(option);


                        }


                    }
                });
        }



        $(document).on('click', '.viewCart', function (e) {
            e.preventDefault();
            customer_id = $(this).val();
            getStores(customer_id);

            $.ajax({
                type: "GET",
                url: "/get-cart/"+customer_id,
                dataType: "json",
                success: function (response) {

                    if (response.data != null) {
                        console.log(response);
                        $('.OrderTbody').html("");
                        $.each(response.data, function (key, item) {
                            $('.OrderTbody').append('<tr>\
                                <td>' + item.p_name + '</td>\
                                <td>' + item.c_qty + '</td>\
                                <td class="total">' + item.c_qty * item.p_amt + '</td>\
                               <td><button type="button" value="' +  item.c_id + '" class="btn btn-danger deleteListBtn btn-sm">Delete</button></td>\
                            \</tr>');
                            calc_total();

                            get_store_id = item.c_store_id;

                        });


                    }
                }
            });

        });


            //dito
// ADD
            $(document).on('click', '.addToCart', function (e) {
                e.preventDefault();

                // $('#order_form').validate({ // initialize the plugin
                //     rules: {
                //         store: {
                //             required: true,
                //             email: true
                //         },
                //     }
                // });
                var data = {
                    'store': $('.sel_store').val(),
                    'product': $('.sel_product').val(),
                    'quantity': $('.sel_qty').val(),
                    'customer_id': customer_id,

                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/cart-list",
                    data: data,
                    dataType: "json",
                    success: function (response) {
                           console.log(response);
                        if (response.status == 400) {
                          //  $('#save_msgList').html("");
                           // $('#save_msgList').addClass(' alert-danger');
                           // $.each(response.errors, function (key, err_value) {
                           //     $('#save_msgList').append('<li>' + err_value + '</li>');
                           // });

                        } else {
                           // $('#save_msgList').html("");
                          //  $('#success_message').addClass('alert alert-success');
                           // $('#success_message').text(response.message);

                          //  setTimeout(function() {
                          //    $('#success_message').fadeOut('fast');
                          //  }, 3000); // <-- time in milliseconds
                            // $('#AddStudentModal').find('input').val('');
                            // $('.add_student').text('Save');
                            // $('#AddStudentModal').modal('hide');
                            $.ajax({
                            type: "GET",
                            url: "/get-cart/"+customer_id,
                            dataType: "json",
                            success: function (response) {

                                if (response.data != null) {
                                    console.log(response);
                                    $('.OrderTbody').html("");
                                    $.each(response.data, function (key, item) {
                                        $('.OrderTbody').append('<tr>\
                                            <td>' + item.p_name + '</td>\
                                            <td>' + item.c_qty + '</td>\
                                            <td class="total">' + item.c_qty * item.p_amt + '</td>\
                                        <td><button type="button" value="' + item.c_id + '" class="btn btn-danger deleteListBtn btn-sm">Delete</button></td>\
                                        \</tr>');
                                        calc_total();
                                        get_store_id = item.c_store_id;
                                    });
                                    getStores(customer_id);


                                 }
                                }
                         });
                        }
                    }
                });

            });
// ADD


//DELETE
            $(document).on('click', '.deleteListBtn', function (e) {
            e.preventDefault();


            var list_id = $(this).val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: "/delete-list/" + list_id,
                dataType: "json",
                success: function (response) {
                        console.log(response);
                    if (response.status == 404) {
                        // $('#success_message').addClass('alert alert-success');
                        // $('#success_message').text(response.message);
                        // $('.delete_student').text('Yes Delete');
                    } else {
                        // $('#success_message').html("");
                        // $('#success_message').addClass('alert alert-success');
                        // $('#success_message').text(response.message);
                        // $('.delete_student').text('Yes Delete');
                        // $('#DeleteModal').modal('hide');
                        $.ajax({
                        type: "GET",
                        url: "/get-cart/"+customer_id,
                        dataType: "json",
                        success: function (response) {

                            if (response.data != null) {
                                var length2 = response.data.length;
                                console.log(length2);


                                $('.OrderTbody').html("");
                                $.each(response.data, function (key, item) {+
                                    $('.OrderTbody').append('<tr>\
                                        <td>' + item.p_name + '</td>\
                                        <td>' + item.c_qty + '</td>\
                                        <td class="total">' + item.c_qty * item.p_amt + '</td>\
                                    <td><button type="button" value="' + item.c_id + '" class="btn btn-danger deleteListBtn btn-sm">Delete</button></td>\
                                    \</tr>');


                                 });


                           }
                                 calc_total();
                                 getStores(customer_id);

                }
                       });

                    }
                }
            });




        });
  //DELETE
        // PLACE ORDER
        $(document).on('click', '.placeOrder', function (e) {
                e.preventDefault();

                // $('#order_form').validate({ // initialize the plugin
                //     rules: {
                //         store: {
                //             required: true,
                //             email: true
                //         },
                //     }
                // });
                console.log(customer_id);

                var data = {
                    'total_amount': parseInt($('#sum').text()),
                    'total_amount_less_voucher': 0,
                    'shipping_charges': parseInt($('#sf').text()),
                    'admin_earning': parseInt($('#admin_earning').text()),
                    'vendor_earning': parseInt($('#vendor_earning').text()),
                    'driver_earning': parseInt($('#driver_earning').text()),
                    'status': 0,
                    'payment_type': 0,
                    'store_id': get_store_id,
                    'driver_id': 0,
                    'customer_id': customer_id,


                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/order",
                    data: data,
                    dataType: "json",
                    success: function (response) {
                           console.log(response);
                        if (response.status == 400) {

                            $('#save_msgList').html("");
                            $('#save_msgList').addClass('alert alert-danger');
                            $.each(response.errors, function (key, err_value) {
                                $('#save_msgList').append('<li>' + err_value + '</li>');
                            });

                        } else {
                            $('#save_msgList').html("");
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);

                            setTimeout(function() {
                               $('#success_message').fadeOut('fast');
                            }, 20000);

                            // $('#AddStudentModal').find('input').val('');
                            // $('.add_student').text('Save');
                            // $('#AddStudentModal').modal('hide');

                        }
                    }
                });

            });
        // PLACE ORDER
  //ONCHANGE MAP
  function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(@php echo $latitude; @endphp, @php echo $longtitude; @endphp),
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById('map_canvas3'),
        mapOptions);
        var options = {  componentRestrictions: {country: "ph"} };
        var input = document.getElementById('location3');
        var autocomplete = new google.maps.places.Autocomplete(input,options);

        autocomplete.bindTo('bounds', map);


        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
            map: map,
            draggable: true,
        });
        google.maps.event.addListener(marker, 'dragend', function(evt) {
              document.getElementById('location_lat3').value = this.getPosition().lat();
              document.getElementById('location_lang3').value = this.getPosition().lng();
            //   $('#location_lat2').val(this.getPosition().lat());
            //   $('#location_lang2').val(this.getPosition().lng());
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

        $('#location_lat3').val(lat);
        $('#location_lang3').val(lng);

          $.ajax({
                type: "GET",
                url: 'get-stores/'+customer_id,
                dataType: "json",
                success: function (response) {

                    if (response.data != null) {
                        console.log(response);

                        $.each(response.data, function (key, item) {

                          var p = 0.017453292519943295;    // Math.PI / 180
                          var c = Math.cos;
                          var a = 0.5 - c((item.s_lat - lat) * p)/2 +
                                    c(lat * p) * c(item.s_lat * p) *
                                    (1 - c((item.s_lng - lng) * p))/2;
                          var km = 12742 * Math.asin(Math.sqrt(a))

                          var sf = km * 1 + 40;
                          var admin_earning = sf * .6;
                          var driver_earning = sf * .4;

                          $('#sf').text(sf.toFixed());
                          $('#km').text(km);
                          $('#voucher').text("0");
                          $('#admin_earning').text(admin_earning);
                          $('#vendor_earning').text($('#sum').text());
                          $('#driver_earning').text(driver_earning);
                        });


                    }
                }
            });


    }







    });
</script>

<script>
$(document).ready(function () {



        });
</script>


<script>

</script>

{{-- <script>
$(document).ready(function () {
    $('#location3').change(function () {
        //  a = document.getElementById('location_lat2').value;


        //  alert('asd');
        // $('#test2').text($('#location_lat2').val());
    });
 });
</script> --}}



{{--  --}}
@endsection

