<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "PHP質問広場: {$this->fetch('title')}" ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<nav class="top-bar expanded" data-topbar role="navigation">
    <ul class="title-area large-3 medium-4 columns">
        <li class="name">
            <h1><a href="/">PHP質問広場</a></h1>
        </li>
    </ul>
    <div class="top-bar-section">
        <ul class="right">
            <?php if ($this->request->getSession()->read('Auth.User.id')): ?>
                <li><?= $this->Html->link($this->request->getSession()->read('Auth.User.nickname'),
                        ['controller' => 'Users', 'action' => 'edit']) ?></li>
                <li><?= $this->Html->link('ログアウト', ['controller' => 'Logout', 'action' => 'index']) ?></li>
            <?php else: ?>
                <li><?= $this->Html->link('ユーザー登録', ['controller' => 'Users', 'action' => 'add']) ?></li>
                <li><?= $this->Html->link('ログイン', ['controller' => 'Login', 'action' => 'index']) ?></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<?= $this->Flash->render() ?>
<div class="container clearfix">
    <?= $this->fetch('content') ?>
</div>
<footer>
</footer>
</body>
</html>
