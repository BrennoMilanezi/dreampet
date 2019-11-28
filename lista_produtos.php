<? 
	/*racao - img/product/todos/p1.jpg - style="width: 31% !important;"
	roupa - img/product/todos/p2.jpg - style="width: 54% !important;"
	bolinha - img/product/todos/p3.jpg - style="width: 70% !important;"*/
	$sql = "SELECT * FROM produtos WHERE status = 1 $and_busca";
  echo "!--$sql-->";
	foreach($pg->getRows($sql) as $row) { ?>
<div class="col-lg-4 col-md-6">
  <div class="single-product">
    <div class="product-img">
      <img style="width: 31% !important;"
        class="card-img"
        src="img/product/todos/p1.jpg"
        alt=""
      />
      <div class="p_icon">
        <a onClick="preencheCampo('adiciona_carrinho_prod', <?=$row->id?>, 'adiciona')">
          <i class="ti-shopping-cart"></i>
        </a>
      </div>
    </div>
    <div class="product-btm">
      <a href="#" class="d-block">
        <h4><?=$row->produto?></h4>
      </a>
      <div class="mt-3">
        <span class="mr-4">$<?=$row->valor?></span>
        <del><?=$row->valor_antigo?></del>
      </div>
    </div>
  </div>
</div>
<?}?>