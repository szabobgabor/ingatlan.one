<?php
/* @var \App\Application\Article\ArticleViewModel $article */
/* @var string $contact */
?>

<div class="container article-container sidebar-layout">
    <div class="sidebar">
        <?= $contact ?>
    </div>
    <article class="contents">
        <?= $article->content ?>
    </article>
</div>
