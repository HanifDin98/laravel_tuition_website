@extends('dashboard.index')

@section('container')
<main id="main">

  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Add Question</h2>
      </div>
      
      

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
      <div  class="info">
      <form action="{{ url('/dashAddQuestion') }}" method="POST">
        @csrf 
        <select name="user_id" class="block border border-gray-500 w-80 mb-3 p-2">
          @foreach ($users as $user)
              <option value="{{ $user->id }}">{{ $user->name }}</option>
          @endforeach
      </select>
      <br>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="fname">Question:</label><br>
          <input type="text" id="Question" name="Question" value="" placeholder="Add Question" class="form-control">
        </div>
        <div class="form-group col-md-6">
          <label for="lname">Answer:</label><br>
          <input type="text" id="Answer" name="Answer" value="" placeholder="Answer" class="form-control">
        </div>
        
      </div>
      <br><div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
      </form> 
      </div>
      </div>
  </section>
  </main>
  






@endsection