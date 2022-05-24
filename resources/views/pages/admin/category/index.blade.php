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
            <h4 style="font-weight: bold" class="mt-1"> Category List</h4>
          </div>
          
          <div class="col-sm-3">
            <div class="input-group input-group-sm" >
              <form action="/category-search" method="GET">
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
                       Add New Category
                     </button>

                     <!-- Modal -->
                     <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                       <div class="modal-dialog modal-dialog-scrollable" role="document">
                         <div class="modal-content">
                           <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalScrollableTitle">Category Information</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                             </button>
                           </div>
                           <div class="modal-body">
                             <form action="/category" method="POST" enctype="multipart/form-data">
                               @csrf
                            
                               <div class="form-row">
                                <div class="form-group col-md-12">
                                  <label for="category_name">Category Name</label>
                                  <input type="text" class="form-control" name="category_name" id="category_name" placeholder="First Name" required>
                                </div>
                               </div>
                            
                              <div class="form-row">
                               <div class="form-group col-md-12">
                                 <label for="description">Description</label>
                                 <input type="text" class="form-control" name="description" id="description" placeholder="First Name" required>
                               </div>
                              </div>

                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <label for="category_type">Category Type</label>
                                  <select class="form-select" aria-label="Default select example" name="category_type" id="category_type" required>
                                    <option class="opt1" value="" disabled selected hidden>Select Category Type</option>
                                    <option value="0">Store Category</option>
                                    <option value="1">Product Category</option>
                                  </select>
                               </div>
                              </div>
                             
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <label for="status">Status</label>
                                  <select class="form-select" aria-label="Default select example" name="status" id="status" required>
                                    <option class="opt1" value="" disabled selected hidden>Select Status</option>
                                    <option value="0">Inactive</option>
                                    <option value="1">Active</option>
                                  </select>
                                </div>
                              </div>
                             
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="prof_image">Profile Image</label>
                                    <input type="file" class="form-control" name="prof_image" id="prof_image" >   
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
                      <th>Image</th>
                      <th>Category Name</th>
                      <th>Description</th>
                      <th>Category Type</th>
                      <th>Status</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $category)
                    <tr>
                      <td class="align-middle">{{$category ->id}}</td>
                      <td class="align-middle">
                        <img src="uploads/category/{{$category ->profile_image}}" alt="" style="width: 100px;
                        height: 50px;">
                      </td>
                      <td class="align-middle">{{$category ->category_name }}</td>
                      <td class="align-middle">{{$category ->description}}</td>
                      <td class="align-middle">
                        @if($category->category_type == 0)         
                              Store Category        
                        @else
                              Product Category  
                        @endif

                      </td>
                      <td class="align-middle">
                        @if($category->status == 0)         
                              Inactive        
                        @else
                              Active  
                        @endif
                      </td>
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
                          <div class="modal fade" id="editmodal" role="dialog" aria-labelledby="exampleModalLabel"
                          aria-bs-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel"> Update Category Information </h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-bs-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                      <div class="modal-body">
                                                      <form action="" method="POST" enctype="multipart/form-data" id="formid">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-row">
                                                          <div class="form-group col-md-12">
                                                            <label for="category_name2">Category Name</label>
                                                            <input type="text" class="form-control" name="category_name2" id="category_name2" placeholder="First Name" required>
                                                          </div>
                                                        </div>
                                                      
                                                        <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                          <label for="description2">Description</label>
                                                          <input type="text" class="form-control" name="description2" id="description2" placeholder="First Name" required>
                                                        </div>
                                                        </div>
                          
                                                        <div class="form-row">
                                                          <div class="form-group col-md-12">
                                                            <label for="category_type2">Category Type</label>
                                                            <select class="form-select" aria-label="Default select example" name="category_type2" id="category_type2" required>
                                                              <option class="opt1" value="" disabled selected hidden>Select Category Type</option>
                                                              <option value="0">Store Category</option>
                                                              <option value="1">Product Category</option>
                                                            </select>
                                                        </div>
                                                        </div>
                                                      
                                                        <div class="form-row">
                                                          <div class="form-group col-md-12">
                                                            <label for="status2">Status</label>
                                                            <select class="form-select" aria-label="Default select example" name="status2" id="status2" required>
                                                              <option class="opt1" value="" disabled selected hidden>Select Status</option>
                                                              <option value="0">Inactive</option>
                                                              <option value="1">Active</option>
                                                            </select>
                                                          </div>
                                                        </div>
                                                      
                                                        <div class="form-row">
                                                          <div class="form-group col-md-12">
                                                              <label for="prof_image2">Profile Image
                                                                <a href="" download="" id="download_prof_image">
                                                                    Download
                                                                </a></label>
                                                              <input type="file" class="form-control" name="prof_image2" id="prof_image2" >   
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
                      
                      </td>
                      <td style="display:none;">{{$category ->category_type}}</td>
                      <td style="display:none;">{{$category ->status}}</td>
                      <td style="display:none;">{{$category ->profile_image}}</td>
    
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
              {{$categories->links()}}
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

          let updateroute = "/category/"+data[0].toString(); 
          $("#formid").attr("action", updateroute);
          
          $('#category_name2').val(data[2]);
          $('#description2').val(data[3]);
       
          let valcategory_type2 = data[7].toString();
          $('#category_type2 option[value="' + valcategory_type2 +'"]').prop("selected", true);

          let valStatus = data[8].toString();
          $('#status2 option[value="' + valStatus +'"]').prop("selected", true);

          let prof_img_val = "uploads/category/"+data[9].toString();                                   
          $('#download_prof_image').prop("href", prof_img_val);

          


         
      });
  });
</script>


{{--  --}}
@endsection

