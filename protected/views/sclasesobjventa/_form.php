<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'sclasesobjventa-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Los campos <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'desc_clase_obj_venta',array('class'=>'span5','maxlength'=>255)); ?>

	<b><?php echo $form->labelEx($model,'real_fict_clase_obj_venta'); ?></b>
	<?php echo $form->radioButtonList($model,'real_fict_clase_obj_venta', array('REAL'=>'Real', 'FICTICIO'=>'Ficticio')); ?>

	<b><?php echo $form->labelEx($model,'diario_validar'); ?></b>
	<?php echo $form->dropDownList($model,'diario_validar', array(''=>'-- Seleccionar --', 'sdiariopasajes'=>'sdiariopasajes', 'sdiarioguias'=>'sdiarioguias')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Almacenar' : 'Actualizar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
