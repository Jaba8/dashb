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
	<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick2.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme2.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('slick/css/style2.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    {
        margin:0px;
    }
    div.sticky2 {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1;




        }

img {

    width:  100px;
    height: 270px;
    object-fit: cover;
   border-radius: 3px;

}

.img2 {

width:  70px;
height: 70px;
object-fit: cover;
border-radius: 3px;

}

.img3 {

width:  100px;
height: 150px;
object-fit: cover;
border-radius: 3px;

}

/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
    body {background: red;}
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
    body {background: green;}
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
  body {background: blue;}
}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
    body {background: orange;}
}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
  body {background: pink;}
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

        <div class="row" style="margin:0px">
            <div style="" class="col-sm-12 ">


                {{-- main 2 --}}
      <div class="row" style="">

        <section id="features" class="blue2" style="margin: 0px">
            <div class="content"  style="margin: 0px">
                <div class="mt-3">
                    <form action="">
                        <div class="row">
                            <div style="margin-left:21px;" class="col-sm-4 g-0">
                                <input type="text" class="form-control" placeholder="Search for restaurant, cuisines, and dishes">
                            </div>
                            <div style="" class="col-sm-3 g-0">
                                <button style="" class="btn btn-light">FILTER</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="slider responsive2">
                    <div>
                        <h3 > <a href="#1">
                            <img class="img2" style="    border-radius: 10px;" src="{{ asset('slick/img/promo1.jpg') }}" alt="">
                        </a>  </h3>
                    </div>
                    <div>
                        <h3 > <a href="#1">
                            <img class="img2" style="" src="{{ asset('slick/img/promo2.jpg') }}" alt="">
                        </a>  </h3>
                    </div>
                    <div>
                        <h3 > <a href="#1">
                            <img class="img2" style="" src="{{ asset('slick/img/promo3.png') }}" alt="">
                        </a>  </h3>
                    </div>

                    <div>
                        <h3 > <a href="#1">
                            <img class="img2" style="" src="{{ asset('slick/img/promo5.jpg') }}" alt="">
                        </a>  </h3>
                    </div>

                    <div>
                        <h3 > <a href="#1">
                            <img class="img2" style="" src="{{ asset('slick/img/promo4.jpg') }}" alt="">
                        </a>  </h3>
                    </div>
                    <div>
                        <h3 > <a href="#1">
                            <img class="img2" style="    border-radius: 10px;" src="{{ asset('slick/img/promo1.jpg') }}" alt="">
                        </a>  </h3>
                    </div>
                    <div>
                        <h3 > <a href="#1">
                            <img class="img2" style="" src="{{ asset('slick/img/promo2.jpg') }}" alt="">
                        </a>  </h3>
                    </div>
                    <div>
                        <h3 > <a href="#1">
                            <img class="img2" style="" src="{{ asset('slick/img/promo3.png') }}" alt="">
                        </a>  </h3>
                    </div>

                    <div>
                        <h3 > <a href="#1">
                            <img class="img2" style="" src="{{ asset('slick/img/promo5.jpg') }}" alt="">
                        </a>  </h3>
                    </div>

                    <div>
                        <h3 > <a href="#1">
                            <img class="img2" style="" src="{{ asset('slick/img/promo4.jpg') }}" alt="">
                        </a>  </h3>
                    </div>


                </div>
            </div>
        </section>
    </div>

{{-- main 2 --}}
{{-- sticky2 --}}


{{-- sticky 1 --}}
{{-- Main 1 --}}
                    <div class="row" style="">
                        <section id="features" class="blue" style="margin: 0px">
                            <div class="content"  style="margin: 0px">
                                <div class="slider responsive">
                                    <div>
                                        <h3 > <a href="#1">
                                            <img id="" style="    border-radius: 10px;" src="{{ asset('slick/img/promo1.jpg') }}" alt="">
                                        </a>  </h3>
                                    </div>
                                    <div>
                                        <h3 > <a href="#1">
                                            <img style="" src="{{ asset('slick/img/promo2.jpg') }}" alt="">
                                        </a>  </h3>
                                    </div>
                                    <div>
                                        <h3 > <a href="#1">
                                            <img style="" src="{{ asset('slick/img/promo3.png') }}" alt="">
                                        </a>  </h3>
                                    </div>

                                    <div>
                                        <h3 > <a href="#1">
                                            <img style="" src="{{ asset('slick/img/promo5.jpg') }}" alt="">
                                        </a>  </h3>
                                    </div>

                                    <div>
                                        <h3 > <a href="#1">
                                            <img style="" src="{{ asset('slick/img/promo4.jpg') }}" alt="">
                                        </a>  </h3>
                                    </div>


                                </div>
                            </div>
                        </section>
                    </div>
{{-- Main 1 --}}




{{-- sticky 3 --}}

{{-- Main 3--}}
<div class="row" style="">
    <section id="features" class="blue3" style="margin: 0px">
        <div class="content"  style="margin: 0px">
            <br>
            <h1 style="margin-left:10px;font-size: 24px;color:white;text-align: left;">Trending This Week</h1>
            <div class="slider responsive3">
                <div>
                    <h3 > <a href="#1">
                        <img class="img3" style="border-radius: 10px;" src="{{ asset('slick/img/promo1.jpg') }}" alt="">
                    </a>  </h3>
                </div>
                <div>
                    <h3 > <a href="#1">
                        <img class="img3" src="{{ asset('slick/img/promo2.jpg') }}" alt="">
                    </a>  </h3>
                </div>
                <div>
                    <h3 > <a href="#1">
                        <img class="img3" style="" src="{{ asset('slick/img/promo3.png') }}" alt="">
                    </a>  </h3>
                </div>

                <div>
                    <h3 > <a href="#1">
                        <img class="img3"  style="" src="{{ asset('slick/img/promo5.jpg') }}" alt="">
                    </a>  </h3>
                </div>

                <div>
                    <h3 > <a href="#1">
                        <img class="img3" style="" src="{{ asset('slick/img/promo4.jpg') }}" alt="">
                    </a>  </h3>
                </div>


            </div>
        </div>
    </section>
</div>
{{-- Main 3 --}}


{{-- Main 4--}}
<div class="row" style="">
    <section id="features" class="blue4" style="margin: 0px">
        <div class="content"  style="margin: 0px">
            <br>
            <h1 style="margin-left:10px;font-size: 24px;color:white;text-align: left;">Most Popular</h1>
            <div class="slider responsive4">
                <div>
                    <h3 > <a href="#1">
                        <img class="img3" style="border-radius: 10px;" src="{{ asset('slick/img/promo1.jpg') }}" alt="">
                    </a>  </h3>
                </div>
                <div>
                    <h3 > <a href="#1">
                        <img class="img3" src="{{ asset('slick/img/promo2.jpg') }}" alt="">
                    </a>  </h3>
                </div>
                <div>
                    <h3 > <a href="#1">
                        <img class="img3" style="" src="{{ asset('slick/img/promo3.png') }}" alt="">
                    </a>  </h3>
                </div>

                <div>
                    <h3 > <a href="#1">
                        <img class="img3"  style="" src="{{ asset('slick/img/promo5.jpg') }}" alt="">
                    </a>  </h3>
                </div>

                <div>
                    <h3 > <a href="#1">
                        <img class="img3" style="" src="{{ asset('slick/img/promo4.jpg') }}" alt="">
                    </a>  </h3>
                </div>


            </div>
        </div>
    </section>
</div>
{{-- Main 4 --}}


{{-- Main 5--}}
<div class="row" style="">
    <section id="features" class="blue5" style="margin: 0px">
        <div class="content"  style="margin: 0px">
            <br>
            <h1 style="margin-left:10px;font-size: 24px;color:white;text-align: left;">What's New?</h1>
            <div class="slider responsive5">
                <div>
                    <h3 > <a href="#1">
                        <img class="img3" style="border-radius: 10px;" src="{{ asset('slick/img/promo1.jpg') }}" alt="">
                    </a>  </h3>
                </div>
                <div>
                    <h3 > <a href="#1">
                        <img class="img3" src="{{ asset('slick/img/promo2.jpg') }}" alt="">
                    </a>  </h3>
                </div>
                <div>
                    <h3 > <a href="#1">
                        <img class="img3" style="" src="{{ asset('slick/img/promo3.png') }}" alt="">
                    </a>  </h3>
                </div>

                <div>
                    <h3 > <a href="#1">
                        <img class="img3"  style="" src="{{ asset('slick/img/promo5.jpg') }}" alt="">
                    </a>  </h3>
                </div>

                <div>
                    <h3 > <a href="#1">
                        <img class="img3" style="" src="{{ asset('slick/img/promo4.jpg') }}" alt="">
                    </a>  </h3>
                </div>


            </div>
        </div>
    </section>
</div>
{{-- Main 5 --}}

{{-- Main 6--}}
<div class="row" style="">
    <section id="features" class="blue6" style="margin: 0px">
        <div class="content"  style="margin: 0px">
            <br>
            <h1 style="margin-left:10px;font-size: 24px;color:white;text-align: left;">All restaurants</h1>
            <div class="slider responsive6">
                <div>
                    <h3 > <a href="#1">
                        <img class="img3" style="border-radius: 10px;" src="{{ asset('slick/img/promo1.jpg') }}" alt="">
                    </a>  </h3>
                </div>
                <div>
                    <h3 > <a href="#1">
                        <img class="img3" src="{{ asset('slick/img/promo2.jpg') }}" alt="">
                    </a>  </h3>
                </div>
                <div>
                    <h3 > <a href="#1">
                        <img class="img3" style="" src="{{ asset('slick/img/promo3.png') }}" alt="">
                    </a>  </h3>
                </div>

                <div>
                    <h3 > <a href="#1">
                        <img class="img3"  style="" src="{{ asset('slick/img/promo5.jpg') }}" alt="">
                    </a>  </h3>
                </div>

                <div>
                    <h3 > <a href="#1">
                        <img class="img3" style="" src="{{ asset('slick/img/promo4.jpg') }}" alt="">
                    </a>  </h3>
                </div>


            </div>
        </div>
    </section>
</div>
{{-- Main 6--}}

</div>
 </div>


      </div>

    <script src="{{ asset('slick/code/jquery-1.11.0.min.js')}}"></script>
	<script src="{{ asset('slick/code/jquery-migrate-1.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('slick/slick2.js')}}"></script>
	<script type="text/javascript" src="{{ asset('slick/js/scripts2.js')}}"></script>
	<script type="text/javascript" src="{{ asset('slick/js/prism2.js')}}"></script>


</body>
<footer>

</footer>
</html>
