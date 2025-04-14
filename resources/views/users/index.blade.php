@extends('layouts.app')
@section('content')
<div class="container-fluid mt-4">
    <div class="d-flex justify-content-center  mb-3">
        <h2 class="head1">Student Application Form</h2><br>
    </div>
    <div class="d-flex mb-3">

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" id="btn1">
            ADD
        </button>
{{--
        <button type="button" class="btn btn-primary" id="btn3" style="display: none;">
            Table
        </button>

        <button type="button" class="btn btn-primary" id="btn2">
            BIN
        </button>
        <button type="button" class="btn btn-primary" id="btn4" style="display: none;">
            Delete
        </button>
        <button type="button" class="btn btn-primary" id="btn5">
            Delete
        </button>
        <button type="button" class="btn btn-primary" id="btn6" style="display: none;">
            Restore
        </button> --}}

    </div>
{{-- <form action="{{route('Users.store')}}" method="post">
    @csrf
    <div>
        <textarea name="first_name" class="form-control" id="rock" rows="3"></textarea>
    </div>
    <div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </div>
</form> --}}


<div class="table-responsive">
<table class="table table-bordered table-hover border-1 border-dark  table-dark table-striped">
    <thead>
        <tr>
            <th>Sr.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Photo</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $index => $user)
        {{-- {{ dd($user)}} --}}
            <tr>
                <td>{{ ($users->currentPage() - 1) * $users->perPage() + $loop->iteration }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td><img src="{{ asset('images/' . $user->photo) }}" width="60" height="60"></td>
                <td>
                    <a href="{{ route('Users.edit', $user->id) }}"
                        class="btn btn-primary btn-sm">Edit</a>

                    {{-- <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
                        Edit
                    </button> --}}
                    <form action="{{ route('Users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('{{$user->id}}:Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
{{ $users->links() }}
</div>
<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Student Aplication Form</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>


            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{route('Users.store')}}" name="myform" method="post" enctype="multipart/form-data" id="form1">
                    @csrf
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name"><br>

                    <label for="last_name">Last Name:</label>
                    <input type="text" id="last_name" name="last_name"><br>
                    <label for="username">username:</label>
                    <input type="text" id="username" name="username"><br>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password"><br>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" pattern="[a-z0-9_%+-]+@[a-z0-9-]+\.[a-z]{2,}$"><br>

                    <label for="image">Upload Image:</label>
                    <input type="file" id="image" name="image" accept="image/*"><br>

                    <input type="submit" class="btn btn-success" value="Create User">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                </form>
            </div>
        </div>
    </div>
</div>



@endsection
