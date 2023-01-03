@extends('dashboard.index')

@section('container')

<main id="main">
    <!-- ======= About Section ======= -->
      <section id="about" class="about">
      <div class="container">
          <div class="section-title">
            <h2>Tuition Subject</h2>
            
          </div>
          <a href="/dashAddSub" class="btn btn-primary">Add Subject</a>
          <br><br>
          <table>
            <tr>
              <th>Subject</th>
              <th>Type</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
            @foreach ($subjects as $subject)
            <tr>
       
              <td>{{ $subject->title }}</td>
              <td>
                  <ul>
                      <li>{{ $subject->type }}</li>
                  </ul>  
              </td>
              <td><a class="btn btn-primary" href="{{ url('/subjects/'.$subject->id) }}" role="button">Update</a></td>
              <td>
                
						    	<form action="{{ url('/subjects/'.$subject->id) }}" method="POST" onclick="return deleteNotify()" class="p-2 ml-2 rounded-md bg-red-500 text-white">
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