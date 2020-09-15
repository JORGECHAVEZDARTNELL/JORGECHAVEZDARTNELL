      <!-- Page Content-->
      <section class="section text-left section-sm bg-default">
        <form action="" method="post">
          <div class="container">
            <div class="row justify-content-sm-center">
              <div class="col-sm-10 col-lg-8">
                <h6 class="font-weight-bold">Tramite</h6>
                <div class="text-subline"></div>
                <div class="row row-30">
                  <div class="col-xl-8">
                    <div class="form-wrap">
                      <label class="form-label-outside" for="mesa-tipo-tramite">Tipo de Trámite:</label>
                      <select class="form-input select-filter" id="mesa-tipo-tramite" data-placeholder="Matricula de alumno" data-minimum-results-for-search="Infinity">
                        <option value="1">Matricula de alumno</option>
                        <option value="2">Certificado de estudios</option>
                        <option value="3">Traslado de alumno</option>
                        <option value="4">Constancia de estudio</option>
                        <option value="5">Constancia de matrícula</option>
                        <option value="6">Constancia de matrícula</option>
                        <option value="7">Otros</option>
                      </select>
                    </div>  
                  </div>
                  <div class="col-xl-12">
                    <div class="form-wrap">
                      <label class="form-label-outsite" for="mesa-asunto-tramite">Asunto de tramite: </label>
                      <input class="form-input form-validation-inside" id="mesa-asunto-tramite" type="text" name="company" data-constraints="@Required">
                    </div>
                  </div>
                </div>
                <h6 class="font-weight-bold">Datos del contacto</h6>
                <div class="text-subline"></div>
                <div class="row row-30 offset-top-30">
                  <div class="col-xl-6">
                    <div class="form-wrap">
                      <label class="form-label" for="mesa-email">Correo</label>
                      <input class="form-input form-validation-inside" id="mesa-email" type="email" name="email" data-constraints="@Required @Email">
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="form-wrap">
                      <label class="form-label" for="mesa-telfono">Telefono</label>
                      <input class="form-input form-validation-inside" id="mesa-telfono" type="text" name="phone" data-constraints="@IsNumeric">
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="form-wrap">
                      <label class="form-label" for="mesa-dni">DNI</label>
                      <input class="form-input form-validation-inside" id="mesa-dni" type="text" name="dni" data-constraints="@IsNumeric">
                    </div>
                  </div>
                </div>
                <h6 class="font-weight-bold">Documento</h6>
                <div class="text-subline"></div>
                <div class="row row-30 offset-top-30">
                  <div class="col-xl-4 col-lg-6">
                    <div class="form-wrap">
                    <h6 class="font-weight-bold">Documento Principal:</h6>
                    </div>
                  </div>
                  <div class="col-xl-8 col-lg-6">
                    <div class="form-wrap">
                      <input class="btn button-primary" id="mesa-doc" type="file" name="doc" data-constraints="@Required">
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-6">
                    <div class="form-wrap">
                    <h6 class="font-weight-bold">Anexos:</h6>
                    </div>
                  </div>
                  <div class="col-xl-8 col-lg-6">
                    <div class="form-wrap">
                      <input class="btn button-primary" id="mesa-doc" type="file" name="doc" data-constraints="@Required">
                    </div>
                  </div>
                </div>
                <div class="row row-30 offset-top-30">
                  <div class="col-xl-6">
                    <button type="submit" class="btn button-primary">ENVIAR</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>  
      </section>
