<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      .searchbar{
        margin-top:25px;
        margin-left:200px;
        widht:100%;
      .bar{
        border-radius:0;
        padding: 10px;
        border:0px;
        outline:none;
        border-top: 1px solid #ccc;
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
      }
      }
    </style>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
    <form class="d-flex">
      <a class="form-control me-2"> Daftar Anggota </a>
      <button class="btn btn-primary" type="submit">Login</button>
    </form>
  </div>
</nav>
<div class="container">
  <div class="row">
  <img src="https://elibrary.bsi.ac.id/assets/perpustakaan.png" alt=" No image" class="rounded float-start" width="50px">
   <div class="col-md-12 col-xs-12">
    <div class="searchbar">
       <div class="form-group">
       <input class="bar form-control" type="search" placeholder="Search" aria-label="Search" style="width:500px; height:44px; outline:none;">
      <button class="btn btn-outline-success" type="submit">Cari Buku</button>
       </div>
    </div>
   </div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>