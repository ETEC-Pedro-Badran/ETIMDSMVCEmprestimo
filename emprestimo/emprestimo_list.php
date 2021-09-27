<div id='controles'>
<a href="?op=i" type="button" class="btn btn-outline-secondary">Incluir</a>
</div>    
<table class='table'> 
 <tr> 
     <th></th>
     <th >Objeto</th>  
     <th >Está com</th>  
     <th >Data Emprestimo</th>  
     <th >Data Devolução</th>  
     <th >Telefone</th>  
 </tr>  
 <?php
    foreach($emprestimos as $emprestimo) {
        echo "<tr>".
             "<td> <a href='?id=".$emprestimo->__get('id')."'>Alterar</a></td>".
             "<td>".$emprestimo->__get('descricao')."</td>"
             ."<td>".$emprestimo->__get('estacom')."</td>"
             ."<td>".$emprestimo->__get('dtaemprestimo')."</td>"
             ."<td>".$emprestimo->__get('dtadevolucao')."</td>"
             ."<td>".$emprestimo->__get('telefone')."</td>"
             ."</tr>";

    }
 ?>
</table>    
