@extends('dashboard.index')

@section('container')

<main id="main">
    <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">
  
          <div class="section-title">
            <h2>Add Portfolio</h2>
          </div>
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <div  class="info">
          <form action="{{ url('add-portfolio') }}" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="row">
              <div class="form-group col-md-6">
            <label for="fname">Ttile:</label><br>
            <input type="text" id="title" name="title" value="" placeholder="Insert Title" class="form-control" required><br>
              </div>
            <div class="form-group col-md-6">
            <label for="lname">Description:</label><br>
            <input type="text" id="description" name="description" value="" placeholder="Insert description" class="form-control" required>
            </div>
            </div>
            <label for="">Photo:</label>
            <input type="file" name="portfolio_image" value="" placeholder="choose photo">
            <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
      
          </form> 
            </div>
          </div>
    
          
  
      
      </section><!-- End Contact Section -->
    </main>

@endsection