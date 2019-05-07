<?php
include 'header.php';
?>

    <div id="formulario" class="container">

    <form>
        <div class="form-group col-sm-2">
            <label for="solicitud_numero">Solicitud N°:</label>
            <input type="text" name="solicitud_numero" class="form-control" disabled>
        </div>
        <div class="form-group">
          <label for="usuario">Nombre de Solicitante:</label>
          <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Nombre de Solicitante" disabled>
        </div>
        <div class="form-group">
          <label for="cliente">Cliente:</label>
          <select class="form-control" id="cliente">
            <option>BCI</option>
            <option>BBVA</option>
            <option>Banco Internacional</option>
          </select>
        </div>
        <div class="form-group">
          <label for="producto">Producto:</label>
          <input type="text" name="producto" class="form-control" id="producto" placeholder="Producto">
        </div>
        <div class="form-group">
          <label for="solicitado_a">Solicitado a:</label>
          <select class="form-control" id="cliente">
            <option>Selecion...</option>
            <option>Patricio Cerpa</option>
            <option>Hans Zuñiga</option>
            <option>Rodrigo Barrientos</option>
          </select>
        </div>
        <div class="row">
          <div class="col-sm">
            <label for="fecha">Fecha de entrega:</label>
            <input type="date" name="fecha" class="form-control" id="fecha">
          </div>
          <div class="col-sm">
          <label for="hora">Hora de entrega:</label>
          <input type="time" name="hora" class="form-control" id="hora">
        </div>
      </div>
      <br>
      Tipo de trabajo:
      <div class="form-check"><br>
        <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadio" value="option1" checked>
        <label class="form-check-label" for="exampleRadio">
          Contrato
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadio" value="option2">
        <label class="form-check-label" for="exampleRadio">
          Puntual
        </label>
      </div>
      <hr>
      <h5>Material de trabajo Entregado</h5>
      <br>
      <div class="container">
        <div class="col-sm-6">
        <div class="row">
          <div class="col-sm">
            Data Entrada:
          </div>
          <div class="col-sm">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1">
              <label class="form-check-label" for="exampleRadios1">
                Si
              </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option2" checked>
            <label class="form-check-label" for="exampleRadios1">
              No
            </label>
          </div>
          <div class="w-100"></div>
        </div>
      </div>
      <hr>
        <div class="row">
          <div class="col-sm">
            Definicion de Campos:
          </div>
          <div class="col-sm">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
              <label class="form-check-label" for="exampleRadios3">
                Si
              </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" checked>
            <label class="form-check-label" for="exampleRadios4">
              No
            </label>
          </div>
          <div class="w-100"></div>

        </div>
      </div>
      <hr>
        <div class="row">
          <div class="col-sm">
            Campograma:
          </div>
          <div class="col-sm">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Campograma" id="Campograma" value="option1">
              <label class="form-check-label" for="Campograma">
                Si
              </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="Campograma" id="Campograma" value="option2" checked>
            <label class="form-check-label" for="Campograma">
              No
            </label>
          </div>
          <div class="w-100"></div>
        </div>
      </div>
      <hr>
        <div class="row">
          <div class="col-sm">
            Data Prueba:
          </div>
          <div class="col-sm">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="data_prueba" id="data_prueba" value="option1">
              <label class="form-check-label" for="data_prueba">
                Si
              </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="data_prueba" id="data_prueba" value="option2" checked>
            <label class="form-check-label" for="data_prueba">
              No
            </label>
          </div>
          <div class="w-100"></div>
        </div>
      </div>
      <hr>
        <div class="row">
          <div class="col-sm">
            Documentacion:
          </div>
          <div class="col-sm">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Documentacion" id="Documentacion" value="option1">
              <label class="form-check-label" for="Documentacion">
                Si
              </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="Documentacion" id="Documentacion" value="option2" checked>
            <label class="form-check-label" for="Documentacion">
              No
            </label>
          </div>
          <div class="w-100"></div>
        </div>
      </div>
      <hr>
        <div class="row">
          <div class="col-sm">
            Muestras Fisicas:
          </div>
          <div class="col-sm">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="muestras" id="muestras" value="option1">
              <label class="form-check-label" for="muestras">
                Si
              </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="muestras" id="muestras" value="option2" checked>
            <label class="form-check-label" for="muestras">
              No
            </label>
          </div>
          <div class="w-100"></div>
        </div>
      </div>
      <hr>
    </div>
    <div class="col-sm-6">
      <label for="exampleFormControlTextarea1">Example textarea</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

    </div>
  </div>




        </form>
