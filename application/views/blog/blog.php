 <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-0 bread">Blog</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
	    <div class="container">
	        <div class="row">
	         	<div class="col-lg-8 ftco-animate">
					<div class="row">
						<?php foreach($blog as $row){ ?>
						<div class="col-md-12 d-flex ftco-animate">
				            <div class="blog-entry align-self-stretch d-md-flex">
				              <a href="blog-single.html" class="block-20" style="background-image: url('<?php echo $row->imagem ?>');">
				              </a>
				              <div class="text d-block pl-md-4">
				                <h3 class="heading"><a href="#"><?php echo $row->titulo ?>.</p>
				                <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Ler mais</a></p>
				              </div>
				            </div>
				        </div>
				    <?php } ?>
					</div>
	          	</div> <!-- .col-md-8 -->
	        </div>
	    </div>
   	</section> <!-- .section -->