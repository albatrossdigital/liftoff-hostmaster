<?php 


$options['db_type'] = 'mysqli';
$options['db_host'] = 'localhost';
$options['db_port'] = '3306';
$options['db_passwd'] = 'jvtpTGWdxK';
$options['db_name'] = 'o1liftoffalbatro';
$options['db_user'] = 'o1liftoffalbatro';
$options['installed'] = true;
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '6.34',
      'description' => 'This platform is running Drupal 6.34',
    ),
  ),
  'profiles' => 
  array (
    'hostmaster' => 
    array (
      'name' => 'hostmaster',
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/hostmaster.profile',
      'project' => '',
      'info' => 
      array (
        'name' => 'Hostmaster',
        'description' => 'Select this profile to manage the installation and maintenance of hosted Drupal sites.',
        'languages' => 
        array (
          0 => 'en',
        ),
        'version' => NULL,
      ),
      'version' => '6.34',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aggregator' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'block' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the boxes that are displayed around the main content.',
        'package' => 'Core - required',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'blog' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables keeping easily and regularly updated user web pages or blogs.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'blogapi' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/blogapi/blogapi.module',
      'name' => 'blogapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog API',
        'description' => 'Allows users to post content using applications that support XML-RPC blog APIs.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'book' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to structure site pages in a hierarchy or outline.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'color' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows the user to change the color scheme of certain themes.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'comment' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'contact' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'cookie_cache_bypass' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001',
      'name' => 'cookie_cache_bypass',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'dblog' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'filter' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Handles the filtering of content in preparation for display.',
        'package' => 'Core - required',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'forum' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Enables threaded discussions about general topics.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'help' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'locale' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'menu' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'node' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core - required',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'openid' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '6.34',
        'package' => 'Core - optional',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'path' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'path_alias_cache' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/path_alias_cache/path_alias_cache.module',
      'name' => 'path_alias_cache',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path alias cache',
        'description' => 'A path alias implementation which adds a cache to the core version.',
        'core' => '6.x',
        'package' => 'Pressflow',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'php' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'ping' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/ping/ping.module',
      'name' => 'ping',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ping',
        'description' => 'Alerts other sites when your site has been updated.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'poll' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'profile' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/profile/profile.module',
      'name' => 'profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile',
        'description' => 'Supports configurable user profiles.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'search' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'simpletest' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SimpleTest',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Development',
        'core' => '6.x',
        'php' => '5 ; Drupal 6',
        'files' => 
        array (
          0 => 'simpletest.module',
          1 => 'simpletest.pages.inc',
          2 => 'simpletest.install',
          3 => 'simpletest.test',
          4 => 'drupal_web_test_case.php',
          5 => 'tests/block.test',
        ),
        'version' => '6.x-2.10',
        'project' => 'simpletest',
        'datestamp' => '1262212859',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'simpletest',
      'version' => '6.x-2.10',
    ),
    'statistics' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'syslog' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'system' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6055',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core - required',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'taxonomy' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'throttle' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/throttle/throttle.module',
      'name' => 'throttle',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Throttle',
        'description' => 'Handles the auto-throttling mechanism, to control site congestion.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'tracker' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent posts for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'translation' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'trigger' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'update' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update status',
        'description' => 'Checks the status of available updates for Drupal and your installed modules and themes.',
        'version' => '6.34',
        'package' => 'Core - optional',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'upload' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/upload/upload.module',
      'name' => 'upload',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Upload',
        'description' => 'Allows users to upload and attach files to content.',
        'package' => 'Core - optional',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'user' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core - required',
        'version' => '6.34',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'admin_menu' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/admin_menu/admin_menu.module',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '1',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration menu',
        'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
        'package' => 'Administration',
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'admin_menu',
        'datestamp' => '1308238014',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'admin_menu',
      'version' => '6.x-1.8',
    ),
    'aegir_custom_settings' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/aegir_custom_settings/aegir_custom_settings.module',
      'name' => 'aegir_custom_settings',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Octopus Aegir Settings',
        'description' => 'Octopus Standard Aegir System Configuration',
        'core' => '6.x',
        'package' => 'Features',
        'version' => '6.x-3.12',
        'project' => 'aegir_custom_settings',
        'dependencies' => 
        array (
          0 => 'actions_permissions',
          1 => 'admin_menu',
          2 => 'book',
          3 => 'comment',
          4 => 'ctools',
          5 => 'fe_block',
          6 => 'features',
          7 => 'hosting',
          8 => 'hosting_advanced_cron',
          9 => 'hosting_alias',
          10 => 'hosting_client',
          11 => 'hosting_clone',
          12 => 'hosting_cron',
          13 => 'hosting_db_server',
          14 => 'hosting_migrate',
          15 => 'hosting_nginx',
          16 => 'hosting_package',
          17 => 'hosting_platform',
          18 => 'hosting_platform_pathauto',
          19 => 'hosting_server',
          20 => 'hosting_signup',
          21 => 'hosting_site',
          22 => 'hosting_site_backup_manager',
          23 => 'hosting_subdirs',
          24 => 'hosting_task',
          25 => 'hosting_task_gc',
          26 => 'hosting_tasks_extra',
          27 => 'hosting_web_server',
          28 => 'install_profile_api',
          29 => 'jquery_ui',
          30 => 'jquery_update',
          31 => 'menu',
          32 => 'modalframe',
          33 => 'protect_critical_users',
          34 => 'revision_deletion',
          35 => 'strongarm',
          36 => 'syslog',
          37 => 'userprotect',
          38 => 'views',
          39 => 'views_bulk_operations',
        ),
        'features' => 
        array (
          'ctools' => 
          array (
            0 => 'strongarm:strongarm:1',
          ),
          'fe_block_settings' => 
          array (
            0 => 'menu-menu-administration',
            1 => 'system-0',
            2 => 'user-0',
            3 => 'user-1',
            4 => 'views-hosting_package_list-block_1',
            5 => 'views-hosting_site_list-block_1',
            6 => 'views-hosting_site_list-block_client',
            7 => 'views-hosting_site_list-block_client2',
            8 => 'views-hosting_site_list-block_profile',
            9 => 'views-hosting_task_list-block',
          ),
          'menu_custom' => 
          array (
            0 => 'menu-administration',
            1 => 'navigation',
            2 => 'primary-links',
          ),
          'menu_links' => 
          array (
            0 => 'menu-administration:admin/user/user',
            1 => 'menu-administration:node/add/platform',
            2 => 'menu-administration:node/add/site',
            3 => 'primary-links:hosting/clients',
            4 => 'primary-links:hosting/platforms',
            5 => 'primary-links:hosting/servers',
            6 => 'primary-links:hosting/sites',
            7 => 'primary-links:logout',
            8 => 'primary-links:user/%',
          ),
          'node' => 
          array (
            0 => 'book',
          ),
          'user_permission' => 
          array (
            0 => 'access administration menu',
            1 => 'access administration pages',
            2 => 'access all views',
            3 => 'access comments',
            4 => 'access content',
            5 => 'access disabled sites',
            6 => 'access hosting signup form',
            7 => 'access hosting wizard',
            8 => 'access printer-friendly version',
            9 => 'access site reports',
            10 => 'access task logs',
            11 => 'access user profiles',
            12 => 'add content to books',
            13 => 'administer actions',
            14 => 'administer blocks',
            15 => 'administer book outlines',
            16 => 'administer clients',
            17 => 'administer comments',
            18 => 'administer content types',
            19 => 'administer features',
            20 => 'administer files',
            21 => 'administer filters',
            22 => 'administer hosting',
            23 => 'administer hosting aliases',
            24 => 'administer hosting features',
            25 => 'administer hosting queues',
            26 => 'administer hosting settings',
            27 => 'administer hosting site backup manager',
            28 => 'administer menu',
            29 => 'administer nodes',
            30 => 'administer permissions',
            31 => 'administer platforms',
            32 => 'administer servers',
            33 => 'administer site configuration',
            34 => 'administer sites',
            35 => 'administer tasks',
            36 => 'administer userprotect',
            37 => 'administer users',
            38 => 'administer views',
            39 => 'cancel own tasks',
            40 => 'change own e-mail',
            41 => 'change own openid',
            42 => 'change own password',
            43 => 'change own username',
            44 => 'configure site cron interval',
            45 => 'create backup task',
            46 => 'create backup-delete task',
            47 => 'create book content',
            48 => 'create client',
            49 => 'create clone task',
            50 => 'create delete task',
            51 => 'create disable task',
            52 => 'create enable task',
            53 => 'create flush_cache task',
            54 => 'create flush_drush_cache task',
            55 => 'create lock task',
            56 => 'create login-reset task',
            57 => 'create migrate task',
            58 => 'create new books',
            59 => 'create package',
            60 => 'create platform',
            61 => 'create rebuild_registry task',
            62 => 'create restore task',
            63 => 'create run_cron task',
            64 => 'create server',
            65 => 'create site',
            66 => 'create site aliases',
            67 => 'create site_health_check task',
            68 => 'create sites on locked platforms',
            69 => 'create unlock task',
            70 => 'create update task',
            71 => 'create verify task',
            72 => 'delete any book content',
            73 => 'delete own book content',
            74 => 'delete own client',
            75 => 'delete package',
            76 => 'delete platform',
            77 => 'delete revisions',
            78 => 'delete server',
            79 => 'delete site',
            80 => 'display drupal links',
            81 => 'edit any book content',
            82 => 'edit client uname',
            83 => 'edit client users',
            84 => 'edit own book content',
            85 => 'edit own client',
            86 => 'edit package',
            87 => 'edit platform',
            88 => 'edit server',
            89 => 'edit site',
            90 => 'execute Ban IP address of current user (user_block_ip_action)',
            91 => 'execute Block current user (user_block_user_action)',
            92 => 'execute Block the selected users (user_user_operations_block)',
            93 => 'execute Change comment settings (views_bulk_operations_comment_setting_action)',
            94 => 'execute Change the author of a post (node_assign_owner_action)',
            95 => 'execute Delete comment (views_bulk_operations_delete_comment_action)',
            96 => 'execute Delete node (views_bulk_operations_delete_node_action)',
            97 => 'execute Delete term (views_bulk_operations_delete_term_action)',
            98 => 'execute Delete user (views_bulk_operations_delete_user_action)',
            99 => 'execute Demote from front page (node_mass_update)',
            100 => 'execute Display a message to the user (system_message_action)',
            101 => 'execute Download archive of selected files (views_bulk_operations_archive_action)',
            102 => 'execute Execute a VBO programmatically (views_bulk_operations_action)',
            103 => 'execute Execute arbitrary PHP script (views_bulk_operations_script_action)',
            104 => 'execute Make post sticky (node_make_sticky_action)',
            105 => 'execute Make post unsticky (node_make_unsticky_action)',
            106 => 'execute Make sticky (node_mass_update)',
            107 => 'execute Modify user roles (views_bulk_operations_user_roles_action)',
            108 => 'execute Move book page to new parent (views_bulk_operations_move_book_action)',
            109 => 'execute Pass objects as arguments to a page (views_bulk_operations_argument_selector_action)',
            110 => 'execute Platform: Delete (hosting_platform_op_delete)',
            111 => 'execute Platform: Lock (hosting_platform_op_lock)',
            112 => 'execute Platform: Unlock (hosting_platform_op_unlock)',
            113 => 'execute Platform: Verify (hosting_platform_op_verify)',
            114 => 'execute Promote post to front page (node_promote_action)',
            115 => 'execute Promote to front page (node_mass_update)',
            116 => 'execute Publish (node_mass_update)',
            117 => 'execute Publish comment (comment_publish_action)',
            118 => 'execute Publish post (node_publish_action)',
            119 => 'execute Redirect to URL (system_goto_action)',
            120 => 'execute Remove book page from outline (views_bulk_operations_remove_book_action)',
            121 => 'execute Remove post from front page (node_unpromote_action)',
            122 => 'execute Remove stickiness (node_mass_update)',
            123 => 'execute Save post (node_save_action)',
            124 => 'execute Send e-mail (system_send_email_action)',
            125 => 'execute Site: Backup (hosting_site_op_backup)',
            126 => 'execute Site: Delete (hosting_site_op_delete)',
            127 => 'execute Site: Disable (hosting_site_op_disable)',
            128 => 'execute Site: Enable (hosting_site_op_enable)',
            129 => 'execute Site: Reset password (hosting_site_op_login_reset)',
            130 => 'execute Site: Verify (hosting_site_op_verify)',
            131 => 'execute Unblock the selected users (user_user_operations_unblock)',
            132 => 'execute Unpublish (node_mass_update)',
            133 => 'execute Unpublish comment (comment_unpublish_action)',
            134 => 'execute Unpublish comment containing keyword(s) (comment_unpublish_by_keyword_action)',
            135 => 'execute Unpublish post (node_unpublish_action)',
            136 => 'execute Unpublish post containing keyword(s) (node_unpublish_by_keyword_action)',
            137 => 'manage features',
            138 => 'mass delete revisions',
            139 => 'post comments',
            140 => 'post comments without approval',
            141 => 'retry failed tasks',
            142 => 'revert revisions',
            143 => 'select different theme',
            144 => 'update status of tasks',
            145 => 'use PHP for block visibility',
            146 => 'view client',
            147 => 'view locked platforms',
            148 => 'view own tasks',
            149 => 'view package',
            150 => 'view platform',
            151 => 'view revisions',
            152 => 'view server',
            153 => 'view site',
            154 => 'view task',
          ),
          'user_role' => 
          array (
            0 => 'admin',
            1 => 'aegir account manager',
            2 => 'aegir administrator',
            3 => 'aegir client',
            4 => 'aegir platform manager',
            5 => 'anonymous user',
            6 => 'authenticated user',
            7 => 'root',
          ),
          'variable' => 
          array (
            0 => 'comment_anonymous_book',
            1 => 'comment_anonymous_client',
            2 => 'comment_anonymous_platform',
            3 => 'comment_anonymous_server',
            4 => 'comment_anonymous_site',
            5 => 'comment_book',
            6 => 'comment_client',
            7 => 'comment_controls_book',
            8 => 'comment_controls_client',
            9 => 'comment_controls_platform',
            10 => 'comment_controls_server',
            11 => 'comment_controls_site',
            12 => 'comment_default_mode_book',
            13 => 'comment_default_mode_client',
            14 => 'comment_default_mode_platform',
            15 => 'comment_default_mode_server',
            16 => 'comment_default_mode_site',
            17 => 'comment_default_order_book',
            18 => 'comment_default_order_client',
            19 => 'comment_default_order_platform',
            20 => 'comment_default_order_server',
            21 => 'comment_default_order_site',
            22 => 'comment_default_per_page_book',
            23 => 'comment_default_per_page_client',
            24 => 'comment_default_per_page_platform',
            25 => 'comment_default_per_page_server',
            26 => 'comment_default_per_page_site',
            27 => 'comment_form_location_book',
            28 => 'comment_form_location_client',
            29 => 'comment_form_location_platform',
            30 => 'comment_form_location_server',
            31 => 'comment_form_location_site',
            32 => 'comment_platform',
            33 => 'comment_preview_book',
            34 => 'comment_preview_client',
            35 => 'comment_preview_platform',
            36 => 'comment_preview_server',
            37 => 'comment_preview_site',
            38 => 'comment_server',
            39 => 'comment_site',
            40 => 'comment_subject_field_book',
            41 => 'comment_subject_field_client',
            42 => 'comment_subject_field_platform',
            43 => 'comment_subject_field_server',
            44 => 'comment_subject_field_site',
            45 => 'node_options_book',
            46 => 'revision_delete',
            47 => 'revision_delete_age',
            48 => 'revision_delete_cron',
            49 => 'revision_delete_freq',
            50 => 'revision_delete_limit',
            51 => 'revision_delete_list_keep_current',
            52 => 'revision_delete_list_keep_date_last',
            53 => 'revision_delete_list_keep_original',
            54 => 'revision_delete_list_show_conditional',
            55 => 'revision_delete_list_takeover',
            56 => 'theme_settings',
            57 => 'userprotect_administrator_bypass_defaults',
            58 => 'userprotect_autoprotect',
            59 => 'userprotect_protection_defaults',
            60 => 'userprotect_role_protections',
          ),
        ),
        'project status url' => 'http://fserver.omega8.cc/fserver',
        'php' => '4.3.5',
      ),
      'project' => 'aegir_custom_settings',
      'version' => '6.x-3.12',
    ),
    'css_emimage' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/css_emimage/css_emimage.module',
      'name' => 'css_emimage',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CSS Embedded Images',
        'description' => 'Replaces image URLs in CSS files with embedded images when CSS optimization is enabled.',
        'core' => '6.x',
        'php' => '5',
        'package' => 'Performance and scalability',
        'version' => '6.x-2.2+1-dev',
        'project' => 'css_emimage',
        'datestamp' => '1380568224',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'css_emimage',
      'version' => '6.x-2.2+1-dev',
    ),
    'bulk_export' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '6.x-1.11',
        'project' => 'ctools',
        'datestamp' => '1392220726',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.11',
    ),
    'ctools' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6007',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '6.x',
        'package' => 'Chaos tool suite',
        'version' => '6.x-1.11',
        'project' => 'ctools',
        'datestamp' => '1392220726',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.11',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '6.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-1.11',
        'project' => 'ctools',
        'datestamp' => '1392220726',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.11',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) AJAX Example',
        'description' => 'Shows how to use the power of Chaos AJAX.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-1.11',
        'core' => '6.x',
        'project' => 'ctools',
        'datestamp' => '1392220726',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.11',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '6.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-1.11',
        'project' => 'ctools',
        'datestamp' => '1392220726',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.11',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) Plugin Example',
        'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '6.x',
        'version' => '6.x-1.11',
        'project' => 'ctools',
        'datestamp' => '1392220726',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.11',
    ),
    'page_manager' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '6.x-1.11',
        'project' => 'ctools',
        'datestamp' => '1392220726',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.11',
    ),
    'stylizer' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '6.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-1.11',
        'project' => 'ctools',
        'datestamp' => '1392220726',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.11',
    ),
    'views_content' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views content panes',
        'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'core' => '6.x',
        'version' => '6.x-1.11',
        'project' => 'ctools',
        'datestamp' => '1392220726',
        'php' => '4.3.5',
      ),
      'project' => 'ctools',
      'version' => '6.x-1.11',
    ),
    'features' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/features/features.module',
      'name' => 'features',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '20',
      'info' => 
      array (
        'name' => 'Features',
        'description' => 'Provides feature management for Drupal.',
        'core' => '6.x',
        'package' => 'Features',
        'version' => '6.x-1.2',
        'project' => 'features',
        'datestamp' => '1323963939',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'features',
      'version' => '6.x-1.2',
    ),
    'features_test' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/features/tests/features_test.module',
      'name' => 'features_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'features',
          1 => 'fieldgroup',
          2 => 'text',
          3 => 'views',
        ),
        'description' => 'Test module for Features testing.',
        'features' => 
        array (
          'content' => 
          array (
            0 => 'features_test-field_features_test',
            1 => 'features_test-field_features_test_child_a',
            2 => 'features_test-field_features_test_child_b',
          ),
          'fieldgroup' => 
          array (
            0 => 'features_test-group_features_test',
          ),
          'filter' => 
          array (
            0 => 'features_test',
          ),
          'imagecache' => 
          array (
            0 => 'features_test',
          ),
          'node' => 
          array (
            0 => 'features_test',
          ),
          'user_permission' => 
          array (
            0 => 'create features_test content',
          ),
          'views' => 
          array (
            0 => 'features_test',
          ),
          'views_api' => 
          array (
            0 => 'api:2',
          ),
        ),
        'name' => 'Features Tests',
        'package' => 'Testing',
        'version' => '6.x-1.2',
        'project' => 'features',
        'datestamp' => '1323963939',
        'php' => '4.3.5',
      ),
      'project' => 'features',
      'version' => '6.x-1.2',
    ),
    'fe_block' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/features_extra/fe_block.module',
      'name' => 'fe_block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6011',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'FE block',
        'description' => 'Build blocks and block settings as features.',
        'package' => 'Features extra',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'features',
          2 => 'ctools',
        ),
        'version' => '6.x-1.x-dev',
        'project' => 'features_extra',
        'datestamp' => '1380578154',
        'php' => '4.3.5',
      ),
      'project' => 'features_extra',
      'version' => '6.x-1.x-dev',
    ),
    'fe_nodequeue' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/features_extra/fe_nodequeue.module',
      'name' => 'fe_nodequeue',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FE nodequeue',
        'description' => 'Build nodequeues as features.',
        'package' => 'Features extra',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'nodequeue',
          1 => 'features',
          2 => 'ctools',
        ),
        'version' => '6.x-1.x-dev',
        'project' => 'features_extra',
        'datestamp' => '1380578154',
        'php' => '4.3.5',
      ),
      'project' => 'features_extra',
      'version' => '6.x-1.x-dev',
    ),
    'fe_taxonomy' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/features_extra/fe_taxonomy.module',
      'name' => 'fe_taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FE taxonomy',
        'description' => 'Build taxonomies as features.',
        'package' => 'Features extra',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'features',
          2 => 'ctools',
        ),
        'version' => '6.x-1.x-dev',
        'project' => 'features_extra',
        'datestamp' => '1380578154',
        'php' => '4.3.5',
      ),
      'project' => 'features_extra',
      'version' => '6.x-1.x-dev',
    ),
    'hosting_alias' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/alias/hosting_alias.module',
      'name' => 'hosting_alias',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6204',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site aliases',
        'description' => 'Maintain domain aliases for sites.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_client' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/client/hosting_client.module',
      'name' => 'hosting_client',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Client',
        'description' => 'Allow Hostmaster to configure clients.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_clone' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/clone/hosting_clone.module',
      'name' => 'hosting_clone',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site cloning',
        'description' => 'Clone sites between platforms, performing upgrades when necessary.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_migrate',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_cron' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/cron/hosting_cron.module',
      'name' => 'hosting_cron',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting Cron',
        'description' => 'Allow the hosting system to cron all the installed sites on a schedule.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_db_server' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/db_server/hosting_db_server.module',
      'name' => 'hosting_db_server',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database Server',
        'description' => 'Allow Hostmaster to configure database servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_dns' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/dns/hosting_dns.module',
      'name' => 'hosting_dns',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DNS support',
        'description' => 'Manage DNS records for your hosted sites.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_example' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/example/hosting_example.module',
      'name' => 'hosting_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting example',
        'description' => 'Contains example implementations of the Hosting API.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_site_data' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/example/site_data/hosting_site_data.module',
      'name' => 'hosting_site_data',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'site_data',
        'description' => 'Example implementation of saving data into a site context.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/hosting.module',
      'name' => 'hosting',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6208',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting',
        'description' => 'Allow this Drupal site to deploy hosted sites.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'modalframe',
          1 => 'jquery_update',
          2 => 'views',
          3 => 'views_bulk_operations',
          4 => 'ctools',
        ),
        '#dependencies' => 
        array (
          0 => 'hosting_task',
          1 => 'hosting_client',
          2 => 'hosting_db_server',
          3 => 'hosting_package',
          4 => 'hosting_platform',
          5 => 'hosting_site',
          6 => 'hosting_web_server',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_migrate' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/migrate/hosting_migrate.module',
      'name' => 'hosting_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site migration',
        'description' => 'Migrate sites between platforms, performing upgrades when necessary.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_site',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_package' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/package/hosting_package.module',
      'name' => 'hosting_package',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6202',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Package management',
        'description' => 'Allow Hostmaster to keep track which packages have been installed.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_platform' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/platform/hosting_platform.module',
      'name' => 'hosting_platform',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6209',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Platforms',
        'description' => 'Allow Hostmaster to keep track of multiple instances of Drupal.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_package',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_queued' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/queued/hosting_queued.module',
      'name' => 'hosting_queued',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting queue daemon',
        'description' => 'Allows the hosting queue to be run in a daemon.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_quota' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/quota/hosting_quota.module',
      'name' => 'hosting_quota',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Client Quota',
        'description' => 'Allow Hostmaster to configure quotas.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_client',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_server' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/server/hosting_server.module',
      'name' => 'hosting_server',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6202',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Server',
        'description' => 'Allow hostmaster to configure servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_signup' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/signup/hosting_signup.module',
      'name' => 'hosting_signup',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Signup form',
        'description' => 'A simple signup form that allows users to sign up for a new site.',
        'package' => 'Hosting',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_site' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/site/hosting_site.module',
      'name' => 'hosting_site',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6207',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Sites',
        'description' => 'Allow hostmaster manage hosted sites.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_client',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'liftoff_api' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/site/liftoff_api/liftoff_api.module',
      'name' => 'liftoff_api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Liftoff API',
        'description' => 'Liftoff api',
        'package' => 'Liftoff',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_subdirs' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/subdirs/hosting_subdirs.module',
      'name' => 'hosting_subdirs',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Subdirectories',
        'description' => 'Allow hostmaster to install sites in subdirectories.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_alias',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_task' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/task/hosting_task.module',
      'name' => 'hosting_task',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting tasks',
        'description' => 'Allow Hostmaster to keep track of tasks that have been processed on the servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_web_cluster' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/web_cluster/hosting_web_cluster.module',
      'name' => 'hosting_web_cluster',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Web Cluster',
        'description' => 'Allow hostmaster to configure web clusters.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_web_server',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_web_pack' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/web_pack/hosting_web_pack.module',
      'name' => 'hosting_web_pack',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Web Pack',
        'description' => 'Allow hostmaster to configure web "packs", which have masters and slaves.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_web_server',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_web_server' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/web_server/hosting_web_server.module',
      'name' => 'hosting_web_server',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Web Server',
        'description' => 'Allow hostmaster to configure web servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_nginx' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/web_server/nginx/hosting_nginx.module',
      'name' => 'hosting_nginx',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nginx servers',
        'description' => 'Allow hostmaster to configure NGINX web servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_web_server',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_nginx_ssl' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/web_server/nginx/ssl/hosting_nginx_ssl.module',
      'name' => 'hosting_nginx_ssl',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nginx +SSL servers',
        'description' => 'Allow hostmaster to configure NGINX web servers with SSL support.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_web_server',
          1 => 'hosting_ssl',
          2 => 'hosting_nginx',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_ssl' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/web_server/ssl/hosting_ssl.module',
      'name' => 'hosting_ssl',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SSL support',
        'description' => 'Allow hostmaster to configure web servers with SSL support',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_web_server',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_advanced_cron' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting_advanced_cron/hosting_advanced_cron.module',
      'name' => 'hosting_advanced_cron',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6205',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting Advanced Cron',
        'description' => 'Allow the hosting system to cron all the installed sites on a schedule.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_backup_queue' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting_backup_queue/hosting_backup_queue.module',
      'name' => 'hosting_backup_queue',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Backup queue',
        'description' => 'Allows hourly/daily/weekly scheduled backups of Aegir sites.',
        'core' => '6.x',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_cdn' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting_cdn/hosting_cdn.module',
      'name' => 'hosting_cdn',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Local CDN support',
        'description' => 'Maintain cdn domains for sites.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_civicrm' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting_civicrm/hosting_civicrm.module',
      'name' => 'hosting_civicrm',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting CiviCRM',
        'description' => 'Enables installation and maintenance of CiviCRM on sites.',
        'package' => 'Aegir CiviCRM',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_civicrm_cron' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting_civicrm/hosting_civicrm_cron/hosting_civicrm_cron.module',
      'name' => 'hosting_civicrm_cron',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting CiviCRM Cron',
        'description' => 'Allow the hosting system to run cron on CiviCRM sites.',
        'package' => 'Aegir CiviCRM',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_civicrm',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_platform_git' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting_platform_git/hosting_platform_git.module',
      'name' => 'hosting_platform_git',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting Platform Git',
        'description' => 'Allows deploying platforms from Git',
        'core' => '6.x',
        'package' => 'Hosting',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_platform_pathauto' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting_platform_pathauto/hosting_platform_pathauto.module',
      'name' => 'hosting_platform_pathauto',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Platform pathauto',
        'description' => 'Automatically generates platform path',
        'core' => '6.x',
        'package' => 'Hosting',
        'version' => '6.x-2.1',
        'project' => 'hosting_platform_pathauto',
        'datestamp' => '1389214637',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'hosting_platform_pathauto',
      'version' => '6.x-2.1',
    ),
    'hosting_remote_import' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting_remote_import/hosting_remote_import.module',
      'name' => 'hosting_remote_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting remote import',
        'description' => 'Helps to import sites from remote Hostmasters',
        'core' => '6.x',
        'package' => 'Hosting',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_site_backup_manager' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting_site_backup/hosting_site_backup_manager.module',
      'name' => 'hosting_site_backup_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6101',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting Site Backup Manager',
        'description' => 'Provides a user interface to manage site backups.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
          1 => 'hosting_task',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_sync' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting_tasks_extra/hosting_sync/hosting_sync.module',
      'name' => 'hosting_sync',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting Sync',
        'description' => 'Allows database and files to be synchronized between Aegir sites (frontend).',
        'core' => '6.x',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_tasks_extra' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting_tasks_extra/hosting_tasks_extra.module',
      'name' => 'hosting_tasks_extra',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting tasks extra',
        'description' => 'Adds additional tasks to Aegir.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_http_basic_auth' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting_tasks_extra/http_basic_auth/hosting_http_basic_auth.module',
      'name' => 'hosting_http_basic_auth',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'HTTP Basic Authentication',
        'description' => 'Allows admins to specify HTTP basic authentication for sites.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_task_gc' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting_task_gc/hosting_task_gc.module',
      'name' => 'hosting_task_gc',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting task garbage collection',
        'decsrtiption' => 'Removes old tasks and task logs.',
        'core' => '6.x',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'description' => '',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'install_profile_api' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/install_profile_api/install_profile_api.module',
      'name' => 'install_profile_api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Install Profile API',
        'description' => 'Utility functions that help with install profile creation and running',
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'install_profile_api',
        'datestamp' => '1248302144',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'install_profile_api',
      'version' => '6.x-2.1',
    ),
    'jquery_ui' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/jquery_ui/jquery_ui.module',
      'name' => 'jquery_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery UI',
        'description' => 'Provides the jQuery UI plug-in to other Drupal modules.',
        'package' => 'User interface',
        'core' => '6.x',
        'version' => '6.x-1.5',
        'project' => 'jquery_ui',
        'datestamp' => '1308323216',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'jquery_ui',
      'version' => '6.x-1.5',
    ),
    'jquery_update' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/jquery_update/jquery_update.module',
      'name' => 'jquery_update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6200',
      'weight' => '99',
      'info' => 
      array (
        'name' => 'jQuery Update',
        'description' => 'Updates Drupal to use the latest version of jQuery.',
        'package' => 'User interface',
        'core' => '6.x',
        'version' => '6.x-2.0-alpha1',
        'project' => 'jquery_update',
        'datestamp' => '1272041110',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'jquery_update',
      'version' => '6.x-2.0-alpha1',
    ),
    'modalframe' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/modalframe/modalframe.module',
      'name' => 'modalframe',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Modal Frame API',
        'description' => 'Provides an API to render an iframe within a modal dialog based on the jQuery UI Dialog plugin.',
        'package' => 'Modal frame',
        'dependencies' => 
        array (
          0 => 'jquery_ui',
          1 => 'jquery_update',
        ),
        'core' => '6.x',
        'version' => '6.x-1.9',
        'project' => 'modalframe',
        'datestamp' => '1391878409',
        'php' => '4.3.5',
      ),
      'project' => 'modalframe',
      'version' => '6.x-1.9',
    ),
    'modalframe_example' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/modalframe/modules/modalframe_example/modalframe_example.module',
      'name' => 'modalframe_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Modal Frame Example',
        'description' => 'Example for the Modal Frame API.',
        'package' => 'Modal frame',
        'dependencies' => 
        array (
          0 => 'modalframe',
        ),
        'core' => '6.x',
        'version' => '6.x-1.9',
        'project' => 'modalframe',
        'datestamp' => '1391878409',
        'php' => '4.3.5',
      ),
      'project' => 'modalframe',
      'version' => '6.x-1.9',
    ),
    'openidadmin' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/openidadmin/openidadmin.module',
      'name' => 'openidadmin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID Admin',
        'description' => 'Allows bulk operations for OpenID administration.',
        'dependencies' => 
        array (
          0 => 'openid',
        ),
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'openidadmin',
        'datestamp' => '1266434108',
        'php' => '4.3.5',
      ),
      'project' => 'openidadmin',
      'version' => '6.x-1.2',
    ),
    'protect_critical_users' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/protect_critical_users/protect_critical_users.module',
      'name' => 'protect_critical_users',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Protect Critical Users',
        'description' => 'Protects critical users from being deleted.',
        'package' => 'Administration',
        'core' => '6.x',
        'version' => '6.x-1.1',
        'project' => 'protect_critical_users',
        'datestamp' => '1227159919',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'protect_critical_users',
      'version' => '6.x-1.1',
    ),
    'revision_deletion' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/revision_deletion/revision_deletion.module',
      'name' => 'revision_deletion',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Revision Deletion',
        'description' => 'Enables the ability to mass delete aging node revisions.',
        'core' => '6.x',
        'version' => '6.x-1.0-rc2+5-dev',
        'project' => 'revision_deletion',
        'datestamp' => '1380625912',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'revision_deletion',
      'version' => '6.x-1.0-rc2+5-dev',
    ),
    'strongarm' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/strongarm/strongarm.module',
      'name' => 'strongarm',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6202',
      'weight' => '-1000',
      'info' => 
      array (
        'name' => 'Strongarm',
        'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '6.x-2.2',
        'project' => 'strongarm',
        'datestamp' => '1340037721',
        'php' => '4.3.5',
      ),
      'project' => 'strongarm',
      'version' => '6.x-2.2',
    ),
    'userprotect' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/userprotect/userprotect.module',
      'name' => 'userprotect',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Protect',
        'description' => 'Allows admins to protect users from being edited or deleted, on a per-user basis.',
        'core' => '6.x',
        'version' => '6.x-1.5',
        'project' => 'userprotect',
        'datestamp' => '1294339381',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'userprotect',
      'version' => '6.x-1.5',
    ),
    'views' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6300',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'views',
        'datestamp' => '1325638545',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-3.0',
    ),
    'views_export' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/views/views_export/views_export.module',
      'name' => 'views_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views exporter',
        'description' => 'Allows exporting multiple views at once.',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'core' => '6.x',
        'version' => '6.x-3.0',
        'project' => 'views',
        'datestamp' => '1325638545',
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-3.0',
    ),
    'views_ui' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '6.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '6.x-3.0',
        'project' => 'views',
        'datestamp' => '1325638545',
        'php' => '4.3.5',
      ),
      'project' => 'views',
      'version' => '6.x-3.0',
    ),
    'actions_permissions' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/views_bulk_operations/actions_permissions.module',
      'name' => 'actions_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions permissions',
        'description' => 'Integrates actions with the permission system.',
        'package' => 'Administration',
        'core' => '6.x',
        'version' => '6.x-1.16',
        'project' => 'views_bulk_operations',
        'datestamp' => '1376494014',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'views_bulk_operations',
      'version' => '6.x-1.16',
    ),
    'views_bulk_operations' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/views_bulk_operations/views_bulk_operations.module',
      'name' => 'views_bulk_operations',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Bulk Operations',
        'description' => 'Exposes new Views style \'Bulk Operations\' for selecting multiple nodes and applying operations on them.',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'core' => '6.x',
        'php' => '5.0',
        'version' => '6.x-1.16',
        'project' => 'views_bulk_operations',
        'datestamp' => '1376494014',
      ),
      'project' => 'views_bulk_operations',
      'version' => '6.x-1.16',
    ),
    'bakery' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/sites/all/modules/bakery/bakery.module',
      'name' => 'bakery',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '1',
      'schema_version' => '6004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bakery',
        'description' => 'Provides single-sign-on support across second-level domains.',
        'core' => '6.x',
        'php' => '5.1.2',
        'version' => '6.x-2.0-alpha4',
        'project' => 'bakery',
        'datestamp' => '1360785318',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'bakery',
      'version' => '6.x-2.0-alpha4',
    ),
    'devel' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/sites/all/modules/devel/devel.module',
      'name' => 'devel',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '1',
      'schema_version' => '6003',
      'weight' => '88',
      'info' => 
      array (
        'name' => 'Devel',
        'description' => 'Various blocks, pages, and functions for developers.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '6.x',
        'version' => '6.x-1.28',
        'project' => 'devel',
        'datestamp' => '1391635706',
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.28',
    ),
    'devel_generate' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/sites/all/modules/devel/devel_generate.module',
      'name' => 'devel_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel generate',
        'description' => 'Generate dummy users, nodes, and taxonomy terms.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-1.28',
        'project' => 'devel',
        'datestamp' => '1391635706',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.28',
    ),
    'devel_node_access' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/sites/all/modules/devel/devel_node_access.module',
      'name' => 'devel_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel node access',
        'description' => 'Developer block and page illustrating relevant node_access records.',
        'package' => 'Development',
        'core' => '6.x',
        'version' => '6.x-1.28',
        'project' => 'devel',
        'datestamp' => '1391635706',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'devel',
      'version' => '6.x-1.28',
    ),
  ),
  'themes' => 
  array (
    'garland' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'Tableless, recolorable, multi-column, fluid width theme (default).',
        'version' => '6.34',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'minnelli' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/themes/garland/minnelli/minnelli.info',
      'name' => 'minnelli',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Minnelli',
        'description' => 'Tableless, recolorable, multi-column, fixed width theme.',
        'version' => '6.34',
        'core' => '6.x',
        'base theme' => 'garland',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'minnelli.css',
          ),
        ),
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
    'eldir' => 
    array (
      'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/themes/eldir/eldir.info',
      'name' => 'eldir',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Eldir',
        'description' => 'Companion theme for the Aegir hosting system.',
        'version' => '6.34',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
        ),
        'regions' => 
        array (
          'left' => 'Left sidebar',
          'right' => 'Right sidebar',
          'content_top' => 'Content top',
          'content' => 'Content',
          'content_bottom' => 'Content bottom',
          'header' => 'Header',
          'footer' => 'Footer',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.34',
    ),
  ),
);
# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
