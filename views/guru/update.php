<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblGuru */

$this->title = 'Update Tbl Guru: ' . $model->id_guru;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Gurus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_guru, 'url' => ['view', 'id' => $model->id_guru]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-guru-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
