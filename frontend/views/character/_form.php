<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use common\models\Story;
use common\models\Group;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Character */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="character-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'char_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'story_id')
        ->label('Story')
        ->widget(Select2::classname(), [
        'addon' => [
            'prepend' => [
                'content' => '<span class="fa fa-flag" aria-hidden="true"></span> Leaders'
            ]
        ],
        'data' => ArrayHelper::map(Story::find()->all(), 'id', 'story_name'),
        'options' => [
            'placeholder' => 'Select Story ...'
        ]
    ]); ?>

    <?= $form->field($model, 'group_id')
        ->label('Group')
        ->widget(Select2::classname(), [
        'addon' => [
            'prepend' => [
                'content' => '<span class="fa fa-flag" aria-hidden="true"></span> Leaders'
            ]
        ],
        'data' => ArrayHelper::map(Group::find()->all(), 'id', 'group_name'),
        'options' => [
            'placeholder' => 'Select Group ...'
        ]
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
