=== zingtree ===
Contributors: Zingtree
Donate link: http://zingtree.com
Tags: decision tree, call center, training, agent scripting, interactive decision tree, support, interactive faq
Requires at least: 3.0
Tested up to: 4.1
Stable tag: 2.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.html

Embed interactive decision trees from Zingtree into your web site. Great for support, training, and more.

== Description ==

> **[Learn more about Zingtree](http://zingtree.com)** 

Zingtree is a toolkit that lets you embed interactive decision trees into any web page.  It's useful for helping people find answers in a simple Q&A format. Your end-users are prompted with questions and then click answer buttons to navigate through an interactive decision tree you build. You can start building trees now at Zingtree.com for free.

To embed a Zingtree into your web page, enter a short code like this:

`[zingtree id="148196706"]`

or to display in "panels" stylel and add persistent buttons to the bottom of each page:

`[zingtree id="148196706" style="panels" persist_names="Restart|Submit Ticket" persist_node_ids="1|5"]`

= The parameters: =
* **id** - The Tree ID which you want to embed.
* **style** - The style used to display the tree. Can be "buttons" or "panels". Buttons is the default if not specified. (optional)
* **persist_names** - Names of persistent buttons on each page (optional)
* **persist_node_ids** - The Node #s of persistent buttons on each page (optional).


== Changelog ==

= 2.0.0 =
* Added support for Panels style


= 1.0.0 =
* Initial release

== Installation ==

1. Install and activate the plugin on the Plugins page
2. Add shortcode `[zingtree name="My Tree" id="148196706" ]` to the page or the post content. Substitute for the name and ID of your tree.
