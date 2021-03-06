<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>News - PCL</title>
<!-- CSS Files -->
<link href="/css/custom.css" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">
<link href="/css/color.css" rel="stylesheet">
<link href="/css/all.css" rel="stylesheet">
<link href="/css/owl.carousel.min.css" rel="stylesheet">
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/prettyPhoto.css" rel="stylesheet">
<link href="/css/slick.css" rel="stylesheet">
<link href="/css/government.css" rel="stylesheet">
<link href="/css/news.css" rel="stylesheet">
<link rel="icon" href="/images/fav.png" type="image/png">
<!--Rev Slider Start-->
<link rel="stylesheet" href="/js/rev-slider/css/settings.css"  type='text/css' media='all' />
<link rel="stylesheet" href="/js/rev-slider/css/layers.css"  type='text/css' media='all' />
<link rel="stylesheet" href="/js/rev-slider/css/navigation.css"  type='text/css' media='all' />

<!--Rev Slider End-->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body>

<!--Wrapper Start-->
<div class="wrapper"> 
  <!--Header Start-->
  @include('partials.menu')
  <!--Header End--> 

  <!--Main Content Start-->
  <!-- <section class="wf100 subheader">
      <div class="container">
         <h2>Donation</h2>
         <ul>
            <li> <a href="index.html">Home</a> </li>
            <li> <a href="#">Causes</a> </li>
            <li> Donation </li>
         </ul>
      </div>
   </section> -->
  <div class="main-content p80"> 
    <!--Events Start-->
    <div class="news-wrapper news-full">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-8"> 
            @foreach($news as $n)
            <!--News Full Start-->
            <div class="news-box">
              <div class="new-thumb"> <a href="/news/{{$n->id}}"><i class="fas fa-link"></i></a> <span class="cat c1">News</span> <img src="/storage/news/{{$n->cover_photo}}" alt=""> </div>
              <div class="new-txt">
                <ul class="news-meta">
                  <li><?php echo date('d M, Y',strtotime($n->created_at)) ?></li>
                  <!-- <li>176 Comments</li> -->
                </ul>
                <h6><a href="#">{{$n->title}}</a></h6>
                <p> <?php echo substr($n->content,0,250) ?> ...</p>
              </div>
              <div class="news-box-f"> <img src="/images/user1.jpg" alt=""> PCL Admin <a href="/news/{{$n->id}}"><i class="fas fa-arrow-right"></i></a> </div>
            </div>
            <!--News Full End-->
            @endforeach 
            
            <!-- <div class="site-pagination">
              <nav aria-label="Page navigation">
                <ul class="pagination">
                  <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li class="active"><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                </ul>
              </nav>
            </div> -->
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="sidebar"> 
             
              <!--Widget Start-->
              <div class="widget">
                <h4>Archives</h4>
                <div class="archives inner">
                  <ul>
                    <li><a href="#">May 2019</a></li>
                    <li><a href="#">April 2019</a></li>
                    <li><a href="#">March 2019</a></li>
                    <li><a href="#">February 2019</a></li>
                    <li><a href="#">January 2019</a></li>
                    <li><a href="#">March 2017</a></li>
                  </ul>
                </div>
              </div>
              <!--Widget End--> 
              
              <!--Widget Start-->
              <div class="widget">
                <h4>Tags</h4>
                <div class="tags-widget inner"> <a href="#">Health</a> <a href="#">City News</a> <a href="#">Vote</a> <a href="#">Election</a> <a href="#">Democratic</a> <a href="#">Press</a> <a href="#">Campaign</a> </div>
              </div>
              <!--Widget End--> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Events End--> 
  </div>
  <!--Main Content End--> 
  <!--Footer Start-->
  @include('partials.footer')
  <!--Footer End--> 
</div>
<!--Wrapper End-->

<nav id="sidebar">
  <div id="dismiss"> <i class="fas fa-arrow-right"></i> </div>
  <div class="sidebar-header"> <img src="/images/footer-logo2.png" alt=""> </div>
  <ul class="list-unstyled components">
    <li class="active"> <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
      <ul class="collapse list-unstyled" id="homeSubmenu">
        <li><a href="index.html">Default Home Page</a></li>
        <li><a href="home-two.html">Home Page Two</a></li>
        <li><a href="home-three.html">Home Page Three</a></li>
      </ul>
    </li>
    <li> <a href="aboutus.html">About Us</a> </li>
    <li> <a href="departments.html">Departments</a> </li>
    <li> <a href="news-full.html">News</a> </li>
    <li> <a href="event.html">Events</a> </li>
    <li> <a href="explore-city.html">Explore City</a> </li>
    <li> <a href="services.html">Services</a> </li>
    <li> <a href="contact.html">Contact</a> </li>
  </ul>
</nav>
<div class="overlay"></div>

<!-- JS --> 
<script src="/js/jquery.min.js"></script> 
<script src="/js/bootstrap.min.js"></script> 
<script src="/js/owl.carousel.min.js"></script> 
<script src="/js/jquery.prettyPhoto.js"></script> 
<script src="/js/slick.min.js"></script> 
<script src="/js/custom.js"></script> 
<!--Rev Slider Start--> 
<script type="text/javascript" src="/js/rev-slider/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="/js/rev-slider/js/jquery.themepunch.revolution.min.js"></script> 
<script type="text/javascript" src="/js/rev-slider.js"></script> 
<script type="text/javascript" src="/js/rev-slider/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="/js/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="/js/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="/js/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="/js/rev-slider/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="/js/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="/js/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="/js/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="/js/rev-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>