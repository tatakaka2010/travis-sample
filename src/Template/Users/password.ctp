<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="content">
    <ul>
        <li><?= $this->Html->link('ユーザー編集画面へ', ['action' => 'edit']) ?></li>
    </ul>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend>パスワード更新</legend>
        <?php
        echo $this->Form->control('password_current', [
            'label' => '現在のパスワード',
            'value' => '',
            'required' => true,
            'type' => 'password',
            'maxLength' => 50
        ]);
        echo $this->Form->control('password', [
            'label' => '新しいパスワード',
            'value' => '',
            'maxLength' => 50
        ]);
        echo $this->Form->control('password_confirm', [
            'label' => '新しいパスワード確認用',
            'value' => '',
            'required' => true,
            'type' => 'password',
            'maxLength' => 50
        ]);
        ?>
    </fieldset>
    <?= $this->Form->button('更新する') ?>
    <?= $this->Form->end() ?>
</div>
