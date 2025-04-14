@extends('layouts.app')
@section('content')
<h2 class="text-center mt-4">User Edit</h2>
                <form action="{{ route('Users.update', $user->id) }}" class="m-3 " method="POST" enctype="multipart/form-data">
                    {{-- {{dd($user->id)}} --}}
                    @csrf
                    @method('PUT')

                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name" value="{{ $user->first_name }}" class="form-control"><br>

                    <label for="last_name">Last Name:</label>
                    <input type="text" id="last_name" name="last_name" value="{{ $user->last_name }}" class="form-control"><br>

                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" value="{{ $user->username }}" class="form-control"><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}" class="form-control"><br>

                    <label for="image">Upload Image:</label>
                    <input type="file" id="image" name="image" class="form-control" >
                    <img src="{{ asset('images/' . $user->photo) }}" width="60" height="60"><br><br>

                    <input type="submit" class="btn btn-success" value="Update User">
                    <a href="{{ route('Users.index') }}" class="btn btn-danger ">close</a>
                </form>


@endsection
