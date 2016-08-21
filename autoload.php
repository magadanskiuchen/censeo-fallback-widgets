<?php
namespace com\magadanski\Censeo\Fallback_Widgets;

spl_autoload_register(function ($class) {
	include __DIR__ . DIRECTORY_SEPARATOR . str_replace(__NAMESPACE__ . '\\', '', $class) . '.php';
});
?>