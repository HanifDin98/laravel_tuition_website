@extends('dashboard.index')

@section('container')

<main id="main">
    <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>Portfolio</h2>
              </div>
                            <a href="{{ url('add-portfolio') }}" class="btn btn-primary">Add Portfolio</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                               <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>

                               </thead>
                               <tbody>
                                @foreach ($portfolio as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/portfolios/'.$item->portfolio_image) }}" width="70px" height="70px" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ url('edit-portfolio/'.$item->id) }}" class="btn btn-primary btn-sm">Update</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('delete-portfolio/'.$item->id) }}" onclick="return deleteNotify()" class="btn btn-danger btn-sm">Delete</a>
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