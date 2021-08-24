<?php 
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  ?>
<html lang="pt-bt">
  <head>
      <meta charset="utf-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  </head>    
   
  <?php require_once("emprestimo_controller.php");
    
  ?>
  
  <body>

      <?php include_once '../cabecalho.php'; ?>
       
      <div class="container">
      <h1>Objetos emprestados</h1>

      <?php 
        if ($op=='i') {
         include_once 'emprestimo_form.php';
        } else {
         include_once 'emprestimo_list.php';
        }
      
      ?>


      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      
  </body>    

</html>