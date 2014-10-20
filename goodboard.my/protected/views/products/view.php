

<h1 style="padding: 30px;">Your choice is <?php echo $model->title; ?></h1>


<div class="container-fluid">
                    <div class="row" style="padding: 0px 0px 20px 150px"> 
                        <div class="selectation">
                            <div class="col-md-8"><img src="
                                <?php echo $model->image_big;?>" alt=""></div>
                            <div class="col-md-4">
                                <div class="row"><h3><?php echo $model->title; ?></h3></div>
                                <div class="row" style="height: 260px">
                                    <p><?php echo $model->description; ?></p>
                                    
                                </div>
                                <div class="row" style="height: 80px">
                                    <h3><?php echo $model->price; ?> / -20%</h3>
                                </div>
                                <div class="row">
                                    <p>
                                        <button type="button" class="btn btn-primary btn-lg">Add</button>
                                        <button type="button" class="btn btn-default btn-lg">Back</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            


