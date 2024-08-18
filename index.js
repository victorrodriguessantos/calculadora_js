function inserirValor(valor) {
    const painel = document.getElementById('view');
    painel.innerHTML += valor;  // Adiciona o valor clicado ao conteúdo existente
}

function calcularValor() {
    const painel = document.getElementById('view');
    const expressao = painel.innerHTML.replace(/X/g, '*');  // Substitui X por * para multiplicação

    try {
        const resultado = eval(expressao);  // Avalia a expressão
        painel.innerHTML = resultado;  // Exibe o resultado
    } catch (e) {
        painel.innerHTML = "Erro";
    }
}

function deleteView() {
    document.getElementById('view').innerHTML = "";  // Limpa o painel
}

function deleteValor() {
    const painel = document.getElementById('view');
    painel.innerHTML = painel.innerHTML.slice(0, -1);  // Remove o último caractere
}