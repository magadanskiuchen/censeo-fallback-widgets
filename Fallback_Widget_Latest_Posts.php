<?php
namespace com\magadanski\Censeo\Fallback_Widgets;

/**
 * Fallback option for a latest posts widget
 * 
 * @package Censeo\Fallback_Widgets
 */

# TODO: add documentation (@since 0.3 gamma)

class Fallback_Widget_Latest_Posts extends Fallback_Widget {
	protected $title = '';
	protected $id = 'latest_posts';
	
	private $posts;
	
	public function __construct() {
		$title = __('Latest Posts', 'censeo');
		
		parent::__construct();
	}
	
	public function render($options) {
		$this->posts = get_posts();
		
		if (!empty($this->posts)) {
			parent::render($options);
		}
	}
	
	public function render_inner() {
		echo '<ul>';
		
		foreach ($this->posts as $apost) {
			echo '<li><a href="' . get_permalink($apost->ID) . '" rel="bookmark">' . get_the_title($apost->ID) . '</a></li>';
		}
		
		echo '</ul>';
	}
}
?>