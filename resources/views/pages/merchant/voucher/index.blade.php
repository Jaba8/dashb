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
            <h4 style="font-weight: bold" class="mt-1"> Voucher List</h4>
          </div>

          <div class="col-sm-3">
            <div class="input-group input-group-sm" >
              <form action="/voucher-search" method="GET">
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
                       Add New Voucher
                     </button>

                     <!-- Modal -->
                     <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                       <div class="modal-dialog modal-dialog-scrollable" role="document">
                         <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalScrollableTitle">Voucher Information</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                           <div class="modal-body">
                             <form action="/voucher" method="POST" enctype="multipart/form-data">
                               @csrf

                               <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="voucher_name">Voucher Name</label>
                                  <input type="text" class="form-control" name="voucher_name" id="voucher_name" placeholder="Voucher Name" required>
                                </div>

                                <div class="form-group col-md-6">
                                  <label for="store_id">Store Name</label>
                                  <select class="form-select" aria-label="Default select example" name="store_id" id="store_id" required>
                                    <option class="opt1" value="" disabled selected hidden>Select Store</option>
                                    @foreach($stores as $store)
                                       <option value="{{$store->id}}">{{$store->store_name}}</option>
                                    @endforeach
                                    {{-- <option value="0">Male</option>
                                    <option value="1">Female</option> --}}
                                  </select></div>
                               </div>

                              <div class="form-row">
                               <div class="form-group col-md-12">
                                 <label for="description">Description</label>
                                 <input type="text" class="form-control" name="description" id="description" placeholder="Description" required>
                               </div>
                              </div>



                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="voucher_type">Voucher Type</label>
                                  <select class="form-select" aria-label="Default select example" name="voucher_type" id="voucher_type" required>
                                    <option class="opt1" value="" disabled selected hidden>Select Voucher Type</option>
                                    <option value="0">Fixed Amount</option>
                                    <option value="1">Percentage Amount</option>
                                  </select>
                                </div>

                                <div class="form-group col-md-6">
                                  <label for="amount">Amount</label>
                                  <input type="number" class="form-control" name="amount" id="amount" placeholder="Amount" required>
                                </div>
                              </div>

                              <div class="form-row">
                               <div class="form-group col-md-6">
                                <label for="usage">Usage Limit</label>
                                <input type="number" class="form-control" name="usage" id="usage" placeholder="Usage Limit" required>
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
                                  <label for="start_date">Start Date</label>
                                  <input type="date" class="form-control"  name="start_date" id="start_date"required>
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="end_date">End Date</label>
                                  <input type="date" class="form-control"  name="end_date" id="end_date" required>
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
                      <th>Store ID</th>
                      <th>Voucher Name</th>
                      <th>Description</th>
                      <th>Voucher Type</th>
                      <th>Amount</th>
                      <th>Usage</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Status</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach($vouchers as $voucher)
                    <tr>
                      <td>{{$voucher ->id}}</td>
                      <td>{{$voucher ->store_id}}</td>
                      <td>{{$voucher ->voucher_name }}</td>
                      <td>{{$voucher ->description}}</td>
                      <td>
                        @if($voucher->voucher_type == 0)
                              Fixed Amount
                        @else
                              Percentage Amount
                        @endif

                      </td>
                      <td>{{$voucher ->amount}}</td>
                      <td>{{$voucher ->usage}}</td>
                      <td>{{$voucher ->start_date}}</td>
                      <td>{{$voucher ->end_date}}</td>
                      <td>
                        @if($voucher->status == 0)
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
                          <div class="modal fade" id="editmodal" role="dialog" aria-labelledby="exampleModalLabel"
                          aria-bs-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel"> Update Voucher Information </h5>
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
                                                            <label for="voucher_name2">Voucher Name</label>
                                                            <input type="text" class="form-control" name="voucher_name2" id="voucher_name2" placeholder="First Name" required>
                                                          </div>

                                                          <div class="form-group col-md-6">
                                                            <label for="store_id2">Store Name</label>
                                                            <select class="form-select" aria-label="Default select example" name="store_id2" id="store_id2" required>
                                                              <option class="opt1" value="" disabled selected hidden>Select Store</option>
                                                              @foreach($stores as $store)
                                                                 <option value="{{$store->id}}">{{$store->store_name}}</option>
                                                              @endforeach
                                                              {{-- <option value="0">Male</option>
                                                              <option value="1">Female</option> --}}
                                                            </select></div>
                                                         </div>

                                                        <div class="form-row">
                                                         <div class="form-group col-md-12">
                                                           <label for="description2">Description</label>
                                                           <input type="text" class="form-control" name="description2" id="description2" placeholder="Description" required>
                                                         </div>
                                                        </div>

                                                        <div class="form-row">

                                                        </div>

                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label for="voucher_type2">Voucher Type</label>
                                                            <select class="form-select" aria-label="Default select example" name="voucher_type2" id="voucher_type2" required>
                                                              <option class="opt1" value="" disabled selected hidden>Select Voucher Type</option>
                                                              <option value="0">Fixed Amount</option>
                                                              <option value="1">Percentage Amount</option>
                                                            </select>
                                                          </div>

                                                          <div class="form-group col-md-6">
                                                            <label for="amount2">Amount</label>
                                                            <input type="number" class="form-control" name="amount2" id="amount2" placeholder="Amount" required>
                                                          </div>
                                                        </div>

                                                        <div class="form-row">
                                                         <div class="form-group col-md-6">
                                                          <label for="usage2">Usage Limit</label>
                                                          <input type="number" class="form-control" name="usage2" id="usage2" placeholder="Usage Limit" required>
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
                                                            <label for="start_date2">Start Date</label>
                                                            <input type="date" class="form-control"  name="start_date2" id="start_date2"required>
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            <label for="end_date2">End Date</label>
                                                            <input type="date" class="form-control"  name="end_date2" id="end_date2" required>
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
                      {{-- 12 --}}
                      </td>
                      <td style="display:none;">{{$voucher ->store_id}}</td>
                      <td style="display:none;">{{$voucher ->voucher_type}}</td>
                      <td style="display:none;">{{$voucher ->status}}</td>

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
              {{$vouchers->links()}}
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

          let updateroute = "/voucher/"+data[0].toString();
          $("#formid").attr("action", updateroute);

          $('#voucher_name2').val(data[2]);
          $('#description2').val(data[3]);

          let valstore_id2 = data[11].toString();
          $('#store_id2 option[value="' + valstore_id2 +'"]').prop("selected", true);

          $('#voucher_type2').val(data[12]);
          $('#amount2').val(data[5]);
          $('#usage2').val(data[6]);
          $('#start_date2').val(data[7]);
          $('#end_date2').val(data[8]);
          $('#status2').val(data[13]);






      });
  });
</script>


{{--  --}}
@endsection

