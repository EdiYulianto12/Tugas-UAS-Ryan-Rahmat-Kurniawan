<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel daftar</title>
   <style type="text/css">
    .color{
      background-color: rgb(107, 229, 210);
    }
  </style>
 <link rel="stylesheet" type="text/css" href="style.css"><meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
footer {
  text-align: center;
 height: 50px;
  background-color: green;
  color: white;
  font-size: 20px;
}
</style>
  </head>
<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="landing/index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
       <li class="nav-item">
       <a class="nav-link" href="Anggota.php">Anggota</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Pustaka.php">Pustaka</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Pustakawan.php">Pustakawan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Transaksi.php">Transaksi</a>
      </li> 
    <li class="nav-item">
        <a class="nav-link" href="About.php">About</a>
      </li> 
    </ul>
  </div>  
</nav>
<br>
  <?php 
$koneksi=new mysqli("localhost","root","","perpustakaan");
$sql="SELECT * FROM `transaksi`";
$q=$koneksi->query($sql);
$rekord=$q->fetch_array();
?>
<br>
  <div class="container">
  <h2> <CENTER>Daftar Transaksi Perpustakaan</h2></CENTER>
            <br>
            <br>  
  <table class="table table-bordered table-striped">
    <thead>
      <tr class="color">
        <th>ID Transaksi Perpustakaan</th>
        <th>Kode Pustaka </th>
        <th>Nomor Anggota </th>
         <th>Kode Pustakawan Yang Meminjam </th>
         <th>Kode Pustakawan Yang Mengembalikan </th>
         <th>Tanggal Pinjam </th>
          <th>Tanggal Kembali </th>
    
      </tr>
    </thead>
    <tbody><?php do { ?>
      <tr>
        <td><?php echo $rekord['idtransaksi'];?></td>
        <td><?php echo $rekord['kodepustaka'];?></td>
        <td><?php echo $rekord['nomoranggota'];?></td>
        <td><?php echo $rekord['kodepustakawanpinjam'];?></td>
        <td><?php echo $rekord['kodepustakawankembali'];?></td>
        <td><?php echo $rekord['tanggalpinjam'];?></td>
        <td><?php echo $rekord['tanggalkembali'];?></td>
      </tr><?php } while($rekord =$q->fetch_array());?>
    </tbody>
  </table>
</div>
<br>
<br>
  <br>  
  <br>  
  <br>  
  <br>
   <br>  
  <br>  
  <br>  
  <br> 
  <br>  
  <br>  
  <br>   
<footer>
  <p>@2021 | Safan Masera Buana Paksi</p><br>
 
</footer>



</body>
</html>
