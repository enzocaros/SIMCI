<!--Bloque 1 -> Tabla Principal-->
<div class="ui two column doubling stackable grid container">
   <div class="ui container centered grid">
      <div class="column">
         <table class="ui selectable celled table">
            <thead>
               <tr>
                  <th></th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Unidades</th>
                  <th>acciones</th>
                 
               </tr>
            </thead>
         
            <tbody>
               <tr ng-repeat='x in [1]'>
                  <td></td>
                  <td>Nombre Producto</td> 
                  <td rowspan="4">Formula</td>
                  <td>23</td>
                  <td class="three wide" >
                  <div class="ui icon button blue activar-popup ver"  data-content="Ver Usuario">
                     <i class="unhide icon"></i>
                  </div>    
                  
                   <div class="ui icon button green activar-popup modificar"  data-content="Modificar Usuario">
                       <i class="edit icon"></i>
                     </div>    
                     
                     <div class="ui icon button red activar-popup remover"  data-content="Eliminar Usuario">
                       <i class="remove icon"></i>
                     </div>
                    
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>
  
<!--Bloque 2 -> Modale Ver Usuario-->
<div class="ui modal mostrar">
   <div class="header">Datos </div>
      <div class="content">
         <table class="ui celled table">
            <tbody>
               <tr>
                  <td><b>Nombre del Objeto:</b> Nuevo objeto agregado.</td>
               </tr>

               <tr>
                  <td colspan="4"><b>Descripcion:</b> 
                      please contact the site's administrator.
                  </td>
               </tr>

               <tr>
                  <td colspan="4"><b>Especificacion:</b>
                     please contact the site's administrator.
                  </td>
               </tr>

               <tr>
                  <td colspan="3"><b>Tipo de Objeto:</b>Plastico</td>
               </tr>
            </tbody>

            
         </table>
      </div>
      <div class="actions">
         <div class="ui negative button">
              Atras
         </div>
         <div class="ui positive button">
            Aceptar
         </div>
         <div class="ui chackmark icon"></div>
      </div>
   </div>
 
<!--Bloque 3 -> Modal Modificar Usuario-->

<div class="ui modal actualizar">
<div class="header">Actualizar</div>
   <div class="content">
      <div class="ui form">
        <form class="ui form" id="formulario_crear_objeto">
            <h3 class="ui centered dividing header">Actualizar datos del Objeto</h3>
            <br>
            <div class="field centered grid">
               <div class="three fields">
                  <div class="field">
                     <label>Nombre del Producto</label>
                     <input type="text" name="nombre_pruducto" placeholder="Nombre">
                  </div>
                </div>
            </div>

            <div class="field">
               <div class="two fields">
                     
                     <div class="field">
                        <label>Especificacion del Producto</label>
                        <textarea></textarea>
                     </div>
                     
                     <div class="field">
                         <label>Descripcion del Producto</label>
                         <textarea></textarea>
                     </div>
                  
                </div>
            </div>

            <br>

            <div class="field">
                <div class="two fields">
                     <div class="field">
                        <label>Unidad</label>
                        {{ Form::select_unidades (array('name'=>'cod_unidad', 'id'=>'unidad','ng-modal'=>'unidad'))}}
                  </div>

                  <div class="field">
                     <label>Tipo de Objeto</label>
                     {{ Form::select_agrupacion(array('name'=>'cod_tipo_objeto', 'id'=>'tipo_objeto', 'ng-modal'=>'tipo_objeto')) }}
                  </div>
                </div>
            </div>
         </form>
      </div>
   </div>
   <div class="actions">
      <div class="ui negative button">
         No
      </div>
      <div class="ui positive button">
         Si
      </div>
      <div class="ui chackmark icon"></div>
   </div>
</div>



<!--Bloque 4 -> Eliminar Usuario-->
<div class="ui basic modal eliminar">
   <i class="close icon"></i>
   <div class="header">
      Eliminar Objeto!
   </div>
   <div class="image content">
      <div class="image">
        <i class="archive icon"></i>
      </div>
      <div class="description">
        <p>Esta seguro que desea eliminar este Objeto?</p>
      </div>
   </div>
   <div class="actions">
      <div class="two fluid ui inverted buttons">
         <div class="ui red basic inverted button">
            <i class="remove icon"></i>
            No
         </div>
         <div class="ui green basic inverted button">
            <i class="checkmark icon"></i>
            Yes
         </div>
      </div>
   </div>
</div>
<!--Fin De Bloques-->

<script>
$(document).ready(function(){
	$('.ui.icon.button')
  		.popup();

  	$('.remover').on('click', function(){
  		$('.eliminar')
         .modal('show');
  	});

   $('.modificar').on('click', function(){
      $('.actualizar')
         .modal('show');
   });

    $('.ver').on('click', function(){
      $('.mostrar')
         .modal('show');
   });
})
</script>
