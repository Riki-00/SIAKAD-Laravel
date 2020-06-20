@extends('index')
@section('content')

<section class="content">
	@if(session('sukses'))
<div class="callout callout-info">
    <p>{{session('sukses')}}</p>
  </div>
  @endif

  <div class="panel panel-primary">
      <div class="panel-heading"><center>SEMUA DATA USERS SMA NEGERI 6 SOLOK SELATAN TELAH DISESUAIKAN</center></div>
        <div class="panel-body">					
          <div class="md-form"> 
            <div class="box-header">
              <h3 class="box-title">SMA NEGERI 6 SOLOK SELATAN</h3>
              <p>KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN REPUBLIK INDONESIA</p>

              <p><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus-circle"></i> Tambah Data</a> <span>
                  <a href="{{url('export-pdf')}}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Print Data</a> </span>  <span> 
                  <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i> Refresh Halaman</a> </span></p>
              <hr class="panel panel-primary"> </p></div>
              <!-- /.box-header -->

        <div class="col-xs">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Nama Lengkap</th>
                  <th>Jenis User</th>
                  <th><center>Opsi Anda</center></th>
                </tr>
                <?php
                	$no=1;
                ?>
                @foreach($tb_users as $tb)
                </thead>
                <tbody>
                <tr>
                <td>{{$no++}}</td>
                  <td>{{$tb->username}}</td>
                  <td>{{$tb->nama_lengkap}}</td>
                  <td>{{$tb->level}}</td>
                  <td><center>
                      <a href="/admin/walkes/wl_kelas/edit/{{$tb->nama_walas}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit Data</a> <span>
                      <a href="/admin/walkes/wl_kelas/delete/{{$tb->nama_walas}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus </a> </span>
                	</td></center>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->
        </div>  
</div></div>
  </section>
  @endsection

  <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <div class="panel panel-primary">
                <div class="panel-heading"><center>TAMBAH DATA WALI KELAS SMA NEGERI 6 SOLOK SELATAN</center></div>
              </div>
              <div class="modal-body">
                <form role="form" action="/admin/walkes/wl_kelas/create" method="POST">
                  {{csrf_field()}}
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Wali kelas</label>
                  <input type="text" class="form-control" name="nama_walas" id="exampleInputPassword1" placeholder="Misal : Prof.Dr.Milda Yenti S.Kom, M.Kom">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kelas</label>
                  <input type="text" class="form-control" name="kelas_walas" id="exampleInputPassword1" placeholder="Misal : X, XI, XII">
                </div>
            
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="Submit" class="btn btn-primary">Tambah Data</button>
              </div>
            </div>
            </form>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        </div>