<nav id="menu">

  <a href="/<?= $site->language()?>"><div class="main-icon"><?= get_svg('logo') ?></div></a>
  <div class="menu-icon"> 
    <div class="menu_open"><?= get_svg('menu_open') ?></div>
    <div class="menu_closed"><?= get_svg('menu_closed') ?></div>
    <span><?= l::get('menu') ?></span>
  </div>

  <div class="menu-container">
    
    <ul class="main-menu">
      <?php foreach($pages->visible() as $item): ?>
        <li class="menu-item<?= r($item->isOpen(), ' active') ?>">
          <?php if(!$item->isOpen() || ($item->id() == "teams") && $site->activePage()->id() != "teams") : ?>
            <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
          <?php else : ?>
            <span><?= $item->title()->html() ?></span>
          <?php endif ?>
          <?php if($item->id() == "teams") : ?>
            <ul class="team-menu">
            <?php foreach($item->children() as $team): ?>
              <?php if(!$team->isOpen()) : ?>
                <li>
                  <a href="<?= $team->url() ?>"><?= $team->team() ?></a>
                </li>
              <?php else : ?>
                <li class="active">
                  <span><?= $team->team() ?></span>
                </li>
              <?php endif ?>
            <?php endforeach ?>
            </ul>
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