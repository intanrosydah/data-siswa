<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Siswa</h3>
                        </div>    
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="datatable">
                                <thead>
                                <tr>
                                    <th> Nama </th>
                                    <th> NISN </th>
                                    <th> Sekolah </th>
                                    <th> TTL </th>
                                    <th> Alamat </th>
                                    <th> No.Telp </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paginateData as $paginateData)
                                    <tr>
                                        <td>{{ $paginateData->Nama}}</td>
                                        <td>{{ $paginateData->NISN}}</td>
                                        <td>{{ $paginateData->Sekolah}}</td>
                                        <td>{{ $paginateData->TTL}}</td>
                                        <td>{{ $paginateData->Alamat}}</td>
                                        <td>{{ $paginateData->No.Telp}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>