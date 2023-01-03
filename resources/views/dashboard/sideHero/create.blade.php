@extends('dashboard.index')

@section('container')

<main id="main">
    <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">
  
          <div class="section-title">
            <h2>Add hero</h2>
          </div>
          <form action="{{ url('add-hero') }}" method="POST" enctype="multipart/form-data">
            @csrf 
            <label for="fname">Title:</label><br>
            <input type="text" id="Title" name="Title" value="" placeholder="Insert Title"><br>
            <label for="lname">Description 1:</label><br>
            <input type="text" id="description_1" name="description_1" value="" placeholder="Insert Description 1"><br><br>
            <label for="lname">Description 2:</label><br>
            <input type="text" id="description_2" name="description_2" value="" placeholder="Insert Description 2"><br><br>
          
            <button type="submit" class="p-2 rounded-md bg-indigo-500 text-white">Submit</button>
      
          </form> 
          
  
      
      </section>
    </main>

@endsection