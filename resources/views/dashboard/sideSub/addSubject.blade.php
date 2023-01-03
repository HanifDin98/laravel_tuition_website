@extends('dashboard.index')

@section('container')
<main id="main">
  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Add Subject</h2>
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <div  class="info">
        <form id="formSub" action="{{ url('/dashAddSub') }}" method="POST" onsubmit="return validateSub()">
          @csrf 
          <select name="user_id" class="block border border-gray-500 w-80 mb-3 p-2">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>

        <div class="row">
          <div class="form-group col-md-6">
            <label for="fname">Subject Name:</label><br>
            <input type="text" id="title" name="title" value="" placeholder="Insert Subject" class="form-control" required>
          </div>
          <div class="form-group col-md-6">
            <label for="lname">type:</label><br>
            
            <select id="type" name ="type" class="form-control">
              <option selected>Choose...</option>
              <option>Teras</option>
              <option>Sains</option>
              </select>
          </div>
          
        </div>
        <br><div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>          
       
        </form></div></div>
        

    
    </section><!-- End Contact Section -->
  </main>