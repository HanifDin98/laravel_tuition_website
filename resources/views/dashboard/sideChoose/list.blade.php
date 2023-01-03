@extends('dashboard.index')

@section('container')

<main id="main">
    <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">
                <div class="section-title">
                    <h2>Why Choose Us</h2>
                  </div> 
                            <a href="{{ url('add-choose') }}" class="btn btn-primary">Add Point</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                               <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Point</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>

                               </thead>
                               <tbody>
                                @foreach ($choose as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->point }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/chooses/'.$item->point_image) }}" width="70px" height="70px" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ url('edit-choose/'.$item->id) }}" class="btn btn-primary btn-sm">Update</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('delete-choose/'.$item->id) }}" onclick="return deleteNotify()" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
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