Hosting site Backup Manager
===========================

Requires Provision site Backup Manager extension: http://drupal.org/project/provision_site_backup_manager

This module adds more backup options to Aegir.

- "Backups" tab to the "site" nodes in the Hostmaster environment.
  The tab shows the backups and enables per backup actions (Restore, Delete and Get).

- Specify how long Aegir should retain backups for.

Installation
------------

1. Install as any other Drupal module into your hostmaster site.
2. Enable the feature in the 'experimental' section of 'admin/hosting' page.

Configuration
-------------

1. Settings are available at 'admin/hosting/backup_manager' and allow you to e.g. choose
the numbers of backups to keep after specified periods of time.


TODO
----
- Check if there are tasks working with the backups to prevent "collisions"
