<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- IMPORTAR CSS --> 
    <link rel="stylesheet" href="public/css/style.css">

    <!-- IMPORTAR  Kit de ícones-->
    <script src="https://kit.fontawesome.com/7142231196.js" crossorigin="anonymous"></script>
    
    <title>Flavinho Automóveis</title>
</head>

<body>

  <header>
      <!-- Logomarca --> 
    <div class="div-logo">
        <a href="#">
            <img src="public/images/logopreto.png" alt="Logo"> 
        </a>

        <div class="botao-whatsapp">
           <a href="https://wa.me/5564996777969" target="_blank">
                <img src="public/images/iconewhatsapp.png" alt="WhatsApp"> 
          </a>
          Whatsapp
       </div>
       
       <div class="botao-ligar">
            <a href="tel+5564996777969">
                Ligar
            </a>
       </div>

    </div>

     
      
      
    <nav class="navbar">
        <!-- Links da Navbar--> 
        <ul class="navbar-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#financiamento">Financiamento</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#servicos">Serviços</a></li>
        </ul>

        <!-- Toggle para Mobile --> 
        <div class="navbar-toggle" onclick="toggleMenu()">
         <span></span>
         <span></span>
         <span></span>
         <span></span>
        </div>
    </nav>

        <h1>Flavinho Automóveis, a sua parceira no ramo de veículos!</h1>

  </header>

    <main>
        <p>Nossa História: </p>




    </main>

    <footer>

        <p>Endereço: Rua Goiás n° , Bairro Santa Inês - Itumbiara-GO 
        Fone: (64) 9
        </p>

    </footer>

    <script src="public/javascript/script.js"></script>
</body>
</html>









<!--
/*
require_once __DIR__ .'/core/Core.php';
require_once __DIR__ .'/router/routes.php';

spl_autoload_register(function($file)
{
    if (file_exists(__DIR__."/utils/$file.php"))
    {
        require_once __DIR__."/utils/$file.php";
    }
    else if (file_exists(__DIR__."/models/$file.php"))
    {
        require_once __DIR__."/models/$file.php";
    }
});

$core = new Core();
$core->run($routes);
*/
-->





