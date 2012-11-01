<?php
/* @var $this SiteController */

$this->pageTitle= 'CkEditor'.' - '. Yii::app()->name;
$this->breadcrumbs=array(
	$this->breadcrumbs
);
?>
<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>
<?php echo 'Добро пожаловать в CkEditor';?>
<p>
    Для добавление новости, перейдите  <a href="<?php Yii::app()->baseUrl ?>/mysite/index.php?r=panel/ckeditor/newsadd">сюда</a>.
</p>
<p>
    Для добавление страницы, перейдите <a href="">сюда</a>.
</p>
<p>
This is the view content for action "<?php echo $this->action->id; ?>".
The action belongs to the controller "<?php echo get_class($this); ?>"
in the "<?php echo $this->module->id; ?>" module.
</p>
<p>
You may customize this page by editing <tt><?php echo __FILE__; ?></tt>
</p>
