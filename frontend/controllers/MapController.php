<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Scene;
use common\models\Group;
use common\models\Character;
use common\models\Story;

/**
 * Movie controller
 */
class MapController extends Controller
{

    public function actionIndex($id)
    {
        $story = Story::findOne(['id' => $id]);

    	$jsonScenes = [
    		'panels' => 20,
    		'scenes' => [],
    	];

        $panels = 0;

        foreach($story->scenes as $scene){
            $jsonScenes['scenes'][] = [
                'duration' => 5,
                'start' => $panels,
                'chars' => array_map(function($v){
                        return intval($v);
                    }, json_decode($scene->chars)),
                'id' => $scene->id-1,
                'scene_name' => $scene->scene_name,
            ];

            $panels+=5;
        }    

        $jsonScenes['panels'] = $panels;

        // echo '<pre>', print_r($jsonScenes);
        // die;

        $xmlCharacter = '<characters>';
        foreach($story->characters as $char){
            $xmlCharacter .= '<character group="' .$char->group_id. '" id="' .$char->id. '" name="' .$char->char_name. '" />';
        }
        $xmlCharacter .= '</characters>';


    	$jsonScenes = json_encode($jsonScenes);

    	// echo $jsonScenes;
    	// die;

        return $this->render('index', 
        	compact('jsonScenes', 'xmlCharacter')
        );
    }
}
