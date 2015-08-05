<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'sincro-online-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'base_datos',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'tabla',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'accion',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textAreaRow($model,'json',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Almacenar' : 'Actualizar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
