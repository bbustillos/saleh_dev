<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'sincro-parametrizacion-form',
	'enableAjaxValidation'=>false,
)); ?>
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <?php 
        $URLColumnas = CController::createUrl('sincroParametrizacion/obtenerColumnas');
        $sCamposDetCadena = $model->campos_det;
    ?>

	<?php echo $form->errorSummary($model); ?>
    <div id="URLColumnas" style="display: none;"><?php echo $URLColumnas; ?></div>
	<div id="campos_det_cadena" style="display: none;"><?php echo $sCamposDetCadena; ?></div>
	<b><?php echo $form->labelEx($model,'nombre_tabla'); ?></b>
	<?php echo $form->dropDownList($model,'nombre_tabla', Yii::app()->db->schema->getTableNames(), array(
            'empty'=>'-- Seleccionar --'
        ));
    ?>

    <div id="campos_det_div">
    <b><?php echo $form->labelEx($model,'campos_det'); ?></b>
    <?php echo CHtml::activeCheckBoxList($model, 'campos_det', array()); ?>
    </div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Almacenar' : 'Actualizar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
<script type="text/javascript">

$(document).ready(function() {
    $('#SincroParametrizacion_nombre_tabla').bind('change',function() {
        cargar_camp_det();
    });

    if ($('#SincroParametrizacion_nombre_tabla').val() != "") {
        cargar_camp_det();
    };
});

function cargar_camp_det(){
    camp_det_show_hide();
    var urlColumna = $('#URLColumnas').text();
    var nombreTabla = $('#SincroParametrizacion_nombre_tabla').val();
    var campoDetCadena = $('#campos_det_cadena').text();
    $.ajax({
        type: 'POST',
        url: urlColumna,
        data: 'nombre_tabla='+nombreTabla,
        success: function(data) {
            if (data) {
                var data1 = jQuery.parseJSON( data );
                var html=""; var camposDet = new Array(); var checked='';
                $.each(data1,function(i,obj)
                {
                    if (campoDetCadena == '') {
                        html+="<input id='SincroParametrizacion_campos_det_"+obj.id+"' value="+obj.name+" type='checkbox' name='SincroParametrizacion[campos_det][]'>"+obj.name+"</br>";
                    } else {
                        camposDet = campoDetCadena.split("|");
                        for (var i = 0; i < camposDet.length; i++) {
                            if (camposDet[i] == obj.name){
                                checked = 'checked="checked"';
                                break;
                            }
                            else 
                                checked = '';
                        }
                        html+="<input id='SincroParametrizacion_campos_det_"+obj.id+"' value="+obj.name+" "+checked+" type='checkbox' name='SincroParametrizacion[campos_det][]'>"+obj.name+"</br>";
                    }
                });
                $("#SincroParametrizacion_campos_det").html(html);
            };
        }
    });
}

function camp_det_show_hide(){
    if ( $("#SincroParametrizacion_nombre_tabla").val() != "" ) {
        $("#campos_det_div").show();
    } else {
        $("#campos_det_div").hide();
    }
}
</script>