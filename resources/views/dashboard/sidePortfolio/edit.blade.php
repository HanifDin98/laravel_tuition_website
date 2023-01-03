@extends('dashboard.index')

@section('container')
<main id="main">
  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Update Point</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <div  class="info">
        <form action={{ url('/update-portfolio/'.$portfolio->id) }} method="POST" enctype="multipart/form-data" >
          @csrf 
          @method('PUT')
          <div class="row">
            <div class="form-group col-md-6">
          <label for="fname">Title:</label><br>
          {{-- <textarea name="content" rows="3" class="block border border-gray-500 w-80 mb-3 ">{{ $package->title }}</textarea> --}}
          <input type="text" id="title" name="title" value="{{ $portfolio->title }}" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
          <label for="lname">Description:</label><br>
          <input type="text" id="description" name="description" value="{{ $portfolio->description }}" class="form-control" required><br>
            </div>
          </div>
          <label for="">Photo:</label>
          <img src="{{ asset('uploads/portfolios/'.$portfolio->portfolio_image) }}" width="70px" height="70px" alt="">
          <input type="file" name="portfolio_image" >
          
          <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>

        </form> 
          </div>
        </div>
        

    
    </section><!-- End Contact Section -->
  </main>