<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Movie controller
 */
class MovieController extends Controller
{
    public function actionMovie()
    {
            // CONST APIKEY = 'd8d63599c8150e8613bfe18d54722457';
            // '3d197569c7f13f60d61a7d61d5c83427'
    }

    /**
     * @inheritdoc
     */
    public function actionSearch()
    {
        echo 'actionSearch';
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}