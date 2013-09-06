<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="header_bar">
  <!-- Brand and toggle get grouped for better mobile display -->

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a class="navbar-brand" href="{{ URL::to('/') }}"> MM Point of Sales</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      @if (! Sentry::check())  
        <ul class="nav navbar-nav">
          <li ><a href="#">Tour</a></li>
          <li class="divider-vertical"></li>
          <li><a href="#">Examples</a></li>
          <li class="divider-vertical"></li>
          <li><a href="#">Pricing</a></li>
          <li class="divider-vertical"></li>
          <li><a href="#">Contact Us</a></li>
          <li class="divider-vertical"></li>
          <li><a href="#">Supports</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i> Languages<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{{ URL::to('lang/my') }}">ျမန္မာစာ</a></li>
              <li><a href="{{ URL::to('lang/en') }}">English</a></li>
            </ul>
          </li>
          <li><a href="{{ URL::to('register') }}">Try For Free</a></li>
        </ul>        
      @else 
        <ul class="nav navbar-nav">
          <li ><a href="#"><i class="icon-home"></i> Home</a></li>    
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-gear"></i> Setting<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ URL::to('lang/my') }}">ျမန္မာစာ</a></li>
                <li><a href="{{ URL::to('lang/en') }}">English</a></li>
              </ul>
            </li>  

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-group"></i> Staff Manage<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ URL::to('all-staffs') }}"><i class="icon-search"></i> All Staffs</a></li>
                <li><a href="{{ URL::to('group') }}"><i class="icon-user"></i> Group</a></li>
              </ul>
            </li>  
        </ul>    
      
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><i class="icon-user"></i> {{ $username }} <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ URL::to('logout') }}"><i class="icon-signout"></i> logout</a></li>
              </ul>
            </li>
        </ul> 
      @endif 
    </div><!-- /.navbar-collapse -->
  </nav>


