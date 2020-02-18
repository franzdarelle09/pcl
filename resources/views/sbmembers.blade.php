<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Municipality Of Luisiana</title>
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
<link href="/adm/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
  <div class="main-content"> 
    

    <!--Departments & Information Desk Start-->
    
       <div class="main-content p80"> 
            
            
                <div class="team-grid">
                 <div class="container">
                    <div class="row">
                       <!--Team Box Start-->
                       <div class="col-md-6">
                          <div class="team-box">
                             <div class="team-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="/storage/documents/{{$mayor->photo}}" alt=""></div>
                             <div class="team-txt">
                                <h5>{{$mayor->name}}</h5>
                                <strong class="dep">{{$mayor->position}}</strong>
                                <p style="visibility: hidden;"> Stephen Paul is very Compitent and very agile person who assist to Mayor of the City. </p>
                                <ul class="team-social">
                                   <li><em>Connect:</em></li>
                                   <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                   <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                   <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                   <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                             </div>
                          </div>
                       </div>
                       <!--Team Box End-->
                       <!--Team Box Start-->
                       <div class="col-md-6">
                          <div class="team-box">
                             <div class="team-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="/storage/documents/{{$vicemayor->photo}}" alt=""></div>
                             <div class="team-txt">
                                <h5>{{$vicemayor->name}}</h5>
                                <strong class="dep">{{$vicemayor->position}}</strong>
                                <p style="visibility: hidden;"> Harry Wilson is very Compitent and very agile person who assist to Mayor of the City. </p>
                                <ul class="team-social">
                                   <li><em>Connect:</em></li>
                                   <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                   <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                   <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                   <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                             </div>
                          </div>
                       </div>
                       <!--Team Box End-->
                       <!--Team Box Start-->
                     
                        @foreach($councilors as $c)
                          <div class="col-md-6">
                            <div class="team-box">
                               <div class="team-thumb"> <a href="#"><i class="fas fa-link"></i></a> 
                                @if($c->photo != "")
                                  <img src="/storage/documents/{{$c->photo}}" alt="">
                                @else
                                  <img src="/images/dummy.jpg" alt="">
                                @endif
                              </div>
                               <div class="team-txt">
                                  <h5>{{$c->name}}</h5>
                                  <strong class="dep">{{$c->position}}</strong>
                                  <p style="visibility: hidden;"> Harry Wilson is very Compitent and very agile person who assist to Mayor of the City. </p>
                                  <ul class="team-social">
                                     <li><em>Connect:</em></li>
                                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                     <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                  </ul>
                               </div>
                            </div>
                         </div>

                        @endforeach
                    </div>
                 </div>
                 <!--Team End--> 
              </div>
              
    
        </div>
    
    
    
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
<script src="/adm/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/adm/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $('#dataTable').DataTable();
</script>
</body>
</html>