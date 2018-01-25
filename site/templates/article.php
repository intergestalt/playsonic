<?php snippet('header') ?>

  <main class="main" role="main">
    
    <article class="article single wrap">

      <header class="article-header">
        <h2><?= $page->title()->html() ?></h2>
        <?php snippet('article-meta', $page) ?>
      </header>
      
      <?php snippet('coverimage', $page) ?>
      <?php snippet('article-attachments-list', $page) ?>
      
      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>
      
    </article>
    
    <?php snippet('prevnext', ['flip' => true]) ?>
    
  </main>

<?php snippet('footer') ?>