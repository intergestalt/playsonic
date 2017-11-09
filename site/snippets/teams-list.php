<?php $teams = page('teams')->children()->visible(); ?>

<ul class="teams-list">

<?php foreach($teams as $team): ?>

  <li class="team">

       <?php snippet('team', ['team' => $team]) ?>

  </li>

<?php endforeach ?>

</ul>