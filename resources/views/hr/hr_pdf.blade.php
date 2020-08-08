<!DOCTYPE html>
<html>
<head>
    <title>Laravel PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<style type="text/css">
    table tr td,
    table tr th{
        font-size: 9pt;
    }
</style>
<center>
    <h5>Laporan Hr.</h5>
</center>

<table class='table table-bordered'>
    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenishr</th>
        <th>Tanggal</th>
        <th>Nominal</th>
        <th>Keterangan</th>
    </tr>
    </thead>
    <tbody>
    @php $i=1 @endphp
    @foreach($Hr as $data)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->jenishr}}</td>
            <td>{{$data->tgl}}</td>
            <td>{{$data->nominal}}</td>
            <td>{{$data->keterangan}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
