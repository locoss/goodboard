<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'View Users', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>


<?php if ($model->id==Yii::app()->user->id):?>
 <?php $this->renderPartial('_form_1', array('model'=>$model));?> 

<?php else :?>
<h3 class="row" style="padding:  50px 0px 30px 110px;">You don't have enougth rights</h3>
<?php endif;?>
