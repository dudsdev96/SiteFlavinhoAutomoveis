/* Função em Javascript que seleciona todos os componentes HTML 
que tem a classe .navbar-links e joga em um objeto chamado NavbarLinks, 
que é fabricado pelo método construtor (criado). 

Na linha abaixo é puxada uma função classList com o método toggle 
das listas de elementos HTML que estão já dentro do objeto navbarLinks
e o toggle faz com que esses elementos dentro de um menu
sejam ativados e desativados através da classe CSS active mantendo o flexbox */

function toggleMenu() {
    const navbarLinks = document.querySelector('.navbar-links');
    navbarLinks.classList.toggle('active'); //Adiciona ou remove a classe 'active'
}

function configurarTelefone() {
    const link = document.getElementById('telefone-link');
    const telefone = '+5564996777969'; 

    if (window.innerWidth <= 768) { //Define o limite de tamanho de tela em px para versão mobile
        link.setAttribute('href', 'tel:${telefone}');
    }
    else {
        link.setAttribute('href', 'javascript:void(0)');
    }
}

//Configura o link <a> e seus tamanhos no carregamento da página
configurarTelefone();

//Atualiza o link quando a janela é redimensionada
window.addEventListener('resize', configurarTelefone);

// Funcionalidade do Carrosel para Navegar entre as imagens

const track = document.querySelector('.carousel-track');
const images = Array.from(track.children);
const nextButton = document.querySelector('.carousel-btn.next');
const prevButton = document.querySelector('.carousel-btn.prev');

let currentIndex = 0;

const updateCarousel = () => {
    const imageWidth = images[0].getBoundingClientRect().width;
    track.style.transform = 'translateX(-${currentIndex * imageWidth}px)';
};

nextButton.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % images.length; //Loop para a primeira imagem
    updateCarousel();
});

prevButton.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length; //Loop para a última imagem
    updateCarousel();
});

window.addEventListener('resize', updateCarousel); //Ajusta se a janela for redimensionada

