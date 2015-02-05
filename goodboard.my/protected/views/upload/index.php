
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */
<div class="row" style="padding-top: 80px;">
<?php if($uploaded):?>
            <p>File successful downloaded</p>
                <?php endif;?>
                <?php echo CHtml::beginForm('','post', array('enctype'=>'multipart/form-data')); ?>
                <?php echo CHtml::error($model, 'file');?>
                <?php echo CHtml::activeFileField($model, 'file');?>
                <?php echo CHtml::submitbutton('Upload');?>
                <?php echo CHtml::endForm(); ?>

</div>