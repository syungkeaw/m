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
        $token  = new ApiToken(self::API_KEY);
        $client = new Client($token, [
            'secure' => false,
        ]);

        $configRepository = new \Tmdb\Repository\ConfigurationRepository($client);
        $config = $configRepository->load();

        $imageHelper = new \Tmdb\Helper\ImageHelper($config);
        $repository  = new \Tmdb\Repository\MovieRepository($client);

        $newMovie = $repository->load($id);

        $movie = Movie::findOne(['tmdb_id' => $id]);

        if(!isset($movie) || empty($movie)){
            $movie = new Movie();
            $movie->tmdb_id = $newMovie->getId();
            $movie->imdb_id = $newMovie->getImdbId(); 
        }

        $movie->title = $newMovie->getTitle();
        $movie->overview = $newMovie->getOverview();
        $movie->homepage = $newMovie->getHomepage();
        $movie->poster = $newMovie->getPosterPath();
        $movie->runtime = $newMovie->getRuntime();

        $arrayTemp = [];
        foreach($newMovie->getGenres() as $genre){
            $arrayTemp[$genre->getId()] = $genre->getName();
        }
        $movie->genre = $arrayTemp;

        $arrayTemp = [];
        foreach($newMovie->getImages() as $image) {
            $arrayTemp[] = $image->getFilePath();
        }
        $movie->image = $arrayTemp;

        $arrayTemp = [];
        foreach ($newMovie->getVideos() as $trailer) {
            $arrayTemp[] = $trailer->getUrl();
        }
        $movie->trailer = $arrayTemp;

        $arrayTemp = [];
        foreach($newMovie->getCredits()->getCast() as $key => $person){
            $arrayTemp[$key]['tmdb_id'] = $person->getId();
            $arrayTemp[$key]['full_name'] = $person->getName();
            $arrayTemp[$key]['image_path'] = $person->getProfilePath();
            $arrayTemp[$key]['charecter'] = $person->getCharacter();
            $arrayTemp[$key]['job'] = '';
            $arrayTemp[$key]['type'] = 1;
        }
        foreach($newMovie->getCredits()->getCrew() as $key => $person){
            $arrayTemp[$key]['tmdb_id'] = $person->getId();
            $arrayTemp[$key]['full_name'] = $person->getName();
            $arrayTemp[$key]['image_path'] = $person->getProfilePath();
            $arrayTemp[$key]['charecter'] = '';
            $arrayTemp[$key]['job'] = $person->getJob();
            $arrayTemp[$key]['type'] = 2;
        }
        $movie->people = $arrayTemp;

        $movie->save();

        // echo '<pre>',print_r($movie);
        // echo '<pre>',print_r($movie->getErrors());
        // die;

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
