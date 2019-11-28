<!--================Header Menu Area =================-->
  <? 
  $and_busca = "";
  include("header.php"); 
  include("./includes/inicializa.php");?>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center" style="background: #1497e5;">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2 style="color: white;">Produtos</h2>
              <p style="color: white;">Diversos produtos das melhores marcas no mercado! Você encontra aqui na DreamPet</p>
            </div>
            <div class="page_link">
              <a href="./" style="color: white;">Início</a>
              <a href="category.php" style="color: white;">Produtos</a>
              <a href="#" style="color: white;">Cães</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area" style="margin: 2%;">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
            <div class="product_top_bar">
              <div class="left_dorp">
                <select class="sorting" onchange="preencheCampo('busca_produtos', this.value+'@'+document.getElementById('categoria').value+'@'+document.getElementById('amount').value, 'filtro')">
                  <option value="0">Mais Relevantes</option>
                  <option value="1">Menor Preço</option>
                  <option value="2">Maior Preço</option>
                </select>
              </div>
            </div>
            
            <div class="latest_product_inner">
              <div class="row" id="busca_produtos">
					<? include("lista_produtos.php"); ?>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="left_sidebar_area">
              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Categorias</h3>
                </div>
                <div class="widgets_inner">
                	<input type="radio" id="categoria" name="categoria" value="0" onclick="preencheCampo('busca_produtos', this.value+'@'+document.getElementById('categoria').value+'@'+document.getElementById('amount').value, 'filtro')">
  					<label>Todas</label><br>
  					<input type="radio" id="categoria" name="categoria" value="1" onclick="preencheCampo('busca_produtos', this.value+'@'+document.getElementById('categoria').value+'@'+document.getElementById('amount').value, 'filtro')" >
  					<label>Brinquedos</label><br>
  					<input type="radio" id="categoria" name="categoria" value="2" onclick="preencheCampo('busca_produtos', this.value+'@'+document.getElementById('categoria').value+'@'+document.getElementById('amount').value, 'filtro')" >
  					<label>Petiscos</label><br>
  					<input type="radio" id="categoria" name="categoria" value="3" onclick="preencheCampo('busca_produtos', this.value+'@'+document.getElementById('categoria').value+'@'+document.getElementById('amount').value, 'filtro')" >
  					<label>Ração</label><br>
  					<input type="radio" id="categoria" name="categoria" value="4" onclick="preencheCampo('busca_produtos', this.value+'@'+document.getElementById('categoria').value+'@'+document.getElementById('amount').value, 'filtro')">
  					<label>Roupas</label><br>
  					<input type="radio" id="categoria" name="categoria" value="5" onclick="preencheCampo('busca_produtos', this.value+'@'+document.getElementById('categoria').value+'@'+document.getElementById('amount').value, 'filtro')">
  					<label>Acessórios</label>
                  <!--<ul class="list">
                    <li>
                      <a href="#">Brinquedos</a>
                    </li>
                    <li>
                      <a href="#">Petiscos</a>
                    </li>
                    <li>
                      <a href="#">Ração</a>
                    </li>
                    <li>
                      <a href="#">Roupas</a>
                    </li>
                    <li>
                      <a href="#">Acessórios</a>
                    </li>
                  </ul>-->
                </div>
              </aside>
              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Filtrar pelo Preço</h3>
                </div>
                <div class="widgets_inner">
                  <div class="range_item">
                    <div id="slider-range"></div>
                    <div class="">
                      <label for="amount">Preço : </label>
                      <input onchange="preencheCampo('busca_produtos', this.value+'@'+document.getElementById('categoria').value+'@'+document.getElementById('amount').value, 'filtro')" type="text" id="amount" readonly />
                    </div>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Category Product Area =================-->

    <!--================ start footer Area  =================-->
<? include("footer.php"); ?>
