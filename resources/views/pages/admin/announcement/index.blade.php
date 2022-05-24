@extends('layouts.Master')

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
            <h4 style="font-weight: bold" class="mt-1"> Announcement</h4>
          </div>

          <div class="col-sm-3">
            <div class="input-group input-group-sm" >
              <form action="/order-search" method="GET">
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
                     {{-- <button type="button" class="btn btn-primary  mt-1" data-toggle="modal" data-target="#exampleModalScrollable">
                       Add New order
                     </button> --}}

                     <!-- Modal -->
                     <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                       <div class="modal-dialog modal-dialog-scrollable" role="document">
                         <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalScrollableTitle">order Information</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                           <div class="modal-body">
                             <form action="/order" method="POST" enctype="multipart/form-data">
                               @csrf

                               <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="order_name">order Name</label>
                                    <input type="text" class="form-control" name="order_name" id="order_name" placeholder="order Name" required>
                                  </div>

                                  <div class="form-group col-md-6">
                                    <label for="store_id">Store Name</label>
                                    {{-- <select class="form-select" aria-label="Default select example" name="store_id" id="store_id" required>
                                      <option class="opt1" value="" disabled selected hidden>Select Store</option>
                                      @foreach($stores as $store)
                                        <option value="{{$store->id}}">{{$store->store_name}}</option>
                                      @endforeach
                                      {{-- <option value="0">Male</option>
                                      <option value="1">Female</option> --}}
                                    </select> --}}
                                  </div>
                               </div>

                              <div class="form-row">
                               <div class="form-group col-md-12">
                                 <label for="description">Description</label>
                                 <input type="text" class="form-control" name="description" id="description" placeholder="Description" required>
                               </div>
                              </div>


                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="category_id">order Category</label>
                                  <select class="form-select" aria-label="Default select example" name="category_id" id="category_id" required>
                                    {{-- <option class="opt1" value="" disabled selected hidden>Select order Category</option>
                                    @foreach($categories as $category)
                                      <option value="{{$store->id}}">{{$category->category_name}}</option>
                                    @endforeach --}}
                                    {{-- <option value="0">Male</option>
                                    <option value="1">Female</option> --}}
                                  </select>
                                </div>

                                <div class="form-group col-md-6">
                                  <label for="amount">Amount</label>
                                  <input type="number" class="form-control" name="amount" id="amount" placeholder="Amount" required>
                                </div>
                              </div>

                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="prof_image">Profile Image</label>
                                  <input type="file" class="form-control" name="prof_image" id="prof_image" >
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
<div class="row">
          <div class="col-12">

              <div class="tablesizes card-body table-responsive p-0" style="z-index: -99999">
                <table class="table table-head-fixed text-nowrap table-striped table-hover">
                  <thead class="thead-light">
                    <tr>
                      <th>ID No.</th>
                      <th>Amount</th>
                      <th>Store ID</th>
                      <th>Status</th>
                      <th>Action</th>


                    </tr>
                  </thead>
                  <tbody>
                    @foreach($withdrawals as $withdrawal)
                    <tr>
                      <td class="align-middle">{{$withdrawal ->id}}</td>
                      <td class="align-middle">{{$withdrawal ->amount }}</td>
                    <td class="align-middle">{{$withdrawal ->store_id}}</td>

                    <td class="align-middle">
                        @if($withdrawal->status == 0)
                              Pending
                        @elseif($withdrawal->status == 1)
                              Approved
                        @elseif($withdrawal->status == 2)
                              Declined
                        @endif
                      </td>

                      <td>
                        <form action="withdrawal/{{$withdrawal ->store_id}}"   method="POST" enctype="multipart/form-data" id="formid">
                            @csrf
                            @method('PUT')
                            <input type="submit" class="btn btn-primary" value="Approved">
                        </form>
                      </td>
                         {{-- update modal --}}
                      {{-- <td class="align-middle">

                          <button type="button" class="btn editbtn" style="background: none;
                          color: inherit;
                          border: none;
                          padding: 0;
                          font: inherit;
                          cursor: pointer;
                          outline: inherit;
                          margin-top:-5px;
                          "> <i class="fas fa-edit"></i>Update </button>
                          <div class="modal fade" id="editmodal" role="dialog" aria-labelledby="exampleModalLabel"
                          aria-bs-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel"> Update order Information </h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-bs-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                      <div class="modal-body">
                                                      <form action="" method="POST" enctype="multipart/form-data" id="formid">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label for="order_name2">order Name</label>
                                                            <input type="text" class="form-control" name="order_name2" id="order_name2" placeholder="order Name" required>
                                                          </div>

                                                          <div class="form-group col-md-6">
                                                            <label for="store_id2">Store Name</label>
                                                            <select class="form-select" aria-label="Default select example" name="store_id2" id="store_id2" required>
                                                              <option class="opt1" value="" disabled selected hidden>Select Store</option>
                                                              @foreach($stores as $store)
                                                                <option value="{{$store->id}}">{{$store->store_name}}</option>
                                                              @endforeach --}}
                                                              {{-- <option value="0">Male</option>
                                                              <option value="1">Female</option> --}}
                                                            {{-- </select>
                                                          </div>
                                                       </div>

                                                      <div class="form-row">
                                                       <div class="form-group col-md-12">
                                                         <label for="description2">Description</label>
                                                         <input type="text" class="form-control" name="description2" id="description2" placeholder="Description" required>
                                                       </div>
                                                      </div>


                                                      <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                          <label for="category_id2">order Category</label>
                                                          <select class="form-select" aria-label="Default select example" name="category_id2" id="category_id2" required>
                                                            <option class="opt1" value="" disabled selected hidden>Select order Category</option>
                                                            @foreach($categories as $category)
                                                              <option value="{{$store->id}}">{{$category->category_name}}</option>
                                                            @endforeach --}}
                                                            {{-- <option value="0">Male</option>
                                                            <option value="1">Female</option> --}}
                                                          {{-- </select>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                          <label for="amount2">Amount</label>
                                                          <input type="number" class="form-control" name="amount2" id="amount2" placeholder="Amount2" required>
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
                                                        <label for="status2">Status</label>
                                                        <select class="form-select" aria-label="Default select example" name="status2" id="status2" required>
                                                          <option class="opt1" value="" disabled selected hidden>Select Status</option>
                                                          <option value="0">Inactive</option>
                                                          <option value="1">Active</option>
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
                     --}}
                          {{-- update modal --}}
                      {{-- 12 --}}
                      {{-- </td> --}}
                      {{-- <td style="display:none;">{{$order ->store_id}}</td>
                      <td style="display:none;">{{$order ->category_id}}</td>
                      <td style="display:none;">{{$order ->status}}</td>
                      <td style="display:none;">{{$order ->profile_image}}</td> --}}

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
              {{$withdrawals->links()}}
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


<script>
  $(document).ready(function () {

      $('.editbtn').on('click', function () {

          $('#editmodal').modal('show');

          $tr = $(this).closest('tr');

          var data = $tr.children("td").map(function () {
              return $(this).text();
          }).get();

          console.log(data);

          let updateroute = "/order/"+data[0].toString();
          $("#formid").attr("action", updateroute);

          $('#order_name2').val(data[4]);
          $('#description2').val(data[5]);
          $('#amount2').val(data[6]);
          $('#status2').val(data[11]);

          let valstore_id2 = data[9].toString();
          $('#store_id2 option[value="' + valstore_id2 +'"]').prop("selected", true);

          let valcategory_id2 = data[10].toString();
          $('#category_id2 option[value="' + valcategory_id2 +'"]').prop("selected", true);

          let prof_img_val = "uploads/order/"+data[12].toString();
          $('#download_prof_image').prop("href", prof_img_val);








      });
  });
</script>


{{--  --}}
@endsection

