@extends('dashboard.index')

@section('container')
<main id="main">
  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Update Teacher</h2>
        
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <div  class="info">
            <form action={{ url('/update-teacher/'.$teacher->id) }} method="POST" enctype="multipart/form-data">
              @csrf 
              @method('PUT')
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="fname">Teacher Name:</label><br>
                  <input type="text" id="name" name="name" value="{{ $teacher->name }}" placeholder="Insert Name" class="form-control"><br>
                </div>
                <div class="form-group col-md-6">
                  <label for="lname">Subject Teach:</label><br>
                  <input type="text" id="subject_teach" name="subject_teach" value="{{ $teacher->subject_teach }}" placeholder="Insert Subject" class="form-control"><br>
                </div>
              </div>
              <label for="">Photo:</label>
              <img src="{{ asset('uploads/teachers/'.$teacher->profile_image) }}" width="70px" height="70px" alt="">
              <input type="file" name="profile_image" value="" placeholder="choose photo">
              <br><div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
            </form>
          </div>
        </div>
    </section><!-- End Contact Section -->
  </main>