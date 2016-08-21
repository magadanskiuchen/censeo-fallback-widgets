<?php
namespace com\magadanski\Censeo\Fallback_Widgets;

/**
 * Abstract parent class for all censeo fallback widgets
 * 
 * @package Censeo\Fallback_Widgets
 */

# TODO: add documentation (@since 0.3 gamma)

abstract class Fallback_Widget {
	protected $id = '';
	protected $title = '';
	
	public function __construct() {
		$class = get_called_class();
		
		if ($this->title === '') {
			$this->title = str_replace(
				array('com\magadanski\Censeo\Fallback_Widgets\Fallback_Widget_', '_'),
				array('',                                                        ' '),
				$class
			);
		}
		
		if ($this->id === '') {
			$this->id = sanitize_title($this->title);
		}
	}
	
	public function render($options) {
		echo apply_filters('censeo_before_widget', sprintf($options['before_widget'], 'widget_' . $this->id, 'widget_' . $this->id));
		
		echo $options['before_title'] . $this->title . $options['after_title'];
		
		$this->render_inner();
		
		echo $options['after_widget'];
	}
	
	abstract public function render_inner();
}
?>