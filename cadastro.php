<!--================Header Menu Area =================-->
  <? include("header.php"); 
  include("./includes/inicializa.php");
  ?>
    <!--================Header Menu Area =================-->
    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center" style="background: #1497e5;">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2 style="color: white;">Login</h2>
            </div>
            <div class="page_link">
              <a href="./" style="color: white;">Início</a>
              <a href="checkout.php" style="color: white;">Login</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Checkout Area =================-->
    <section>
      <div class="container" style="margin: 5%;">
        <div class="billing_details">
          <div class="row">
            <div class="col-lg-12">
              <h3></h3>
              <form class="row contact_form" action="./" method="post" novalidate="novalidate">
                <div class="col-md-12 form-group p_star">
                  Nome Completo<input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="col-md-12 form-group p_star">
                  Email<input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="col-md-12 form-group p_star">
                  Senha<input type="text" class="form-control" id="senha" name="senha" onkeyup="preencheCampo('valida_senha', this.value, 'validar');">
                </div>
                <div class="col-md-12 form-group p_star">
                  Confirmar Senha<input type="text" class="form-control" id="conf_senha" name="conf_senha" onkeyup="preencheCampo('valida_senha', this.value, 'validar');">
                </div>
                <input type="submit" name="logar" class="main_btn" value="Entrar" style="margin: auto;">
                <div class="col-md-12 form-group p_star">
                  <a href="./cadastro.php">Cadastrar-se</a> 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Checkout Area =================-->

    <!--================ start footer Area  =================-->
   <? include("footer.php"); 

   if($_POST['logar']){
    if(isset($_POST['email']) && isset($_POST['senha'])){
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      /*Faz query verifica se esta cadastradado*/
      if(1 == 2){
        /*AUTENTICA*/
        output_message("Cadastro Realizado com Sucesso");
      }else{
        output_message("");
      }
    }else{
      output_message("Faltou informar algum campo!");
    }
   }
   ?>
