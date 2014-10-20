<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" media="screen" />	
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" media="screen" />
        
    <!--<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">-->
    
  </head>
  <body>
      
      <!--Навигация-->
      
        

      <div class="navbar navbar-default navbar-fixed-top raised">
 
                  <div class="container">
                      <div class="navbar-header"> 
                         <a class="navbar-brand" href="<?=Yii::app()->createUrl("site/index/");?>"><p>Good&Co's CALLBOARD</p></a>
                        <!--Кнопка навигации для sm и xs экранов-->
                         <button type="button" class="navbar-toggle" 
                                data-toggle="collapse" 
                                data-target="#responsive-menu">
                            <span class="sr-only">Open navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                    
                        </button>
                          
                      </div>
                      
                      <!--Сама навигация-->
                      
                      <div class="collapse navbar-collapse" id="responsive-menu"> 
                          <ul class="nav navbar-nav navbar-right">
                              <li><a class = "divider" href="<?=Yii::app()->createUrl("products/index/");?>">Go Board!</a></li>
                              
                                  <?php if (!Yii::app()->user->isGuest): ?>
                              <li>
                                  <!--Корзина-->
                                <ul class="">
                                    
                                    <li class="">
                                        <span class="badge">0</span>
                                        <a href="#"><p><span class="glyphicon glyphicon-trash"></span></p>   </a>
                                    </li>
                                </ul>
                              </li>
                              <?php endif; ?>
                              <?php if (Yii::app()->user->isGuest): ?>
							  
							  
                              <!--Вход \ Регистрация \ Панель пользователя-->
							  
                              <li><a href="<?=Yii::app()->createUrl("dashboard/login/");?>">Sign in</a></li>
                              <li><a href="<?=Yii::app()->createUrl("users/create/");?>">Sign up</a></li>
							   <?php else: ?>
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                      Hello, <?php echo Yii::app()->user->username;
                                                    $str = Yii::app()->user->id;?>
                                    <b class="caret"></b>
                                  </a>
                                  <ul class="dropdown-menu">
                                      <li><a href="<?=Yii::app()->createUrl("users/view&id=$str");?>">Profile</a></li>
                                      <li><a href="<?=Yii::app()->createUrl("products/admin/");?>">My goods</a></li>
                                      <li class="divider"></li>
                                      <li><a href="<?=Yii::app()->createUrl("dashboard/logout/");?>">Logout</a></li>
                                  </ul>
                              </li>
                             <?php endif;?>
                          </ul>
                      </div>
                  </div>
      </div>   
     </div>
      
      <?php echo $content; ?>
      

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Good&Co<br/>
		All Rights Reserved.<br/>
		Powered by <a href="http://facebook.com/o.hudenko" target="_blank">Oleksandr Hudenko</a>
	</div><!--footer-->
          
           
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>