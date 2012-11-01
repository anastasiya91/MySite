 <?php

/**
 * This is the model class for table "{{news}}".
 *
 * The followings are the available columns in table '{{news}}':
 * @property integer $id
 * @property string $title
 * @property string $preview
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 * @property integer $user_id
 */
class News extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return News the static model class
     */
    
        public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{news}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, preview, content, created_at, user_id', 'required'),
            array('user_id', 'numerical', 'integerOnly'=>true),
            array('title, preview', 'length', 'max'=>255),
            array('updated_at', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, title, preview, content, created_at, updated_at, user_id', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'title' => 'Title',
            'preview' => 'Preview',
            'content' => 'Content',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->compare('title',$this->title,true);
        $criteria->compare('preview',$this->preview,true);
        $criteria->compare('content',$this->content,true);
        $criteria->compare('created_at',$this->created_at,true);
        $criteria->compare('updated_at',$this->updated_at,true);
        $criteria->compare('user_id',$this->user_id);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
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
   /* public function addToBD ($title, $preview, $content){
            $news=new News;
            $news->title=$title;
            $news->preview=$preview;
            //Добавление контента
            $news->content=$content;
            $news->updated_at=  new CDbExpression('NOW()');
            //$news->user_id=
            if($news->save())
                {
        // данные корректны и успешно добавлены/обновлены
                   echo 'Новость успешно добавлена!';
                }
            else
                {
        // данные некорректны, сообщения об ошибках могут быть получены путём вызова метода getErrors()
        echo 'Возникли ошибки. Новость не добавлена! Проверьте правильность введённых данных!';
        echo $this->getErrors();
                }
    }*/
} 
?>