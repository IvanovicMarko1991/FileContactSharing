 @extends('layouts.app')
 @section('content')

<h1 class="text-center">Files List</h1>
{{$files->links()}}
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Shared With</th>
            <th>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFile">
                    Add File
                </button>
            </th>


        </tr>
    </thead>
    <tbody>
        @if(count($files) > 0) @foreach($files as $file)
        <tr>

            <th>{{$file->id}}</th>
            <td>{{$file->name}}</td>
            <td>{{$file->shared_with}}</td>

            <td>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#{{$file->id}}">
                    Share with
                </button>
            </td>


            @include('modal-files.share') 
            @include('modal-files.add')



        </tr>


        @endforeach


    </tbody>

    @else

    <p>No files</p>



    @endif
</table>
</div>















@endsection