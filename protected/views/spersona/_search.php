<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_persona',array('class'=>'span5','maxlength'=>8)); ?>

	<?php echo $form->textFieldRow($model,'id_empresa',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'id_sucursal',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tipo',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'cod_cargo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'multi_suc',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'nro_documento_identidad',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'email_persona',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'nombres_persona',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'paterno_persona',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'materno_persona',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'direccion_persona',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'fono_persona',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'celular_persona',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'autoriza_carga_pts',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'autoriza_traspaso',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'observaciones',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'e_susuario',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'fecha_nacimiento',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fecha_ingreso',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fecha_salida',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'limite_credito',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pts_iniciales',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'login',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'cod_nivel',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'expirable',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'dias_expiracion',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fecultcad_ambio',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cantidad_ingreso',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cantidad_salida',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'max_ptos',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'ingreso_externo',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'nomimg',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'id_tipo',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fecha',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'upload',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'estado',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'cambia',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'maqvir',array('class'=>'span5','maxlength'=>2)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
