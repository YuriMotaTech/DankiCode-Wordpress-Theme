<footer>
    <div class="center">
        <div class="col-footer">
          <h2>Suporte</h2>
          <a href="/wordpress/">Blog</a>
          <a href="/wordpress/">FAQ's</a>
        </div>
        <div class="col-footer">
          <h2>Consultoria</h2>
          <a href="/wordpress/">Metodologia</a>
          <a href="/wordpress/">Cases</a>
        </div>
        <div class="col-footer">
          <h2>Empresa</h2>
          <a href="/wordpress/sobre">Sobre</a>
          <a href="">Política de Privacidade</a>
        </div>
        <div class="col-footer">
          <img src="<?php echo  get_theme_root_uri();?>/Product Runt/assets/img/home/logo-dummy.png" alt="">
        </div>
    </div> <!-- center -->
  </footer>

<?php wp_footer(); ?>

<script src="<?php echo  get_theme_root_uri();?>/Product Runt/assets/js/jquery.js"></script>
<script src="<?php echo  get_theme_root_uri();?>/Product Runt/assets/js/slick.min.js"></script>
<script type="text/javascript">
	$('section.logo-slider .slider-container').slick({
		dots: true,
		arrows:false,
	  infinite: false,
	  speed:1000,
	  slidesToShow: 4,
	  autoplay: true,
	  centerMode:false,
	  autoplaySpeed: 3000,
	  pauseOnHover:false,
	  responsive: 
	  [
	  {
	    breakpoint: 768,
	    settings: {
	      slidesToShow: 2
	    }
	  }
	  ]
	});

	$('section.home__testimonials .box-testimonials').slick({
		dots: true,
		arrows:false,
	  infinite: true,
	  speed:1000,
	  slidesToShow: 1,
	  centerMode:false
	});
</script>
<script>
	//Menu responsivo.
	$('.menu-mobile i').click(function(){
		$('.menu-mobile').find('ul').slideToggle();
	})
</script>
</body>
</html>