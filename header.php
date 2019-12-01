<?
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153503940-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-153503940-1');
  </script>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>Dream PET</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="vendors/linericon/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <script src="ajax/preenche.js"></script>
  <script src="https://www.paypal.com/sdk/js?client-id=AYJDDzK6t9E8bJ2Fjd3MR_P4isKtohuM0KwoIaDT0N_0Y57-QcrHJcqeSvdTo6wpmRsbsrGPQpkUapwq&currency=BRL"></script>
  <script>
  paypal.Buttons({

    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: 10.00
          }
        }]
      });
    },
      onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        alert('Pagamento aprovado!');
      });
    }
  }).render('#paypal-button-container');

  function redirect_submit(value){
    window.location.href = "https://dreampet.herokuapp.com/category.php?b="+value;
  }
</script>
</head>

<body>
<header class="header_area">
  <div class="main_menu">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light w-100">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand logo_h" href="./">
          <img src="img/logo.jpeg" style="width: 150px;" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
          <div class="row w-100 mr-0">
            <div class="col-lg-7 pr-0">
              <ul class="nav navbar-nav center_nav pull-right">
                <li class="nav-item active">
                  <a class="nav-link" href="./">Início</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="category.php">Produtos</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Box</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="#box_supresa">Surpresa</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#box_presonalizado">Personalizado</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contato</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-5 pr-0">
              <ul class="nav navbar-nav navbar-right right_nav pull-right">
                <li class="nav-item">
                    <input name="busca" id="busca" type="text">
                    <a onclick="redirect_submit(document.getElementById('busca').value);" class="icons">
                      <i class="ti-search" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="cart.php" class="icons">
                    <i class="ti-shopping-cart"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="login.php" class="icons">
                    <i class="ti-user" aria-hidden="true"></i>
                  </a>
                  <?if($_SESSION['id']){ echo $_SESSION['nome']; }?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>
