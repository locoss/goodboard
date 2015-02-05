<?php
/* @var $this ProductsController */
/* @var $data Products */
?>



<div class="view">

 <!--Вывод продуктов-->

 <div id="content">
                <div class="col-1">
<ul>
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-4 visible-lg visible-md visible-sm visible-xs">
                                    
                                    <a href="<?=Yii::app()->createUrl("products/view&id=$data->id");?>">
                                        <img src="<?php echo CHtml::encode($data->image_big); ?>" style="margin-top: 23px; width: 80%;" alt="">
                                    </a>
                                </div>
                                
                                <div class="col-sm-5 col-xs-3 visible-sm visible-xs">
                                    <div class="row">
                                        <h5><a href="<?=Yii::app()->createUrl("products/view&id=$data->id");?>"><?php echo CHtml::encode($data->title); ?></a></h5>
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
                                            <a href="<?=Yii::app()->createUrl("users/view&id=$data->id");?>">... more...</a>
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
                                                ?><a href="<?=Yii::app()->createUrl("products/view&id=$data->id");?>">... more...</a>
                                                </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p><a href="<?=Yii::app()->createUrl("products/view&id=$data->id");?>">
                                            <?php while(Users::model()->id==CHtml::encode($data->author_id))
                                            {
                                            echo Users::model()->email;} ?></a></p>
                                    </div>
                                </div>
                                <div class="col-md-7 visible-lg visible-md">
                                    <div class="row">
                                        <a href="<?=Yii::app()->createUrl("products/view&id=$data->id");?>"><h3><?php echo CHtml::encode($data->title); ?></h3></a>
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
                                                ?><a href="<?=Yii::app()->createUrl("products/view&id=$data->id");?>">... more...</a>
                                            </p>
                                    </div>
                                     <div class="row">
                                         <a href="<?=Yii::app()->createUrl("users/view&id=$data->author_id");?>"><p>
                                             <?php  echo $data->author_email . " | " . $data->date;?></p></a>
                                    </div>
                                </div>    
                                 <div class="col-md-2 col-sm-4 col-xs-3 visible-lg visible-md visible-sm visible-xs">
                                     <h3><?php echo CHtml::encode($data->price); ?> $</h3>
                                 </div>
                                
                        </li>
                         
                        </ul>
                </div></div></div>
     
     