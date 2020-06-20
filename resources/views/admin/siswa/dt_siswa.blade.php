@extends('index')
@section('content')

<section class="content">
	@if(session('sukses'))
<div class="callout callout-info">
    <p>{{session('sukses')}}</p>
  </div>
  @endif
 
  <div class="panel panel-primary">
      <div class="panel-heading"><center>SEMUA NAMA-NAMA SISWA SMA NEGERI 6 SOLOK SELATAN TELAH DISESUAIKAN</center></div>
        <div class="panel-body">					
          <div class="md-form"> 
            <div class="box-header">
              <h3 class="box-title">SMA NEGERI 6 SOLOK SELATAN</h3>
              <p>KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN REPUBLIK INDONESIA</p>

              <p><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus-circle"></i> Tambah Data</a> <span>
                  <a href="{{url('laporansiswa')}}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Print Data</a> </span>  <span> 
                  <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i> Refresh Halaman</a> </span></p>
            <hr class="panel panel-primary"> </p></div>
            <!-- /.box-header -->

        <div class="col-xs">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NIS (Nomor Induk Siswa)</th>
                  <th>Nama Siswa</th>
                  <th>JK</th>
                  <th>Status</th>
                  <th>Tahun Daftar</th>
                  <th><center>Opsi Anda</center></th>
                </tr>
                <?php
                	$no=1;
                ?>
                @foreach($tb_siswa as $tb)
                </thead>
                <tbody>
                <tr>
                <td>{{$no++}}</td>
                  <td>{{$tb->nis}}</td>
                  <td>{{$tb->nama_siswa}}</td>
                  <td>{{$tb->jenis_kelamin}}</td>
                  <td>{{$tb->status_siswa}}</td>
                  <td>{{$tb->tahun_daftar}}</td>
                  <td><center>
                      <a href="/admin/siswa/dt_siswa/edit/{{$tb->nis}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit Data </a> <span>
                      <a href="/admin/siswa/dt_siswa/delete/{{$tb->nis}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus </a> </span>
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
                <div class="panel-heading"><center>TAMBAH DATA SISWA SMA NEGERI 6 SOLOK SELATAN</center></div>
              </div>
              <div class="modal-body">
                <form role="form" action="/admin/siswa/dt_siswa/create" method="POST">
                  {{csrf_field()}}
                <div class="form-group">
                  <label for="exampleInputPassword1">NIS</label>
                  <input type="text" class="form-control" name="nis" id="exampleInputPassword1" placeholder="Misal : 110022003300440055">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Siswa</label>
                  <input type="text" class="form-control" name="nama_siswa" id="exampleInputPassword1" placeholder="Misal : Milda Yenti">
                </div><div class="form-group">
                  <label for="exampleInputPassword1">Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir" id="exampleInputPassword1" placeholder="Masukan Tempat Lahir">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" class="form-control" name="alamat_siswa" id="exampleInputPassword1" placeholder="Masukan Alamat Lengkap">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin">
                    <option>---Pilih Jenis Kelamin---</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No Handphone</label>
                  <input type="text" class="form-control" name="no_hp" id="exampleInputPassword1" placeholder="Masukan No Telp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Status</label>
                  <select class="form-control" name="status_siswa">
                    <option>---Pilih Status---</option>
                    <option value="Aktif">Aktif</option>
                    <option value="Alumni">Alumni</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tahun Daftar</label>
                  <input type="text" class="form-control" name="tahun_daftar" id="exampleInputPassword1" placeholder="Masukan Tahun Daftar">
                </div>

<hr class="panel panel-primary"> </p>
<?php 
$koneksi = mysqli_connect("localhost","root","","sman6solsel");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?> 
        <div class="form-group">
        <label>Wali Kelas</label>
        <select class="form-control" name="j"> 
        <option selected value="">--- Pilih Wali Kelas ---</option>     
        <?php 
        $sql55=mysqli_query($koneksi, "select * from tbl_walas order by kelas_walas ASC");
        while ($data55=mysqli_fetch_array($sql55)) {
        ?>
            <option value="<?php echo $data55['id']; ?>"> <?php echo $data55['nama_walas']; ?> | <?php echo $data55['kelas_walas']; ?> </option>
        <?php 
        }
        ?>
        </select>
         </div>
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