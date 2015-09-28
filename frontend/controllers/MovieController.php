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
use Tmdb\ApiToken;
use Tmdb\Client;


/**
 * Movie controller
 */
class MovieController extends Controller
{
    // Mine'd8d63599c8150e8613bfe18d54722457';
    // search : '3b03c053f34ff11cfdc0d26b06ac95d1'  
    // '3d197569c7f13f60d61a7d61d5c83427'
    // f22e6ce68f5e5002e71c20bcba477e7d
    // 470fd2ec8853e25d2f8d86f685d2270e
    CONST API_KEY = 'd8d63599c8150e8613bfe18d54722457'; //main

    public function actionIndex($id, $name)
    {
        // $token  = new ApiToken(self::API_KEY);
        // $client = new Client($token, [
        //     'secure' => false,
        // ]);

        // $movie = $client->getMoviesApi()->getMovie(37973);

        // echo '<pre>',print_r($movie);
        $movie = new Movie();
        $movie->title = 'xxxsdf';
        $movie->tmdb_id = '123';
        $movie->imdb_id = 'tt11112';
        $movie->save();

        echo '<pre>',print_r($movie->getErrors());
        die;

        $dataProvider['id'] = $id;
        $dataProvider['name'] = $name;
        return $this->render('index', ['dataProvider'=>$dataProvider]);
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
