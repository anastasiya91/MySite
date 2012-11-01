<?php
/* @var $this SiteController */

$this->pageTitle= 'Добавление новости - Панель управления';
$this->breadcrumbs=array(
	'Добавление новости',
);
?>

<h1>Вы находитесь в панели управления сайтом <?php echo '"'.Yii::app()->name.'"'; ?></h1>
<br>
<h1>Форма добавления новости</h1>
<!---
<h1><?php //echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<p>
This is the view content for action "<?php //echo $this->action->id; ?>".
The action belongs to the controller "<?php //echo get_class($this); ?>"
in the "<?php //echo $this->module->id; ?>" module.
</p>
<p>
You may customize this page by editing <tt><?php //echo __FILE__; ?></tt>
</p>--->
<div class="form">
<?php $form=$this->beginWidget('CActiveForm'); 
$model = new News; ?>
 
    <?php echo $form->errorSummary($model); ?>
 
    <div class="row">
        <?php echo $form->label($model,'title'); ?>
        <?php echo $form->textField($model,'title') ?>
    </div>
 
    <div class="row">
        <?php echo $form->label($model,'preview'); ?>
        <?php echo $form->textField($model,'preview') ?>
    </div>
 
    <div>
        <?php
        $this->widget('ext.fckeditor.FCKEditorWidget', array(
            "model"=>$model,
              "attribute"=>'content',              
              "fckeditor"=>Yii::app()->basePath."/../ckeditor/ckeditor.php",
              "fckBasePath"=>Yii::app()->baseUrl."/ckeditor/",
              "config" => array(
            "EditorAreaCSS"=>Yii::app()->baseUrl.'/css/index.css',),    
          ));?>
    </div>
 
    <div class="row submit">
        <?php echo CHtml::submitButton('Добавление новости'); ?>
    </div>
 
<?php $this->endWidget(); ?>
</div><!-- form -->
</div>