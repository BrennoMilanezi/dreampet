  <!--================Header Menu Area =================-->
  <? include("header.php"); ?>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center" style="background: #1497e5;">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2 style="color: white;">Contato</h2>
              <p style="color: white;">Entre em contato, estamos sempre atendendo a dúvidas e sugestões</p>
            </div>
            <div class="page_link">
              <a href="./" style="color: white;">Início</a>
              <a href="contact.php" style="color: white;">Contato</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!-- ================ contact section start ================= -->
  <section>

      <div class="row" style="margin: 5%;">
        <div class="col-lg-8 mb-4 mb-lg-0">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Mensagem"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Nome">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Assunto">
                </div>
              </div>
            </div>
            <div class="form-group mt-lg-3">
              <button type="submit" class="main_btn">Enviar</button>
            </div>
          </form>


        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Vitória, ES.</h3>
              <p>Enseada do Suá, 1826</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">(27) 3333-3333</a></h3>
              <p>Seg à Sex 09:00 à 18:00</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:contato@dreampet.com.br">contato@dreampet.com.br</a></h3>
              <p>Envie um e-mail a qualquer momento!</p>
            </div>
          </div>
        </div>
      </div>
    
  </section>
  <!-- ================ contact section end ================= -->

    <!--================ start footer Area  =================-->
<? include("footer.php"); ?>