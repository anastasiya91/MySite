 <?php

/**
 * This is the model class for table "{{users}}".
 *
 * The followings are the available columns in table '{{users}}':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property integer $type_us_id
 */
class Users extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Users the static model class
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
        return '{{users}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, password, email, type_us_id', 'required'),
            array('type_us_id', 'numerical', 'integerOnly'=>true),
            array('username', 'length', 'max'=>20),
            array('password', 'length', 'max'=>32),
            array('email', 'length', 'max'=>40),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, username, password, email, type_us_id', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'type_us_id' => 'Type Us',
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
        $criteria->compare('username',$this->username,true);
        $criteria->compare('password',$this->password,true);
        $criteria->compare('email',$this->email,true);
        $criteria->compare('type_us_id',$this->type_us_id);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
        public function validatePassword($password)
    {
        return $this->hashPassword($password)===$this->password;
    }
    protected function beforeSave() {
        $this->password = $this->hashPassword($this->password);
        return parent::beforeSave();
    }

    public function hashPassword($password)
    {
        return md5($password);
    }
} 