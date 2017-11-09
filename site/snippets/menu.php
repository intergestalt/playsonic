<nav>
  <ul>
    <?php foreach($pages->visible() as $item): ?>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>


  <ul>
    <?php foreach($site->languages() as $language): ?>
    <li<?php e($site->language() == $language, ' class="active"') ?>>
      <a href="<?php echo $page->url($language->code()) ?>">
        <?php echo html($language->code()) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>

</nav>