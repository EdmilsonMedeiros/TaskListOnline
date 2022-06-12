<?php 
        include("scripts/show_task.php");
        while($_dados = mysqli_fetch_assoc($_querySelectTarefas)){
          echo "<tr><td>" . $_dados['dataTarefa']  . "</td>"; 
          echo "<td>" . $_dados['titulo']      . "</td>";
          echo "<td>" . $_dados['conteudo']    . "</td></tr>";
      }
      ?>