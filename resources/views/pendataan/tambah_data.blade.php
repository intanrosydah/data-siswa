@extends('master')

<div class="container mt-5">
				<div class="card shadow p-3 mb-5 bg-body rounded">
					<div class="card-body row">
					    
						<!-- <div class="col-4"> -->
						</div>
		<table class="table">
		 
		  <tbody>
			
		  </tbody>
		  <div class="btn-group" role="group" aria-label="Basic mixed styles example"><br><br>
		</table>
	

			<table>	
		  <tbody>
			<tr height="50" width="20%">
			  <td><h3><p align="left"><b>DATA SISWA</b></td></p></h3>
			  <td width=""></td>
			</tr> <br>
			 
		<form method="POST" action="/store">
			@csrf
			
			
			<tr> 
				<td>
				<label for='' class="font-weight-bold" >NAMA</label>
                <input type="text" class="form-control" name="nama"  placeholder="">
				</td>
                
			</tr>
				
			<tr height="50"> 
				<td>
				<label for='' class="font-weight-bold"> TTL </label>
                <input type="text" class="form-control" name="tempat_tanggal_lahir"  placeholder="">
				</td>
				
			</tr>

			<tr> 
				<td>
				<label for='' class="font-weight-bold"> Alamat</label>
                <input type="text" class="form-control" name="alamat"  placeholder="">
				</td>
				
			</tr>
			<tr> 
				<td>
				<label for='' class="font-weight-bold"> Sekolah</label>
                <input type="text" class="form-control" name="sekolah"  placeholder="">
				</td>
				
			</tr>

			<tr> 
				<td>
				<label for='' class="font-weight-bold">NISN</label>
                <input type="text" class="form-control" name="NISN"  placeholder="">
				</td>
			</tr>
			
			   <tr> 
				<td>
				<label for='' class="font-weight-bold"> No.Telp</label>
                <input type="text" class="form-control" name="no_telp"  placeholder="">
				</td>
				
			</tr>
			<tr> 
			<tr height="100">
				<td>
				<label for='' class="font-weight-bold"></label>
                <button class="btn btn-primary" type="submit">SIMPAN</button>
				</td>
			</tr>	
			</tr>
            <tr>
			<!-- <tr height="100"> -->
			<!-- <td><a href="/paginate" class="btn btn-primary">Tambah Data</a></td> -->
			
		</form>
		  </thead>
		    
					</div>
				</div>
			</div> 
