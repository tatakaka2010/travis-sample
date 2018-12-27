<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="content">
    <ul>
        <li><?= $this->Html->link('ログイン画面へ', ['controller' => 'Login', 'action' => 'index']) ?></li>
    </ul>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend>ユーザー登録</legend>
        <?php
        echo $this->Form->control('username', ['label' => 'ユーザー名', 'maxLength' => 50]);
        echo $this->Form->control('password', ['label' => 'パスワード', 'value' => '', 'maxLength' => 50]);
        echo $this->Form->control('password_confirm', [
            'label' => 'パスワード確認用',
            'value' => '',
            'required' => true,
            'type' => 'password',
            'maxLength' => 50
        ]);
        echo $this->Form->control('nickname', ['label' => 'ニックネーム', 'maxLength' => 50]);
        ?>
    </fieldset>
    <?= $this->Form->button('登録する') ?>
    <?= $this->Form->end() ?>
</div>
