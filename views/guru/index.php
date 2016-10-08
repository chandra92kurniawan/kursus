<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchGuru */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Gurus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-guru-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Guru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_guru',
            'nama_guru',
            'alamat:ntext',
            'email:email',
            'no_hp',
            // 'create_by',
            // 'create_date',
            // 'update_by',
            // 'update_date',
            // 'id_user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
