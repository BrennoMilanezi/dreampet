<!--================Header Menu Area =================-->
  <? include("header.php"); ?>
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
                  <input type="text" class="form-control" id="email" name="email"/>
                  <span class="placeholder" data-placeholder=""></span>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="senha" name="senha"/>
                  <span class="placeholder" data-placeholder=""></span>
                </div>
                <input type="submit" class="main_btn" value="Logar" />
                <a href="./cadastro.php">Cadastrar-se</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Checkout Area =================-->

    <!--================ start footer Area  =================-->
   <? include("footer.php"); 
   
   ?>
