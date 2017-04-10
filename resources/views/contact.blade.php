@extends('admin')

@section('courses')

<h1 class="text-center imondgray">CONTACT INFORMATION</h1><hr>
<div id="fh5co-contact">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-md-push-1 animate-box">

        <div class="fh5co-contact-info">
          <h3>Contact Information</h3>
          <ul>
            <li class="address">Neema Building, <br> </li>
            <li class="phone"><a href="tel://1234567920">+254 725 662 430</a></li>
            <li class="email"><a href="mailto:info@yoursite.com">tropicalcollege@gmail.com</a></li>
            <li class="url"><a href="http://gettemplates.co">tropicalcollege.ac.ke</a></li>
          </ul>
        </div>

      </div>
      <div class="col-md-6 animate-box">
        <h3>Get In Touch</h3>
        <form action="#">
          <div class="row form-group">
            <div class="col-md-6">
              <!-- <label for="fname">First Name</label> -->
              <input type="text" id="fname" class="form-control" placeholder="Your firstname">
            </div>
            <div class="col-md-6">
              <!-- <label for="lname">Last Name</label> -->
              <input type="text" id="lname" class="form-control" placeholder="Your lastname">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <!-- <label for="email">Email</label> -->
              <input type="text" id="email" class="form-control" placeholder="Your email address">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <!-- <label for="subject">Subject</label> -->
              <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <!-- <label for="message">Message</label> -->
              <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
            </div>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary">
          </div>

        </form>
      </div>
    </div>

  </div>
</div>
@endsection
