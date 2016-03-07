<!--Bloque 1 -> Tabla Principal-->
<div class="ui two column doubling stackable grid container">
   <div class="ui container centered grid">
      <div class="column">
         <table class="ui selectable celled table capitalize" datatable="" dt-options="opciones_tabla_elementos" dt-columns="columnas_tabla_elementos" dt-instance='tabla_elementos' width="100%"></table>
      </div>
   </div>
</div>

<!--Bloque 2. Mostrar elemento-->
<div class="ui modal" id="modal_ver_elemento">
    <div class="header">Datos del Elemento</div>
        <div class="content">
            <table class="ui celled table capitalize">
                <tbody>
                  <tr>
                    <td colspan="4">
                      <b>Nombre Del Elemento:</b><br>
                        <p>Nombre es.</p>
                    </td>
                    <td colspan="2">
                      <b>Nombre del Almacen:</b><br>
                    </td>
                  </tr>

                  <tr>
                    <td colspan="2">
                      <b>Nro Organizacion:</b><br>
                        <p>33</p>
                    </td>
                    <td colspan="2">
                      <b>Elemento Movible:</b><br> 
                        <p>Si</p>
                    </td>
                    <td colspan="3">
                      <b>Cantidad Disponible:</b><br>
                        <p>33</p> 
                    </td>
                   </tr>

                  <tr>
                    <td colspan="4">
                      <b>Nombre de Agrupacion: </b><br>
                        <p>Nombre de la agrupacion</p>
                    </td>
                  
                    <td colspan="4">
                      <b>Nombre de Sub Agrupacion:</b><br>
                        <p>Nombre de sub-agrupacion</p>
                    </td>
                  </tr>       
                </tbody>    
            </table>
        </div>
        <div class="actions">
            <div class="ui negative button">
                Cerrar
            </div>
        </div>
    </div>
 
<!--Bloque 3 -> Modal Modificar elemento-->

<div class="ui modal" id='modal_modificar_elemento'>
<div class="header">Actualizar datos del elemento</div>
   <div class="content">
      <div class="ui form">
            <form class="ui form" id="formulario_registrar_elemento">
                <h3 class="ui centered dividing header">Modificar Datos</h3>
                <br>
                <div class="field">
                    <div class="two fields">
                        <div class="field">
                            <label>Almacen</label>
                            {{  Form::select_dimension(array('name'=>'cod_dimension','id'=>'cod_dimension', 'ng-model'=>'DatosForm.cod_dimension')) }}
                        </div>

                        <div class="field">
                            <label>Sub Dimension</label>
                                {{  Form::select_sub_dimension(array('name'=>'cod_sub_dimension','id'=>'cod_sub_dimension', 'ng-model'=>'DatosForm.cod_sub_dimension')) }}
                        </div>
                    </div>
                </div>

                <div class="field">
                    <div class="three fields">
                        <div class="field">
                            <label>Agrupacion</label>
                            {{ Form::select_agrupacion(array('name'=>'cod_agrupacion', 'id'=>'cod_agrupacion', 'ng-model'=>'DatosForm.cod_agrupacion')) }}
                        </div>

                        <div class="field">
                            <label>Sub Agrupacion</label>
                            {{ Form::select_sub_agrupacion(array('name'=>'cod_sub_agrupacion', 'id'=>'cod_sub_agrupacion', 'ng-model'=>'DatosForm.cod_sub_agrupacion')) }}
                        </div>

                        <div class="field">
                            <label>Objeto</label>
                            <div class="ui search selection dropdown capitalize buscar_objeto">
                                <input type="hidden" ng-model="DatosForm.cod_objeto" name="cod_objeto" ng-update-hidden>
                                <i class="dropdown icon"></i>
                                <input tabindex="0" class="search" type="text">
                                <div class="text"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div class="field">
                    <div class="three fields">
                        <div class="field">
                            <label>Numero de Organizacion</label>
                            <input type="number" name="numero_orden" placeholder="0" min="1" ng-model="DatosForm.numero_orden">
                        </div>

                        <div class="field">
                            <label>Cantidad Disponible</label>
                            <input type="number" name="cantidad_disponible" placeholder="0" min="1" ng-model="DatosForm.cantidad_disponible">
                        </div>

                        <div class="field" ng-show="DatosForm.usa_recipientes">
                            <label>Recipientes Disponibles</label>
                            <input type="number" name="recipientes_disponibles" placeholder="0" min="1" ng-model="DatosForm.recipientes_disponibles">

                        </div>
                    </div>
                    
                    <br>
                    
                    <div class="field">
                        <div class="two fields">
                            <div class="field">
                                <div class="ui toggle checkbox">
                                    <input name="usa_recipientes" type="checkbox" ng-model="DatosForm.usa_recipientes" ng-init="DatosForm.usa_recipientes = false">
                                    <label>Usar Recipiente</label>
                                </div>
                            </div>

                            <div class="field">
                                <div class="ui toggle checkbox">
                                    <input name="elemento_movible" type="checkbox" ng-model="DatosForm.elemento_movible" ng-init="DatosForm.elemento_movible = true">
                                    <label>Elemento Movible</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
   </div>
   <div class="actions">
      <div class="ui negative button">
        Cerrar
      </div>
      <button class="ui positive button">
        Actualizar
      </button>
      <div class="ui chackmark icon"></div>
   </div>
</div>
<!--Fin De Bloques-->