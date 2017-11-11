<?php

kirbytext::$tags['teams-menu'] = array(
  'html' => function($tag) {

  	$team_pages = page(teams)->children()->visible();

  	$teams = [];

  	foreach($team_pages as $team_page) {
  		$teams[$team_page->id()] = [
  			'url' => $team_page->url(),
  			'title' => $team_page->title(),
  			'svg' => 'pattern-' . $team_page->team()
  		];
  	}
    
	$text = '<ul class="teams-menu">';

	foreach($teams as $team) {
		$svg = get_svg($team['svg']);
		$text .= '<li><a title="'.$team['title'].'" href="'.$team['url'].'">'.$svg.'</a></li>';
	}
	
	$text .= '</ul>';

	return $text;	

  }
);