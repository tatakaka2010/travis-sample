<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 * @var \App\Model\Entity\Answer[]|\Cake\Collection\CollectionInterface $answers
 * @var \App\Model\Entity\Answer $newAnswer
 */
?>
<div class="content">
    <ul>
        <li><?= $this->Html->link('質問一覧へ', ['action' => 'index']) ?></li>
    </ul>
    <table class="vertical-table">
        <tr>
            <th scope="row">質問内容</th>
            <td><?= h($question->body) ?></td>
        </tr>
        <tr>
            <th scope="row">ユーザー</th>
            <td><?= h($question->user->nickname) ?></td>
        </tr>
        <tr>
            <th scope="row">登録日時</th>
            <td><?= h($question->created) ?></td>
        </tr>
    </table>
    <?php if ($answers->count() > 0): ?>
    <table>
        <thead>
        <tr>
            <th>回答内容</th>
            <th>ユーザー</th>
            <th>登録日時</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php else: ?>
            <p>回答はまだありません</p>
        <?php endif; ?>
        <?php foreach ($answers as $answer): ?>
            <tr>
                <td><?= h($answer->body) ?></td>
                <td><?= h($answer->user->nickname) ?></td>
                <td><?= h($answer->created) ?></td>
                <td class="actions">
                    <?php if ($this->request->getSession()->read('Auth.User.id') === $answer->user_id): ?>
                        <?= $this->Form->postLink('削除する',
                            ['controller' => 'Answers', 'action' => 'delete', $answer->id],
                            ['confirm' => '回答を削除します。よろしいですか？']) ?>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php if ($this->request->getSession()->read('Auth.User.id')): ?>
        <?php if (count($answers) >= \App\Controller\AnswersController::ANSWER_UPPER_LIMIT): ?>
            <p>回答数が上限に達しているためこれ以上回答するは出来ません</p>
        <?php else: ?>
            <?= $this->Form->create($newAnswer, ['url' => '/answers/add']) ?>
            <fieldset>
                <legend>回答投稿</legend>
                <?php
                echo $this->Form->control('body', [
                    'type' => 'textarea',
                    'label' => false,
                    'value' => '',
                    'maxLength' => 200
                ]);
                echo $this->Form->hidden('question_id', ['value' => $question->id]);
                ?>
            </fieldset>
            <?= $this->Form->button('投稿する') ?>
            <?= $this->Form->end() ?>
        <?php endif; ?>
    <?php else: ?>
        <p>回答をするには<?= $this->Html->link('ログイン', ['controller' => 'Login', 'action' => 'index']) ?>が必要です</p>
    <?php endif; ?>
</div>
