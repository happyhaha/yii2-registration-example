<h1>Регистрация</h1>
<?php
use \yii\widgets\ActiveForm;
?>
<?php
    $form = ActiveForm::begin(['class'=>'form-horizontal']);
?>

<?= $form->field($model,'email')->textInput(['autofocus'=>true]) ?>


<?= $form->field($model,'password')->passwordInput()?>

<div>

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

<?php
    ActiveForm::end();
?>
