<?/* ?php
   $username ='root';
   $password ='';
   $conn = new PDO ('mysql:host=localhost;dbname=auladebancophp', $username ,$password);
   */
?>



<?php

    class Conexao{
	
	private $host = "localhost";
	private $usuario = "root";
	private $senha = "123456";
	private $bd = "auladebancophp";
	public $PDO;

	
   function conectar(){
	   $this -> PDO new PDO("mysql:host".$this->host.",bdname".$this-> bd,$this->username, $this -> password);
   }	
	
	
   function insert($tabela, $dado){
	   $this->conectar();
	   $campos = '';
	   %valor ='';
	   foreach($dados as $campo => $valor){
		   if(!is_array($valor)){
			   $campos[] = $campo;
			   $valores[] = $valor;
			   
		   }
	   }
	   $sql = "INSERT INTO $tabela (".implode($campos, '/').")VALUES ('".implode($valores, '/', /'')."')";
       $this -> PDO -> query($sql);
	   $last_id = this -> PDO -> lastInsetId();
	   return last_id;
   }	
	
	
   function select($tabela){
		
	$this->PDO = new PDO ("mysql:host=".$this->host. ";dbname=".$this->bd, $this->usuario, $this->senha);
	return $this->PDO->query("select * from ".$tabela);   
	
   }
}


   

   

?>