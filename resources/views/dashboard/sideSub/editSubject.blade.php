@extends('dashboard.index')

@section('container')
<main id="main">
  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Edit Subject</h2>
        
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <div  class="info">
        <form action={{ url('/subjects/'.$subject->id) }} method="POST">
          @csrf
          <div class="row">
            <div class="form-group col-md-6">
              <label for="fname">Subject Name:</label><br>
              <input type="text" id="title" name="title" value="{{ $subject->title }}" placeholder="" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
              <label for="lname">type:</label><br>
              <select id="type" name ="type" class="form-control">
                @if ($subject->type =="Teras")
                <option selected>{{ $subject->type }}</option>
                <option>Sains</option>
                @else
                <option>Teras</option>
                <option selected>{{ $subject->type }}</option>
                @endif
                </select>
            </div>
          </div>
          <br><div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
       
        </form></div></div>
        

    
    </section><!-- End Contact Section -->
  </main>
  






@endsection