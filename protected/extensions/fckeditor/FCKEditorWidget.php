<?php
class FCKEditorWidget extends CInputWidget
{
    public $fckeditor;
    public $fckBasePath;    
    public $config;

    public function run()
    {
        if (!isset($this->fckeditor)){
            throw new CHttpException(500,'Parameter "fckeditor" has to be set!');
        }
        if (!isset($this->fckBasePath)){
            throw new CHttpException(500,'Parameter "fckBasePath" has to be set!');
        }
        if (!$this->hasModel() && !isset($this->name)) {
            throw new CHttpException(500,'Parameters "model" and "attribute" or "name" have to be set!');
        }        
        $this->render('fCKEditorWidget',array(
            "fckeditor"=>$this->fckeditor,
            "fckBasePath"=>$this->fckBasePath,
            "model"=>$this->model,
            "attribute"=>$this->attribute,
            "name"=>$this->name,
            "value"=>$this->value,            
            "config"=>$this->config,
        ));
    }
}