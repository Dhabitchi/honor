@extends('layouts.dashboard')
@section('content')

    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Corona Virus Data
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
            <form method="post" action="{{ route('hr.update', $hr->id ) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="nama">Tanggal :</label>
                    <input type="date" class="form-control" name="tgl" value="{{ $hr->tgl }}"/>
                    <label for="nama">Nominal :</label>
                    <input type="text" class="form-control" name="nominal" value="{{ $hr->nominal }}"/>
                    <label for="nama">Keterangan :</label>
                    <input type="text" class="form-control" name="keterangan" value="{{ $hr->keterangan }}"/>
                </div>
                <button type="submit" class="btn btn-primary">Update Data</button>
            </form>
        </div>
    </div>

@endsection
