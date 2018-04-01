<?php snippet('header') ?>

  <main class="main" role="main">
    
    <article class="article single wrap event">

      <header class="article-header">
        <h2><?= $page->title()->html() ?></h2>        
      </header>
      
      <div class="text description">
        <?= $page->short_description()->kirbytext() ?>
      </div>

      <div class="text">
        <?= $page->description()->kirbytext() ?>
      </div>

      <?php snippet('event-times', ['event' => $page]) ?>

      <div class="text bio">
        <?= $page->bio()->kirbytext() ?>
      </div>

      <?php if($page->category() == "focus") : ?>
        <a href="<?php echo url('teams/' . $page->focus()); ?>"><?= l::get('more_info') . " " . $page->focus() ?></a>
      <?php endif ?>

      <p><a href="<?= $page->parent()->url() ?>"><?= l::get("back_to_program") ?></a></p>
    
    </article>
    
  </main>

<?php snippet('footer') ?>