@section('navbar')

<!-- Fixed navbar -->
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
            <img src="img/kd.png" class="img-responsive logo" width="60" >
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{{ Request::is('/')? 'active' : '' }}"><a href="/">Home</a></li>
            <li class="{{ Request::is('about')? 'active' : '' }}"><a href="/about">About</a></li>
            <li class="{{ Request::is('contact')? 'active' : '' }}"><a href="/contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav><br><br><br>