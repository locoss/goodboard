

<h1 style="padding: 50px 50px 10px 50px;">Your choice is <?php echo $model->title; ?></h1>


<div class="container">
                    <div class="row" style="padding: 0px 0px 0px 0px"> 
                        <div class="selectation">
                            <div class="col-md-8"><img src="
                                <?php echo $model->image_big;?>" style="" alt=""></div>
                            <div class="col-md-4">
                                <div class="row"><h3><?php echo $model->title; ?></h3></div>
                                <div class="row" style="height: 210px">
                                    <p><?php echo $model->description; ?></p>
                                    
                                </div>
                                <div class="row" style="height: 100px">
                                    Price:
                                    <h3><?php echo $model->price; ?>$ / -20%</h3>
                                </div>
                                <div class="row" style="height: 30px">
                                    <p><?php echo "Contact author by email: " . $model->author_email; ?></p>
                                </div>
                                <?php if(isset(yii::app()->user->id)):?>
                                <div class="row">
                                    <p>
                                        <button type="button" class="btn btn-primary btn-lg">Add</button>
                                        <button type="button" class="btn btn-default btn-lg">Back</button>
                                    </p>
                                </div>
                                <?php else:?>
                                <div class="row">
                                    <p>
                                        <a href="<?php echo yii::app()->createUrl("dashboard/login/");?>"><button type="button" class="btn btn-primary btn-lg">Sign In</button></a>
                                        <a href="<?php echo yii::app()->createUrl("users/create/");?>"><button type="button" class="btn btn-default btn-lg">Sign Up</button></a>
                                    </p>
                                </div>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
                
            


