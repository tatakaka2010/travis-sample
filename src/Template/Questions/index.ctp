<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question[]|\Cake\Collection\CollectionInterface $questions
 */
?>
<div class="content">
    <ul>
        <li><?= $this->Html->link('質問を投稿する', ['action' => 'add']) ?></li>
    </ul>
    <table>
        <thead>
        <tr>
            <th>質問内容</th>
            <th>ユーザー</th>
            <th>回答数</th>
            <th>登録日時</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($questions as $question): ?>
            <tr>
                <td><?= h($question->body) ?></td>
                <td><?= h($question->user->nickname) ?></td>
                <td><?= $this->Number->format($question->answered_count) ?></td>
                <td><?= h($question->created) ?></td>
                <td>
                    <?= $this->Html->link('詳細へ', ['action' => 'view', $question->id]) ?>
                    <?php if ($this->request->getSession()->read('Auth.User.id') === $question->user_id): ?>
                        <?= $this->Form->postLink('削除する', ['action' => 'delete', $question->id],
                            ['confirm' => '質問を削除します。よろしいですか？']) ?>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< 最初へ') ?>
            <?= $this->Paginator->prev('< 前へ') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('次へ >') ?>
            <?= $this->Paginator->last('最後へ >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => '全{{pages}}ページ中{{page}}ページ目を表示しています']) ?></p>
    </div>
</div>
