# Allow NBSP Twig Filter plugin for Craft CMS 4.x

This twig filter, when applied to an escaped twig string will un-escape the &amp;amp; entity that the & in "&amp;nbsp;" was converted to by the initial escaping process. This allows content editors to insert their own non-breaking space into fields to prevent text widows on rendered pages.


## Requirements

This plugin requires Craft CMS 4.0.0 or later. _(See tag 1.0.0 for Caft CMS 3.x)_

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require belniakmedia/craft-allow-nbsp-twig-filter

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Allow &amp;nbsp; Twig Filter.

## Allow &amp;nbsp; Twig Filter Overview

We wanted a quick and easy way for our content editors to be able to insert &nbsp; entities manually without having
them be escaped by the standard twig escape policy. This allows the standard escaping to happen and just unescapes 
&amp;amp;nbsp; back to &amp;nbsp;

## Using Allow &amp;nbsp; Twig Filter

Craft Template Example:

`{{ entry.description | allowNbsp }}`


Brought to you by [Belniak Media, Inc.](https://belniakmedia.com)
