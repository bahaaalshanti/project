<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Readit - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>

	  <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="#">BA<i>TI</i>.</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="#" class="nav-link">Articles</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Team</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('storage/'.$post->image)}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
          <h6 class="mb-3 bread">{{$post->title}}</h6>
            <p class="breadcrumbs"><span class="mr-2"><a href="#">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="#">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

   <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            {!! $post->content !!}
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                @foreach ($post->tags as $tag)
                <a href="#" class="tag-cloud-link">{{ $tag->name }}</a>
                @endforeach
              </div>
            </div>

            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="{{ $user->hasPicture() ? asset('storage/'.$user->getPicture()) : $user->getGravatar() }}" alt="Image placeholder" style="border-radius: 50%" class="img-fluid mb-4">
              </div>
              <div class="desc">
              <h3>{{ $user->name }}</h3>
              <p>{{ $profile->about }}</p>
              </div>
            </div>


  </div>
            <div class="col-md-4 sidebar pl-lg-5 ftco-animate">
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon icon-search"></span>
                            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>

                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>
                        @foreach ($categories as $category)
                            <li><a href="#">{{$category->name}} <span class="ion-ios-arrow-forward"></span></a></li>
                        @endforeach
                    </div>
                </div>


                <div class="sidebar-box ftco-animate">
                    <h3>Recent Blog</h3>

                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url({{asset('storage/'.$post->image)}});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">  {{ $post->title }}</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> {{ $post->created_at }}</a></div>
                                <div><a href="#"><span class="icon-person"></span> {{ $user->name }}</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>


                </div>


                <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">cat</a>
                        <a href="#" class="tag-cloud-link">abstract</a>
                        <a href="#" class="tag-cloud-link">people</a>
                        <a href="#" class="tag-cloud-link">person</a>
                        <a href="#" class="tag-cloud-link">model</a>
                        <a href="#" class="tag-cloud-link">delicious</a>
                        <a href="#" class="tag-cloud-link">desserts</a>
                        <a href="#" class="tag-cloud-link">drinks</a>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                </div>


            </div>

  <div class="a1">

              <h3 class="mb-5"> Comments </h4>



@comments(['model' => $post])
</div>




      </div>

    </section> <!-- .section -->

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row ">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><a href="#">BA<span>TI</span>.</a></h2>
              <p>The home side looked capable of two wins over Steven Gerrard's side within a fortnight early on.

              </p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">latest News</h2>
              <div class="block-21 mb-4 d-flex">
	              <a class="img mr-4 rounded" style="background-image: url(/images/002.jpg);"></a>
	              <div class="text">
	                <h3 class="heading"><a href="#"> about</a></h3>
	                <div class="meta">
	                  <div><a href="#"></span> Oct. 20, 2020</a></div>
	                  <div><a href="#"></span> {{ $user->name }}</a></div>
	                  <div><a href="#"></span> 6</a></div>
	                </div>
	              </div>
	            </div>
	            <div class="block-21 mb-4 d-flex">
	              <a class="img mr-4 rounded" style="background-image: url(/images/002.jpg);"></a>
	              <div class="text">
	                <h3 class="heading"><a href="#">aboit</a></h3>
	                <div class="meta">
	                  <div><a href="#"></span> Oct. 10, 2020</a></div>
	                  <div><a href="#"></span> {{ $user->name }}</a></div>
	                  <div><a href="#"></span> 20</a></div>
	                </div>
	              </div>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>About us</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Articles</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">gaza palestin</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+00000000000</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">bahaa@hotmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>

      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>
  <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('js/google-map.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>

  </body>
</html>
