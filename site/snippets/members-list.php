<?php $members = $team->children()->visible(); ?>

List of members:

<ul class="members-list">

  <?php foreach($members as $member): ?>

    <li class="member">

         <?php snippet('member', ['member' => $member]) ?>

    </li>

  <?php endforeach ?>

</ul>