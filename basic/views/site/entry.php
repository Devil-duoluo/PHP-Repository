<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?=html::cssFile('@web/css/test.css')?>
<?=html::jsFile('web/js/js.js')?>
<?=html::img('@web/img/1.jpg',array('height'=>'500px','width'=>'500px'))?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->label('用户名') ?>

<?= $form->field($model, 'email')->label('邮箱') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>