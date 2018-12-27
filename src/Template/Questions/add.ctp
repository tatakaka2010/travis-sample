<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<div class="content">
    <ul>
        <li><?= $this->Html->link('質問一覧へ', ['action' => 'index']) ?></li>
    </ul>
    <?= $this->Form->create($question) ?>
    <fieldset>
        <legend>質問投稿</legend>
        <?php
        echo $this->Form->control('body', [
            'type' => 'textarea',
            'label' => false,
            'maxLength' => 200
        ]);
        ?>
    </fieldset>
    <?= $this->Form->button('投稿する') ?>
    <?= $this->Form->end() ?>
</div>
