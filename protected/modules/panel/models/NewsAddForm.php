<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class NewsAddForm extends CActiveRecord {

        
    public function rules()
	{
		return array(
			array('title, preview, content', 'required'),
		);
	}
        
    public function attributeLabels()
	{
		return array(
			'title'=>'Название',
                        'preview'=>'Краткое содержание',
                        'content'=>'Содержание',
		);
	}
        
        public function addToBD ($title, $preview, $content){
            $news=new News;
            $news->title=$title;
            $news->preview=$preview;
            //Добавление контента
            $news->content=$content;
            $news->updated_at=  new CDbExpression('NOW()');
            $news->user_id=  Yii::app()->user->id;
            if($news->save())
                {
        // данные корректны и успешно добавлены/обновлены
                  
                   return TRUE;
                }
            else
                {
        // данные некорректны, сообщения об ошибках могут быть получены путём вызова метода getErrors()
        //echo 'Возникли ошибки. Новость не добавлена! Проверьте правильность введённых данных!';
        return array(TRUE, 'Errors'=>$this->getErrors());
                }
        }
}
?>
