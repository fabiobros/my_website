// Lista de palavras para substituição
const palavras = ["Analista", "Músico","Desenvolvedor"];

// Função para trocar a palavra no h2 da seção Sobre mim
function trocarPalavra() {
    const h2 = document.querySelector('.gray-box h2 strong');
    const palavraAtual = h2.textContent.trim();
    let novaPalavra = palavras[Math.floor(Math.random() * palavras.length)];

    // Garante que a nova palavra não seja igual à atual
    while (novaPalavra === palavraAtual) {
        novaPalavra = palavras[Math.floor(Math.random() * palavras.length)];
    }

    h2.innerHTML = `<strong>${novaPalavra}</strong>!`;
}

// Chama a função inicialmente
trocarPalavra();

// Troca a palavra a cada 3 segundos
setInterval(trocarPalavra, 3000);
