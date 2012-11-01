<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class CkeditorController extends Controller {
      
    public function actionIndex(){
        $this->render('index');
    }

    public function actionNewsAdd(){
       /* $model = new News;
        if (isset($_POST['News'])){
            $model->attributes()=$_POST['News'];
        }*/
            $this->render('newsadd');
        }
        
        
        public function actionPageAdd(){
            $this->render('pageadd');
        }
    
        public function filters() {
            return array('accessControl');
        }
        
        public function accessRules() {
            return array(
            /*array('deny',
                'actions'=>array('index', 'newsadd', 'pageadd'),
                'users'=>array('*'),
            ),*/
            array('allow',
                'actions'=>array('index', 'newsadd', 'pageadd', 'delete'),
                'roles'=>array('*'),
            ),
          );
        }
}
?>
