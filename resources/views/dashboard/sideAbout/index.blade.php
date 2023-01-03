@extends('dashboard.index')

@section('container')

<main id="main">
    <!-- ======= About Section ======= -->
      <section id="about" class="about">
      <div class="container">
          <div class="section-title">
            <h2>About</h2>
            <p>This side is where you can edit the about section that apear on home website.</p>
          </div>
    
          <table>
            <tr>
              <th>Title</th>
              <th>Description</th>
              <th>Mision</th>
              <th>Vision</th>
              <th>Action</th>
            </tr>
            @foreach ($abouts as $about)
            <tr>
       
              <td>{{ $about->title }}</td>
              <td>
                  <ul>
                      <li>{{ $about->discription }}</li>
                  </ul>  
              </td>
              <td>{{ $about->mission }}</td>
              <td>{{ $about->vission }}</td>
              <td>
						    	<form action="{{ url('/abouts/'.$about->id)  }}" method="POST" onclick="return deleteNotify() class="p-2 ml-2 rounded-md bg-red-500 text-white">
                                @method('DELETE')
                                <a class="btn btn-primary" href="{{ url('/abouts/'.$about->id) }}" role="button">Update</a>
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
