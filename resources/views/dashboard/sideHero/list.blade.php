@extends('dashboard.index')

@section('container')

<main id="main">
    <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>Hero Dashboard</h2>
              </div>
                            {{-- <a href="{{ url('add-hero') }}" class="btn btn-primary">Add Hero </a> --}}
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                               <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description 1</th>
                                    <th>Description 2</th>
                                    <th>Update</th>
                                    {{-- <th>Delete</th> --}}
                                </tr>

                               </thead>
                               <tbody>
                                @foreach ($hero as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->Title }}</td>
                                    <td>{{ $item->description_1 }}</td>
                                    <td>{{ $item->description_2 }}</td>
                                  
                                    <td>
                                        <a href="{{ url('edit-hero/'.$item->id) }}" class="btn btn-primary btn-sm">Update</a>
                                    </td>  
                                    {{-- <td>
                                        <form action="{{ url('destroy-hero/'.$item->id) }}" method="POST">
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return deleteNotify()">Delete</button>
                                            @csrf
                              </form>
                                    </td> --}}
                                </tr>
                                    
                                @endforeach
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
    </main>




    @endsection