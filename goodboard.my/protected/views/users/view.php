<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);
//if(yii::app()->user->username=='admin'){
/*if(isset(yii::app()->user->username)&&$model->username=='admin'){
$this->menu=array(
         array('label'=>'List Users', 'url'=>array('index')),
	//array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Edit information', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Profile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this user?')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);}
else*/
?>

<?php if(isset(yii::app()->user->username)&&$model->username==yii::app()->user->username):?>

<?php 
    $this->menu=array(
        
	array('label'=>'Edit information', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Profile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this user?')),
	
);?>
 
    

?>
<div style="padding: 50px 0px 10px 70px;">
<h1>Profile: <strong><?php echo $model->username; ?></strong></h1>
</div>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		//'password',
		'email',
		//'role',
	),
)); ?>

<?php else :?>
<div style="padding: 50px 0px 10px 70px;">
<h1>Profile: <strong><?php echo $model->username; ?></strong></h1>
</div>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		//'password',
		'email',
		//'role',
	),
)); ?>

<?php endif; ?>