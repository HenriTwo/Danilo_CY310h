<?php 
// VARIAVEIS DE AMBIENTE
$servidor ='localhost';
$banco_de_dados = 'produtos';
$usuario = 'root';
$senha = '';

// CRIA CONEXÃO COM BANCO DE DADOS
$mysqli = new mysqli($servidor, $usuario, $senha);

// VERIFICA A CONEXÃO
if ($mysqli -> error){
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
// verificar se existe o banco de dados
// $banco_de_dados_existe = $mysqli->select_db($banco_de_dados);

$sql_check_db = "SHOW DATABASES LIKE '$banco_de_dados'";
$resultado = $mysqli->query($sql_check_db);

if($resultado->num_rows == 0){
    $sql_codigo = "CREATE DATABASE $banco_de_dados";
    if($mysqli->query($sql_codigo) === TRUE){
        echo 'Banco criado com sucesso';
    }
    else{
        die("Erro ao criar ao banco de dados" . $mysqli->error);
    }
}
else{
    // echo "<span class='invisivel'>Banco de dados já existente</span>";
}


// SE CONECTA AO BANCO DE DADOS RECEM CRIADO
$mysqli->select_db($banco_de_dados);

// CRIANDO TABELAS
$tabelas = [
    "produtos" => "
        CREATE TABLE produtos(
            id INT AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(100) NOT NULL,
            marca VARCHAR(50) NOT NULL,
            quantidade INT NOT NULL
        )
    ",
    "usuarios" => "
        CREATE TABLE usuarios(
            id INT AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(100) NOT NULL,
            senha VARCHAR(10) NOT NULL
        ) 
    "
];

foreach($tabelas as $nome => $sql){
    $sql_check_table = "SHOW TABLES LIKE '$nome'";
    $resultado = $mysqli->query($sql_check_table);

    if ($resultado->num_rows == 0){
        if ($mysqli ->query($sql) === TRUE){
            echo "Tabela '$nome' criada com sucesso!";
        }
        else{
            echo "erro ao criar tabela '$nome': " . $mysqli->error . "\n";
        }
    }else{
        // echo "<span class='invisivel'>Tabela '$nome' já existe</span>";
    }

}



// FECHA A CONEXÃO
// $mysqli->close();

?>