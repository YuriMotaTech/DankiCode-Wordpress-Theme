<?php
  //Template name: Home
?>

<?php get_header(); ?>

<div class="clear"></div>
      <br>
      <br>
      <div class="w50 hero-descrição">
        <h2>Melhore a comunicação com seu cliente e time.</h2>
        <p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
        <a href="">Ver demonstração</a>
      </div><!-- w50 -->
      <div class="w50 hero-imagem">
        <img src="<?php echo  get_theme_root_uri();?>/Product Runt/assets/img/home/ilustracao.png" alt="Ilustração Time">
      </div><!-- w50 -->
      <div class="clear"></div>
    </div> <!-- center -->
  </section> <!-- topo -->
  
  <div class="circle"><i class="fa-solid fa-angle-down"></i></div>
  
  <section class="clientes-slider">
    <div class="center">
      <div class="slider-container">
        <img src="<?php echo  get_theme_root_uri();?>/Product Runt/assets/img/home/amazon.png" alt="Logo Amazon">
        <img src="<?php echo  get_theme_root_uri();?>/Product Runt/assets/img/home/costco.png" alt="Logo Costco">
        <img src="<?php echo  get_theme_root_uri();?>/Product Runt/assets/img/home/dominos.png" alt="Logo Dominos">
        <img src="<?php echo  get_theme_root_uri();?>/Product Runt/assets/img/home/uber.png" alt="Logo Uber">
        <img src="<?php echo  get_theme_root_uri();?>/Product Runt/assets/img/home/walmart.png" alt="Logo Walmart">
      </div> <!-- slider-container -->
    </div> <!-- center -->
  </section> <!-- clientes-slider -->

  <section class="diferenciais">
    <div class="center">
      <h2>Contribuímos de ponta a ponta</h2>
      <div class="icons-diferenciais">
        <div class="box-single-diferenciais">
          <img src="<?php echo  get_theme_root_uri();?>/Product Runt/assets/img/home/ilustracao-01.png" alt="Ilustração Mobile">
          <h3>Ambientes Mobile</h3>
          <p>Garanta que toda sua comunicação esteja alinhada com seu próposito, cada palavra conta.</p>
        </div>
        <div class="box-single-diferenciais">
          <img src="<?php echo  get_theme_root_uri();?>/Product Runt/assets/img/home/ilustracao-02.png" alt="Ilustração Desktop">
          <h3>Sites e Intranets</h3>
          <p>Um diálogo só acontece quando ambas as partes falam e escutam, garanta que seu público te entende</p>
        </div>
        <div class="box-single-diferenciais">
          <img src="<?php echo  get_theme_root_uri();?>/Product Runt/assets/img/home/ilustracao-03.png" alt="Ilustração Time Trabalhando">
          <h3>Comunicação one-to-one</h3>
          <p>O digital veio pra ficar, sem dúvidas, mas uma comunicação integrada de verdade exige clareza nas decisões.</p>
        </div>
      </div>
    </div>
  </section> <!-- diferenciais -->

  <section class="sobre-time">
    <div class="center">
      <div class="w50 time-descricao">
        <h2>Um time experiente,</br> comunicador e coeso.</h2>
        <p>A Product Runt acredita que marcas fortes são construídas a partir de transformações importantes e positivas na vida dos consumidores. Exatamente como uma conversa que ganha forma, a ideia vira flâmula.</p>
        <p>Comunicar bem, de forma coerente e clara não é algo fácil e estamos aqui para ajudar você e seu time. Você escolhe, remoto ou presencial, para seu cliente ou seu público interno, você determina como vamos te ajudar.</p>
      </div> <!-- w50 -->
      <div class="w50 time-imagem">
        <img src="<?php echo  get_theme_root_uri();?>/Product Runt/assets/img/home/ilustracao-04.png" alt="Ilustração Rapaz Trabalhando">
      </div> <!-- w50 -->
    </div> <!-- center -->
    <div class="clear"></div>
  </section> <!-- sobre-time -->

  <section class="depoimentos">
    <div class="center">
      <h2>Depoimentos</h2>
      <div class="box-depoimentos">
        <div class="single-depoimentos">
          <p>"Nunc sagittis odio ut purus dictum, nec suscipit tellus tempor. Curabitur malesuada dapibus libero sit amet ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
          <p>Yuri Mota</p>
          <img src="<?php echo  get_theme_root_uri();?>/Product Runt/assets/img/home/22555046_1056842247792124_4326261916811287290_n.jpg" alt="Foto Yuri">
        </div> <!-- single-depoimentos -->
        <div class="single-depoimentos">
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla cursus et est non rutrum. Morbi tellus lectus, fringilla quis ipsum eget, commodo viverra diam. Nam sed consequat lorem, ac lobortis mauris. Curabitur malesuada dapibus libero sit amet ullamcorper."</p>
          <p>Yuri Mota</p>
          <img src="<?php echo  get_theme_root_uri();?>/Product Runt/assets/img/home/22555046_1056842247792124_4326261916811287290_n.jpg" alt="Foto Yuri">
        </div> <!-- single-depoimentos -->
        <div class="single-depoimentos">
          <p>"Sed tempor justo sit amet orci varius, sit amet mollis sem auctor. Nam sed consequat lorem, ac lobortis mauris. Maecenas sit amet mi vel nibh faucibus volutpat eget vitae augue. Nunc sagittis odio ut purus dictum, nec suscipit tellus tempor."</p>
          <p>Yuri Mota</p>
          <img src="<?php echo  get_theme_root_uri();?>/Product Runt/assets/img/home/22555046_1056842247792124_4326261916811287290_n.jpg" alt="Foto Yuri">
        </div> <!-- single-depoimentos -->
      </div>
    </div> <!-- center -->
  </section> <!-- depoimentos -->

  <section class="metodologia">
    <div class="center">
      <h2>Conheça nossa Metodologia</h2>
      <p>O que acha de fazermos o que mais gostamos de fazer? Conversar!</br>Entre em contato por e-mail ou telefone.</p>
      <a href="<?php echo  get_theme_root_uri();?>/Product Runt/contato.php">Entrar em contato</a>
    </div>
  </section> <!-- metodologia -->

  <?php get_footer(); ?>