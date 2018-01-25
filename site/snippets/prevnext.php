<?php

/*

The $flip parameter can be passed to the snippet to flip
prev/next items visually:

```
<?php snippet('prevnext', ['flip' => true]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

$directionPrev = @$flip ? 'right' : 'left';
$directionNext = @$flip ? 'left'  : 'right';

if($page->hasNextVisible() || $page->hasPrevVisible()): ?>
  <nav class="pagination <?= !@$flip ?: ' flip' ?> wrap cf">

    <?php if($page->hasPrevVisible()): ?>
      <a class="pagination-item <?= $directionPrev ?>" href="<?= $page->prevVisible()->url() ?>" rel="prev" title="<?= $page->prevVisible()->title()->html() ?>">
        <?php echo l::get('prev_entry') ?>
      </a>
    <?php else: ?>

    <?php endif ?>

    <?php if($page->hasNextVisible()): ?>
      <a class="pagination-item <?= $directionNext ?>" href="<?= $page->nextVisible()->url() ?>" rel="next" title="<?= $page->nextVisible()->title()->html() ?>">
        <?php echo l::get('next_entry') ?>
      </a>
    <?php else: ?>
      
    <?php endif ?>

  </nav>
<?php endif ?>