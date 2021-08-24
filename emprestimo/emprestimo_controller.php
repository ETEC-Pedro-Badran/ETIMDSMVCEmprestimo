<?php
   require_once '../model/emprestimo.php';

   $emprestimo =  new Emprestimo(0,null,date("d-m-Y H:i:s"),null,null,null);
   $emprestimos = [];
   $op = 'l';
   if (isset($_REQUEST['op'])) { // incluir
      $op = $_REQUEST['op'];

   } else { // listar
      $emprestimos = [
         new Emprestimo(1,
         "Pendrive azul",
         "23/08/2021",
         null,
         'Andrea',
         '16-99992323')
      ];
  }



   
?>