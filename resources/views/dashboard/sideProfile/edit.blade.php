@extends('dashboard.index')

@section('container')
<main id="main">
  
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Edit Profile</h2>
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <div  class="info">
        <form action={{ url('/profiles/'.$profile->id) }} method="POST">
          @csrf
          <div class="form-group">
          <label for="fname">Name:</label><br>
          <textarea id="name" name="name" rows="2" class="form-control" >{{ $profile->name }}</textarea>
          </div>
          <div class="form-group">
          <br><label for="lname">Email:</label><br>
          <textarea id="email" name="email" class="form-control" >{{ $profile->email }}</textarea>
          </div>
         <br>
         <br><div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
        </form>
        </div>
        </div>
        

    
    </section><!-- End Contact Section -->
  </main>
  
