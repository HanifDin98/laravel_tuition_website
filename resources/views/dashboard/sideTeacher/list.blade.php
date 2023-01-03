@extends('dashboard.index')

@section('container')

<main id="main">
    <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>List of Teacher</h2>
              </div>
                            <a href="{{ url('add-teacher') }}" class="btn btn-primary">Add Teacher</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                               <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Subject Teach</th>
                                    <th>Photo</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>

                               </thead>
                               <tbody>
                                @foreach ($teacher as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->subject_teach }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/teachers/'.$item->profile_image) }}" width="70px" height="70px" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ url('edit-teacher/'.$item->id) }}" class="btn btn-primary btn-sm">Update</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('delete-teacher/'.$item->id) }}" onclick="return deleteNotify()" class="btn btn-danger btn-sm">Delete</a>
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