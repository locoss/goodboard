<?php
/* @var $this ProductsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Products',
);

/*$this->menu=array(
	array('label'=>'Create Products', 'url'=>array('create')),
	array('label'=>'Manage Products', 'url'=>array('admin')),
);*/
?>

 <!--Название страницы-->
      
      <div class="container" style="padding-top: 50px;">
          <div class="row">
              <h1>Sign up and click to choose any goods</h1>
          </div>
      

<!--стрелки paginator

      
    <div class = "container">
        <div class="row">
                <div class="col-md-6 col-md-offset-5 col-sm-offset-5 col-xs-offset-4">
                    <ul class="pagination">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>-->


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?></div>

<!--Стрелки paginator
            
            <div class="row">
                <div class="col-md-6 col-md-offset-5 col-sm-offset-5 col-xs-offset-4">
                    <ul class="pagination">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>-->
            </div></div>