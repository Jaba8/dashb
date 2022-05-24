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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
        label {
  display: block;
  padding-left: 15px;
  text-indent: -15px;
}
input {
  width: 13px;
  height: 13px;
  padding: 0;
  margin:0;
  vertical-align: bottom;
  position: relative;
  top: -6px;
  *overflow: hidden;
}
.centers {



}

.centers h6 {

  display: inline-block;
  vertical-align: middle;
}

        div.sticky {
        position: -webkit-sticky;
        position: sticky;
        top:52px;
        z-index: 1;
        background-color: white;




        }
        div.sticky2 {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1;




        }
        div.sticky3 {
            position: fixed;



            margin-left: 5px; /* Negative half of width. */





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
        .itemss{
            min-height: 100px;
            min-width: 450px;
            height: 100px;
            width: 450px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-style:solid;
            border-width: thin;
            border-color:rgb(255, 235, 235);
            border-radius: 10px 10px 10px 10px;

        }
        div.relative {
        position: relative;


        }

        div.absolute {
        position: absolute;
        top: 70px;
        right: 20;


        }
        div.absolute2 {
        position: absolute;
        top: 60px;
        left: 100px;




        }
        .navbar {
            z-index: 99999999999;
        overflow: hidden;

        background-color: #6A0568;
        position: fixed;
        bottom: 0;
        width: 100%;
        }

.navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 7px 16px;
    text-decoration: none;
    font-size: 17px;
}


@media only screen and (max-width: 600px) {
    .blue h3 {

  line-height: 10px;
    }

    .slick-prev:before,
        .slick-next:before
        {
            line-height: 0;
        }


}

@media only screen and (min-width: 600px) {
    .navbar {
    display:none;
    }
}

@media only screen and (min-width: 768px) {
    .navbar {
    display:none;
    }
}

@media only screen and (min-width: 992px) {
    .navbar {
    display:none;
    }
}

@media only screen and (min-width: 1200px) {
    .navbar {
    display:none;
    }
}
    </style>
</head>
<body>


    <div class="container-fluid">



        <div class="sticky2 row" style="background-color:#6A0568">
            <div class="col-4">
              <img style="width: 50%;
              height: 50px;
              object-fit: contain;" src="{{ asset('slick/img/tsiboglog.png') }}" alt="">
            </div>

            <div class="col-3" style="display:flex;
               align-items:center;">

            </div>

            <div class="col-1">

            </div>

            <div class="col-2 d-flex justify-content-end" style="display:flex;
            align-items:center;">
                <i style="border-radius: 100%;color:white;background:purple" class="fa fa-user-circle" aria-hidden="true"></i>  &nbsp &nbsp <span style="color: white;">Login</span>
            </div>


            <div class="col-2" style="display:flex;
            align-items:center;">
                <i style="border-radius: 100%;color:white;background:purple" class="fa fa-cart-arrow-down" aria-hidden="true"></i>  &nbsp &nbsp <span style="color: white;">Cart</span>
            </div>
        </div>


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
                        <p style="font-size: 12px">
                            Asian
                            . Desserts
                            . Burgers
                            . Fast Food
                            . Meat</p>
                    </div>


                </div>

                <div class="sticky">

                    <div class="row" style="">
                        <section id="features" class="blue ">

                            <div class="content" >

                                <div class="slider multiple-items2">
                                    <div>
                                        <h3 > <a href="#1">POPULAR</a>  </h3>
                                    </div>
                                    <div>
                                        <h3><a href="#2">FAMILY MEALS</a> </h3>
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

                <form>
                {{-- loop --}}
                    <div class="row mt-3 pb-3" id="1" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;border-color:rgb(231, 231, 231);border-style:solid none solid none; border-width: thin;" >

                        <div class="row ">
                            <div  class="col-xl-12" >
                            <h4 style="margin-left:30px;margin-top:10px;">POPULAR</h4>
                            </div>
                        </div>


                        <div  class="col-xl-6 d-flex justify-content-center item-box" >
                            <a href="" data-bs-toggle="modal" data-bs-target="#myModal">
                                <div class="itemss row relative m-2" style="">
                                <div class="col-8">
                                    <div style="margin-top:10px;">
                                        <p style="font-size: 13px;font-weight: bold;margin:0 0 5px 0; ">2pc Chickenjoy Solo</p>
                                        <i style="font-size: 12px; color:rgb(49, 49, 49)"></i>
                                        <div  class="absolute">₱ 174</div>
                                    </div>
                                </div>
                                    <div class="col-4 relative" style="background-image: url('{{ asset('slick/img/1.png')}}');background-size: contain;background-size: cover;background-position: center-right;
                                    background-repeat: no-repeat;max-width:200px;max-height:100px;">
                                        <span class="fa-stack fa-lg">
                                        <div  class="absolute2"><i class="fa fa-lg fa-plus-circle" style="border-radius: 100%;color:purple;background:white" aria-hidden="true"></i></div>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div  class="col-xl-6 d-flex justify-content-center item-box" >
                            <a href="" data-bs-toggle="modal" data-bs-target="#myModal">
                                <div class="itemss row relative m-2" style="">
                                <div class="col-8">
                                    <div style="margin-top:10px;">
                                        <p style="font-size: 13px;font-weight: bold;margin:0 0 5px 0; ">1pc Chickenjoy, Jolly Spaghetti & Drink</p>
                                        <i style="font-size: 12px; color:rgb(49, 49, 49)"></i>
                                        <div  class="absolute">₱ 149</div>
                                    </div>
                                </div>
                                    <div class="col-4 relative" style="background-image: url('{{ asset('slick/img/4.png')}}');background-size: contain;background-size: cover;background-position: center-right;
                                    background-repeat: no-repeat;max-width:200px;max-height:100px;">
                                        <span class="fa-stack fa-lg">
                                        <div  class="absolute2"><i class="fa fa-lg fa-plus-circle" style="border-radius: 100%;color:purple;background:white" aria-hidden="true"></i></div>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div  class="col-xl-6 d-flex justify-content-center item-box" >
                            <a href="" data-bs-toggle="modal" data-bs-target="#myModal">
                                <div class="itemss row relative m-2" style="">
                                <div class="col-8">
                                    <div style="margin-top:10px;">
                                        <p style="font-size: 13px;font-weight: bold;margin:0 0 5px 0; ">1pc Chickenjoy w/ Fries Solo</p>
                                        <i style="font-size: 12px; color:rgb(49, 49, 49)"></i>
                                        <div  class="absolute">₱ 119</div>
                                    </div>
                                </div>
                                    <div class="col-4 relative" style="background-image: url('{{ asset('slick/img/7.png')}}');background-size: contain;background-size: cover;background-position: center-right;
                                    background-repeat: no-repeat;max-width:200px;max-height:100px;">
                                        <span class="fa-stack fa-lg">
                                        <div  class="absolute2"><i class="fa fa-lg fa-plus-circle" style="border-radius: 100%;color:purple;background:white" aria-hidden="true"></i></div>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div  class="col-xl-6 d-flex justify-content-center item-box" >
                            <a href="" data-bs-toggle="modal" data-bs-target="#myModal">
                                <div class="itemss row relative m-2" style="">
                                <div class="col-8">
                                    <div style="margin-top:10px;">
                                        <p style="font-size: 13px;font-weight: bold;margin:0 0 5px 0; ">Jolly Spaghetti, Burger Steak Solo</p>
                                        <i style="font-size: 12px; color:rgb(49, 49, 49)"></i>
                                        <div  class="absolute">₱ 128</div>
                                    </div>
                                </div>
                                    <div class="col-4 relative" style="background-image: url('{{ asset('slick/img/5.png')}}');background-size: contain;background-size: cover;background-position: center-right;
                                    background-repeat: no-repeat;max-width:200px;max-height:100px;">
                                        <span class="fa-stack fa-lg">
                                        <div  class="absolute2"><i class="fa fa-lg fa-plus-circle" style="border-radius: 100%;color:purple;background:white" aria-hidden="true"></i></div>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div  class="col-xl-6 d-flex justify-content-center item-box" >
                            <a href="" data-bs-toggle="modal" data-bs-target="#myModal">
                                <div class="itemss row relative m-2" style="">
                                <div class="col-8">
                                    <div style="margin-top:10px;">
                                        <p style="font-size: 13px;font-weight: bold;margin:0 0 5px 0; ">Jolly Spaghetti, Yumburger & Drink</p>
                                        <i style="font-size: 12px; color:rgb(49, 49, 49)"></i>
                                        <div  class="absolute">₱ 109</div>
                                    </div>
                                </div>
                                    <div class="col-4 relative" style="background-image: url('{{ asset('slick/img/8.png')}}');background-size: contain;background-size: cover;background-position: center-right;
                                    background-repeat: no-repeat;max-width:200px;max-height:100px;">
                                        <span class="fa-stack fa-lg">
                                        <div  class="absolute2"><i class="fa fa-lg fa-plus-circle" style="border-radius: 100%;color:purple;background:white" aria-hidden="true"></i></div>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div  class="col-xl-6 d-flex justify-content-center item-box" >
                            <a href="" data-bs-toggle="modal" data-bs-target="#myModal">
                                <div class="itemss row relative m-2" style="">
                                <div class="col-8">
                                    <div style="margin-top:10px;">
                                        <p style="font-size: 13px;font-weight: bold;margin:0 0 5px 0; ">Chickenjoy w/ Burger Steak Super Meal</p>
                                        <i style="font-size: 12px; color:rgb(49, 49, 49)">1 pc. Chickenjoy with Burger Steak, Half Jolly Spaghetti, Rice and Drink</i>
                                        <div  class="absolute">₱ 187</div>
                                    </div>
                                </div>
                                    <div class="col-4 relative" style="background-image: url('{{ asset('slick/img/6.png')}}');background-size: contain;background-size: cover;background-position: center-right;
                                    background-repeat: no-repeat;max-width:200px;max-height:100px;">
                                        <span class="fa-stack fa-lg">
                                        <div  class="absolute2"><i class="fa fa-lg fa-plus-circle" style="border-radius: 100%;color:purple;background:white" aria-hidden="true"></i></div>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                    {{-- loop --}}

                    {{-- loop --}}
                    <div class="row mt-3 pb-3" id="2" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;border-color:rgb(231, 231, 231);border-style:solid none solid none; border-width: thin;" >

                          <div class="row ">
                              <div  class="col-xl-12" >
                              <h4 style="margin-left:30px;margin-top:10px;">POPULAR</h4>
                              </div>
                          </div>


                          <div  class="col-xl-6 d-flex justify-content-center item-box" >
                              <a href="" data-bs-toggle="modal" data-bs-target="#myModal">
                                  <div class="itemss row relative m-2" style="">
                                  <div class="col-8">
                                      <div style="margin-top:10px;">
                                          <p style="font-size: 13px;font-weight: bold;margin:0 0 5px 0; ">2pc Chickenjoy Solo</p>
                                          <i style="font-size: 12px; color:rgb(49, 49, 49)"></i>
                                          <div  class="absolute">₱ 174</div>
                                      </div>
                                  </div>
                                      <div class="col-4 relative" style="background-image: url('{{ asset('slick/img/1.png')}}');background-size: contain;background-size: cover;background-position: center-right;
                                      background-repeat: no-repeat;max-width:200px;max-height:100px;">
                                          <span class="fa-stack fa-lg">
                                          <div  class="absolute2"><i class="fa fa-lg fa-plus-circle" style="border-radius: 100%;color:purple;background:white" aria-hidden="true"></i></div>
                                          </span>
                                      </div>
                                  </div>
                              </a>
                          </div>

                          <div  class="col-xl-6 d-flex justify-content-center item-box" >
                              <a href="" data-bs-toggle="modal" data-bs-target="#myModal">
                                  <div class="itemss row relative m-2" style="">
                                  <div class="col-8">
                                      <div style="margin-top:10px;">
                                          <p style="font-size: 13px;font-weight: bold;margin:0 0 5px 0; ">1pc Chickenjoy, Jolly Spaghetti & Drink</p>
                                          <i style="font-size: 12px; color:rgb(49, 49, 49)"></i>
                                          <div  class="absolute">₱ 149</div>
                                      </div>
                                  </div>
                                      <div class="col-4 relative" style="background-image: url('{{ asset('slick/img/4.png')}}');background-size: contain;background-size: cover;background-position: center-right;
                                      background-repeat: no-repeat;max-width:200px;max-height:100px;">
                                          <span class="fa-stack fa-lg">
                                          <div  class="absolute2"><i class="fa fa-lg fa-plus-circle" style="border-radius: 100%;color:purple;background:white" aria-hidden="true"></i></div>
                                          </span>
                                      </div>
                                  </div>
                              </a>
                          </div>

                          <div  class="col-xl-6 d-flex justify-content-center item-box" >
                              <a href="" data-bs-toggle="modal" data-bs-target="#myModal">
                                  <div class="itemss row relative m-2" style="">
                                  <div class="col-8">
                                      <div style="margin-top:10px;">
                                          <p style="font-size: 13px;font-weight: bold;margin:0 0 5px 0; ">1pc Chickenjoy w/ Fries Solo</p>
                                          <i style="font-size: 12px; color:rgb(49, 49, 49)"></i>
                                          <div  class="absolute">₱ 119</div>
                                      </div>
                                  </div>
                                      <div class="col-4 relative" style="background-image: url('{{ asset('slick/img/7.png')}}');background-size: contain;background-size: cover;background-position: center-right;
                                      background-repeat: no-repeat;max-width:200px;max-height:100px;">
                                          <span class="fa-stack fa-lg">
                                          <div  class="absolute2"><i class="fa fa-lg fa-plus-circle" style="border-radius: 100%;color:purple;background:white" aria-hidden="true"></i></div>
                                          </span>
                                      </div>
                                  </div>
                              </a>
                          </div>

                          <div  class="col-xl-6 d-flex justify-content-center item-box" >
                              <a href="" data-bs-toggle="modal" data-bs-target="#myModal">
                                  <div class="itemss row relative m-2" style="">
                                  <div class="col-8">
                                      <div style="margin-top:10px;">
                                          <p style="font-size: 13px;font-weight: bold;margin:0 0 5px 0; ">Jolly Spaghetti, Burger Steak Solo</p>
                                          <i style="font-size: 12px; color:rgb(49, 49, 49)"></i>
                                          <div  class="absolute">₱ 128</div>
                                      </div>
                                  </div>
                                      <div class="col-4 relative" style="background-image: url('{{ asset('slick/img/5.png')}}');background-size: contain;background-size: cover;background-position: center-right;
                                      background-repeat: no-repeat;max-width:200px;max-height:100px;">
                                          <span class="fa-stack fa-lg">
                                          <div  class="absolute2"><i class="fa fa-lg fa-plus-circle" style="border-radius: 100%;color:purple;background:white" aria-hidden="true"></i></div>
                                          </span>
                                      </div>
                                  </div>
                              </a>
                          </div>

                          <div  class="col-xl-6 d-flex justify-content-center item-box" >
                              <a href="" data-bs-toggle="modal" data-bs-target="#myModal">
                                  <div class="itemss row relative m-2" style="">
                                  <div class="col-8">
                                      <div style="margin-top:10px;">
                                          <p style="font-size: 13px;font-weight: bold;margin:0 0 5px 0; ">Jolly Spaghetti, Yumburger & Drink</p>
                                          <i style="font-size: 12px; color:rgb(49, 49, 49)"></i>
                                          <div  class="absolute">₱ 109</div>
                                      </div>
                                  </div>
                                      <div class="col-4 relative" style="background-image: url('{{ asset('slick/img/8.png')}}');background-size: contain;background-size: cover;background-position: center-right;
                                      background-repeat: no-repeat;max-width:200px;max-height:100px;">
                                          <span class="fa-stack fa-lg">
                                          <div  class="absolute2"><i class="fa fa-lg fa-plus-circle" style="border-radius: 100%;color:purple;background:white" aria-hidden="true"></i></div>
                                          </span>
                                      </div>
                                  </div>
                              </a>
                          </div>

                          <div  class="col-xl-6 d-flex justify-content-center item-box" >
                              <a href="" data-bs-toggle="modal" data-bs-target="#myModal">
                                  <div class="itemss row relative m-2" style="">
                                  <div class="col-8">
                                      <div style="margin-top:10px;">
                                          <p style="font-size: 13px;font-weight: bold;margin:0 0 5px 0; ">Chickenjoy w/ Burger Steak Super Meal</p>
                                          <i style="font-size: 12px; color:rgb(49, 49, 49)">1 pc. Chickenjoy with Burger Steak, Half Jolly Spaghetti, Rice and Drink</i>
                                          <div  class="absolute">₱ 187</div>
                                      </div>
                                  </div>
                                      <div class="col-4 relative" style="background-image: url('{{ asset('slick/img/6.png')}}');background-size: contain;background-size: cover;background-position: center-right;
                                      background-repeat: no-repeat;max-width:200px;max-height:100px;">
                                          <span class="fa-stack fa-lg">
                                          <div  class="absolute2"><i class="fa fa-lg fa-plus-circle" style="border-radius: 100%;color:purple;background:white" aria-hidden="true"></i></div>
                                          </span>
                                      </div>
                                  </div>
                              </a>
                          </div>

                          {{-- loop --}}








                      </div>

                    {{-- loop --}}



                <div class="row">
                    <div style="background-color:black" class="col-sm-6">1</div>
                    <div style="background-color:skyblue" class="col-sm-6">2</div>
                </div>
                </div>

                <div style="border-style:solid;
                    border-width: thin;
                    border-color:rgb(196, 196, 196);" class="col-sm-3">
                        <div class="row">
                            <div class="col">
                                <div class="sticky3 mt-5 ">

                                    <h3 style="font-size: 15px;font-weight:bold;text-align:center;color:#000000">Your order from Jollibee - Batanggas City</h3>
                                    <br>

                                    {{-- loop --}}
                                    <div style="overflow-y: scroll; height:300px;">

                                        <div class="row" style="text-align:">
                                            <div class="col-8">
                                                <p style="font-size: 14px;color:#b400b4;font-weight:bold">1pc Chickenjoy Solo</p>
                                            </div>
                                            <div class="col-4">
                                                <p style="font-size: 15px;color:#2c2828;font-weight:bold">₱ 170</p>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="col-12">
                                                    <p style="font-size: 11px;color:#838181;font-weight:bold">+ Spicy</p>
                                                </div>
                                                <div class="col-12">
                                                    <p style="font-size: 11px;color:#838181;font-weight:bold">+ Extra Rice</p>
                                                </div>
                                                <div class="col-12">
                                                    <p style="font-size: 11px;color:#838181;font-weight:bold">+ Jumbo Jolly Crispy Fries</p>
                                                </div>
                                            </div>
                                            <div class="col-5">

                                            </div>
                                        </div>

                                        <div class="row" style="text-align:">
                                            <div class="col-8">
                                                <p style="font-size: 14px;color:#b400b4;font-weight:bold">1pc Chickenjoy Solo</p>
                                            </div>
                                            <div class="col-4">
                                                <p style="font-size: 15px;color:#2c2828;font-weight:bold">₱ 170</p>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="col-12">
                                                    <p style="font-size: 11px;color:#838181;font-weight:bold">+ Spicy</p>
                                                </div>
                                                <div class="col-12">
                                                    <p style="font-size: 11px;color:#838181;font-weight:bold">+ Extra Rice</p>
                                                </div>
                                                <div class="col-12">
                                                    <p style="font-size: 11px;color:#838181;font-weight:bold">+ Jumbo Jolly Crispy Fries</p>
                                                </div>
                                            </div>
                                            <div class="col-5">

                                            </div>
                                        </div>

                                        <div class="row" style="text-align:">
                                            <div class="col-8">
                                                <p style="font-size: 14px;color:#b400b4;font-weight:bold">1pc Chickenjoy Solo</p>
                                            </div>
                                            <div class="col-4">
                                                <p style="font-size: 15px;color:#2c2828;font-weight:bold">₱ 170</p>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="col-12">
                                                    <p style="font-size: 11px;color:#838181;font-weight:bold">+ Spicy</p>
                                                </div>
                                                <div class="col-12">
                                                    <p style="font-size: 11px;color:#838181;font-weight:bold">+ Extra Rice</p>
                                                </div>
                                                <div class="col-12">
                                                    <p style="font-size: 11px;color:#838181;font-weight:bold">+ Jumbo Jolly Crispy Fries</p>
                                                </div>
                                            </div>
                                            <div class="col-5">

                                            </div>
                                        </div>


                                    </div>
                                    <hr>
                                    <div class="row" style="text-align:">
                                        <div class="col-8">
                                            <p style="font-size: 14px;color:#2c2828;font-weight:bold">Subtotal</p>
                                        </div>
                                        <div class="col-4">
                                            <p style="font-size: 15px;color:#2c2828;font-weight:bold">₱ 170</p>

                                        </div>
                                    </div>

                                    <div class="row" style="text-align:">
                                        <div class="col-8">
                                            <p style="font-size: 14px;color:#2c2828;font-weight:bold">Delivery Fee</p>
                                        </div>
                                        <div class="col-4">
                                            <p style="font-size: 15px;color:#2c2828;font-weight:bold">₱ 170</p>

                                        </div>
                                    </div>

                                    <div class="row" style="text-align:">
                                        <div class="col-8">
                                            <p style="font-size: 14px;color:#2c2828;font-weight:bold">Total(Incl. VAT)</p>
                                        </div>
                                        <div class="col-4">
                                            <p style="font-size: 15px;color:#2c2828;font-weight:bold">₱ 170</p>

                                        </div>
                                    </div>

                                    <div class="row" style="text-align:center">
                                        <div class="col-12">
                                            <button class="btn form-control" style="background-color:#b400b4;color:white">Go to checkout</button>
                                        </div>

                                    </div>
                                    {{-- loop --}}


                                </div>
                            </div>

                        </div>

                </div>
          </div>

    </div>


      <!-- The Modal -->
      <div class="modal " id="myModal">
        <div class="modal-dialog" style="max-width: 40%;">
          <div class="modal-content">

            <!-- Modal Header -->
            {{-- <div class="modal-header">
              <h4 class="modal-title">Modal Heading</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div> --}}

            <!-- Modal body -->
            <div class="modal-body">

                <div class="container">
                    <div class="row">
                        <div  class="col-12 mb-5" >
                            <img style="width: 100%;
                                        height: 200px;
                            object-fit: contain;"  src="{{ asset('slick/img/1.png')}}">
                        </div>
                    </div>
                    <div class="row">
                        <div  class="centers col-9" >
                                <h6 style="font-weight: bold;font-size:2vw;">2pc Chickenjoy Solo</h6>
                        </div>
                        <div  class="centers col-3 " >
                            <h6 style="font-size:1vw;margin-top:7px">₱ 187</h6>
                        </div>


                    </div>
                    <hr>
                    {{-- etoo loop radio--}}
                    <div class="row">
                        <div  class="centers col-9" >
                                <h6 style="font-weight: bold;font-size:18px;">2 - pc. Choice of Flavor (Solo)</h6>
                        </div>
                        <div  class="centers col-3" >
                            <h6 style="font-size:1vw;">Required</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div  class=" col-12" >
                                <h6 style="font-size:12px;">Select 1</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div  class=" col-9" >
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    <p style="font-size:13px;">Half Original, Half Spicy</p>
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <p style="font-size:13px;">Original</p>
                                </label>
                              </div>
                        </div>
                        <div  class=" col-3" >
                            <h6 style="font-size:1vw;">₱ 28</h6>
                        </div>
                    </div>
                    <hr>
                {{-- etoo loop --}}

                  {{-- etoo loop checkbox--}}
                  <div class="row">
                    <div  class=" col-9" >
                            <h6 style="font-weight: bold;font-size:18px;">Extras</h6>
                    </div>
                    <div  class=" col-3" >
                        <h6 style="font-size:1vw;">Optional</h6>
                    </div>
                </div>
                <div class="row">
                    <div  class="centers col-12" >
                            <h6 style="font-size:12px;">Select up to 2(optional)</h6>
                    </div>
                </div>
                <div class="row">
                    <div  class=" col-9" >
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                <p style="font-size:13px;">Extra Chickenjoy Gravy</p>
                            </label>
                        </div>
                    </div>
                    <div  class=" col-3" >
                        <h6 style="font-size:1vw;">₱ 28</h6>
                    </div>

                </div>
                <div class="row">
                    <div  class=" col-9" >

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                <p style="font-size:13px;"> Extra Rice</p>
                            </label>
                        </div>
                    </div>
                    <div  class=" col-3" >
                        <h6 style="font-size:1vw;">₱ 39</h6>
                    </div>

                </div>
                <hr>
            {{-- etoo loop --}}


                {{-- etoo loop checkbox--}}
                <div class="row">
                <div  class=" col-9" >
                        <h6 style="font-weight: bold;font-size:18px;">Add-on Sides (G)</h6>
                </div>
                <div  class=" col-3" >
                    <h6 style="font-size:1vw;">Optional</h6>
                </div>
            </div>
            <div class="row">
                <div  class="centers col-12" >
                        <h6 style="font-size:12px;">Select up to 3(optional)</h6>
                </div>
            </div>
            <div class="row">
                <div  class=" col-9" >
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                            <p style="font-size:13px;">Regular Jolly Crispy Fries</p>
                        </label>
                    </div>
                </div>
                <div  class=" col-3" >
                    <h6 style="font-size:1vw;">₱ 47</h6>
                </div>

            </div>
            <div class="row">
                <div  class=" col-9" >

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                            <p style="font-size:13px;"> Large Jolly Crispy Fries</p>
                        </label>
                    </div>
                </div>
                <div  class=" col-3" >
                    <h6 style="font-size:1vw;">₱ 66</h6>
                </div>

            </div>
            <div class="row">
                <div  class=" col-9" >

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                            <p style="font-size:13px;">Jumbo Jolly Crispy Fries</p>
                        </label>
                    </div>
                </div>
                <div  class=" col-3" >
                    <h6 style="font-size:1vw;">₱ 85</h6>
                </div>

            </div>
            <hr>
        {{-- etoo loop --}}

                {{-- etoo loop checkbox--}}
                <div class="row">
                    <div  class=" col-9" >
                            <h6 style="font-weight: bold;font-size:18px;">Add-on Desserts</h6>
                    </div>
                    <div  class=" col-3" >
                        <h6 style="font-size:1vw;">Optional</h6>
                    </div>
                </div>
                <div class="row">
                    <div  class="centers col-12" >
                            <h6 style="font-size:12px;">Select up to 3(optional)</h6>
                    </div>
                </div>
                <div class="row">
                    <div  class=" col-9" >
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                <p style="font-size:13px;">Peach Mango Pie</p>
                            </label>
                        </div>
                    </div>
                    <div  class=" col-3" >
                        <h6 style="font-size:1vw;">₱ 39</h6>
                    </div>

                </div>
                <div class="row">
                    <div  class=" col-9" >

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                <p style="font-size:13px;"> Chocolate Sundae Twirl</p>
                            </label>
                        </div>
                    </div>
                    <div  class=" col-3" >
                        <h6 style="font-size:1vw;">₱ 39</h6>
                    </div>

                </div>
                <div class="row">
                    <div  class=" col-9" >

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                <p style="font-size:13px;">Buko Pie</p>
                            </label>
                        </div>
                    </div>
                    <div  class=" col-3" >
                        <h6 style="font-size:1vw;">₱ 43</h6>
                    </div>

                </div>
                <hr>
            {{-- etoo loop --}}

               {{-- etoo loop textarea--}}
               <div class="row">
                <div  class=" col-9" >
                        <h6 style="font-weight: bold;font-size:18px;">Extras</h6>
                </div>
            </div>
            <div class="row">
                <div  class="centers col-12" >
                        <h6 style="font-size:12px;">Any specific preferences? Let the restaurant know</h6>
                </div>
            </div>
            <div class="row">
                <div  class=" col-12" >
                    <label for="exampleFormControlTextarea1"></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

            </div>

            <hr>
        {{-- etoo loop --}}

              {{-- etoo loop textarea--}}
              <div class="row">
                <div  class=" col-9" >
                        <h6 style="font-weight: bold;font-size:18px;">If this product is not available</h6>
                </div>
            </div>

            <div class="row">
                <div  class=" col-12" >
                    <select class="form-control" id="exampleFormControlSelect2">
                      <option>Remove it from my order</option>
                      <option>Cancel the entire order</option>
                      <option>Call Ne</option>
                    </select>
                </div>

            </div>

            <hr>
        {{-- etoo loop --}}


                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Add to Cart</button>
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
<footer>
    <div class="navbar" style="">
        <a href="#home" class="active">Home</a>
        <a href="#news">Cart</a>
        <a href="#contact">Contact</a>
      </div>
</footer>
</html>
