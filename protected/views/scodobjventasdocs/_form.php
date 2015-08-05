<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'scodobjventasdocs-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>
	<?php $sIDCodObjVenta = (array_key_exists('id_cod_obj_venta', $_GET)?$_GET['id_cod_obj_venta']:$model->id_cod_obj_venta); ?>
	<?php echo $form->hiddenField($model,'id_cod_obj_venta',array('value'=>$sIDCodObjVenta)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'documento',array('style'=>'width:250px')); ?>

	<b><?php echo $form->labelEx($model,'validez'); ?></b>
	<?php echo $form->dateField($model,'validez',array()); ?>

	<b><?php echo $form->labelEx($model,'requerido'); ?></b>
	<?php echo $form->checkBox($model,'requerido'); ?>

	<?php echo $form->textFieldRow($model,'dias_alerta',array('style'=>'width:60px')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Almacenar' : 'Actualizar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
