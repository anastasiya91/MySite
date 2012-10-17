<?php

class NewsController extends CController {
    
  
    
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('Index', 'View'),
                'users'=>array('admin', 'poster'),
            ),
            array('allow',  // deny all users
                'actions'=>array('Index', 'View'),
                'users'=>array('*'),
            ),
        );
    }
}