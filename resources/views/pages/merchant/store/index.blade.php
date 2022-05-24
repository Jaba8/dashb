@extends('layouts.merchantMaster')

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
            <h4 style="font-weight: bold" class="mt-1"> Store List</h4>
          </div>

          <div class="col-sm-3">
            <div class="input-group input-group-sm" >
              <form action="/store-search" method="GET">
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
                       Add New Store
                     </button>

                     <!-- Modal -->
                     <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                       <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                         <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalScrollableTitle">Store Information</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                           <div class="modal-body">
                             <form action="/store" method="POST" enctype="multipart/form-data">
                               @csrf
                               <div class="form-row">
                                 <div class="form-group col-md-4 mt-3">
                                   <label for="storename">Store Name</label>
                                   <input type="text" class="form-control" name="storename" id="storename" placeholder="Store Name" required>
                                   {{-- <span style="color: red">
                                        @error('fname') <li>{{$message}}</li> @enderror
                                   </span> --}}
                                 </div>
                                 <div class="form-group col-md-4 mt-3">
                                   <label for="open_time">Opening TIme</label>
                                   <input type="time" class="form-control"  name="open_time" id="open_time"required>
                                 </div>
                                 <div class="form-group col-md-4 mt-3">
                                   <label for="close_time">Closing Time</label>
                                   <input type="time" class="form-control"  name="close_time" id="close_time" required>
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
                                  <label for="zipcode">Zip Code</label>
                                  <input type="text" class="form-control" name="zipcode" id="zipcode" >
                              </div>
                          </div>


                        <div class="form-row">
                          <div class="form-group col-md-4">
                                <label for="storeuser_id">Select Store User</label>
                                <select class="form-select" aria-label="Default select example" name="storeuser_id" id="storeuser_id" required>
                                  <option class="opt1" value="" disabled selected hidden>Select Store User</option>
                                  @foreach($storeusers as $storesuer)
                                      <option value="{{$storesuer->id}}">{{$storesuer->first_name}}</option>
                                  @endforeach
                                  {{-- <option value="0">Male</option>
                                  <option value="1">Female</option> --}}
                                </select>
                          </div>
                          <div class="form-group col-md-4">
                            <label for="prof_image">Profile Image</label>
                            <input type="file" class="form-control" name="prof_image" id="prof_image" >
                        </div>
                            <div class="form-group col-md-4">
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
              <h5 class="modal-title" id="exampleModalLabel"> Update Store Information </h5>
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
                                    <label for="storename2">Store Name</label>
                                    <input type="text" class="form-control" name="storename2" id="storename2" placeholder="Store Name" required>
                                    {{-- <span style="color: red">
                                        @error('fname') <li>{{$message}}</li> @enderror
                                    </span> --}}
                                  </div>
                                  <div class="form-group col-md-4 mt-3">
                                    <label for="open_time2">Opening TIme</label>
                                    <input type="time" class="form-control"  name="open_time2" id="open_time2"required>
                                  </div>
                                  <div class="form-group col-md-4 mt-3">
                                    <label for="close_time2">Closing Time</label>
                                    <input type="time" class="form-control"  name="close_time2" id="close_time2" required>
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
                                  <label for="zipcode2">Zip Code</label>
                                  <input type="text" class="form-control" name="zipcode2" id="zipcode2" >
                              </div>
                          </div>


                        <div class="form-row">
                          <div class="form-group col-md-4">
                                <label for="storeuser_id2">Select Store User</label>
                                <select class="form-select" aria-label="Default select example" name="storeuser_id2" id="storeuser_id2" required>
                                  <option class="opt1" value="" disabled selected hidden>Select Store User</option>
                                  @foreach($storeusers as $storesuer)
                                      <option value="{{$storesuer->id}}">{{$storesuer->first_name}}</option>
                                  @endforeach
                                  {{-- <option value="0">Male</option>
                                  <option value="1">Female</option> --}}
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
                              <th>Customer Name</th>
                              <th>Total Amount</th>
                              <th>Driver Name</th>
                              <th>Status</th>

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


             {{-- withdraw modal --}}

    <div class="modal fade " role="dialog" id="Withdraw" aria-labelledby="WithdrawTitle"
    aria-bs-hidden="true">
     <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
         <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="WithdrawTitle"> Active Withdrawal</h5>

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
                      <form action="/merchant-withdrawal" method="POST" enctype="multipart/form-data" id="">
                           @csrf
                            <div class="form-row">
                                <div class="col-2">
                                    <input type="text" class="form-control" name="sum" readonly id="sum">
                                    <input type="hidden" class="form-control" name="store_id" readonly id="store_id">

                                </div>
                                <div class="col-6">
                                    <input type="submit" class="btn btn-primary reqWithdrawal" value="Request Withdrawal">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-6">
                                    <p> </p>
                                </div>
                            </div>

                    </form>

                      <div class=" card-body table-responsive p-0" style="z-index: -99999">
                        <table class="table table-head-fixed text-nowrap table-striped table-hover">
                          <thead class="thead-light">
                            <tr>
                              <th>Order ID</th>
                              <th>Customer Name</th>
                              <th>Total Amount</th>
                              <th>Driver Name</th>


                            </tr>
                          </thead>
                          <tbody class="OrderTbody2">

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
           {{-- withdraw modal --}}


<div class="row">
          <div class="col-12">

              <div class="tablesizes card-body table-responsive p-0" style="z-index: -99999">
                <table class="table table-head-fixed text-nowrap table-striped table-hover">
                  <thead class="thead-light">
                    <tr>
                      <th>ID No.</th>
                      <th>Image</th>
                      <th>Store Name</th>
                      <th>Store User Name</th>
                      <th>Open Time</th>
                      <th>Close Time</th>
                      <th>Zip Code</th>
                      <th>Approval</th>
                      <th>Status</th>
                      <th>Wallet</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach($stores as $store)
                    <tr>
                      <td class="align-middle">{{$store ->id}}</td>
                      <td>
                        <img src="uploads/store/{{$store ->profile_image}}" alt="" style="width: 100px;
                        height: 50px;">
                      </td>
                      <td class="align-middle">{{$store ->store_name}}</td>
                      <td class="align-middle">{{$store ->s_lname}}</td>
                      <td class="align-middle">{{$store ->open_time}}</td>
                      <td class="align-middle">{{$store ->close_time}}</td>
                      <td class="align-middle">{{$store ->zipcode}}</td>
                      <td class="align-middle">
                          @if($store->approval == 0)
                                Pending
                          @elseif($store->approval == 1)
                                Approved
                          @else
                                Declined
                          @endif
                      </td>
                      <td class="align-middle">
                        @if($store->status == 0)
                              Inactive
                        @else
                              Active
                        @endif
                      </td>
                      <td class="align-middle">{{$store ->wallet}}</td>
                      <td class="align-middle">
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

                        <button type="button" value="{{$store ->id}}" class="btn viewOrder" data-toggle="modal" data-target="#CheckOrder" style="background: none;
                            color: inherit;
                            border: none;
                            padding: 0;
                            font: inherit;
                            cursor: pointer;
                            outline: inherit;
                            margin-top:-5px;
                            "> <i class="fas fa-cart-arrow-down"></i>Check Orders</button>

                            <button type="button" value="{{$store ->id}}" class="btn viewWithdraw" data-toggle="modal" data-target="#Withdraw" style="background: none;
                                color: inherit;
                                border: none;
                                padding: 0;
                                font: inherit;
                                cursor: pointer;
                                outline: inherit;
                                margin-top:-5px;
                                "> <i class="fas fa-cart-arrow-down"></i>Withdraw</button>



                          {{-- update modal --}}

                      </td>
                      {{-- 10 --}}
                      <td style="display:none;">{{$store ->approval}}</td>
                      <td style="display:none;">{{$store ->status}}</td>
                      <td style="display:none;">{{$store ->address}}</td>
                      <td style="display:none;">{{$store ->store_users_id}}</td>
                      <td style="display:none;">{{$store ->profile_image}}</td>

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
              {{$stores->links()}}
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
          let updateroute = "/merchant-store/"+data[0].toString();
          $("#formid").attr("action", updateroute);

          $('#storename2').val(data[2]);
          $('#open_time2').val(data[4]);
          $('#close_time2').val(data[5]);
          $('#zipcode2').val(data[6]);

          let valApproval = data[11].toString();
          $('#approval2 option[value="' + valApproval +'"]').prop("selected", true);

          let valStatus = data[12].toString();
          $('#status2 option[value="' + valStatus +'"]').prop("selected", true);

          $('#location').val(data[13]);

          let valStoreUser = data[14].toString();
          $('#storeuser_id2 option[value="' + valStoreUser +'"]').prop("selected", true);


          // let test = data[11].toString();
          // document.write(test);
          let prof_img_val = "uploads/store/"+data[15].toString();
          $('#download_prof_image').prop("href", prof_img_val);

      });
  });
</script>

<script>
$(document).ready(function () {

    $(document).on('click', '.viewOrder', function (e) {
            e.preventDefault();
            store_id = $(this).val();
            fetchOrder();


    });

    $(document).on('change', '.sel_status', function (e) {
        e.preventDefault();
        selOrderStatus = $(this).val();
        // get 2nd value
        order_id = $(this).find(':selected').data('oid');
        // alert(selOrderStatus);

        var data = {
                'orderStatus': selOrderStatus,

            }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        console.log(store_id);
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
                url: "/get-orders/"+store_id,
                dataType: "json",
                success: function (response) {
                    // console.log(response.data.links)
                    if (response.data.data != null) {
                        console.log(response.pagination);
                        $('.OrderTbody').html("");
                        $.each(response.data.data, function (key, item) {
                            $('.OrderTbody').append('<tr><td>' + item.o_id + '</td><td>' + item.c_lname + '</td><td>' + item.o_tot_amt + '</td>'
                            + (item.d_lname == null ? '<td>' + 'No Assign Driver' + '</td>' :'<td>' + item.d_lname + '</td>') +
                            '<td><select class="form-control sel_status" aria-label="Default select example">\
                                 <option value="0" data-oid='+item.o_id+' '+ (item.o_status == 0 ? 'selected' : '')+'>Pending</option>\
                                 <option value="1" data-oid='+item.o_id+' '+ (item.o_status == 1 ? 'selected' : '')+'>Approved</option>\
                                 <option value="2" data-oid='+item.o_id+' '+ (item.o_status == 2 ? 'selected' : '')+'>Preparing</option>\
                                 <option value="3" data-oid='+item.o_id+' '+ (item.o_status == 3 ? 'selected' : '')+'>Ready</option>\
                                 <option value="4" disabled data-oid='+item.o_id+' '+ (item.o_status == 4 ? 'selected' : '')+'>Order Assigned to Driver</option>\
                                 <option value="5" disabled data-oid='+item.o_id+' '+ (item.o_status == 5 ? 'selected' : '')+'>On-The-Way</option>\
                                 <option value="6" disabled data-oid='+item.o_id+' '+ (item.o_status == 6 ? 'selected' : '')+'>Delivered</option>\
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

<script>
    $(document).ready(function () {

        function calc_total(){

                var sum = 0;
                var zero = 0;
                var length = $('.total').length;
                if(length != 0){
                    $(".total").each(function(){
                        sum += parseFloat($(this).text());
                        $('#sum').val(sum);
                    });
                }else{
                    $('#sum').val(zero);
                }


                }

        $(document).on('click', '.viewWithdraw', function (e) {
                e.preventDefault();
                store_id = $(this).val();
                $('#store_id').val(store_id);
                fetchOrder();

                // let updateroute = "/merchant-withdrawal/"+store_id;
                // $("#formWithdrawal").attr("action", updateroute);



        });



        $(document).on('change', '.sel_status', function (e) {
            e.preventDefault();
            selOrderStatus = $(this).val();
            // get 2nd value
            order_id = $(this).find(':selected').data('oid');
            // alert(selOrderStatus);

            var data = {
                    'orderStatus': selOrderStatus,

                }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            console.log(store_id);
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
                    url: "/get-available-withdrawal-orders/"+store_id,
                    dataType: "json",
                    success: function (response) {
                        // console.log(response.data.links)
                        if (response.data.data != null) {
                            console.log(response.pagination);
                            $('.OrderTbody2').html("");
                            $.each(response.data.data, function (key, item) {
                                $('.OrderTbody2').append('<tr><td>' + item.o_id + '</td><td>' + item.c_lname + '</td><td class="total">' + item.o_tot_amt + '</td>'
                                + (item.d_lname == null ? '<td>' + 'No Assign Driver' + '</td>' :'<td>' + item.d_lname + '</td>') +
                                '\</tr>');


                                $('#pagination').html(response.pagination);

                                calc_total();
                            });



                        }
                    }
                });
        }

    });
    </script>


@endsection

