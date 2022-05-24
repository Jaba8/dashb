<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('slick/css/style.css')}}">
    <style>
        div.sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 10000;
        background-color: white;


        }
        .hero-image {
        background-image: url("{{ asset('slick/img/jollibee.png')}}");

        height: 300px;

        background-position: center-center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        }

        /* #cover{
            border-style: solid;
        } */
        img{
            object-fit: cover;
            width:150px;
            height:150px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">

        <div class="row">
            <div style="" class="col-sm-9 ">
                {{-- <div class="row">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>

                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">1</div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">2</div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">3</div>
                      </div>
                </div> --}}

                <div class="row" id="cover">
                    <div  class="col-sm-12 hero-image ">

                    </div>
                    <div class="col-sm-12 mt-3 ">
                        <h6 style="font-weight: bold;">Jollibee - San Jose City Nueva Ecija</h6>
                    </div>


                </div>

                <div class="sticky ">

                    <div class="row" style="">
                        <section id="features" class="blue ">

                            <div class="content" >

                                <div class="slider multiple-items">
                                    <div>
                                        <h3 > <a href="#scrollspyHeading1">POPULAR</a>  </h3>
                                    </div>
                                    <div>
                                        <h3>FAMILY MEALS</h3>
                                    </div>
                                    <div>
                                        <h3>BREAKFAST</h3>
                                    </div>
                                    <div>
                                        <h3>CHICKEN JOY</h3>
                                    </div>
                                    <div>
                                        <h3>BURGERS</h3>
                                    </div>
                                    <div>
                                        <h3>JOLLY SPAGHETTI</h3>
                                    </div>
                                    <div>
                                        <h3>BURGER STEAK</h3>
                                    </div>
                                    <div>
                                        <h3>SUPER MEALS</h3>
                                    </div>
                                    <div>
                                        <h3>JOLLY HOTDOG & PIES</h3>
                                    </div>
                                    <div>
                                        <h3>DESSERT</h3>
                                    </div>
                                    <div>
                                        <h3>FRIES AND SIDES</h3>
                                    </div>
                                    <div>
                                        <h3>PALABOK</h3>
                                    </div>
                                </div>

                            </div>

                        </section>
                    </div>

                </div>



                    <div class="row mt-3" id="" style="border-style:solid" >
                        <div class="row ">
                            <div  class="col-sm-12">
                            <h1 style="margin-left:30px;margin-top:30px;">Popular</h1>
                            </div>
                        </div>
{{--
                        <div  class="col-sm-6 d-flex justify-content-center">
                            <div class="card" style="width: 30rem;">
                                <img class="card-img-top" src="{{ asset('slick/img/2pc.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                <h6 class="card-title">2pc Chickenjoy Solo</h6>
                                <p style="font-style: italic;font-size:12px" class="card-text">1 pc. Chickenjoy with Burger Steak, Half Jolly Spaghetti, Rice and Drink</p>



                                </div>
                                <div class="card-body">
                                <p>P 174</p>
                                </div>

                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div> --}}
                        <div  class="col-sm-6 d-flex justify-content-center" style="background-color:blue">
                            <div class="container">
                                <div class="row">
                                <div class="col-9" style="background-color:green">
                                    <p>2pc Chickenjoy Solo</p>
                                    <p>1 pc. Chickenjoy with Burger Steak, Half Jolly Spaghetti, Rice and Drink</p>
                                    <p>P 174</p>
                                </div>
                                <div class="col-3" style="background-image: url('{{ asset('slick/img/2pc.jpg')}}');background-size: contain;
                                background-size: cover;">

                                </div>
                                </div>
                            </div>

                    </div>
                        <div  class="col-sm-6 d-flex justify-content-center" style="background-color:blue">
                            <div class="container">
                                <div class="row">
                                  <div class="col-9" style="background-color:green">
                                    <p>2pc Chickenjoy Solo</p>
                                    <p>1 pc. Chickenjoy with Burger Steak, Half Jolly Spaghetti, Rice and Drink</p>
                                    <p>P 174</p>
                                  </div>
                                  <div class="col-3" style="background-image: url('{{ asset('slick/img/2pc.jpg')}}');background-size: contain;
                                  background-size: cover;">

                                  </div>
                                </div>
                            </div>

                        </div>
                    </div>




                <div class="row">
                    <div style="background-color:black" class="col-sm-6">1</div>
                    <div style="background-color:skyblue" class="col-sm-6">2</div>
                </div>
            </div>

            <div style="background-color:blue" class="col-sm-3 ">
                <div class="sticky mt-1">
                    <div class="card " >
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
            </div>
          </div>

    </div>

    <script src="{{ asset('slick/code/jquery-1.11.0.min.js')}}"></script>
	<script src="{{ asset('slick/code/jquery-migrate-1.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('slick/slick.js')}}"></script>
	<script type="text/javascript" src="{{ asset('slick/js/scripts.js')}}"></script>
	<script type="text/javascript" src="{{ asset('slick/js/prism.js')}}"></script>
</body>
</html>
