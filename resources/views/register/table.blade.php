<table>
            
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Phone Number</th>
      <th>Ic Number</th>
      <th>Address</th>
      <th>Subject</th>
      <th>Package</th>
      <th>Price</th>
      <th>Status</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>
    @foreach ($forms as $form)
    {{-- ($forms as $form) --}}
    

    <tr>
      <td>{{ $form->name }}</td>
      <td>{{ $form->email }}</td>
      <td>{{ $form->gender }}</td>
      <td>{{ $form->phone_number }}</td>
      <td>{{ $form->ic_number }}</td>
      <td align="right">{{ $form->address }}</td>
      
      
      <td>
          <ul>
            @foreach ($form->subjects as $subject)
            <li>{{ $subject->title }}</li>
            @endforeach
            
              
             
          </ul>  
      </td>

      <td>
        {{ $form->package->title}}
        
        {{-- package --}}
        
      </td>
      <td>
        {{ $form->package->price }}
      </td>
      <td>{{ $form->status }}</td>
      <td><a class="btn btn-primary" href="{{ url('/forms/'.$form->id) }}" role="button">Update</a></td>
      <td>
          {{-- <a href="{{ url('/forms/'.$form->id) }}">Update</a> --}}
          
          
          {{-- <a href="{{ url('/packages/'.$package->id) }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a> --}}
                        <form action="{{ url('/forms/'.$form->id) }}" onclick="return deleteNotify()" method="POST" class="p-2 ml-2 rounded-md bg-red-500 text-white">
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                                        @csrf
          </form>
      </td>

     
    </tr>
    @endforeach

    
  </table>