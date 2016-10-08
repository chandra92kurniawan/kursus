<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblGuru */

$this->title = 'Create Tbl Guru';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Gurus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-guru-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
