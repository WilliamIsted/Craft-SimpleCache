# Craft-SimpleCache
A lightweight plugin which adds file modified timestamp Urls using the filter simpleCache

## Installation

To install SimpleCache, follow these steps:

Upload the simplecache folder to craft/plugins/.
Go to Settings > Plugins from your Craft control panel and enable the SimpleCache plugin.

## Usage

```jinja
{% includeCssFile "/css/style.css" | simpleCache %}
```
Output: `<link rel="stylesheet" type="text/css" href="/css/style.css?1465304321" />`


```jinja
{% includeJsFile "/js/scripts.js" | simpleCache %}
```
Output: `<script type="text/javascript" src="/js/scripts.js?1465304321"></script>`

## Updates

An update feed has been added into SimpleCache so you'll see the next update and features available via Craft CMS direct when there's a new tag available.
