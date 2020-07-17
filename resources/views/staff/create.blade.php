@extends('layouts.dashboard')
@section('content')

    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Add Data
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
            <form method="post" action="{{ route('staff.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="nama_stf">Nama Staff :</label>
                    <input type="text" class="form-control" name="nama_stf"/>
                    <label for="norek">Norek :</label>
                    <input type="text" class="form-control" name="norek">
                </div>
                <button type="submit" class="btn btn-primary">Add Data</button>
            </form>
        </div>
    </div>

@endsection
