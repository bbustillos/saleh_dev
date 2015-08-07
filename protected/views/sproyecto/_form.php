<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'sproyecto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'id_empresa',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'id_sucursal',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'visible',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'descripcion_proyecto',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'no_contrato',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'resolucion',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'no_licitacion',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'contratante',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'garantia',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'scontratista',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'dpto',array('class'=>'span5','maxlength'=>2)); ?>

	<?php echo $form->textFieldRow($model,'lugar',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'encargado',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'fecha_inicial',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'vencimiento',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'supervisor',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'moneda',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'monto',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tipo_cambio',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'historial',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'por_defecto',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'estado',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'cambia',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'motivos_i',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'motivos_e',array('class'=>'span5','maxlength'=>100)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
