<?php  
namespace Craft;

use Twig_Extension;  
use Twig_Filter_Method;

class SimpleCacheTwigExtension extends \Twig_Extension {

	public function getName() {
		return 'SimpleCache';
	}

	public function getFilters() {
		return [
			'simpleCache' => new Twig_Filter_Method( $this, 'simpleCache' ),
		];
	}

	public function simpleCache( $file = false ) {
		$modified = @filemtime( $_SERVER['DOCUMENT_ROOT']  . $file );
		return $file . ( $modified ? '?' . $modified : '' );
	}

}