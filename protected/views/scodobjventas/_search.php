<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_cod_obj_venta',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'desc_cod_obj_venta',array('class'=>'span5','maxlength'=>999)); ?>

	<?php echo $form->textFieldRow($model,'id_clase_obj_venta',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'doc_requeridos',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'placa_cod',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'interno_cod',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'id_proyecto',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_persona',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'activo_cod_obj_venta',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
