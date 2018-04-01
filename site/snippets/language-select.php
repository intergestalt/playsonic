<div class="language-select">
      <?php foreach($site->languages() as $language): ?>
        <?php if($site->language() == $language) : ?>
          <span class="active"><?php echo html($language->code()) ?></span>
        <?php else : ?>
          <span>
            <a href="<?php echo $page->url($language->code()) ?>">
              <?php echo html($language->code()) ?>
            </a>
          </span>
        <?php endif ?>
      <?php endforeach ?>
</div>