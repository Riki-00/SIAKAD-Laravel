@extends('index')
@section('content')

<section class="content">
	@if(session('sukses'))
<div class="callout callout-info">
    <p>{{session('sukses')}}</p>
  </div>
  @endif

  <div class="panel panel-primary">
      <div class="panel-heading"><center>SEMUA MATA PELAJARAN SMA NEGERI 6 SOLOK SELATAN TELAH DISESUAIKAN</center></div>
        <div class="panel-body">					
          <div class="md-form"> 
            <div class="box-header">
              <h3 class="box-title">SMA NEGERI 6 SOLOK SELATAN</h3>
              <p>KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN REPUBLIK INDONESIA</p>
              <p><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus-circle"></i> Tambah Data</a> <span>
                  <a href="{{url('laporanmatpel')}}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Print Data</a> </span>  <span> 
                  <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i> Refresh Halaman</a> </span></p>
              <hr class="panel panel-primary"> </p></div>
              <!-- /.box-header -->

        <div class="col-xs">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NIP</th>
                  <th>Nama Guru</th>
                  <th>Mata Pelajaran</th>
                  <th><center>Kelas Cakupan</center></th>
                  <th><center>Opsi Anda</center></th>
                </tr>
                <?php
                	$no=1;
                ?>
                @foreach($tb_pelajaran as $tb)
                </thead>
                <tbody>
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$tb->nip}}</td>
                  <td>{{$tb->nama_guru}}</td>
                  <td>{{$tb->mata_pelajaran}}</td>
                  <td><center>{{$tb->cakupan}}</center></td>
                  <td><center>
                      <a href="/admin/pelajaran/mt_pelajaran/edit/{{$tb->mata_pelajaran}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit Data </a> <span>
                      <a href="/admin/pelajaran/mt_pelajaran/delete/{{$tb->mata_pelajaran}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus </a> </span>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">TAMBAH MATA PELAJARAN SMA NEGERI 6 SOLOK SELATAN</h4>
              </div>
              <div class="modal-body">
                <form role="form" action="/admin/pelajaran/mt_pelajaran/create" method="POST">
                  {{csrf_field()}}
                <div class="form-group">
                  <label>Nama Guru</label>
                  <select class="form-control select2" name="id_guru" id="show_nama_guru">
                    <option>---Pilih Guru Mata Pelajaran---</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Mata Pelajaran</label>
                  <input type="text" class="form-control" name="mata_pelajaran" placeholder="Misal : Bahasa Indonesia">
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <input type="text" class="form-control" name="cakupan" placeholder="Misal : X, XI, XII">
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
      