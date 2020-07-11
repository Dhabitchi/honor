@extends('layouts.dashboard')
@section('content')

    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Sunting
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('user.update', $usr->id ) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" name="name" value="{{ $usr->name }}"/>
                    <label for="email">Email :</label>
                    <input type="text" class="form-control" name="email" value="{{$usr->email}}">
                    <label for="role">Role : user/staff/admin</label>
                    <input type="text" class="form-control" name="role" value="{{$usr->role}}">
                    <label for="password">Password :</label>
                    <input type="text" class="form-control" name="password" value="{{$usr->password}}">
{{--                    <label for="role">Role :</label>--}}
{{--                    <select class="form-control" name="role">--}}
{{--                            <option class="form-control" value="{{'user'}}" name="role">user</option>--}}
{{--                            <option class="form-control" value="{{'staff'}}" name="role">staff</option>--}}
{{--                            <option class="form-control" value="{{'admin'}}" name="role">admin</option>--}}
{{--                    </select><br>--}}
                </div>
                <button type="submit" class="btn btn-primary">Update Data</button>
            </form>
        </div>
    </div>

@endsection
