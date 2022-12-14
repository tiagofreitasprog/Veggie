
  <body class="goto-here">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html">Agr0Team</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="<?php echo base_url('') ?>" class="nav-link">Home</a></li>
              <li class="nav-item dropdown">
            </li>
                <li class="nav-item"><a class="nav-link active">Loja</a></li>
              <li class="nav-item"><a href="about.html" class="nav-link">Sobre nós</a></li>
              <li class="nav-item"><a href="<?php echo base_url('blog') ?>" class="nav-link">Nosso Blog</a></li>
              <li class="nav-item"><a href="contact.html" class="nav-link">Contacto</a></li>
              <li class="nav-item">
                 <div class="card text-white bg-info mb-3" style="width: 18rem;">
                  <div class="card-header">Carrinho</div>
                  <div class="card-body" data-kart="display">
                      <div>Produtos: <span data-kart-total-item="0">0</span></div>
                      <div>Total preoço: $<span data-kart-total-price="0">0.00</span></div>
                  </div>
                 </div>
              </li>   
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<php echo base_url('') ?>">Home</a></span> <span>Produtos</span></p>
            <h1 class="mb-0 bread">Produtos</h1>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
          <?php foreach ($produtos as $row) { ?>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="<?php echo $row->img ?>" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?php echo $row->nome ?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale"><?php echo $row->preco ?>€</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<button class="btn btn-primary btn-sm btn-block" data-kart="item-button" data-kart-item-status="add-item" data-kart-item='{"id": <?php echo $row->id_produtos ?>, "price": <?php echo $row->preco ?>}'>Adicionar</button>

	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
          <?php } ?>
        </div>
    	</div>
    </section>
   