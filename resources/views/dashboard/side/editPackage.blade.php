@extends('dashboard.index')

@section('container')
<main id="main">

  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Edit Package</h2>
      </div>
      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
      <div  class="info">
      <form action={{ url('/packages/'.$package->id) }} method="POST">
        <div class="row">
          @csrf
          <div class="form-group col-md-6">
            <label for="fname">Package Name:</label><br>
            <input type="text" id="title" name="title" value="{{ $package->title }}" class="form-control" required>
          </div>
          <div class="form-group col-md-6">
            <label for="lname">Price:</label><br>
            <input type="number" id="price" name="price" value="{{ $package->price }}" class="form-control" required>
          </div>
          <div class="form-group col-md-6">
            <label for="lname">Core Limit:</label><br>
            <input type="number" id="core_limit" name="core_limit" value="{{ $package->core_limit }}" placeholder="Insert Core limit" class="form-control"required>
          </div>
          <div class="form-group col-md-6">
            <label for="lname">Science Limit:</label><br>
            <input type="number" id="science_limit" name="science_limit" value="{{ $package->science_limit }}" placeholder="Insert Core limit" class="form-control"required>
          </div>
          <div class="form-group"><br>
            <label for="lname">Description:</label><br>
            <textarea name="description" rows="10" class="form-control" required>{{ $package->description }}</textarea>
          </div>
        </div>
        <br><div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
      </form>
      </div>
      </div>
      

  
  </section><!-- End Contact Section -->
  </main>
  






@endsection