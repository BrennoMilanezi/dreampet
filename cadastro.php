  <? include("header.php"); 
  include("./includes/inicializa.php");
  ?>
  <!--================Header Menu Area =================-->
<script type="text/javascript">
  function senhaValida($senha) {
    return preg_match('/[a-z]/', $senha) // tem pelo menos uma letra minúscula
     && preg_match('/[0-9]/', $senha) // tem pelo menos um número
     && preg_match('/^[\w$@]{8,}$/', $senha); // tem 8 ou mais caracteres
}
</script>
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
      <div class="container" style="margin-top: 3%;">
        <div class="billing_details">
          <div class="row">
            <div class="col-lg-12">
              <form class="row contact_form" action="./cadastro.php" method="post" novalidate="novalidate">
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" required>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required>
                </div>
                <div class="col-md-6 form-group p_star">
                  <select id="estado" name="estado" class="country_select">
                    <option value="1">Espírito Santo</option>
                    <option value="2">São Paulo</option>
                    <option value="4">Rio de Janeiro</option>
                  </select>
                </div>
                <div class="col-md-6 form-group p_star">
                  Senha<input type="password" class="form-control" id="senha" name="senha" placeholder="********" required><span class="popuptext" id="myPopup">A senha deve conter no mínimo 8 caracteres com números, letras e pelo menos 1 caracter especial.</span>
                </div>
                <div class="col-md-6 form-group p_star">
                  Confirmar Senha<input type="password" class="form-control" id="conf_senha" name="conf_senha" placeholder="********" required>
                </div>
                <input type="submit" name="logar" onclick="return senhaValida(document.getElementById('senha').value);" class="main_btn" value="Cadastrar" style="margin: auto;">
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
    if($_POST['nome'] != "" && $_POST['telefone'] != "" && $_POST['email'] != "" && $_POST['endereco'] != "" && $_POST['cidade'] != "" && $_POST['estado'] != "" && $_POST['senha'] != "" && $_POST['conf_senha'] != ""){
      if($_POST['senha'] == $_POST['conf_senha']){
        /*Faz query verifica se esta cadastradado*/
        $sql = "SELECT id FROM clientes WHERE email = '$email' AND status = 1";
        if(!$pg->getRow($sql)){
          /*AUTENTICA*/
          $nome = addslashes(utf8_decode($_POST['nome']));
          $telefone = addslashes(utf8_decode($_POST['telefone']));
          $email = addslashes(utf8_decode($_POST['email']));
          $endereco = addslashes(utf8_decode($_POST['endereco']));
          $cidade = addslashes(utf8_decode($_POST['cidade']));
          $estado = addslashes(utf8_decode($_POST['estado']));
          $senha = sha1($_POST['senha']);
          $sql_insert = "INSERT INTO clientes (nome, email, senha, endereco) VALUES ('$nome', '$email', '$senha', '$endereco')";
          $_SESSION['id'] = $pg->insert($sql_insert);
          $_SESSION['nome'] = $nome;
          output_message("Seu cadastro foi realizado com sucesso", "Cadastro Realizado", "success", "./category.php");
        }else{
          output_message("E-mail já esta cadastrado em nossa base, caso não ", "E-mail já cadastrado", "warning");
        } 
      }else{
    	output_message("Confirmação da senha diferente!", "Senhas Diferentes", "warning");
      }
    }else{
    	output_message("Faltou informar algum campo obrigatório!", "Alerta", "warning");
    }
   }
   ?>
