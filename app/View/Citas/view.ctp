<html>
   <p class="bg-success"><legend> &nbsp&nbsp&nbsp&nbsp Datos De Cita </legend></p>
    <div class= "container-fluid">
        <div class="form-group">
          <label class="col-sm-1 control-label">Encargado:</label></h4>
          <label class="control-label "><?php echo ucfirst($user['User']['username']);?></label>
          <br>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label">Registrador:</label>
          <label class=" control-label"> <?php echo ucfirst($citas['Cita']['recorder']);?></label>
        </div>
        <legend>  </legend>
        <div class="form-group">
          <label class="col-sm-1 control-label">Título:</label>
          <label class=" control-label"> <?php echo ucfirst($citas['Cita']['title']);?></label>
          <br>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label">Fecha Y Hora:</label>
          <label class=" control-label"> <?php echo $citas['Cita']['start'];?> - </label>
          <label class=" control-label"> <?php echo $citas['Cita']['end'];?> </label>
          <br></br>
        </div>
        <p class="bg-info"><legend> &nbsp&nbsp Datos Del Cliente </legend></p>
        <div class="form-group">
          <label class="col-sm-1 control-label">Nombre(s):</label>
          <label class="col-sm-3 control-label "><?php echo ucfirst($cliente['Cliente']['name']);?></label>
          <br>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label">Apellido(s):</label>
          <label class="col-sm-3 control-label "><?php echo ucfirst($cliente['Cliente']['surname']);?></label>
          <br>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label">Rut:</label>
          <label class="col-sm-2 control-label "><?php echo $cliente['Cliente']['rut'];?></label>
          <br>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label">Fecha Nacimiento:</label>
          <label class="col-sm-2 control-label "><?php echo $cliente['Cliente']['date_birth'];?></label>
          <br><br>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label">Dirección:</label>
          <label class="col-sm-3 control-label "><?php echo $cliente['Cliente']['address'];?></label>
          <br>
        </div>
         <div class="form-group">
          <label class="col-sm-1 control-label">N° De Contacto:</label>
          <label class="col-sm-2 control-label "><?php echo $cliente['Cliente']['contact'];?></label>
        </div>
        <legend> </legend>
        <div class="form-group">
          <label class="col-sm-2 control-label"><?php echo '&nbsp',$this->Html->link('-> Regresar Al Calendario',array('controller' => 'citas', 'action' => 'calendar', '?' => array(
          'id' => $user['User']['id']))); ?></label>
          <br>
        </div>
    </div>
 </html>   