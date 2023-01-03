@extends('dashboard.index')

@section('container')
<main id="main">
  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Update About</h2>
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <div  class="info">
        <form action={{ url('/abouts/'.$about->id) }} method="POST">
          @csrf 
          <div class="row">
          <div class="form-group col-md-6">
          <label for="fname">About Title:</label><br>
          {{-- <textarea name="content" rows="3" class="block border border-gray-500 w-80 mb-3 ">{{ $package->title }}</textarea> --}}
          <input type="text" id="title" name="title" value="{{ $about->title }}" class="form-control">
          </div>
          <div class="form-group col-md-6">
          <label for="lname">Description:</label><br>
          <input type="text" id="discription" name="discription" value="{{ $about->discription }}" class="form-control">
          </div>
          </div>
          <br>
          <div class="row">
            <div class="form-group col-md-6">
          <label for="lname">Mission:</label><br>
          <textarea name="mission" rows="10" class="form-control">{{ $about->mission }}</textarea><br>
          </div>
          <div class="form-group col-md-6">
          <label for="lname">Vission:</label><br>
          <textarea name="vission" rows="10" class="form-control">{{ $about->vission }}</textarea><br>
          </div>
          </div>
          <br><div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>

        </form>
        </div>
        </div>
        

    
    </section><!-- End Contact Section -->
  </main>