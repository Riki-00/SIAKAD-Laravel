<style>
#table{
   width:100%;
   font-size:12px;
   /* padding: 7px 17px; */
   border-collapse: collapse;
}
/* thead{
  font-weight:bold;
}
p{
  margin:none;
  font-size:12;
}
th{
  font-weight:bold;
  text-align: -intenal-center;

} */
#table, td, th{
  /* display:table-cell; */
  /* vertical-align: inherit; */
  border: 1px solid #000;
  /* padding: 8px 20px; */
}

#table2{
  /* border: 0px; */
}
#table2{
  /* display:table-cell; */
  /* vertical-align: inherit; */
  border: 0px;
  /* padding: 8px 20px; */
}
#td{
  border: 0px;
}
#th{
  border: 0px;
}
</style>

          <table class="table2" id="table2" border="0">
                <!-- <td><img src="http://localhost:8000/assets/dist/img/avatar.png" width="70" height="90"></td> -->
                <tr id="th">
                    <td id="td"><img src="{{('img/sumbar.png')}}" width="70" height="90"></td>
                <td id="td"><center>
                    <font size="4">PEMERINTAH PROVINSI SUMATERA BARAT</font><br>
                    <font size="4">DINAS PENDIDIKAN</font><br>
                    <font size="4">SMA NEGERI 6 SOLOK SELATAN</font><br>
                    <font size="2"><i>Jln. Raya Padang Aro - Muara Labuh Km. 5 | Kode Pos : 27778 | Email : sman6solsel@gmail.com</i></font>
                </td></center>
                    <td id="td"><img src="{{('img/LogoSMA.jpg')}}" width="70" height="90"></td>
                </tr>
                <center><p class="line-height: 1">MATA PELAJARAN SMA NEGERI 6 SOLOK SELATAN TAHUN 
                <?php 
                echo date('Y');
                ?>
                </p></center>
                <hr>
          </table>

<div>
            <div>
              <table class="table" id="table" border="0" align="center">
                <thead>
                <tr>
                  <th>No</th>
                  <th>NIP (Nomor Induk Pengajar)</th>
                  <th>Nama Guru</th>
                  <th>Mata Pelajaran</th>
                  <th>Kelas</th>
                </tr>
                <?php
                	$no=1;
                ?>
                @foreach($tb_pelajaran as $tb)
                </thead>
                <tbody>
                <tr>
                  <td><center>{{$no++}}</center></td>
                  <td>{{$tb->nip}}</td>
                  <td>{{$tb->nama_guru}}</td>
                  <td>{{$tb->mata_pelajaran}}</td>
                  <td><center>{{$tb->cakupan}}</center></td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->

        	
<!-- konten sebelumnya -->
<!-- <div>
	<div style="text-align:right;"><br/> 
		Sungai Lambai,
      <?php 
        echo date('d F Y');
      ?>
		<br/>KEPALA SEKOLAH<br/><br/><br/>
		<p>Syamsuria, S.Pd. MM<br/>NIP. 19680702199201006</p>
	</div>
	<div style="clear:both"></div>
</div> -->
<!-- konten selanjutnya -->
<br/>
<table class="table2" id="table2" border="0">
    <tr id="th">
        <td id="td"></td>
        <td id="td">Mengetahui, <br/> Kepala Sekolah <br/><br/><br/><br/>
        Syamsuria, S.Pd. MM <br/>
        NIP. 19680702199201006</td> 

        <td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td>
        <td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td>
        <td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td>        
        <td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td>
        <td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td>
        <td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td>
        <td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td>
        <td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td>
        <td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td>
        <td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td>
        <td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td><td id="td"></td>        

        <td id="td">Sungai Lambai, 
        <?php 
            echo date('d F Y');
        ?>
        <br/>Wakil Kurikulum <br/><br/><br/><br/>
        Helda Hayani, S.Pd <br/>
        NIP. 197410312006042001
        </td>
    </tr>
</table>

