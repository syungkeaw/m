<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use common\models\Story;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Group */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'group_name')->textInput(['maxlength' => true]) ?>
    
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

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
