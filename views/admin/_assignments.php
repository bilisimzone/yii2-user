<?php

/*
 * This file is part of the Coreb2c project
 *
 * (c) Coreb2c project <http://github.com/coreb2c>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use coreb2c\rbac\widgets\Assignments;

/**
 * @var yii\web\View $this
 * @var coreb2c\user\models\User $user
 */
?>

<?php $this->beginContent('@coreb2c/user/views/admin/update.php', ['user' => $user]) ?>

<?= yii\bootstrap\Alert::widget([
    'options' => [
        'class' => 'alert-info alert-dismissible',
    ],
    'body' => Yii::t('user', 'You can assign multiple roles or permissions to user by using the form below'),
]) ?>

<?= Assignments::widget(['userId' => $user->id]) ?>

<?php $this->endContent() ?>
