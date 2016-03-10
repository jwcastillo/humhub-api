<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model humhub\modules\api\models\ApiUser */

$this->title = 'Create Api User';
$this->params['breadcrumbs'][] = ['label' => 'Api Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="api-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
