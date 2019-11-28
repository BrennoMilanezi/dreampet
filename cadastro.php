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
              <h2 style="color: white;">Cadastro</h2>
            </div>
            <div class="page_link">
              <a href="./" style="color: white;">Início</a>
              <a href="./cadastro.php" style="color: white;">Cadastro</a>
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
              <form class="row contact_form" action="./" method="post" novalidate="novalidate">
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="first" name="name" placeholder="Nome">
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="last" name="name" placeholder="Sobrenome">
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="number" name="number" placeholder="Telefone">>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="email" name="compemailany" placeholder="Email">
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="add1" name="add1" placeholder="Endereço">
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="city" name="city" placeholder="Cidade">
                </div>
                <div class="col-md-12 form-group p_star">
                  <select class="country_select" style="display: none;">
                    <option value="1">Espírito Santo</option>
                    <option value="2">São Paulo</option>
                    <option value="4">Rio de Janeiro</option>
                  </select><div class="nice-select country_select" tabindex="0"><span class="current">Espírito Santo</span><ul class="list"><li data-value="1" class="option selected">Espírito Santo</li><li data-value="2" class="option">São Paulo</li><li data-value="4" class="option">Rio de Janeiro</li></ul></div>
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="zip" name="zip" placeholder="CEP">
                </div>
                <div class="col-md-12 form-group p_star">
                  Senha<input type="text" class="form-control" id="senha" name="senha" onkeyup="preencheCampo('valida_senha', this.value, 'validar');">
                </div>
                <div class="col-md-12 form-group p_star">
                  Confirmar Senha<input type="text" class="form-control" id="conf_senha" name="conf_senha" onkeyup="preencheCampo('valida_senha', this.value, 'validar');">
                </div>
                <input type="submit" name="logar" class="main_btn" value="Cadastrar" style="margin: auto;">
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
