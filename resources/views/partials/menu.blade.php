<header class="wf100 header-two">
    
    <div class="h3-logo-row wf100">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <ul class="quick-links">
              <li><a href="#">Council</a></li>
              <li><a href="#">Vacancies</a></li>
              <li><a href="#">Report It</a></li>
              <li><a href="#">A-Z Index</a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="h3-logo"> <a href="/"><img src="/images/logo.png" class="gov-logo" alt=""></a></div>
          </div>
          <div class="col-md-4 col-sm-4">
            <ul class="header-contact">
              <li><span>Hotline:</span> <strong>(049) 503 6208</strong></li>
              <li class="city-exp"> <i class="fas fa-street-view"></i> <strong>City<br>
                Explore</strong> </li>
              <li class="header-weather"> <i class="fas fa-cloud-sun"></i> 24°C / 75°F </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="h3-navbar wf100">
      <div class="container">
        <nav class="navbar">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">              
              
              <li><a href="/">Home</a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Documents <span class="caret"></span></a>
                  <ul class="dropdown-menu" style="height: 400px; overflow-y: scroll; overflow-x: hidden;">
                    @foreach($towns as $town)
                      <li><a href="/documents/{{$town->id}}">{{$town->name}}</a></li>
                    @endforeach
                  </ul>
              </li>
              <li><a href="/news">News</a></li>
              
              <li><a href="#">Events</a></li>
              <li><a href="/pclofficers">PCL Officers</a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PCL Officers <span class="caret"></span></a>
                  <ul class="dropdown-menu" style="height: 400px; overflow-y: scroll; overflow-x: hidden;">
                    
                      <li><a href="/pclofficers/Laguna">Laguna</a></li>
                      <li><a href="/pclofficers/National">National</a></li>
                      @foreach($towns as $town)
                        <li><a href="/pclofficers/{{$town->name}}">{{$town->name}}</a></li>
                      @endforeach                  
                      
                  </ul>
              </li>
            </ul>
            <ul class="navbar-right">
              <li class="search-form" style="visibility: hidden;">
                <form class="navbar-form">
                  <input type="text" class="form-control" placeholder="Search">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </form>
              </li>
              @guest
                <li class="donate-btn"><a href="/login">LOGIN</a></li>
              @endguest
              @auth
                <li class="donate-btn"><a href="/admin/documents">Dashboard</a></li>
              @endauth
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>