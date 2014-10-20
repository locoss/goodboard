<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Products', 'url'=>array('index')),
	array('label'=>'Create Products', 'url'=>array('create')),
	array('label'=>'View Products', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Products', 'url'=>array('admin')),
);
?>

<?php if ($model->author_id==Yii::app()->user->id):?>

<?php $this->renderPartial('_form_1', array('model'=>$model)); ?>
<?php else :?>
<h3 class="row" style="padding:  50px 0px 30px 110px;">You don't have enougth rights</h3>
<?php endif; ?>