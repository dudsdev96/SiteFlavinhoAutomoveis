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

