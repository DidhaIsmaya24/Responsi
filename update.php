<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kerajinan Tangan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
      background-image:url("images/h1.jpg"); 
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">

  <div class="container text-center">
    <h1>Kerajinan Tangan</h1>      
    <p></p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"polo
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Kerajinan</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="koleksi.php">Produk</a></li>
   
      </ul>

    
  </div>
</div>
      </ul>
    </div>
  </div>
</nav>
<?php

  include("koneksi.php") ;
  $no = $_GET['nama'] ;
  
  $sql_select_barang = "SELECT  * FROM `barang` WHERE `no`='{$no}'" ;
  
  $query_select_barang = mysqli_query($konek,$sql_select_barang) ;
  
  $row_barang = mysqli_fetch_assoc($query_select_barang) ;
?>
<h2>Update Data Barang </h2>
    <div class="container">
        <form action="update_proses.php" method="post">
          <div class="form-group">
            <label for="text">Nama:</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $row_barang['nama'] ?>" readonly="readonly">
          </div>
          <div class="form-group">
            <label for="text">CP :</label>
            <input type="text" class="form-control" name="cp" value="<?php echo $row_barang['cp'] ?>">
          </div>
          <div class="form-group">
            <label for="text">Bahan  :</label>
            <input type="text" class="form-control" name="bahan" value="<?php echo $row_barang['bahan'] ?>">
          </div>

          <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>
        </div>


<footer class="container-fluid text-center">
  <p>&copy by ME</p>  
 
</footer>

</body>
</html>
