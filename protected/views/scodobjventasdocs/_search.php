<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_cod_obj_venta_doc',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_cod_obj_venta',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'documento',array('class'=>'span5','maxlength'=>500)); ?>

	<?php echo $form->textFieldRow($model,'validez',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'requerido',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'dias_alerta',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
