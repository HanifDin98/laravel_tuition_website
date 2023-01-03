@extends('dashboard.index')

@section('container')

<main id="main">
    <!-- ======= About Section ======= -->
      <section id="about" class="about">
      <div class="container">
          <div class="section-title">
            <h2>Profile</h2>
            <p>This side is where you can add and edit the Admin Profile </p>
          </div>
         
          <br>
          <table>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Update</th>
            </tr>
            @foreach ($profiles as $profile)
            <tr>
              <td>{{ $profile->id }}</td>
              <td>{{ $profile->name }}</td>
              <td>{{ $profile->email }}</td>
              <td><a class="btn btn-primary" href="{{ url('/profiles/'.$profile->id) }}" role="button">Update</a></td>

             
            </tr>
            @endforeach
        
            
          </table>
      </div>
      </section>
    </main>

    @endsection
