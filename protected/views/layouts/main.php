<?php /* @var $this Controller */ ?>
<html lang="en">
<head>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" type="text/css" media="all">
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon-replace.js"></script>	
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/Myriad_Pro_300.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page1">
<div class="body3"></div>
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div id="logo_box">
				<h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>
			</div>
                    <nav>
                        <?php $this->widget('zii.widgets.CMenu',array(
                            'htmlOptions' => array( 'class' => 'menu', 'id'=>''),
			'items'=>array(
				array('label'=>'Главная', 'url'=>array('/site/index'), 'itemOptions' => array('id' => 'menu_active', 'class'=>'')),
                                array('label'=>'Фотогалерея', 'url'=>array('/site/foto')),
				array('label'=>'О нас', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Связь', 'url'=>array('/site/contact'), 'itemOptions' => array('class' => 'bg_none')),
				array('label'=>'Вход', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Выход ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
                    </nav>
                    <div class="wrapper">
				<div class="text1">Your Business Needs Fresh Ideas?</div>
				<div class="text2">We work for your Profit</div>
				<ul id="icons">
					<li><span>Follow Us!</span></li>
					<li><a href="#"><img src="images/icon1.jpg" alt=""></a></li>
					<li><a href="#"><img src="images/icon2.jpg" alt=""></a></li>
					<li><a href="#"><img src="images/icon3.jpg" alt=""></a></li>
				</ul>
			</div>
		</header>
<!-- / header -->
	</div>
</div>
<div class="body2">
	<div class="main">
<?php echo $content; ?>
</div>
</div>
<div class="main">
<!-- footer -->
	<footer>
		<div class="wrapper">
			<article class="col1">
				<div class="pad">
					<h2>Protecting Your Info</h2>
					<p>The latest on keeping your personal info safe and secure.</p>
					<ul class="list1">
						<li><a href="#">Security Alerts</a></li>
						<li><a href="#">Avoiding Scams</a></li>
					</ul>
				</div>
			</article>
			<article class="col2 pad_left1">
				<div class="pad">
					<div class="wrapper">
						<article class="cols">
							<h2>Newsletter</h2>
							<form id="form_1" action="" method="post">
								<div>
									<div class="bg"><input class="input" type="text" value="Enter email here" onblur="if(this.value=='') this.value='Enter email here'" onFocus="if(this.value =='Enter email here' ) this.value=''" /></div>
									<a href="#" class="submit" onClick="document.getElementById('form_1').submit()"><span><span>Submit</span></span></a>
									<a href="#">Unsucscribe</a>
								</div>
							</form>
						</article>
						<article class="cols pad_left1">
							<h2>Customer Log In</h2>
							<form id="form_2" action="" method="post">
								<div>
									<div class="bg left"><input class="input input1" type="text" value="Enter user ID here"	onblur="if(this.value=='') this.value='Enter user ID here'" onFocus="if(this.value =='Enter user ID here' ) this.value=''" /></div>
									<div class="bg right"><input class="input input2" type="password" value="••••••••••" onblur="if(this.value=='') this.value='••••••••••'" onFocus="if(this.value =='••••••••••' ) this.value=''"	 /></div>
									<a href="#" class="submit" onClick="document.getElementById('form_2').submit()"><span><span>login</span></span></a>
									<a href="#">Forgot password?</a> &nbsp;	<a href="#">Sign up</a>
								</div>
							</form>
						</article>
					</div>
				</div>	
			</article>
		</div>
		<div class="under2"></div>
		<div class="wrapper font_size">
			<div class="pad">
				Website template designed by <a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a><br>
				3D Models provided by <a href="http://www.templates.com/product/3d-models/" target="_blank" rel="nofollow">www.templates.com</a>
			</div>
		</div>
	</footer>
<!-- / footer -->
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>