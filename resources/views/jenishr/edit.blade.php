@extends('layouts.dashboard')
@section('content')

    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Jenis Hr.
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
            <form method="post" action="{{ route('jenishr.update', $jnshr->id ) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="nama">Jenis HR:</label>
                    <input type="text" class="form-control" name="nama" value="{{ $jnshr->nama }}"/>
                </div>
                <button type="submit" class="btn btn-primary">Update Data</button>
            </form>
        </div>
    </div>

@endsection
