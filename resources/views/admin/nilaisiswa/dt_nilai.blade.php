@extends('index')
@section('content')

<section class="content">
	@if(session('sukses'))
<div class="callout callout-info">
    <p>{{session('sukses')}}</p>
  </div>
  @endif

  <div class="panel panel-primary">
      <div class="panel-heading"><center>NILAI SISWA SMA NEGERI 6 SOLOK SELATAN TELAH DISESUAIKAN</center></div>
        <div class="panel-body">					
          <div class="md-form"> 
            <div class="box-header">
              <h3 class="box-title">SMA NEGERI 6 SOLOK SELATAN</h3>
              <p>KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN REPUBLIK INDONESIA</p>

              <p><a href="{{url('/admin/nilaisiswa/tmbh_pelajaran')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah Data</a> <span>
                  <a href="##" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Print Data</a> </span>  <span> 
                  <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i> Refresh Halaman</a> </span></p>
              <hr class="panel panel-primary"> </p></div>
              <!-- /.box-header -->

        <div class="col-xs">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>kelas</th>
                  <th><center>Opsi Anda</center></th>
                </tr>
                <?php
                	$no=1;
                ?>
                @foreach($tb_nilai as $tb)
                </thead>
                <tbody>
                <tr>
                <td>{{$no++}}</td>
                  <td>{{$tb->nis}}</td>
                  <td>{{$tb->nama_siswa}}</td>
                  <td><center>{{$tb->kelas_walas}}</center></td>
                  <td><center>
                  <a href="/admin/nilaisiswa/dt_nilai/edit/{{$tb->nama_walas}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Print Data</a> <span>
                      <a href="/admin/nilaisiswa/edit_nilai/{{$tb->id_walas}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Detail</a> <span>
                      <a href="/admin/nilaisiswa/dt_nilai/delete/{{$tb->nama_walas}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus </a> </span>
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

  