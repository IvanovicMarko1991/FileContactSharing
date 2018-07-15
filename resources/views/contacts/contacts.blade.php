@extends('layouts.app') 
@section('content')

<h1 class="text-center">Contacts List</h1>
{{$contacts->links()}}
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>File</th>
            <th>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                    Add Contact
                </button>
            </th>

        </tr>
    </thead>
    <tbody>
        @if(count($contacts) > 0) 
        @foreach($contacts as $contact)
        <tr>
            <th>{{$contact->id}}</th>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->recived_files}}</td>
            <td>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#{{$contact->id}}">
                    Edit
                </button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$contact->id}}delete">
                    Delete
                </button>
            </td>

            @include('modal-contacts.add') 
            @include('modal-contacts.edit') 
         

        </tr>
    @include('modal-contacts.delete')
        @endforeach 
        
  

    </tbody>

</table>



@else
<p>No contacts</p>

@endif
</div>


@endsection