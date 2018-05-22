<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\product\models\Product */
/* @var $form ActiveForm */
?>
<div class="product-index">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'trademark') ?>
        <?= $form->field($model, 'barcodeno') ?>
        <?= $form->field($model, 'count') ?>
        <?= $form->field($model, 'price') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- product-index -->
