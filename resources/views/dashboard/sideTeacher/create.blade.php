@extends('dashboard.index')

@section('container')

<main id="main">
    <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">
  
          <div class="section-title">
            <h2>Add Teacher</h2>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <div  class="info">
              <form action="{{ url('add-teacher') }}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="fname">Teacher Name:</label><br>
                    <input type="text" id="name" name="name" value="" placeholder="Insert Name" class="form-control"><br>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lname">Subject Teach:</label><br>
                    <input type="text" id="subject_teach" name="subject_teach" placeholder="Insert Subject" class="form-control"><br>
                  </div>
                </div>
                <label for="">Photo:</label>
                <input type="file" name="profile_image" value="" placeholder="choose photo">
                <br><div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
              </form>
            </div>
          </div>
        </div>
      </section><!-- End Contact Section -->
</main>

@endsection