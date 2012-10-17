<?php
require_once($fckeditor);

if (!empty($model) && !empty($attribute))
{
    $oFCKeditor = new CKeditor(get_class($model).'['.$attribute.']');        
}
$oFCKeditor->basePath = $fckBasePath;
$oFCKeditor->editor($name,$value,$config);