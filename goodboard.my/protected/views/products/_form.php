<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>
<div class="containter" style ="padding: 50px 0px 30px 110px;">
    
    <h1>Create Products</h1>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'products-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_big'); ?>
		<?php echo $form->textField($model,'image_big',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'image_big'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_sm'); ?>
		<?php echo $form->textField($model,'image_sm',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'image_sm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
                
		<?php $form->labelEx($model,'author_id'); ?>
		<?php $form->textField($model,'author_id'); ?>
		<?php $form->error($model,'author_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form --></div>