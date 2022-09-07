<?php

class HeadLink{

	public $text;
	public $url;
	
	public function __construct($_text, $_url) {
		$this->text = $_text;
		$this->url = $_url;
	}
}

return [
    new HeadLink("characters", "#"),
    new HeadLink("comics", "#"),
    new HeadLink("movies", "#"),
    new HeadLink("tv", "#"),
    new HeadLink("games", "#"),
    new HeadLink("collectibles", "#"),
    new HeadLink("videos", "#"),
    new HeadLink("fans", "#"),
    new HeadLink("news", "#"),
    new HeadLink("shop", "#"),
];