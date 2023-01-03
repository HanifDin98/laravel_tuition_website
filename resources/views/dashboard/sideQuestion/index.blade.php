@extends('dashboard.index')

@section('container')

<main id="main">
    <!-- ======= About Section ======= -->
      <section id="about" class="about">
      <div class="container">
          <div class="section-title">
            <h2>Question</h2>
            <p>This side is where you can add and edit the Question section that apear on home website.</p>
          </div>
         
          <a href="/dashAddQuestion" class="btn btn-primary">Add New Question</a>
          <br><br>
          <table>
            <tr>
              <th>Id</th>
              <th>Question</th>
              <th>Answer</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
            @foreach ($questions as $question)
            <tr>
              <td>{{ $question->id }}</td>
              <td>{{ $question->Question }}</td>
              <td>{{ $question->Answer }}</td>
              <td><a class="btn btn-primary" href="{{ url('/questions/'.$question->id) }}" role="button">Update</a></td>
              <td>
                  {{-- <a class="btn btn-primary" href="{{ url('/questions/'.$question->id) }}" role="button">Update</a> --}}
                  <form action="{{ url('/questions/'.$question->id) }}" method="POST" onclick="return deleteNotify()" class="p-2 ml-2 rounded-md bg-red-500 text-white">
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @csrf
                  </form>
              </td>

             
            </tr>
            @endforeach
        
            
          </table>
      </div>
      </section>
    </main>

    @endsection
