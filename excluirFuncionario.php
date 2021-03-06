<?php

session_start();

if($_SESSION['usuario']=="" || $_SESSION['usuario']==null) {
	echo $_SESSION['loginErro'];
	unset($_SESSION['usuario']);
	session_destroy();
	header("Location: index.php");
}
?>

<?php

require "conectaBanco.php";

function filtraEntrada($dado)
{
    $dado = trim($dado);               
    $dado = stripslashes($dado);       
    $dado = htmlspecialchars($dado); 

    return $dado;
}

if (isset($_GET["id"])) 
{
    try 
    {
        $conn = conectaAoMySQL();

        $id = filtraEntrada($_GET["id"]);
        $sql = "
            update Funcionarios
            set statusFuncionario = 'I' 
			WHERE id = $id 
		";

        if (!$conn->query($sql))
            throw new Exception("Falha na remocao: " . $conn->error);

        header("Location: listarFuncionario.php");
    } 
    catch (Exception $e) 
    {
        echo "Nao foi possivel excluir o cliente: ", $e->getMessage();
    }
}

?>



