<?php

if (isset($_POST["submit"])) {
    include_once("config.php");

    $nome = $_POST['name'];
    $email = $_POST['email'];
    $idade = $_POST['age'];
    $genero = $_POST['genero'];
    $funcoes = $_POST['funcoes'];
    $favorita = $_POST['mostLike'];
    $comentario = $_POST['comment'];

    $dados = mysqli_query($conexao, "INSERT INTO dbForm(nome,email,idade,genero,funcoes,mostLike,comment) VALUES ('$nome', '$email', '$idade', '$genero', '$funcoes', '$favorita', '$comentario')");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/6327/6327290.png">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <header class="header">
            <h1 id="title" class="text-center">Formulário de pesquisa</h1>
            <p id="description" class="description text-center">Obrigado por disponibilizar seu tempo!</p>
        </header>

        <form id="survey-form" action="form.php" method="post">
            <div class="form-parts">
                <label id="name-label" for="name">Nome</label>
                <input type="text" id="name" class="form-button" name="name" placeholder="Digite seu nome" required>
            </div>
            <div class="form-parts">
                <label id="email-label" for="email">Email</label>
                <input id="email" type="email" class="form-button" name="email" placeholder="Digite seu email aqui"
                    required>
            </div>
            <div class="form-parts">
                <label id="number-label" for="number">Idade</label>
                <input id="number" type="number" class="form-button" name="age" min="10" max="99" placeholder="Idade">
            </div>
            <div class="form-parts">
                <p>Gênero</p>
                <select id="dropdown" name="genero" class="form-button" required>
                    <option disabled selected value>Selecionar gênero</option>
                    <option value="feminino">Feminino</option>
                    <option value="masculino">Masculino</option>
                    <option value="indefinido">Indefinido</option>
                    <option value="outro">Outro</option>
                </select>
            </div>
            <div class="form-parts">
                <p>Qual opção melhor descreve sua função atual?</p>
                <select id="dropdown" name="funcoes" class="form-button" required>
                    <option disabled selected value>Selecionar função atual</option>
                    <option value="student">Estudando</option>
                    <option value="job">Trabalhando</option>
                    <option value="learner">Aprendendo</option>
                    <option value="indefined">Sem definição</option>
                    <option value="other">Outros</option>
                </select>
            </div>

            <div class="form-parts">
                <p>Qual sua área favorita de estudo como programador FullStack?</p>

                <select id="most-like" name="mostLike" class="form-button" required>
                    <option disabled selected value>Selecione uma opção</option>
                    <option value="challenges">Front-end</option>
                    <option value="projects">Back-end</option>
                    <option value="community">Banco de dados</option>
                    <option value="openSource">Design gráfico e UX/UI</option>
                    <option value="other">Outras</option>
                </select>
            </div>
            <div class="form-parts">
                <p>O que você gostaria de aprender?</p>
                <textarea id="comments" name="comment" class="input-textarea"
                    placeholder="Digite seu comentário aqui..."></textarea>
            </div>
            <div class="form-parts">
                <button type="submit" id="submit" name="submit" class="submit-button">Enviar</button>
            </div>
        </form>
    </div>
</body>

</html>