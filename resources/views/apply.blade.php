@extends('dashboard')

@section('content')
<div class="top-menu">
  <div class="container">
    <div class="row">
      <div class="col-xs-1">
        <div id="tcm-logo"><a href="/">TCM<span>.</span></a></div>
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

<header id="tcm-header" class="tcm-cover" role="banner" style="background-image:url(images/tcm.jpg);" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
      <div class="display-t">
        <div class="display-tc animate-box" data-animate-effect="fadeIn">
          <div class="tcm col-md-12">

            <h1 class="text-center">Apply For A Course</h1>
            <form class="form-horizontal" action="/apply" method="post">
              <input type="hidden" name="_token" value="{{csrf_token()}}">

              <div class="form-group">
                <label class="col-md-4">First Name</label>
                <div class="">
                  <input class="col-md-6 tcmblack" type="text" name="fname" value="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4">Middle Name</label>
                <div class="">
                  <input class="col-md-6 tcmblack" type="text" name="mname" value="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4">Surname</label>
                <div class="">
                  <input class="col-md-6 tcmblack" type="text" name="surname" value="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4">County</label>
                <div class="">
                  <input class="col-md-6 tcmblack" type="text" name="county" value="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4">Postal Address</label>
                <div class="">
                  <input class="col-md-6 tcmblack" type="text" name="address" value="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4">Telephone</label>
                <div class="">
                  <input class="col-md-6 tcmblack" type="text" name="phone" value="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4">Previus Grade</label>
                <div class="">
                  <input class="col-md-6 tcmblack" type="text" name="grade" value="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4">Course Applying for</label>
                <div class="">
                  <input class="col-md-6 tcmblack" type="text" name="course" value="">
                </div>
              </div>

              <div class="">
                <button data-toggle="modal" data-target="#myModal" class="btn btn-success" type="submit" name="submit">Submit</button>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</header>

  <!-- Modal Success Popup -->
<div class="modal fade success-popup" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Hurray!</h4>
      </div>
      <div class="modal-body text-center">
         <img src="http://osmhotels.com//assets/check-true.jpg">
          <p class="lead">You have successfully applied for a course Thank you,</p>
          <a href="/" class="rd_more btn btn-default">Go to Home Page</a>
      </div>

    </div>
  </div>
</div>
@endsection
