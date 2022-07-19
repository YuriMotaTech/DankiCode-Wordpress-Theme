<?php
  //Template name: Contato
?>

<?php get_header(); ?>
  
    </div>
  </section>

      <div class="clear"></div>
    </div> <!-- center -->
  </section> <!-- topo -->

  <section class="contato">
    <div class="center">
      <div class="w50 contato-info">
        <h2>A mais importante,<br/>primeira conversa.</h2>
        <p>Telefone: (85) 9999-9999</p>
        <p>E-mail: example@productrunt.com</p>
        <p>Endereço: Rua Vitória 616, João XXIII, <br/>Fortaleza - CE 60525-455</p>

        <div class="mapa-container">
          <div id="mapa">
            <img src="<?php echo  get_theme_root_uri();?>/Product Runt/assets/img/contact/map-product.png" alt="">
          </div>
        </div>
      </div> <!-- w50 -->
    
      <div class="w50 contato-form">
        <form>
          <input type="text" placeholder="Nome" name="" id="">
          <input type="text" placeholder="E-mail" name="" id="">
          <input type="text" placeholder="Telefone" name="" id="">
          <select placeholder="" name="" id="">
            <option value="Geral">Geral</option>
            <option value="Suporte">Suporte</option>
          </select>
          <textarea placeholder="Mensagem" name="" id=""></textarea>
          <input type="submit" value="Enviar!">
        </form>
      </div> <!-- w50 -->
    </div> <!-- center -->
    <div class="clear"></div>
  </section>

  <?php get_footer(); ?>