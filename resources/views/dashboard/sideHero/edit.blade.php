@extends('dashboard.index')

@section('container')
<main id="main">
  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Edit Hero</h2>
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <div  class="info">
        <form action={{ url('/update-hero/'.$hero->id) }} method="POST">
          @csrf
          
              <label for="fname">Title:</label><br>
              <input type="text" id="Title" name="Title" value="{{ $hero->Title }}" placeholder="" class="form-control"><br>
            <div class="row">
            <div class="form-group col-md-6">
                <label for="fname">Description 1:</label><br>
                <textarea name="description_1" rows="5" class="form-control"required>{{ $hero->description_1 }}</textarea>
              </div>

              <div class="form-group col-md-6">
                <label for="fname">Description 2:</label><br>
                <textarea name="description_2" rows="5" class="form-control"required>{{ $hero->description_2 }}</textarea>
              </div>
          </div>
          <br><div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
        </form></div></div>
        

    
    </section><!-- End Contact Section -->
  </main>
  






@endsection