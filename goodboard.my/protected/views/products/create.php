<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List Products', 'url'=>array('index')),
	array('label'=>'Manage Products', 'url'=>array('admin')),
);*/
?>



<?php $this->renderPartial('_form', array(
    
    'model'=>$model,
    'upload'=>$upload,
    'uploaded'=>$uploaded,
    'dir'=>$dir,
    'name'=>$name,
    )); ?>

