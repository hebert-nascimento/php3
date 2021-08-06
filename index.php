<html>
  <head><title>PHP3</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <meta charset="utf-8">
<head>
<body>

     <?php
	    include('Conexao.php');
     /*$username ='root';
     $password ='';
	 $conn = new PDO ('mysql:host=localhost;dbname=auladebancophp', $username ,$password);*/
	 $data = $conn -> query('SELECT * FROM formulario');
	 
	 ?>

<table class="table"><thead>	
  <tr>
      <td>CÓDIGO</td>
      <td>NOME</td>
	  <td>VILÃO</td>
  </tr></thead>
	  <?php
	    foreach($data as $row){
			echo '<tr>';
			  echo'<td>'.$row['Codigo'].'</td>';
		      echo'<td>'.$row['Nome'].'</td>';
		      echo'<td>'.$row['Vilao'].'</td>';
			  echo'<td><a type="button" href="Deletar.php?Codigo='.$row['Codigo'].'" class="btn btn-danger"> Deletar</a>
			  <a type="button" href="Editar.php?Codigo='.$row['Codigo'].'" class="btn btn-info"> Editar</a></td>';
			echo '</tr>';
		}
	  ?>
</table>



<form>
Nome:
    <input type="text" name="nome"></input><br><br>
Vilão:
    <input type="text" name="vilao"></input><br><br>
	
	
	<input type="submit" value="Enviar"></input>
</form>
	
	<?php
	
	if($_GET){
	
	$data = $conn -> query("INSERT INTO formulario (nome,vilao) VALUES ('".$_GET['nome']."', '".$_GET['vilao']."')");
	}
		?>
	
	
	<!--
<form action="/action_page.php">
  <select name="cars" size="4" multiple>
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
  </select> <br><br>
 
  
  
  <form action="/action_page.php">
  <textarea name="message" style="width:200px; height:200px;"></textarea>
  <br><br>

<input type="submit"><br>
</form>

-->



</body>
</html>