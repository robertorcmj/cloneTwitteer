<?php 

class db
{
	//host
	private $host = 'localhost';

	//usuario
	private $usuario = 'root';

	//senha
	private $senha = '';

	//banco de dados
	private $database = 'twitter_clone';

	public function conecta_mysql()
	{
		// criando a conexão
		$con = mysqli_connect($this->host, $this ->usuario, $this ->senha , $this->database);

		//ajustar o charset de comunicação entre a aplicação e o bd.
		mysqli_set_charset($con, 'utf8');

		//verificando erro na conexão
		if (mysqli_connect_errno()) 
		{
			echo 'erro ao tentar se concectar com o BD Mysql'. mysqli_connect_error();
		}

		return $con;
	}
}

 ?>