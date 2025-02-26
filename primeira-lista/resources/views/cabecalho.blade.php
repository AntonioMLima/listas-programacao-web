<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exercícios</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
           
        }

        /* Barra de navegação lateral */
        .sidebar {
            max-height: 100vh;
            color: #fff;
            width: 185px;
            padding-right: 0.7rem;
            margin: 10px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            overflow-y: auto
        }

        

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            margin: 0.75rem 0;
        }

        .sidebar a {
            text-decoration: none;
            color:rgb(0, 0, 0);
            font-size: 0.9rem;
            display: block;
            padding: 0.4rem;
            border-radius: 5px;
            transition: background-color 0.2s , color 0.2s ease;
        }

        .sidebar a:hover {
            background-color: #0d6efd;
            padding: 0.45rem;
            color: #fff;
            transition: background-color 0.2s , color 0.2s ease;

        }

        

       
        

       
    </style>
</head>
<body>
    <!-- Barra de navegação lateral -->
    <div class="sidebar">
        <ul>
            <li><a href="ex1">Exercício 1 - Média Das Notas</a></li>
            <li><a href="ex2">Exercício 2 - Celsius para Fahrenheit</a></li>
            <li><a href="ex3">Exercício 3 - Fahrenheit Para Celsius</a></li>
            <li><a href="ex4">Exercício 4 - Calculo de Área do Retangulo</a></li>
            <li><a href="ex5">Exercício 5 - Calculo de Área do Circulo</a></li>
            <li><a href="ex6">Exercício 6 - Calculo de Perímetro do Retangulo</a></li>
            <li><a href="ex7">Exercício 7 - Calculo do Perímetro do Circulo</a></li>
            <li><a href="ex8">Exercício 8 - Base e Expoente</a></li>
            <li><a href="ex9">Exercício 9 - Metros para Centímetros</a></li>
            <li><a href="ex10">Exercício 10 - Quilômetros para Milhas</a></li>
            <li><a href="ex11">Exercício 11 - Calculo IMC</a></li>
            <li><a href="ex12">Exercício 12 - Calculo Desconto</a></li>
            <li><a href="ex13">Exercício 13 - Calculo Juros Simples</a></li>
            <li><a href="ex14">Exercício 14 - Calculo Montante e Juros Compostos</a></li>
            <li><a href="ex15">Exercício 15 - Dias para Horas, Minutos e Segundos</a></li>
        </ul>
    </div>

    <!-- Conteúdo principal (vazio) -->
    <div class="main-content"></div>
</body>
</html>