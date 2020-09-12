@extends('layouts.dashboard')
@section('content')

    <!-- Topbar -->
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">

        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>
                    @if(auth()->user()->role=='admin'||auth()->user()->role=='staff')
                    <a type="button" class="btn btn-sm btn-primary" href="{{route('hr.create')}}">Tambah Data</a>
                    @endif
                </div>
                <div class="table-responsive p-3">
                    <form class="mb-3" action="{{route('cari')}}" method="GET">
                        <input type="text" name="cari" placeholder="" value="{{ old('cari') }}">
                        <input type="submit" value="CARI" class="btn btn-primaty btn-sm m-1"><br>
                        <a href="{{route('pdf',['filter'=>$filter])}}" class="btn btn-primary" target="blank">CETAK PDF</a>
                    </form>

                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                        <tr>
                            <th>@sortablelink('No')</th>
                            <th>@sortablelink('Nama')</th>
                            <th>@sortablelink('Jenishr')</th>
                            <th>@sortablelink('Tanggal')</th>
                            <th>@sortablelink('Nominal')</th>
                            <th>@sortablelink('Keterangan')</th>
                            @if(auth()->user()->role=='admin'||auth()->user()->role=='staff')
                            <th>Action</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $hr as $index => $data)
                            <tr>
                                <td>{{ $index + $hr -> firstitem()}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->jenishr}}</td>
                                <td>{{$data->tgl}}</td>
                                <td>{{$data->nominal}}</td>
                                <td>{{$data->keterangan}}</td>
                                <!-- Large modal -->
                                @if(auth()->user()->role=='admin'||auth()->user()->role=='staff')
                                <td>
                                    <a type="button" class="btn btn-sm btn-primary" href="{{route('hr.edit',[$data ?? ''->id])}}">Edit</a>
                                    <a type="button" class="btn btn-sm btn-primary" href="{{route('hr.destroy',[$data ?? ''->id])}}">Hapus</a>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div> {!! $hr->appends(\Request::except('page'))->render() !!}</div>
{{--                    <div class="-align-center">{{ $hr ?? ''->links() }}</div>--}}
                </div>
            </div>
        </div>
    </div>
    <!--Row-->
    <!---Container Fluid-->
    </div>

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
            <span>copyright &copy; 2020 - developed by
              <b><a href="#" target="_blank">-</a></b>
            </span>
            </div>
        </div>
    </footer>
    <!-- Footer -->
    </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable(); // ID From dataTable
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>

    </body>
@endsection
