<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
<body>
    <h1><p align="center"><b> PENDATAAN SISWA </b></p></H1>
</body>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">
		<title>table</title>
	</head>
    <div class="container">
			<div class="card">
				<div class="card-body">
				<table id="table" class="table table-striped table-bordered" style="width:100%">
        <body>
        <thead>
            <tr>
            <tr>
                                    <th> Nama </th>
                                    <th> NISN </th>
                                    <th> Sekolah </th>
                                    <th> TTL </th>
                                    <th> Alamat </th>
                                    <th> No.Telp </th>
									<th>Aksi</th>
                                </tr>
                
            </tr>
        </thead>
        <tbody>
           
        @foreach ($paginateData as $paginateData)
                                    <tr>
                                        <td>{{ $paginateData->nama}}</td>
                                        <td>{{ $paginateData->NISN}}</td>
                                        <td>{{ $paginateData->sekolah}}</td>
                                        <td>{{ $paginateData->tempat_tanggal_lahir}}</td>
                                        <td>{{ $paginateData->alamat}}</td>
                                        <td>{{ $paginateData->no_telp}}</td>
										<td>{{ $paginateData->Aksi}}</td>
										<td>
										   <a href="#">Edit</a>
										</td>
                                    </tr>
                                    @endforeach
        </tbody>

    </table>
				</div>
			</div>
		</div>

        <!-- <div class="container mt-0">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-body row">
                    <div class="col-4">
                </div>
		<table>	
		  <tbody>
			<tr> 
				<td>
				<label for='' class="font-weight-bold" >NAMA</label>
                <input type="text" class="form-control" name="no_order"  placeholder="">
				</td>
			</tr>
			<tr> 
				<td>
				<label for='' class="font-weight-bold">Alamat Lengkap anda</label>
                <input type="text" class="form-control" name="no_order"  placeholder="">
				</td>
			</tr>
			<tr> 
				<td>
				<label for='' class="font-weight-bold"> Kota</label>
                <input type="text" class="form-control" name="no_order"  placeholder="">
				</td>
			</tr>
			<tr height="50"> 
				<td>
				<label for='' class="font-weight-bold"> Wilayah/Provinsi</label>
                <input type="text" class="form-control" name="no_order"  placeholder="">
				</td>
			</tr>

			<tr> 
				<td>
				<label for='' class="font-weight-bold"> No. whatsapp anda</label>
                <input type="text" class="form-control" name="no_order"  placeholder="">
				</td>
			</tr>
			</tr>
			<br \><br \>
			<br \>
        </div></div>

		  </thead>
					</div>
				</div>
			</div>
	
	 -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 
	
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js"></script>

	<script>
		$(document).ready(function() {
			$('#table').DataTable();
		} );
	</script>
</body>
</html>