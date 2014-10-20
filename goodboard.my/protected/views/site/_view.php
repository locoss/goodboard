<?php
/* @var $this ProductsController */
/* @var $data Products */
?>

<!--<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_big')); ?>:</b>
	<?php echo CHtml::encode($data->image_big); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_sm')); ?>:</b>
	<?php echo CHtml::encode($data->image_sm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author_id')); ?>:</b>
	<?php echo CHtml::encode($data->author_id); ?>
	<br />


</div>-->
 <div id="content">
                <div class="col-1">
<ul>
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-4 visible-lg visible-md visible-sm visible-xs">
                                    <a href="#">
                                        <img src="<?php echo CHtml::encode($data->image_sm); ?>" style="margin-top: 23px;" alt="">
                                    </a>
                                </div>
                                
                                <div class="col-sm-5 col-xs-3 visible-sm visible-xs">
                                    <div class="row">
                                        <h5><a href="#"><?php echo CHtml::encode($data->title); ?></a></h5>
                                    </div>
                                    <div class="row">
                                         <div class="col-xs-12 visible-xs">
                                            <p>
                                            <?php 
                                            $string = CHtml::encode($data->description);
                                            $print = explode(" ", $string);
                                            $i=0;
                                            while($i<3){
                                            echo $print[$i]. " ";
                                            $i++;
                                            }?>
                                            <a href="#">Читать далее...</a>
                                                </p>
                                        </div>
                                        <div class="col-sm-12 visible-sm">
                                            <p>
                                            <?php 
                                            $string = CHtml::encode($data->description);
                                            $print = explode(" ", $string);
                                            $i=0;
                                            while($i<10){
                                            echo $print[$i]. " ";
                                            $i++;
                                            }
                                                ?><a href="#">Читать далее...</a>
                                                </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p><a href="#"><?php echo CHtml::encode($data->author_id); ?></a></p>
                                    </div>
                                </div>
                                <div class="col-md-7 visible-lg visible-md">
                                    <div class="row">
                                        <a href="#"><h3><?php echo CHtml::encode($data->title); ?></h3></a>
                                    </div>
                                    <div class="row">
                                        <p><?php 
                                            $string = CHtml::encode($data->description);
                                            $print = explode(" ", $string);
                                            $i=0;
                                            while($i<20){
                                            echo $print[$i]. " ";
                                            $i++;
                                            }
                                                ?><a href="#">Читать далее...</a>
                                            </p>
                                    </div>
                                     <div class="row">
                                         <a href="#"><p><?php echo CHtml::encode($data->author_id); ?></p></a>
                                    </div>
                                </div>    
                                 <div class="col-md-2 col-sm-4 col-xs-3 visible-lg visible-md visible-sm visible-xs">
                                     <h3><?php echo CHtml::encode($data->price); ?> $</h3>
                                 </div>                            
                        </li>
                         
                        </ul>
                    </div></div>