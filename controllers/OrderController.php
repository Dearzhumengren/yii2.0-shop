<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/22
 * Time: 20:56
 */
namespace app\controllers;

use yii\web\Controller;

class OrderController extends Controller
{


    public function actionIndex()
    {

        $this->layout = 'layout2';
        return $this->render('index');
    }


    public function actionCheck()
    {

        $this->layout = 'layout1';
        return $this->render('check');
    }


}