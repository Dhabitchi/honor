@extends('layouts.dashboard')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Daftar User's</div>

                    <div class="card-body">
                        @foreach($usr as $data)
                            <ul class="list-group">
                                <li class="list-group-item">
{{--                                    {{$loop->iteration}}--}}
                                    {{$data->name}}
                                </li>
{{--                                <li type="button" class="btn btn-sm btn-primary" href="{{route('user.edit',[$data->id])}}">Sunting</li>--}}
                            </ul>
                            <td>
                                <a type="button" class="btn btn-sm btn-primary" href="{{route('u.edit',[$data->id])}}">Sunting</a>
                            </td>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
