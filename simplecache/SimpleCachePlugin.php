<?php

// Just a simple plugin

namespace Craft;

class SimpleCachePlugin extends BasePlugin {

	public function getName() {
		return Craft::t('SimpleCache');
	}

	public function getVersion() {
		return '1.0.1';
	}

	public function getDeveloper() {
		return 'William Isted';
	}

	public function getDeveloperUrl() {
		return 'https://william.isted.me/craft/';
	}
	
	public function getDocumentationUrl() {
		return 'https://github.com/WilliamIsted/Craft-SimpleCache/blob/master/README.md';
	}

	public function getReleaseFeedUrl() {
		return 'https://raw.githubusercontent.com/WilliamIsted/Craft-SimpleCache/master/releases.json';
	}

	public function addTwigExtension() {
		Craft::import('plugins.simplecache.twigextensions.SimpleCacheTwigExtension');
		return new SimpleCacheTwigExtension();
	}

}
