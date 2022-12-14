 <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">AgroTeam</h2>
              <p>Melhores vegetais da Região Autonoma da Madeira.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="<?php echo base_url('loja') ?>" class="py-2 d-block">Comprar</a></li>
                <li><a href="#" class="py-2 d-block">Sobre nós</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Contacto</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Ajuda</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Informação compra</a></li>
	                <li><a href="#" class="py-2 d-block">Devoluções &amp; Encargos</a></li>
	                <li><a href="#" class="py-2 d-block">Termos &amp; Condições</a></li>
	                <li><a href="#" class="py-2 d-block">Politica de privacidade</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Contacto</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Alguma questão?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+351 926 404 500</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This wibsite is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://br.fiverr.com/tiagofreitas759?up_rollout=true" target="_blank">Tiago Freitas</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo base_url('js/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('js/jquery-migrate-3.0.1.min.js') ?>"></script>
  <script src="<?php echo base_url('js/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('js/jquery.easing.1.3.js') ?>"></script>
  <script src="<?php echo base_url('js/jquery.waypoints.min.js') ?>"></script>
  <script src="<?php echo base_url('js/jquery.stellar.min.js') ?>"></script>
  <script src="<?php echo base_url('js/owl.carousel.min.js') ?>"></script>
  <script src="<?php echo base_url('js/jquery.magnific-popup.min.js') ?>"></script>
  <script src="<?php echo base_url('js/aos.js') ?>"></script>
  <script src="<?php echo base_url('js/jquery.animateNumber.min.js') ?>"></script>
  <script src="<?php echo base_url('js/bootstrap-datepicker.js') ?>"></script>
  <script src="<?php echo base_url('js/jquery.mycart.min.js') ?>"></script>
  <script src="<?php echo base_url('js/scrollax.min.js') ?>"></script>
  <script src="<?php echo base_url('js/dc.cart.lang.js') ?>"></script>
  <script src="<?php echo base_url('js/dc.core.1.1.0.min.js') ?>"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  
 <script type="text/javascript">
  $(function(){            

      // Create a new AJAXPaypalCart Object
      var cart = $('#cart').DCAJAXPaypalCart({
          width:600,
          autoOpenWhenAdd:true,
          openNewCheckOutWindow:true,
          //themeColor:'#333',
          //themeDarkColor:'#FFF',
          header:'AJAX Cart Demo',
          footer:'We accpet paypal, visa and master card. (This is a customizable footer)',
          paypalOptions:{
              business:'tsangwl@digicrafts.com.hk',
              page_style:'digicrafts'
          }
      });            
      <?php foreach($produtos as $row){ ?>
      // Add the button
      cart.addBuyButton("#<?php echo $row->id_produtos ?>",{
          name:'<?php echo $row->nome ?>',                     // Item name appear on the cart
          thumbnail:'<?php echo $row->img ?>',      // Thumbnail path of the item (Optional)
          price:'<?php echo $row->preco ?>',                        // Cost of the item
          shipping:1                         // Shipping cost for the item (Optional)
      });
      <?php } ?>
      // For code highlight
      prettyPrint();
      
  });
    </script>
  </body>
  
</html>