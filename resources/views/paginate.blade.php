
@extends('master')

@section('styles')
<!-- DataTables -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Data Siswa</h1>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

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
                        <!-- <div class="card-body table-responsive p-0"> -->
                            <table id="table" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                
                                    <th> Nama </th>
                                    <th> NISN </th>
                                    <th> Sekolah </th>
                                    <th> TTL </th>
                                    <th> Alamat </th>
                                    <th> No.Telp </th>
                                    <th> Aksi </th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paginateData as $paginate)
                                    <tr>
                                        <td>{{ $paginate->nama}}</td>
                                        <td>{{ $paginate->NISN}}</td>
                                        <td>{{ $paginate->sekolah}}</td>
                                        <td>{{ $paginate->tempat_tanggal_lahir}}</td>
                                        <td>{{ $paginate->alamat}}</td>
                                        <td>{{ $paginate->no_telp}}</td>
                                        <td>
                                        
                                        <a type="submit" class="btn btn-success" href="{{ url('edit',$paginate->id) }}">Edit</a> 
                                        
                                        <form action ="/delete/{{$paginate->id }}" method="post" class="d-inline">
                                         <!-- {{-- @method('delete') --}} -->
                                         @csrf
                                         <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
										</td>
                                        
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
    @endsection

@section('script')
<!-- DataTables -->
<script src="{{url('AdminLTE/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{url('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script> 
    $ ( function () {
        $('#datatable').DataTable();
    })
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js"></script>
    <script>
		$(document).ready(function() {
			$('#table').DataTable();
		} );
	</script>
@endsection
</body>
</html>

