@extends('dashboard.index')

@section('container')
<main id="main">
  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Edit Form</h2>
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <div  class="info">
        <form action={{ url('/forms/'.$form->id) }} method="POST">
          @csrf
          <div class="row">
            <div class="form-group col-md-6">
              <label for="fname"> Name:</label><br>
              <input type="text" id="name" name="name" value="{{ $form->name }}" placeholder="" class="form-control">
            </div>
          </div>

          <label for="lname">Email:</label><br>
          <input type="text" id="email" name="email" value="{{ $form->email }}" placeholder="Insert Price"><br><br>
          <label>IC</label><br>
          <input type="text" id="ic_number" name="ic_number" value="{{ $form->ic_number }}" placeholder="Insert Price"><br><br>
          <label>Phone</label><br>
          <input type="text" id="phone_number" name="phone_number" value="{{ $form->phone_number }}" placeholder="Insert Price"><br><br>
          <label>Gender</label><br>
          <select class="form-control" id="gender" value="{{ $form->gender }}" name="gender">
            <option value="Male" {{($form->gender ==='Male') ? 'selected' : ''}}> Male </option>
            <option value="Female" {{($form->gender ==='Female') ? 'selected' : ''}}> Female </option>
        </select>
        <div class="col form-group">
          <label>Package</label>
          <select id="inputState" name="package_id" class="form-control">
          @foreach ($packages as $package)
          {{-- {{($form->gender ==='Male') ? 'selected' : ''}} --}}
          <option value="{{ $package->id }}" >{{ $package->title }}</option>
          @endforeach
          </select>
                </div>

                <label for="lname">Status Payment:</label><br>
                <input type="text" id="status" name="status" value="{{ $form->status }}" placeholder="Insert status"><br><br>
            

                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="fname"> Address:</label><br>
                    <input type="text" id="address" name="address" value="{{ $form->address }}" placeholder="" class="form-control">
                  </div>
                </div>
        
          <div>
            <div class="sm:col-span-6 pt-5">
              <label for="subjects" class="block text-sm font-medium text-gray-700">Subjects</label>
              <div class="mt-1">
                <select name="subjects[]" id="subjects" class="form-multiselect block w-full mt-1"
                multiple>
                @foreach ($subjects as $item)
                <option value="{{ $item->id }}" @selected($form->subjects->contains($item)) >{{ $item->title }}</option>                    
                @endforeach
                </select>
                
              </div>
            </div>
            
          </div>
        {{-- <label for="fname">Package:</label><br>
        <input type="text" id="{{ $form->package->id}}" name="package_id" value="{{ $form->package->title}}"><b --}}
          
        {{-- <div class="row">
          <div class="col form-group">
    <label>Core Subject 1</label>
    <select id="subjects" name="subjects" class="form-control">
        @foreach ($subjects as $subject)
        @if ($subject->type =="Teras")
        <option value="{{ $subject->id }}">{{ $subject->title }}</option>
        @endif
        @endforeach
    </select>
          </div>

          <div class="col form-group">
    <label>Core Subject 2</label>
    <select id="subjects2" name="subjects2" class="form-control">
        @foreach ($subjects as $subject2)
        @if ($subject2->type =="Teras")
        <option value="{{ $subject2->id }}">{{ $subject2->title }}</option>
        @endif
        @endforeach
    </select>
          </div>


          <div class="col form-group">
            <label>Elective Subject </label>
            <select id="subjects3" name="subjects3" class="form-control">
                @foreach ($subjects as $subject3)
                @if ($subject3->type =="Sains")
                <option value="{{ $subject3->id }}">{{ $subject3->title }}</option>
                @endif
                @endforeach
            </select>
                  </div>
          




        </div> --}}
        <br><div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
       
        </form></div></div>
        

    
    </section><!-- End Contact Section -->
  </main>
  






@endsection