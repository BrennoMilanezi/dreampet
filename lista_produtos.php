<? 
	/*racao - img/product/todos/p1.jpg - style="width: 31% !important;"
	roupa - img/product/todos/p2.jpg - style="width: 54% !important;"
	bolinha - img/product/todos/p3.jpg - style="width: 70% !important;"*/
	$sql = "SELECT * FROM produtos WHERE status = 1 $and_busca";
  echo "$sql";
	print_r($pg->getRows($sql));
	foreach($pg->getRows($sql) as $row) { ?>
<div class="col-lg-4 col-md-6">
  <div class="single-product">
    <div class="product-img">
      <img style=""
        class="card-img"
        src=""
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
        <h4></h4>
      </a>
      <div class="mt-3">
        <span class="mr-4">$</span>
        <del></del>
      </div>
    </div>
  </div>
</div>
<?}?>