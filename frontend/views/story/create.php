<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Story */

$this->title = 'Create Story';
$this->params['breadcrumbs'][] = ['label' => 'Stories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="story-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
