<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use common\models\Character;
use common\models\Story;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Scene */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scene-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'scene_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start')->textInput() ?>

    <?= $form->field($model, 'duration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chars')
        ->label('Character')
        ->widget(Select2::classname(), [
        'addon' => [
            'prepend' => [
                'content' => '<span class="fa fa-flag" aria-hidden="true"></span> Character'
            ]
        ],
        'data' => ArrayHelper::map(Character::find()->all(), 'id', 'char_name'),
        'options' => [
            'placeholder' => 'Select Character ...',
            'multiple' => true
        ]
    ]); ?>

    <?= $form->field($model, 'story_id')
        ->label('Story')
        ->widget(Select2::classname(), [
        'addon' => [
            'prepend' => [
                'content' => '<span class="fa fa-flag" aria-hidden="true"></span> Story'
            ]
        ],
        'data' => ArrayHelper::map(Story::find()->all(), 'id', 'story_name'),
        'options' => [
            'placeholder' => 'Select Story ...'
        ]
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
