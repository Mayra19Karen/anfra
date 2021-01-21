
  <div class="container">
    <div class="row mt3 presentation">
      <div class="centered">
        <i class="icon ion-ios7-paperplane-outline large-icon"></i>
        <h1>CONTACTO</h1>
        <hr>
      </div>
      <div class="col-lg-4 col-md-4">
        <h3>Síguenos en nuestras redes</h3>
      </div>

      <div class="col-lg-4 col-md-4">
        <p>
        <i class="fa fa-facebook-square" aria-hidden="true"></i>
        <a href="https://www.facebook.com/anfraimpresores">@anfraimpresores</a>
        </p>
        <p>
        <i class="fa fa-whatsapp" aria-hidden="true"></i>
          442 213 6021
        </p>
      </div>

      <div class="col-lg-4 col-md-4">
        <p>
        <i class="fa fa-map-marker" aria-hidden="true"></i>
          <b>Dirección:</b>
          <pl>INDUSTRIA 73 SAN FRANCIQUITO 76058 </pl><br/>
          <pl> Querétaro, México</pl>
        </p>
        <p>
        <i class="fa fa-envelope-o" aria-hidden="true"></i>
          <b>Email:</b>
          <pl>angelin73@hotmail.com</pl>
        </p>
      </div>
    </div>
    <!-- /row -->

  </div>

  <div class="container">
    <div class="row presentation">
      <div class="col-lg-4 col-md-4">
      </div>
      <div class="col-lg-8 col-md-8 contact-form">
        <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

            <div class="form-group">
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="message" id="contact-message" placeholder="Mensaje" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>

            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">¡Su mensaje ha sido enviado exitosamente!</div>

            <div class="form-send">
              <button type="submit" class="btn btn-lg btn-transparent">Enviar</button>
            </div>

          </form>
      </div>
    </div>
    <!-- /row -->
  </div>


 