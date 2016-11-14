# Craft-SimpleCache
A lightweight plugin which adds file modified timestamp Urls using the filter `simpleCache`. When you update a file (i.e. via FTP) the appended timestamp will update to the "Modified time" of the file to invalidate the browsers' cache of the old file.

## Installation

To install SimpleCache, follow these steps:

Upload the simplecache folder to craft/plugins/.
Go to Settings > Plugins from your Craft control panel and enable the SimpleCache plugin.

## Usage

### CSS file

```jinja
{% includeCssFile "/css/style.css" | simpleCache %}
```
Output: `<link rel="stylesheet" type="text/css" href="/css/style.css?1465304321" />`

### JavaScript file

```jinja
{% includeJsFile "/js/scripts.js" | simpleCache %}
```
Output: `<script type="text/javascript" src="/js/scripts.js?1465304321"></script>`

### Apache (mod_include / SSI) combined file

If you have a combined file that won't update it's modified time when it's sources do; you can append an array of dependent files to the `simpleCache` filter.

```jinja
{% includeCssFile "/css/styles.combined.css" | simpleCache([ '/css/styles.css', '/css/print.css', '/css/fonts.css' ]) %}
```
Output: `<link rel="stylesheet" type="text/css" href="/css/styles.combined.css?1465304321" />`

## Updates

An update feed has been added into SimpleCache so you'll see the next update and features available via Craft CMS direct when there's a new tag available.
