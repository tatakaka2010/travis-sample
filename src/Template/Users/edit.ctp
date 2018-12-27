<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="content">
    <ul>
        <li><?= $this->Html->link('質問一覧へ', ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link('パスワードを更新する', ['action' => 'password']) ?></li>
    </ul>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend>ユーザー編集</legend>
        <?php
        echo $this->Form->control('username', ['label' => 'ユーザー名', 'maxLength' => 50]);
        echo $this->Form->control('nickname', ['label' => 'ニックネーム', 'maxLength' => 50]);
        ?>
    </fieldset>
    <?= $this->Form->button('更新する') ?>
    <?= $this->Form->end() ?>
</div>
