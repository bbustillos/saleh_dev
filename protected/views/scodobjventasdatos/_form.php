<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'scodobjventasdatos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>
	<?php $sIDCodObjVenta = (array_key_exists('id_cod_obj_venta', $_GET)?$_GET['id_cod_obj_venta']:$model->id_cod_obj_venta); ?>
	<?php echo $form->hiddenField($model,'id_cod_obj_venta',array('value'=>$sIDCodObjVenta)); ?>

	<?php echo $form->textFieldRow($model,'marca',array('style'=>'width:100px')); ?>

	<?php echo $form->textFieldRow($model,'modelo',array('style'=>'width:60px')); ?>

	<?php echo $form->textFieldRow($model,'numero_chasis',array('style'=>'width:200px')); ?>
	
	<?php echo $form->textFieldRow($model,'numero_motor',array('style'=>'width:200px')); ?>

	<b><?php echo $form->labelEx($model,'color_id'); ?></b>
	<?php echo $form->dropDownList($model,'color_id',
		CHtml::listData(Scolor::model()->findAll(), 'color_id', 'color_descripcion'), array('empty'=>'-- Seleccionar --')
	); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Almacenar' : 'Actualizar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
