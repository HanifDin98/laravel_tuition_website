@extends('dashboard.index')

@section('container')

<main id="main">
    <!-- ======= About Section ======= -->
      <section id="about" class="about">
      <div class="container">
          <div class="section-title">
            <h2>Tuition Package</h2>
          </div>
          <a href="/dashAdd" class="btn btn-primary">Add Package</a>
          <br> <br>
          <table >
            <tr>
              <th>Package</th>
              <th>Description</th>
              <th>Price</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
            @foreach ($packages as $package)
            <tr>
       
              <td>{{ $package->title }}</td>
              <td>
                  <ul>
                      <li>{{ $package->description }}</li>
                  </ul>  
              </td>
              <td>{{ $package->price }}</td>
              <td><a class="btn btn-primary" href="{{ url('/packages/'.$package->id) }}" role="button">Update</a></td>
              <td>
              
						    	<form action="{{ url('/packages/'.$package->id)  }}" method="POST" onclick="return deleteNotify()" class="p-2 ml-2 rounded-md bg-red-500 text-white">
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
