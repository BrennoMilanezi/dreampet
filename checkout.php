<!--================Header Menu Area =================-->
  <? include("header.php"); ?>

  <script src="https://www.paypal.com/sdk/js?client-id=Aej83Tcv3RvB1HnK8juOXdgQRYmuvG2N8l0_q4o20fdoD_oYrWX0ZSyi4fqyGEcAKnglWKGmKke2VbPP&currency=BRL"></script>

<script>


  paypal.Buttons({

    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: 25.00
          }
        }]
      });
    },
      onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        alert('Pagamento aprovado!');
        /*preencheCampo('atualiza_boleto', <?echo $id_boleto_decode;?>, 'boleto', function(){
          setTimeout(function(){ window.location.reload(true); }, 1000);
        });*/
      });
    }
  }).render('#paypal-button-container');



</script>
    <!--================Header Menu Area =================-->
    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center" style="background: #1497e5;">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2 style="color: white;">Finalizar Compra</h2>
            </div>
            <div class="page_link">
              <a href="./" style="color: white;">Início</a>
              <a href="checkout.php" style="color: white;">Finalizar Compra</a>
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
            <div class="col-lg-8">
              <h3>Informações do Comprador</h3>
              <form
                class="row contact_form"
                action="#"
                method="post"
                novalidate="novalidate"
              >
                <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="first"
                    name="name"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Nome"
                  ></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="last"
                    name="name"
                  />
                  <span class="placeholder" data-placeholder="Sobrenome"></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="number"
                    name="number"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Telefone"
                  ></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="compemailany"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Email"
                  ></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="add1"
                    name="add1"
                  />
                  <span
                    class="placeholder"
                    data-placeholder="Endereço"
                  ></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input
                    type="text"
                    class="form-control"
                    id="city"
                    name="city"
                  />
                  <span class="placeholder" data-placeholder="Cidade"></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <select class="country_select">
                    <option value="1">Espírito Santo</option>
                    <option value="2">São Paulo</option>
                    <option value="4">Rio de Janeiro</option>
                  </select>
                </div>
                <div class="col-md-12 form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="zip"
                    name="zip"
                    placeholder="CEP"
                  />
                </div>
                <div class="col-md-12 form-group">
                  <div class="creat_account">
                    <input type="checkbox" id="f-option2" name="selector" />
                    <label for="f-option2">Criar um conta com os dados?</label>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-4">
              <div class="order_box">
                <h2>Seu Pedido</h2>
                <ul class="list">
                  <li>
                    <a href="#"
                      >Produto
                      <span>Total</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      >Ração Golden
                      <span class="middle">x 01</span>
                      <span class="last">R$25.00</span>
                    </a>
                  </li>
                </ul>
                <ul class="list list_2">
                  <li>
                    <a href="#"
                      >Total
                      <span>R$25.00</span>
                    </a>
                  </li>
                </ul>
                <div id="paypal-button-container"></div>
                <div class="creat_account">
                  <input type="checkbox" id="f-option4" name="selector" />
                  <label for="f-option4">Aceito e concordo com </label>
                  <a href="#">termos & condições</a>
                </div>
                <a class="main_btn" href="#">Comprar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Checkout Area =================-->

    <!--================ start footer Area  =================-->
   <? include("footer.php"); ?>
