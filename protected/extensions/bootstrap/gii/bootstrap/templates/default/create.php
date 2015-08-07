<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Create',
);\n";
?>

$this->menu=array(
	array('label'=>'Listar','url'=>array('index')),
	array('label'=>'Administración','url'=>array('admin')),
);
?>

<h1>Create <?php echo $this->modelClass; ?></h1>
<h3>Objeto</h3>
<h4>Crear Nuevo</h4>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
