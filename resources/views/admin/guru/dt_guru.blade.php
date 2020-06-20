@extends('index')
@section('content')

<section class="content">
	@if(session('sukses'))
<div class="callout callout-info">
    <p>{{session('sukses')}}</p>
  </div>
  @endif

  <div class="panel panel-primary">
      <div class="panel-heading"><center>SEMUA NAMA GURU SMA NEGERI 6 SOLOK SELATAN TELAH DISESUAIKAN</center></div>
        <div class="panel-body">
          <div class="md-form">
            <div class="box-header">
              <h3 class="box-title">SMA NEGERI 6 SOLOK SELATAN</h3>
              <p>KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN REPUBLIK INDONESIA</p>

              <p><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus-circle"></i> Tambah Data</a> <span>
                  <a href="{{url('laporanguru')}}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Print Data</a> </span>  <span>
                  <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i> Refresh Halaman</a> </span></p>
              <hr class="panel panel-primary"> </p></div>
              <!-- /.box-header -->

        <div class="col-xs">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
                  <th>Nomor Induk Pengajar</th>
                  <th>Nama Guru</th>
                  <th>JK</th>
                  <th>No Telp</th>
                  <th>Status</th>
                  <th><center>Opsi Anda</center></th>
                </tr>
                <?php
                	$no=1;
                ?>
                @foreach($tb_guru as $tb)
                </thead>
                <tbody>
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$tb->nip}}</td>
                  <td>{{$tb->nama_guru}}</td>
                  <td>{{$tb->jenis_kelamin}}</td>
                  <td>{{$tb->no_telp}}</td>
                  <td>{{$tb->status}}</td>
                  <td><center>
                      <a href="/admin/guru/dt_guru/edit/{{$tb->nip}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit Data</a> <span>
                      <a href="/admin/guru/dt_guru/delete/{{$tb->nip}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus </a> </span>
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
  </section>
</div>
@endsection

  <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <div class="panel panel-primary">
                <div class="panel-heading"><center>TAMBAH DATA GURU SMA NEGERI 6 SOLOK SELATAN</center></div>
              </div>
              <div class="modal-body">
                <form role="form" action="/admin/guru/dt_guru/create" method="POST">
                  {{csrf_field()}}
                <div class="form-group">
                  <label>NIP</label>
                  <input type="text" class="form-control" name="nip" placeholder="Misal : 110022003300440055">
                </div>
                <div class="form-group">
                  <label>Nama Guru</label>
                  <input type="text" class="form-control" name="nama_guru" placeholder="Misal : Prof.Dr.Milda Yenti S.Kom, M.Kom">
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin">
                    <option>---Pilih Jenis Kelamin---</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>No Telp</label>
                  <input type="text" class="form-control" name="no_telp" placeholder="Masukan No Telp">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat_guru" placeholder="Masukan Alamat Lengkap">
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat Lahir">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir">
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                    <option>---Pilih Status---</option>
                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                    <option value="Wakil Sarana Prasarana">Wakil Sarana Prasarana</option>
                    <option value="Wakil Kesiswaan">Wakil Kesiswaan</option>
                    <option value="Wakil Kurikulum">Wakil Kurikulum</option>
                    <option value="Kepala Tata Usaha">Kepala Tata Usaha</option>
                    <option value="Guru Tetap">Guru Tetap</option>
                    <option value="Guru Honor">Guru Honor</option>
                    <option value="Pegawai Pustaka">Pegawai Pustaka</option>
                    <option value="Pegawai Koperasi">Pegawai Koperasi</option>
                    <option value="Satpam">Satpam</option>
                    <option value="Petugas Kebersihan">Petugas Kebersihan</option>
                  </select>
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
