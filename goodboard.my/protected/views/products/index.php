<?php
/* @var $this ProductsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Products',
);

?>

 <!--Название страницы-->
      
      <div class="container" style="padding-top: 50px; padding-bottom: 20px;">
          <div class="row">
              <h1>Sign up and click to choose any goods</h1>
          </div>
      

          <div class="row" style="padding-top: 20px;">
              <span style="padding-right: 30px;"><strong>Sort by:</strong></span>
                <div class="btn-group btn-group">
                    
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                             Title
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a class="glyphicon glyphicon-sort-by-attributes" 
                                       href="<?=Yii::app()->createUrl("products/index&Products_sort=title");?>"> 
                                    </a>
                                </li>
                                <li><a class="glyphicon glyphicon-sort-by-attributes-alt" 
                                        href="<?=Yii::app()->createUrl("products/index&Products_sort=title.desc");?>">
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                             Date
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a class="glyphicon glyphicon-sort-by-attributes" 
                                       href="<?=Yii::app()->createUrl("products/index&Products_sort=date");?>"> 
                                    </a>
                                </li>
                                <li><a class="glyphicon glyphicon-sort-by-attributes-alt" 
                                        href="<?=Yii::app()->createUrl("products/index&Products_sort=date.desc");?>">
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                             Price
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a class="glyphicon glyphicon-sort-by-attributes" 
                                       href="<?=Yii::app()->createUrl("products/index&Products_sort=price");?>"> 
                                    </a>
                                </li>
                                <li><a class="glyphicon glyphicon-sort-by-attributes-alt" 
                                        href="<?=Yii::app()->createUrl("products/index&Products_sort=price.desc");?>">
                                    </a>
                                </li>
                            </ul>
                    </div>
                    
                </div>
              
          </div>
     


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?> 
      <a class="scrollup-l" href="#"></a>
      </div>