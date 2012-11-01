<?php
/* @var $this SiteController */

$this->pageTitle= 'Панель управления'.' - '. Yii::app()->name;
$this->breadcrumbs=array(
	'Панель управления',
);
?>
<h1>Добро пожаловать в панель управления!</h1>
<p>
    Для добавления/удаления страниц и новостей, перейдите в <a href="<?php Yii::app()->baseUrl ?>/mysite/index.php?r=panel/ckeditor/">CkEditor</a>.
</p>
<p>
This is the view content for action "<?php echo $this->action->id; ?>".
The action belongs to the controller "<?php echo get_class($this); ?>"
in the "<?php echo $this->module->id; ?>" module.
</p>
<p>
You may customize this page by editing <tt><?php echo __FILE__; ?></tt>
</p>