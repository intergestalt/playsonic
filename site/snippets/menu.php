<nav>

  <a href="/<?= $site->language()?>"><div class="main-icon"></div></a>
  <div class="menu-icon"></div>

  <div class="menu-container">
    
    <ul class="main-menu">
      <?php foreach($pages->visible() as $item): ?>
      <li class="menu-item<?= r($item->isOpen(), ' active') ?>">
        <?php if(!$item->isOpen()) : ?>
          <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        <?php else : ?>
          <span><?= $item->title()->html() ?></span>
        <?php endif ?>
      </li>
      <?php endforeach ?>
    </ul>
    
    <ul class="language-select">
      <?php foreach($site->languages() as $language): ?>
        <?php if($site->language() == $language) : ?>
          <li class="active"><span><?php echo html($language->code()) ?></span>
        <?php else : ?>
          <li>
            <a href="<?php echo $page->url($language->code()) ?>">
              <?php echo html($language->code()) ?>
            </a>
          </li>
        <?php endif ?>
      <?php endforeach ?>
    </ul>
  
  </div>

</nav>