<?php 
use yii\helpers\Html;

$this->registerJs("
	var jsonScenes = '" .$jsonScenes. "';
	var xmlCharacter = '" .$xmlCharacter. "';

	dir = 'js/narrative/';
	draw_chart('Lucky Luke #38, \'Ma Dalton\'', 'luckyluke6', dir + 'luckyluke6_narrative', true, false, false, jsonScenes, xmlCharacter);

");

$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.14/d3.min.js');
// $this->registercssFile('http://csclub.uwaterloo.ca/~n2iskand/wp-content/themes/mytheme/style.css');

$this->registerJsFile('@web/js/storyMap.js');
$this->registercssFile('@web/css/storyMap.css');


?>

<h1>One Piece Would. 
	<?= html::a('story', ['/story/index'], ['class' => 'btn btn-danger']) ?>
	<?= html::a('scene', ['/scene/create'], ['class' => 'btn btn-primary']) ?>
	<?= html::a('group', ['/group/create'], ['class' => 'btn btn-success']) ?>
	<?= html::a('char', ['/character/create'], ['class' => 'btn btn-warning']) ?>

</h1>

<p id="chart"></p>
