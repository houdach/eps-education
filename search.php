<?php
include 'dbh.php'  
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link rel="stylesheet" href="../public/css/style.css">

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<style>

  body {
  
  font-family: sans-serif;
  background: rgb(240,240,247);
background: linear-gradient(90deg, rgba(240,240,247,0.9192051820728291) 26%, rgba(238,245,240,1) 54%, rgba(60,61,61,0.7567401960784313) 94%);
}

  .bg-primary {

    background-color: #e60000!important;
    background: rgba(0,0,0,0.7);
    border :4px;
    border-color: #000000;

  }

  :root {

  
    --bs-gray-dark: #343a40!important;

  }


  .btn-primary.focus, .btn-primary:focus {

    color: #fff;

    background-color: #d21e2b;

    border-color: #d21e2b9c;

    box-shadow: 0 0 0 0.2rem rgb(210 30 43 / 32%);
    border-radius: 10px;

  }

  .btn-primary {

    color: #fff;

    background-color: #d21e2b;

    border-color: #d21e2b;
    border-radius: 10px;

  }

  .btn-primary:hover {

    color: #ff4d4d;

    background-color: #9e1b25;

    border-color: #9e1b25;
    border-radius: 10px;

  }

  primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {

    color: #fff;

    background-color: #9e1b25;

    border-color: #9e1b25;
    border-radius: 10px;

  }

  .card-title {

    margin-bottom: .75rem;

    color: #ffffff;


}
.card {
  width: 90%;
  height: 90%;
  max-height: 300px;
  padding: auto;
  text-align: center;
  background: rgba(0,0,0,0.7);
  border-radius: 10px;
  color: #fff;
  box-shadow: 0 15px 25px rgba(0,0,0,0.5);
  border-radius: 10px;
  outline: #cc0000;
  border-left: 6px solid;
  border-right: 4px;
  border-color : #ff0000;
 
}  
.card::before {
  content:'';
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: rgba(255,255,255, 0.08);
  transform: skewX(-26deg);
  transform-origin: bottom left;
  border-radius: 10px;
  pointer-events: none;
  
}
.btn {
  border-radius: 10px;
  width: 100%
}

.DIRECTION {
    font-weight: bold;
    color: #ff0000;
    border-left: 5px solid;
    padding-left: 10px;
    font-size: 15pt

}
.text-center {
  font-weight: bold;

}
.text-align {
  text-align: left;
}
.h1 {
  color: #ff0000;
}
::-webkit-input-placeholder {
  color: #bbb;
  opacity: 1;
}

:-moz-placeholder { /* Firefox 18- */
  color: #bbb;
  opacity: 1;
}

::-moz-placeholder {  /* Firefox 19+ */
  color: #bbb;
  opacity: 1;
}

:-ms-input-placeholder {  
  color: #bbb;
  opacity: 1;
}
input{
  padding:0;
  border-radius: 0;
  border: none;
  font-size: 20px;
  color: #bbb;
  background:none;
  letter-spacing: 1px;
  word-spacing: 10px;
  font-family: 'Arvo', sans-serif;
  padding: 0;
  line-height: 25px;
}
#searchBox{
  padding-top: 2vh;
  padding-left: 2vh;
  padding-bottom: 2vh;
  outline: 4px;
}
.form{
  padding: 10px 0;
  padding-right: 15px;
  border: 3px solid #E35865;
  
}

.form.col-xs-12{
  padding-left: 2;
}
button{
  background: none;
  border: none;
  padding-left: 0vh;

}


</style>


  
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

  <a class="navbar-brand" href="#">EPS Education Rapports</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item">

        <a class="nav-link" href="/">Accueil</a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="create.php">Nouveau rapport</a>

      </li>

    </ul>

  </div>


</nav>

<div class=" text-center container" id="searchBox">
<form action="search.php" method="POST">
        <input  class="form col-xs-12 " type="text" name="search" placeholder="search" >
    <button type="submit" name="submit-search"><img src="https://img.icons8.com/material-sharp/50/fa314a/search.png"/></button>
      </form>
      
</div>



<div class="row row-cols-2 row-cols-md-4 g-4" >
  <?php 
  if (isset($_POST['submit-search'])) {
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $sql = "SELECT * FROM rapports WHERE  agence LIKE '%$search%' OR date_1 LIKE '%$search%' OR respo LIKE '%$search%'";
    $results = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($results);
    
?>

    
    <hr/>
    <?php   echo "<h5 class='text-center'> ".$queryResult." rapports trouv??s</h5><hr>" ;
   ?>
    <hr/>
    <?php 
    
    if ($queryResult > 0 ) {
      while ($rapports = mysqli_fetch_assoc($results)){

$paimentprevu1   = $rapports['ch_4_m'];
$paimentprevu2   = $rapports['ch_2_m'];
$paimentcourant1 = $rapports['ch_1_m'];
$paimentcourant2 = $rapports['ch_3_m'];
$Totaldespaimentsprevus  = $paimentprevu1   + $paimentprevu2;
$Totaldespaimentscourant = $paimentcourant1 + $paimentcourant2;
$Totaldespaiments = $Totaldespaimentsprevus + $Totaldespaimentscourant;

 
?>

    <br></br>
<div class="col">
    <div class="card">
      <div class="card-body">
      <h5 class='card-title'>Rapport de <?= $rapports['date_1'] ?> ?? <?= $rapports['date_2']?> </h5>

      <p class='card-text DIRECTION'><?=$rapports['agence'] ; ?></p>

      <h6 class='text-align ' >Paim. Pr??vu : <b><?= $Totaldespaimentsprevus; ?></b> MAD</h6>

      <h6 class='text-align '>Paim. Courants : <b><?= $Totaldespaimentscourant; ?></b> MAD</h6>


      <a href="show.php?id=<?=$rapports['id']?>" style='width:100%;' class="btn btn-sm btn-light"><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-file-earmark-bar-graph-fill' viewBox='0 0 16 16'>

      <path d='M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm.5 10v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1z'/>

    </svg>
<i class="fa fa-th-list"> </i>Details </a>


      <a href="edit.php?id=<?=$rapports['id']?>"style="width:100%;" class="btn btn-sm btn-dark"><i class="fa fa-edit"></i> Modifier</a>

      <a href="#" style='width:100%;' class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-<?= $rapports['id'] ?>"><i class="fa fa-trash"></i>Supprimer</a>
       </div>
    </div>
</div>

      <?php  } 

    } else {
      echo " aucun rapport trouv??";
    }

  }
?>
   
  
</div>