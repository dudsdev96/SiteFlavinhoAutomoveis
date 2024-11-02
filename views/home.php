<!DOCTYPE HTML>

<title><?php echo $title; ?></title>

<h1>User <?php echo $user; ?></h1>

<ul> 
    <?php foreach($users as $item) { ?> 
      <li><?php echo $item['email']; ?></li>
      <li><?php echo $item['passwd']; ?></li>
      <?php } ?>
</ul>

<html>
    <head>
          <title> Flavinho Automóveis </title>
    </head>

    <body>
          <h1> Flavinho Automóveis </h1>
          <p> Compre seu carro com segurança, prestamos toda a assessoria 
            de venda e documentação do seu veículo para você realizar o seu sonho
            com tranquilidade!
        </p>
    </body>
</html>