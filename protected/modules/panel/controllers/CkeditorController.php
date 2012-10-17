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
            $this->render('newsadd');
        }
        
        public function actionPageAdd(){
            $this->render('pageadd');
        }
}
?>
