<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Officers - PCL</title>
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
  
  <div class="main-content pagebg p80">
    <div class="text-center title-style-3">
      <h3 style="margin-bottom: 20px;">PCL Members</h3>
    </div>
    <div class="row">
      <div class="col-md-12 modifiers">
        <div class="modifier-panel mpr">
          <input type="hidden" name="type" value="{{$type}}" id="type">               
          <select name="town" id="town">
            @foreach($towns as $t)
            <option value="{{$t->name}}" @if($town == $t->name) selected  @endif>{{$t->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>
            <!--Events Start-->
            <div class="team-grid official-members">
               <div class="container">
                  <div class="row">
                    @foreach($officers as $o)
                     <!--Team Box Start-->
                     <div class="col-md-4 col-sm-6">
                        <div class="h3-team-box">
                           <div class="team-info">
                              <h5>{{$o->fname}} {{$o->lname}}</h5>
                              <strong><?= $o->position ?></strong>
                              <p style="visibility: hidden;">Stephen is very Compitent person who assist to Mayor of the City. </p>
                              <ul>
                                 <li><strong>Connect:</strong></li>
                                 <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                 <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                 <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                 <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                              </ul>
                           </div>
                           <img src="/storage/officers/{{$o->photo}}" alt=""> 
                        </div>
                     </div>
                     <!--Team Box End--> 
                     @endforeach
                     <!--Team Box Start-->
                
                     
                  </div>
               </div>
               <!--Team End--> 
            </div>
            <!--Main Content End--> 
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
        <li><a href="#">Default Home Page</a></li>
        <li><a href="#">Home Page Two</a></li>
        <li><a href="#">Home Page Three</a></li>
      </ul>
    </li>
    <li> <a href="#">About Us</a> </li>
    <li> <a href="#">Departments</a> </li>
    <li> <a href="#">News</a> </li>
    <li> <a href="#">Events</a> </li>
    <li> <a href="#">Explore City</a> </li>
    <li> <a href="#">Services</a> </li>
    <li> <a href="#">Contact</a> </li>
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
<script type="text/javascript">
   $("#town").on("change",function(){
    town = $(this).val();
    type = $("#type").val();
    window.location=`/councilors/${town}/${type}`;
  });
</script>
</body>
</html>