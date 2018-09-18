<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/21
 * Time: 22:56
 */
namespace app\controllers;

use yii\web\Controller;

class ProductController extends Controller
{
    public function actionIndex()
    {


        $this->layout = 'layout2';
        return $this->render('index');
    }

    public function actionDetail()
    {
        $this->layout = 'layout2';
        return  $this->render('detail');
    }

}
