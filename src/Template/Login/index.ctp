<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="content">
    <?= $this->Form->create() ?>
    <?= $this->Form->control('username', ['label' => 'ユーザー名', 'maxLength' => 50]) ?>
    <?= $this->Form->control('password', ['label' => 'パスワード', 'maxLength' => 50]) ?>
    <?= $this->Form->button('ログイン') ?>
    <?= $this->Form->end() ?>
</div>
