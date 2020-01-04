<?php

use trntv\filekit\widget\Upload;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\base\MultiModel */
/* @var $form yii\widgets\ActiveForm */

$this->title = Yii::t('frontend', 'User Settings')
?>

<div class="user-profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <h2><?php echo Yii::t('frontend', 'Profile settings') ?></h2>

    <?php echo $form->field($model->getModel('profile'), 'picture')->widget(
        Upload::class,
        [
            'url' => ['avatar-upload']
        ]
    )?>

    <?php echo $form->field($model->getModel('profile'), 'firstname')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model->getModel('profile'), 'middlename')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model->getModel('profile'), 'lastname')->textInput(['maxlength' => 255]) ?>

    <?php echo $form->field($model->getModel('profile'), 'gender')->dropDownlist([
     'M' => 'Masculino',
     'F' => 'Feminino',
    ], ['prompt' => '']) ?>

    <h2>Configurações da Conta</h2>

    <?php echo $form->field($model->getModel('account'), 'username') ?>

    <?php echo $form->field($model->getModel('account'), 'email') ?>

    <?php echo $form->field($model->getModel('account'), 'password')->passwordInput() ?>

    <?php echo $form->field($model->getModel('account'), 'password_confirm')->passwordInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton('Atualizar', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
