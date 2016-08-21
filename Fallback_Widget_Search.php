<?php
namespace com\magadanski\Censeo\Fallback_Widgets;

/**
 * Fallback option for a search widget
 * 
 * @package Censeo\Fallback_Widgets
 */

# TODO: add documentation (@since 0.3 gamma)

class Fallback_Widget_Search extends Fallback_Widget {
	protected $title = '';
	protected $id = 'search';
	
	public function __construct() {
		$title = __('Search', 'censeo');
		
		parent::__construct();
	}
	
	public function render_inner() {
		get_search_form();
	}
}
?>