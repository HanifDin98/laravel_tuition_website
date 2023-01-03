@extends('dashboard.index')

@section('container')

<main id="main">
    <!-- ======= About Section ======= -->
      <section id="about" class="about">
      <div class="container">
          <div class="section-title">
            <h2>Register Student</h2>
          </div>
          <a href="/exportView"  class="btn btn-primary">Export Data</a><br><br>
          @include('register.table')
      </div>
      </section>
    </main>

    @endsection