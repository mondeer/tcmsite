@extends('dash')

@section('main_content')
<div class="top-menu">
  <div class="container">
    <div class="row">
      <div class="col-xs-1">
        <div id="tcm-logo"><a href="index.html">TCM<span>.</span></a></div>
      </div>
      <div class="col-xs-11 text-right menu-1">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/courses">Courses</a></li>
          <li><a href="/blog">Blog</a></li>
          <li><a href="/contact">Contact</a></li>
          <li class="btn-cta"><a href="#"><span>Login</span></a></li>
          <li class="btn-cta"><a href="/apply"><span>Apply Online</span></a></li>
        </ul>
      </div>
    </div>

  </div>
</div>
</nav>

<header id="tcm-header" class="tcm-cover1" role="banner" style="background-image:url(images/tcm.jpg);" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
</header>
<div class="container">
  @yield('courses')
</div>
@endsection
