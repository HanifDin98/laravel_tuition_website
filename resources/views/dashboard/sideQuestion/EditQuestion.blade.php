@extends('dashboard.index')

@section('container')
<main id="main">
  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Edit Question</h2>
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <div  class="info">
        <form action={{ url('/questions/'.$question->id) }} method="POST">
          @csrf
          <div class="form-group">
          <label for="fname">Question {{ $question->id }}:</label><br>
          <textarea id="Question" name="Question" rows="2" class="form-control" >{{ $question->Question }}</textarea>
          </div>
          <div class="form-group">
          <br><label for="lname">Answer {{ $question->id }}:</label><br>
          <textarea id="Answer" name="Answer" rows="10" class="form-control" >{{ $question->Answer }}</textarea>
          </div>
         <br>
         <br><div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
          {{-- <select name="user_id" class="block border border-gray-500 w-80 mb-3 p-2">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <br> --}}
        </form>
        </div>
        </div>
        

    
    </section><!-- End Contact Section -->
  </main>
  
