<?php 
   class MisClases{
		var $link;
		var $result;
		#funcion que conecta con el servidor
		function conectar(){      
            

            
            
           		$host	= "localhost";
			$user	= "cristoes";
			$pass	= "5k7YLp3q9i";
			$bd	= "cristoes_conquistando";	
            
			if (!($this->link=mysql_connect($host,$user,$pass))){
				echo "Error conectando a la base de datos.";
				exit();
			}
			if (!mysql_select_db($bd,$this->link)){
				echo "Error seleccionando la base de datos.";
				exit();
			}
			return $this->link;
		}
		#funcion que ejecuta las sentencias sql
		function sentencias($sql){
			$this->result=mysql_query($sql, $this->link);
			return $this->result;
		}
		#funcion que obtiene los campos en la bd
		function row($row){
			$this->result=mysql_fetch_array($row);
			return $this->result;
		}
		#funcion que cierra la conexion
		function desconectar($bd){
			mysql_close($bd);
		}
   }
   
   
?>