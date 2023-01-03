@extends('dashboard.index')

@section('container')
<main id="main">
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" >

      <div class="section-title">
        <h2>Add Package</h2>
        <p>This Section is where you can add a new Package</p>
      </div>
      
      

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
      <div  class="info">
      <form id="form" action="{{ url('/dashAdd') }}" method="POST" >
        @csrf 
        <select name="user_id" class="block border border-gray-500 w-80 mb-3 p-2">
          @foreach ($users as $user)
              <option value="{{ $user->id }}">{{ $user->name }}</option>
          @endforeach
      </select>
      <br>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="fname">Package Name:</label><br>
          <input type="text" id="title" name="title" value="" placeholder="Package A" class="form-control" required>
        </div>
        <div class="form-group col-md-6">
          <label for="lname">Price:</label><br>
          <input type="number" id="price" name="price" value="" placeholder="Insert Price" class="form-control"required>
        </div>
        <div class="form-group col-md-6">
          <label for="lname">Core Limit:</label><br>
          <input type="number" id="core_limit" name="core_limit" value="" placeholder="Insert Core limit" class="form-control"required>
        </div>
        <div class="form-group col-md-6">
          <label for="lname">Science Limit:</label><br>
          <input type="number" id="science_limit" name="science_limit" value="" placeholder="Insert Core limit" class="form-control"required>
        </div>
        <div class="form-group">
          <br><label for="lname">Description:</label><br>
          <textarea name="description" rows="10" class="form-control"required></textarea>
        </div>
        
      </div>
      <br><div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
      </form> 
      </div>
      </div>
  </section><!-- End Contact Section -->
  </main>
  






@endsection