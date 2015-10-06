<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use common\models\Movie;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use common\components\TmdbHelper;

/**
 * Movie controller
 */
class MovieController extends Controller
{

    public function actionIndex($id, $name)
    {

        $movie = Movie::findOne(['tmdb_id' => $id]);

        if(!isset($movie) || empty($movie)){
            echo 'create new<br>';
            $movie = TmdbHelper::createNewMovie($id);
        }

        // echo '<pre>', print_r($movie->image[0]->path);
        // die;
        return $this->render('index', [
            'movie'=>$movie,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function actionSearch($query)
    {
        // $this->layout = "layoutName";
        // $this->layout('folder/namefile')
        return $this->render('search', ['query'=>$query]);
    }
}
