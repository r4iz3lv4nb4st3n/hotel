<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TbPengunjung $model */

$this->title = 'Create New Visitor';
$this->params['breadcrumbs'][] = ['label' => 'Tb Pengunjungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-pengunjung-create content">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
