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
            <form method="post" action="{{ route('hr.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="nama" >Nama :</label>
                    <select class="form-control" name="nama">
                    @foreach($stf as $data)
                            <option value="{{$data->nama}}" name="nama">{{$data->nama}}</option>
                    @endforeach
                    </select><br>
                    <label for="nama">Jenis Hr :</label>
                    <select class="form-control" name="jenishr">
                    @foreach($jnshr as $data)
                            <option value="{{$data->nama}}" name="jenishr">{{$data->nama}}</option>
                        @endforeach
                    </select><br>
                    <label for="tgl">Tanggal :</label>
                    <input type="date" class="form-control" name="tgl"/>
                    <label for="nama">Nominal :</label>
                    <input type="text" class="form-control" name="nominal"/>
                    <label for="nama">Keterngan :</label>
                    <input type="text" class="form-control" name="keterangan"/>
                </div>
                <button type="submit" class="btn btn-primary">Add Data</button>
            </form>
        </div>
    </div>

@endsection
