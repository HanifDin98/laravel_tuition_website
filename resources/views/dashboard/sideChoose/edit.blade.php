@extends('dashboard.index')

@section('container')
<main id="main">
  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Update Point</h2>
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <div  class="info">
        <form action={{ url('/update-choose/'.$choose->id) }} method="POST" enctype="multipart/form-data">
          @csrf 
          @method('PUT')
          <div class="row">
            <div class="form-group col-md-6">
          <label for="fname">Point:</label><br>
          <input type="text" id="point" name="point" class="form-control" value="{{ $choose->point }}" required><br>
            </div>
            <div class="form-group col-md-6">
          <label for="lname">Description:</label><br>
          <input type="text" id="description" name="description" class="form-control" value="{{ $choose->description }}" required>
            </div>
          </div>
          <label for="">Photo:</label>
          <img src="{{ asset('uploads/chooses/'.$choose->point_image) }}" width="70px" height="70px" alt="">
          <input type="file" name="point_image" >
          
          <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
 
        <br> 
        </form> 
          </div>
        </div>
        

    
    </section><!-- End Contact Section -->
  </main>