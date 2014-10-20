<!--<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="container">
<h1 style="padding: 30px 0px 0px 0px;">Login</h1>

<p>Please fill out the following form with your login credentials:</p>
    
    
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>


<div class="login" style="padding:100px">
<form class="form-horizontal" role="form">

  <div class="form-group">
   <!-- <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <?php echo $form->textField($model,'email'); ?>
    <div class="col-sm-2">
      <!--<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            <?php echo $form->labelEx($model,'email'); ?>
            <?php echo $form->error($model,'email'); ?>
    </div>
  </div>
  <div class="form-group">
    <!--<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
   <?php echo $form->passwordField($model,'password'); ?>
    <div class="col-sm-2">
      <!--<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
      <?php echo $form->labelEx($model,'password'); ?> 
        <?php echo $form->error($model,'password'); ?>
    </div>
  </div>
  <div class="form-group">
     <?php echo $form->checkBox($model,'rememberMe'); ?>
    <div class="col-sm-2 checkbox-column">
    
       
          <!--<input type="checkbox"> Remember me
            
             <?php echo $form->label($model,'rememberMe'); ?>
        
          <?php echo $form->error($model,'rememberMe'); ?>
      
    </div>
  </div>
  
      
    <div class="row">
      <!--<button type="submit" class="btn btn-default">Sign in</button>
      <?php echo CHtml::submitButton('Login'); ?>
    </div>
 
</form>
    
</div>
<?php $this->endWidget(); ?>-->
<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="containter" style ="padding: 50px 0px 30px 110px;">
<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			
		</p>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form --></div>

