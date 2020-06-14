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
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Nominal</th>
                            <th>Jenis Hr</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                        </thead>
{{--                        <tfoot>--}}
{{--                        <tr>--}}
{{--                            <th>Nama</th>--}}
{{--                            <th>Tanggal</th>--}}
{{--                            <th>Nominal</th>--}}
{{--                            <th>Jenis Hr</th>--}}
{{--                            <th>Keterangan</th>--}}
{{--                        </tr>--}}
{{--                        </tfoot>--}}
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                        </tr>
                        <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <!-- Large modal -->
                            <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah</button></td>

                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        Tambah Table<br>
                                        ...
                                    </div>
                                </div>
                            </div>
                        </tr>
                        </tbody>
                    </table>
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
