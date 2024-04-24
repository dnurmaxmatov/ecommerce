<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
?>
<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background-image: url('https://phantom-marca.unidadeditorial.es/0904659b1f78b2c099e4af77045c3ca3/resize/828/f/jpg/assets/multimedia/imagenes/2024/04/23/17139070638985.jpg')"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
            </div>
            <?php $form = ActiveForm::begin(['id' => 'login-form', "class"=>'user']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true, "class"=>"form-control form-control-user"]) ?>

            <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control form-control-user']) ?>

            <?= $form->field($model, 'rememberMe')->checkbox()?>

            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>

            <?php ActiveForm::end(); ?>
            <hr>
        </div>
    </div>
</div>

