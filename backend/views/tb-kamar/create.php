<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TbKamar $model */

$this->title = 'Create New Room';
$this->params['breadcrumbs'][] = ['label' => 'Tb Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-kamar-create content">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
