
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */
<div class="row" style="padding-top: 80px;padding-left: 50px;">
<?php if($uploaded):?>
            <p>File successful downloaded</p>
            <p><?php //echo Products::model()->image_big;?></p>
                <?php endif;?>
                <?php echo CHtml::beginForm('','post', array('enctype'=>'multipart/form-data')); ?>
                <?php echo CHtml::error($upload, 'file');?>
                <?php echo CHtml::activeFileField($upload, 'file');?>
                <?php echo CHtml::submitbutton('Upload');?>
                <?php echo CHtml::endForm(); ?>

</div>