<div class="home-contacto container-fluid">
  <div class="row">
    <h3>Contactanos</h3>
    <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">

      <form class="contact-form" action="/" method="post">

        {{ csrf_field() }}

      <div class="col-xs-12 col-sm-6">
        <div class="form-group">
          <input required minlength="3" type="text" name="name" class="form-control" placeholder="Nombre:">
          </div>
          <div class="form-group">
            <input required type="email" name="email" class="form-control" placeholder="Email:">
          </div>
          <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Asunto:">
          </div>
      </div>

      <div class="col-xs-12 col-sm-6">
        <textarea required minlength="6" class="form-control" name="message" rows="8" cols="80" placeholder="Mensaje"></textarea>
      </div>

      <div class="col-xs-12">
        <div class="line hidden-xs"></div>
        <button type="submit" class="btn btn-default">ENVIAR</button>
      </div>

      </form>
      <div class="clearfix"></div>
      <div class="center">
        <p>NO SOMOS LA OPOSICION</p>
        <img class="lazy" data-original="/img/test/form.jpg" alt="">
      </div>

    </div>

  </div>
</div>

<div id="form-result" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">MENSAJE RECIBIDO</h4>
      </div>
      <div class="modal-body">
        <p>Gracias <span class="fnombre"></span>!</p>
      </div>
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
