<script type="text/javascript">
var retorno=false;

function enviar(){
		
	//	vazio();

		if(retorno==false){
			document.forms[0].submit();
		}
		//mostraMensagem();

	};



	function vazio(){
		
		var input=document.querySelector("input").value;
		
		var elemento=document.querySelector("input");
		

		//mes();

		if(input==""){
			//mostraMensagem('sombra','mensagem');
			elemento.focus();
		
			retorno=true;
		};

	};

	function administrador(){
		window.location.href='?menu=6';
	};
		
</script>

<?php

	require_once "BootForm.php";
	require_once "models/ConexaoModel.php";
	
	$bootform=new BootForm();
	$db=new Conexao();


	echo "<div style='margin-left:25%;'>";
		echo "<h3>Administrador - Login</h3>";

		$bootform->myForm("formulario","?menu=1","post","formulario","");

			$bootform->bCol("col-sm-6");
				$bootform->myInput("text","usuario","","usuario","","usuario","Usuário:");
				$bootform->myInput("password","senha","","senha","","senha","Senha:");
				$bootform->myIcone("bootstrap/img/ok.png","","","javascript:enviar();","");
		$bootform->enDiv();
		//$bootform->enDiv();
		$bootform->myEndForm();

		$login=strtoupper($_POST['usuario']);
		$senha=$_POST['senha'];

		//echo $login;

		$cripta=md5($senha);


	if(!empty($login)){
		$sql_testa="SELECT * FROM usuarios WHERE id='{$login}' AND senha='{$cripta}'";
		//
		//echo $sql_testa;
	
		$query=$db->query($sql_testa);

		while($campos=$query->fetch_object()){
			
				//start_session();

				//$_SESSION['login']=$login;
				echo "deu certo";
				echo "<script>administrador(); </script>";
		}
}

?>