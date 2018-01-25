<?php snippet('header') ?>

  <main class="main" role="main">

    <h1><?= $page->title()->html() ?></h1>

      <?php
      // This page uses a separate controller to set variables, which can be used
      // within this template file. This results in less logic in your templates,
      // making them more readable. Learn more about controllers at:
      // https://getkirby.com/docs/developer-guide/advanced/controllers
      if($pagination->page() == 1):
      ?>
        <div class="intro text">
          <?= $page->text()->kirbytext() ?>
        </div>
      <?php endif ?>

    <section class="wrap">
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>

          <article class="article index">

            <header class="article-header">
              <h2 class="article-title">
                <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              </h2>

              
              <?php snippet('article-meta', $article) ?>
            </header>

            <?php snippet('coverimage', $article) ?>

            <div class="text">
              <p>
                <?= $article->text()->kirbytext()->excerpt(30, 'words') ?>
                <a href="<?= $article->url() ?>" class="article-more"><?php echo l::get('blog_read_more') ?></a>
              </p>
            </div>

          </article>

        <?php endforeach ?>
      <?php else: ?>
        <p><?php echo l::get('blog_empty') ?></p>
      <?php endif ?>
    </section>

    <?php snippet('pagination') ?>

  </main>

<?php snippet('footer') ?>