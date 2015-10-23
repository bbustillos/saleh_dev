<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'scodobjventascaract-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>
	<?php $sIDCodObjVenta = (array_key_exists('id_cod_obj_venta', $_GET)?$_GET['id_cod_obj_venta']:$model->id_cod_obj_venta); ?>
	<?php echo $form->hiddenField($model,'id_cod_obj_venta',array('value'=>$sIDCodObjVenta)); ?>

	<?php echo $form->errorSummary($model); ?>

	<b><?php echo $form->labelEx($model,'id_tipo_bus'); ?></b>
	<?php echo $form->dropDownList($model,'id_tipo_bus',
		CHtml::listData(Stipobus::model()->findAll(), 'id_tipo_bus', 'desc_tipo_bus'), array('empty'=>'-- Seleccionar --')
	); ?>

	<?php echo $form->textFieldRow($model,'carga_maxima',array('style'=>'width:100px')); ?>
	<?php echo $form->fileFieldRow($model,'imagen',array('class'=>'span5','maxlength'=>500)); ?>
	<?php echo $form->textAreaRow($model,'observaciones',array('rows'=>4, 'cols'=>35, 'class'=>'span4')); ?>
	<b><?php echo $form->labelEx($model,'configuracion'); ?></b>
    <?php echo CHtml::activeCheckBoxList($model, 'configuracion',
    	CHtml::listData(scodobjventasextras::model()->findAll(),'id_cod_obj_venta_extra','name')
    	
    ); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Almacenar' : 'Actualizar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
