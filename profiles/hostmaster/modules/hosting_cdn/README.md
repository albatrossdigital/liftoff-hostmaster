Aegir CDN support
=================

Introduction
------------

This is a simple module and drush script for Aegir that allows you to enable 'fake'
CDN support per site in Aegir.

If you don't know what Aegir is, you'll probably want to start there and come
back when you really know that you want to use this code.
http://aegirproject.org/

Installation
------------

There are two parts to the code:
- A Drupal module for hostmaster - contained in the /hosting directory. Install
  this like any other Drupal module into you hostmaster site.
- A provision Drush extension - contained in the /provision directory. Copy this
  into /var/aegir/.drush on your Aegir master server.

Now just enable the module in the Aegir frontend, and you're ready to go.

NOTE: This was built on a Barracuda system, so requires Provision 6.x-2.x


Usage
-----

When creating or editing a site, you can optionally add one or more cdn domains
Leaving this blank will do nothing, but if they are filled in then those domains
will be configured to serve your site's static content. Use in conjunction with
the Drupal CDN module for full effect (http://drupal.org/project/cdn).

Caveats
-------

Currently not quite functional! Currently only works with Nginx.
