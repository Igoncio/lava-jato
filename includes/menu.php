<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cadastro_perfil</title>
  <link rel="stylesheet" href="estilo_perfil.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https/cdnjs.cloudflare.comlibs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/css/menu.css">
  <link rel="stylesheet" href="../assets/js/menu.js">

</head>

<body>

  <section class="main-menu">

    <div class="container-menu">

      <a href="#" class="toggleBox-menu">
        <span class="icon-menu"></span>
      </a>

      



      <ul class="navItems-menu">

        <li class="li-menu">
          <a href="main_home.php" class="link-menu">
            <i class="bi bi-house-door" style="--i:2"></i>
          </a>
        </li>


        <li class="li-menu">
          <a href="main_cadastrar_cliente.php" class="link-menu">
            <i class="bi bi-person" style="--i:3"></i>
          </a>
        </li>


        <li class="li-menu">
          <a href="main_cadastrar_lavagem.php" class="link-menu">
            <i class="bi bi-water"></i>
          </a>
        </li>

      </ul>
    </div>
  </section>

  <script>
    var toggleClick = document.querySelector(".toggleBox-menu");
    var container = document.querySelector(".container-menu");
    toggleClick.addEventListener("click", () => {
      toggleClick.classList.toggle("active");
      container.classList.toggle("active");
      submenu.classList.remove('active');

    })

  </script>
</body>

</html>