<?php snippet('header') ?>

  <main class="main" role="main">
    
    <article class="article single wrap">

      <header class="article-header">
        <?php snippet('event-times', ['event' => $page]) ?>
        <p class="event-artist"><?= $page->artists()->html() ?></p>
        <h2><?= $page->title()->html() ?></h2>
        
      </header>
      
      <div class="text">
        <?= $page->description()->kirbytext() ?>
      </div>

      <div class="text">
        <?= $page->bio()->kirbytext() ?>
      </div>

      <?php if($page->category() == "focus") : ?>
        <a href="<?php echo url('teams/' . $page->focus()); ?>"><?= l::get('more_info') . " " . ucfirst($page->focus()) ?></a>
      <?php endif ?>
      
    </article>
    
  </main>

<?php snippet('footer') ?>