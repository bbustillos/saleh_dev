<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'scodobjventascaractextras-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'id_cod_obj_venta_car',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_cod_obj_venta_extra',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'observaciones',array('class'=>'span5','maxlength'=>500)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
