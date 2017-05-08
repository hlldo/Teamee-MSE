@extends('layouts.teamee')

@section('title')
    Contact
@endsection
@section('content')
<div class="parallax-container" data-parallax="scroll" data-position="left" data-image-src="image/serge-esteve-5821.jpg"></div>

<main>
  @if(Session::has('success'))
    <div class="alert alert-info center-align">
      {{Session::get('success')}}
    </div>
@endif
  <div class="container" id="contactForm">

            <div class="row">
                <div class="col-md-12">
                    <br><br>
                <div class="center-align white-text" class="labelRight"><h4>Contact Us</h4></div>
                </div>

        </div>
 <!--- Email Form --->

    <div class="row">
<form class="container" action="{{ url('contact') }}" method="POST">
  {{ csrf_field() }}
  <div class="row">
    <div class="input-field col s12" id="contact-form">
      <input name="name" id="name" type="text" style="background-color:white; border-radius:6px;" class="validate">
      <label for="name" class="labelRight">Name</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12" id="contact-form">
      <input name="email" id="email" type="email" class="validate" style="background-color:white; border-radius:6px;">
      <label for="email" class="labelRight">Email</label>
    </div>
  </div>
    <div class="row">
    <div class="input-field col s12">
      <textarea name="message" id="textarea1" class="materialize-textarea" style="background-color:white; border-radius:6px;"></textarea>
      <label for="textarea1" class="labelRight">Message</label>
         <input type="submit" value="Submit" class="btn waves-effect waves-light">
    </div>

  </div>
</form>
</div>

    </div>
     <!--- End of Email form !--->
@endsection
