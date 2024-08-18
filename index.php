<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora JS</title>
</head>
<body>
    <div class="container-form">

        <div class="painel" id="view">

        </div>

        <button onclick="deleteView()"> CE </button>
        <button onclick="deleteValor()"> DEL </button>
        <button onclick="calcularValor()" class="igual"> = </button>

        <button onclick="inserirValor('9')"> 9 </button>
        <button onclick="inserirValor('8')"> 8 </button>
        <button onclick="inserirValor('7')"> 7 </button>
        <button onclick="inserirValor('/')"> / </button>

        <button onclick="inserirValor('6')"> 6 </button>
        <button onclick="inserirValor('5')"> 5 </button>
        <button onclick="inserirValor('4')"> 4 </button>
        <button onclick="inserirValor('X')"> X </button>

        <button onclick="inserirValor('3')"> 3 </button>
        <button onclick="inserirValor('2')"> 2 </button>
        <button onclick="inserirValor('1')"> 1 </button>
        <button onclick="inserirValor('-')"> - </button>

        <button onclick="inserirValor(' ')">   </button>
        <button onclick="inserirValor('0')"> 0 </button>
        <button onclick="inserirValor(' ')">   </button>
        <button onclick="inserirValor('+')"> + </button>
</div>

<script src="index.js"></script>
    
</body>
</html>