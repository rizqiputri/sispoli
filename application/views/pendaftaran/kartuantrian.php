<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $pageTitle; ?></title>
<style>
body {
  background: rgb(204,204,204);
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  /* box-shadow: 0 0 0.5cm rgba(0,0,0,0.5); */
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
.kotak{
  float: left;
  margin-left: 20px;
  margin-right: 20px;
  border: 1px solid black;
  height: 5em;
  width: 8em;
}
.kotak-tengah{
  float: left;
  margin-left: 20px;
  margin-right: 20px;
  border: 1px solid black;
  height: 5em;
  width: 11em;
}
.box-kotak-isi{
  float: left;
  margin-left: 20px;
  margin-right: 20px;
  height: 5em;
  width: 8em;

}
.box-kotak-isi-tengah{
  float: left;
  margin-left: 20px;
  margin-right: 20px;
  height: 5em;
  width: 11em;
}
.kotak-isi{
  text-align: center;
}
.head-judul{
  text-align: center;
  text-transform: uppercase;
  font-size: 18px;
}
.alamat{
  float: left;
  margin-bottom: unset;
}
.left{
  margin-left: 16em;
}
hr{
border: 1px double;
margin-top: 3em;
width: 34.8em;
}
.sub-head{
  margin-top: 17px;
  font-size: 18px;
  text-align: center;
}
.right{
  margin-left: 7em;
    display: inline;
}
.kanan, .kanan-sub{
  float: right;
}
.kanan-sub{
  position: relative;
  bottom: 0em;
  left: 6em;
}
.kiri{
  margin-top: unset;
}
.ttd{
  margin-top: unset;
  margin-left: 4em;
}
.bigfont{
  font-size: 100px;
  justify-content: center;
}
@media print{
  body, page {
   margin: 0;
   box-shadow: 0;
 }
}
</style>
  </head>
  <body>
    <page size="A5">
         <div class="box-body">
          <center>
            <img class="responsive-img" style="width: 550px;" src="<?php echo base_url('assets/template/dist/img/kopdaftar.jpg'); ?>" class="img-circle" alt="User Image">
          </center>
        <H4><center><u>NOMER ANTRIAN POLI</u></center></H4>
         <table>
          <tr>
            <td>NIK</td><td>:</td><td><?= $pendaftaran->nik; ?></td>
          </tr>
          <tr>
            <td>Nama</td><td>:</td><td><?= $pendaftaran->nama; ?></td>
          </tr>
          <tr>
            <td>POLI</td><td>:</td><td><b><?= $pendaftaran->poli; ?></b></td>
         </tr>
         <tr>
            <td>Nomor Urut</td><td>:</td>

            <td ><h1 class="bigfont"><?= $pendaftaran->urutan; ?></h1></td>
         </tr>

        </table>

        <P>Kartu pendaftaran pasien ini sebagai tanda bahwa pasien telah melakukan pendaftaran poli</p>


      </div>
    </div>
    </page>
  </body>
  <script type="text/javascript">
    window.print();
  </script>
</html>
