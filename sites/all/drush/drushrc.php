<?php 


$options['sites'] = array (
  0 => 'o1.liftoff.albatrossdigital.com',
);
$options['profiles'] = array (
  0 => 'hostmaster',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'poll' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'locale' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
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
        'schema_version' => '6007',
        'project' => '',
        'version' => '6.34',
      ),
      'help' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'tracker' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'cookie_cache_bypass' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/cookie_cache_bypass/cookie_cache_bypass.module',
        'basename' => 'cookie_cache_bypass.module',
        'name' => 'cookie_cache_bypass',
        'info' => 
        array (
          'name' => 'Cookie cache bypass',
          'description' => 'Sets a cookie on form submission directing a reverse proxy to temporarily not serve cached pages for an anonymous user that just submitted content.',
          'core' => '6.x',
          'package' => 'Pressflow',
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'book' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
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
        'schema_version' => '6000',
        'project' => '',
        'version' => '6.34',
      ),
      'comment' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
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
        'schema_version' => '6005',
        'project' => '',
        'version' => '6.34',
      ),
      'forum' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
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
        'schema_version' => '6000',
        'project' => '',
        'version' => '6.34',
      ),
      'menu' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'php' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'dblog' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
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
        'schema_version' => '6000',
        'project' => '',
        'version' => '6.34',
      ),
      'upload' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/upload/upload.module',
        'basename' => 'upload.module',
        'name' => 'upload',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'syslog' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'blog' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'user' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'openid' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
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
        'schema_version' => '6001',
        'project' => '',
        'version' => '6.34',
      ),
      'system' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
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
        'schema_version' => '6055',
        'project' => '',
        'version' => '6.34',
      ),
      'node' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'search' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'trigger' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'aggregator' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'blogapi' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/blogapi/blogapi.module',
        'basename' => 'blogapi.module',
        'name' => 'blogapi',
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
        'schema_version' => '6001',
        'project' => '',
        'version' => '6.34',
      ),
      'simpletest' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
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
        'schema_version' => '6200',
        'project' => 'simpletest',
        'version' => '6.x-2.10',
      ),
      'filter' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'taxonomy' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'throttle' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/throttle/throttle.module',
        'basename' => 'throttle.module',
        'name' => 'throttle',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'translation' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'path' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'profile' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'statistics' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
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
        'schema_version' => '6000',
        'project' => '',
        'version' => '6.34',
      ),
      'update' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
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
        'schema_version' => '6000',
        'project' => '',
        'version' => '6.34',
      ),
      'color' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
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
        'schema_version' => '6001',
        'project' => '',
        'version' => '6.34',
      ),
      'block' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'ping' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/ping/ping.module',
        'basename' => 'ping.module',
        'name' => 'ping',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
      'path_alias_cache' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/path_alias_cache/path_alias_cache.module',
        'basename' => 'path_alias_cache.module',
        'name' => 'path_alias_cache',
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
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'contact' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
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
        'schema_version' => 0,
        'project' => '',
        'version' => '6.34',
      ),
    ),
    'themes' => 
    array (
      'marvin' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/themes/chameleon/marvin/marvin.info',
        'basename' => 'marvin.info',
        'name' => 'Marvin',
        'info' => 
        array (
          'name' => 'Marvin',
          'description' => 'Boxy tabled theme in all grays.',
          'regions' => 
          array (
            'left' => 'Left sidebar',
            'right' => 'Right sidebar',
          ),
          'version' => '6.34',
          'core' => '6.x',
          'base theme' => 'chameleon',
        ),
        'project' => '',
        'version' => '6.34',
      ),
      'chameleon' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/themes/chameleon/chameleon.info',
        'basename' => 'chameleon.info',
        'name' => 'Chameleon',
        'info' => 
        array (
          'name' => 'Chameleon',
          'description' => 'Minimalist tabled theme with light colors.',
          'regions' => 
          array (
            'left' => 'Left sidebar',
            'right' => 'Right sidebar',
          ),
          'features' => 
          array (
            0 => 'logo',
            1 => 'favicon',
            2 => 'name',
            3 => 'slogan',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
              1 => 'common.css',
            ),
          ),
          'version' => '6.34',
          'core' => '6.x',
        ),
        'project' => '',
        'version' => '6.34',
      ),
      'minnelli' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/themes/garland/minnelli/minnelli.info',
        'basename' => 'minnelli.info',
        'name' => 'Minnelli',
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
        ),
        'project' => '',
        'version' => '6.34',
      ),
      'garland' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
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
        ),
        'owner' => '/data/disk/o1/aegir/distro/001/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => '',
        'version' => '6.34',
      ),
      'bluemarine' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/themes/bluemarine/bluemarine.info',
        'basename' => 'bluemarine.info',
        'name' => 'Bluemarine',
        'info' => 
        array (
          'name' => 'Bluemarine',
          'description' => 'Table-based multi-column theme with a marine and ash color scheme.',
          'version' => '6.34',
          'core' => '6.x',
          'engine' => 'phptemplate',
        ),
        'owner' => '/data/disk/o1/aegir/distro/001/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => '',
        'version' => '6.34',
      ),
      'pushbutton' => 
      array (
        'filename' => '/data/disk/o1/aegir/distro/001/themes/pushbutton/pushbutton.info',
        'basename' => 'pushbutton.info',
        'name' => 'Pushbutton',
        'info' => 
        array (
          'name' => 'Pushbutton',
          'description' => 'Tabled, multi-column theme in blue and orange tones.',
          'version' => '6.34',
          'core' => '6.x',
          'engine' => 'phptemplate',
        ),
        'owner' => '/data/disk/o1/aegir/distro/001/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => '',
        'version' => '6.34',
      ),
    ),
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
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
    ),
    'themes' => 
    array (
    ),
  ),
  'profiles' => 
  array (
    'hostmaster' => 
    array (
      'modules' => 
      array (
        'hosting_backup_queue' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting_backup_queue/hosting_backup_queue.module',
          'basename' => 'hosting_backup_queue.module',
          'name' => 'hosting_backup_queue',
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
          'schema_version' => '6100',
          'project' => '',
          'version' => NULL,
        ),
        'strongarm' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/strongarm/strongarm.module',
          'basename' => 'strongarm.module',
          'name' => 'strongarm',
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
          'schema_version' => '6202',
          'project' => 'strongarm',
          'version' => '6.x-2.2',
        ),
        'revision_deletion' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/revision_deletion/revision_deletion.module',
          'basename' => 'revision_deletion.module',
          'name' => 'revision_deletion',
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
          'schema_version' => 0,
          'project' => 'revision_deletion',
          'version' => '6.x-1.0-rc2+5-dev',
        ),
        'install_profile_api' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/install_profile_api/install_profile_api.module',
          'basename' => 'install_profile_api.module',
          'name' => 'install_profile_api',
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
          'schema_version' => 0,
          'project' => 'install_profile_api',
          'version' => '6.x-2.1',
        ),
        'openidadmin' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/openidadmin/openidadmin.module',
          'basename' => 'openidadmin.module',
          'name' => 'openidadmin',
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
          'schema_version' => 0,
          'project' => 'openidadmin',
          'version' => '6.x-1.2',
        ),
        'ctools_access_ruleset' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
          'basename' => 'ctools_access_ruleset.module',
          'name' => 'ctools_access_ruleset',
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
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '6.x-1.11',
        ),
        'page_manager' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/page_manager/page_manager.module',
          'basename' => 'page_manager.module',
          'name' => 'page_manager',
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
          'schema_version' => '6101',
          'project' => 'ctools',
          'version' => '6.x-1.11',
        ),
        'bulk_export' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/bulk_export/bulk_export.module',
          'basename' => 'bulk_export.module',
          'name' => 'bulk_export',
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
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '6.x-1.11',
        ),
        'ctools_ajax_sample' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
          'basename' => 'ctools_ajax_sample.module',
          'name' => 'ctools_ajax_sample',
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
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '6.x-1.11',
        ),
        'ctools_plugin_example' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
          'basename' => 'ctools_plugin_example.module',
          'name' => 'ctools_plugin_example',
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
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '6.x-1.11',
        ),
        'views_content' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/views_content/views_content.module',
          'basename' => 'views_content.module',
          'name' => 'views_content',
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
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '6.x-1.11',
        ),
        'stylizer' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/stylizer/stylizer.module',
          'basename' => 'stylizer.module',
          'name' => 'stylizer',
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
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '6.x-1.11',
        ),
        'ctools_custom_content' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/ctools_custom_content/ctools_custom_content.module',
          'basename' => 'ctools_custom_content.module',
          'name' => 'ctools_custom_content',
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
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '6.x-1.11',
        ),
        'ctools' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/ctools/ctools.module',
          'basename' => 'ctools.module',
          'name' => 'ctools',
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
          'schema_version' => '6007',
          'project' => 'ctools',
          'version' => '6.x-1.11',
        ),
        'protect_critical_users' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/protect_critical_users/protect_critical_users.module',
          'basename' => 'protect_critical_users.module',
          'name' => 'protect_critical_users',
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
          'schema_version' => 0,
          'project' => 'protect_critical_users',
          'version' => '6.x-1.1',
        ),
        'css_emimage' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/css_emimage/css_emimage.module',
          'basename' => 'css_emimage.module',
          'name' => 'css_emimage',
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
          'schema_version' => '6200',
          'project' => 'css_emimage',
          'version' => '6.x-2.2+1-dev',
        ),
        'jquery_update' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/jquery_update/jquery_update.module',
          'basename' => 'jquery_update.module',
          'name' => 'jquery_update',
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
          'schema_version' => '6200',
          'project' => 'jquery_update',
          'version' => '6.x-2.0-alpha1',
        ),
        'hosting_task_gc' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting_task_gc/hosting_task_gc.module',
          'basename' => 'hosting_task_gc.module',
          'name' => 'hosting_task_gc',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'fe_taxonomy' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/features_extra/fe_taxonomy.module',
          'basename' => 'fe_taxonomy.module',
          'name' => 'fe_taxonomy',
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
          'schema_version' => '6011',
          'project' => 'features_extra',
          'version' => '6.x-1.x-dev',
        ),
        'fe_nodequeue' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/features_extra/fe_nodequeue.module',
          'basename' => 'fe_nodequeue.module',
          'name' => 'fe_nodequeue',
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
          'schema_version' => '6011',
          'project' => 'features_extra',
          'version' => '6.x-1.x-dev',
        ),
        'fe_block' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/features_extra/fe_block.module',
          'basename' => 'fe_block.module',
          'name' => 'fe_block',
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
          'schema_version' => '6011',
          'project' => 'features_extra',
          'version' => '6.x-1.x-dev',
        ),
        'features_test' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/features/tests/features_test.module',
          'basename' => 'features_test.module',
          'name' => 'features_test',
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
          'schema_version' => 0,
          'project' => 'features',
          'version' => '6.x-1.2',
        ),
        'features' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/features/features.module',
          'basename' => 'features.module',
          'name' => 'features',
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
          'schema_version' => '6101',
          'project' => 'features',
          'version' => '6.x-1.2',
        ),
        'userprotect' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/userprotect/userprotect.module',
          'basename' => 'userprotect.module',
          'name' => 'userprotect',
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
          'schema_version' => '6002',
          'project' => 'userprotect',
          'version' => '6.x-1.5',
        ),
        'hosting_task' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/task/hosting_task.module',
          'basename' => 'hosting_task.module',
          'name' => 'hosting_task',
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
          'schema_version' => '6200',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_signup' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/signup/hosting_signup.module',
          'basename' => 'hosting_signup.module',
          'name' => 'hosting_signup',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_web_cluster' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/web_cluster/hosting_web_cluster.module',
          'basename' => 'hosting_web_cluster.module',
          'name' => 'hosting_web_cluster',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_quota' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/quota/hosting_quota.module',
          'basename' => 'hosting_quota.module',
          'name' => 'hosting_quota',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_site_data' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/example/site_data/hosting_site_data.module',
          'basename' => 'hosting_site_data.module',
          'name' => 'hosting_site_data',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_example' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/example/hosting_example.module',
          'basename' => 'hosting_example.module',
          'name' => 'hosting_example',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_db_server' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/db_server/hosting_db_server.module',
          'basename' => 'hosting_db_server.module',
          'name' => 'hosting_db_server',
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
          'schema_version' => '6001',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_clone' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/clone/hosting_clone.module',
          'basename' => 'hosting_clone.module',
          'name' => 'hosting_clone',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_queued' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/queued/hosting_queued.module',
          'basename' => 'hosting_queued.module',
          'name' => 'hosting_queued',
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
          'schema_version' => '6201',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_client' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/client/hosting_client.module',
          'basename' => 'hosting_client.module',
          'name' => 'hosting_client',
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
          'schema_version' => '6004',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_web_pack' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/web_pack/hosting_web_pack.module',
          'basename' => 'hosting_web_pack.module',
          'name' => 'hosting_web_pack',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_ssl' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/web_server/ssl/hosting_ssl.module',
          'basename' => 'hosting_ssl.module',
          'name' => 'hosting_ssl',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_nginx_ssl' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/web_server/nginx/ssl/hosting_nginx_ssl.module',
          'basename' => 'hosting_nginx_ssl.module',
          'name' => 'hosting_nginx_ssl',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_nginx' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/web_server/nginx/hosting_nginx.module',
          'basename' => 'hosting_nginx.module',
          'name' => 'hosting_nginx',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_web_server' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/web_server/hosting_web_server.module',
          'basename' => 'hosting_web_server.module',
          'name' => 'hosting_web_server',
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
          'schema_version' => '6002',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_server' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/server/hosting_server.module',
          'basename' => 'hosting_server.module',
          'name' => 'hosting_server',
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
          'schema_version' => '6203',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_alias' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/alias/hosting_alias.module',
          'basename' => 'hosting_alias.module',
          'name' => 'hosting_alias',
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
          'schema_version' => '6204',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_platform' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/platform/hosting_platform.module',
          'basename' => 'hosting_platform.module',
          'name' => 'hosting_platform',
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
          'schema_version' => '6209',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_migrate' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/migrate/hosting_migrate.module',
          'basename' => 'hosting_migrate.module',
          'name' => 'hosting_migrate',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_package' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/package/hosting_package.module',
          'basename' => 'hosting_package.module',
          'name' => 'hosting_package',
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
          'schema_version' => '6202',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_dns' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/dns/hosting_dns.module',
          'basename' => 'hosting_dns.module',
          'name' => 'hosting_dns',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_subdirs' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/subdirs/hosting_subdirs.module',
          'basename' => 'hosting_subdirs.module',
          'name' => 'hosting_subdirs',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_cron' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/cron/hosting_cron.module',
          'basename' => 'hosting_cron.module',
          'name' => 'hosting_cron',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_site' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/site/hosting_site.module',
          'basename' => 'hosting_site.module',
          'name' => 'hosting_site',
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
          'schema_version' => '6207',
          'project' => '',
          'version' => NULL,
        ),
        'hosting' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting/hosting.module',
          'basename' => 'hosting.module',
          'name' => 'hosting',
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
          'schema_version' => '6208',
          'project' => '',
          'version' => NULL,
        ),
        'jquery_ui' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/jquery_ui/jquery_ui.module',
          'basename' => 'jquery_ui.module',
          'name' => 'jquery_ui',
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
          'schema_version' => 0,
          'project' => 'jquery_ui',
          'version' => '6.x-1.5',
        ),
        'views_export' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/views/views_export/views_export.module',
          'basename' => 'views_export.module',
          'name' => 'views_export',
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
          'schema_version' => 0,
          'project' => 'views',
          'version' => '6.x-3.0',
        ),
        'views_ui' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/views/views_ui.module',
          'basename' => 'views_ui.module',
          'name' => 'views_ui',
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
          'schema_version' => 0,
          'project' => 'views',
          'version' => '6.x-3.0',
        ),
        'views' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/views/views.module',
          'basename' => 'views.module',
          'name' => 'views',
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
          'schema_version' => '6300',
          'project' => 'views',
          'version' => '6.x-3.0',
        ),
        'modalframe_example' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/modalframe/modules/modalframe_example/modalframe_example.module',
          'basename' => 'modalframe_example.module',
          'name' => 'modalframe_example',
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
          'schema_version' => 0,
          'project' => 'modalframe',
          'version' => '6.x-1.9',
        ),
        'modalframe' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/modalframe/modalframe.module',
          'basename' => 'modalframe.module',
          'name' => 'modalframe',
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
          'schema_version' => 0,
          'project' => 'modalframe',
          'version' => '6.x-1.9',
        ),
        'actions_permissions' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/views_bulk_operations/actions_permissions.module',
          'basename' => 'actions_permissions.module',
          'name' => 'actions_permissions',
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
          'schema_version' => 0,
          'project' => 'views_bulk_operations',
          'version' => '6.x-1.16',
        ),
        'views_bulk_operations' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/views_bulk_operations/views_bulk_operations.module',
          'basename' => 'views_bulk_operations.module',
          'name' => 'views_bulk_operations',
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
          'schema_version' => '6002',
          'project' => 'views_bulk_operations',
          'version' => '6.x-1.16',
        ),
        'hosting_platform_pathauto' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/hosting_platform_pathauto/hosting_platform_pathauto.module',
          'basename' => 'hosting_platform_pathauto.module',
          'name' => 'hosting_platform_pathauto',
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
          'schema_version' => 0,
          'project' => 'hosting_platform_pathauto',
          'version' => '6.x-2.1',
        ),
        'admin_menu' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/modules/admin_menu/admin_menu.module',
          'basename' => 'admin_menu.module',
          'name' => 'admin_menu',
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
          'schema_version' => '6001',
          'project' => 'admin_menu',
          'version' => '6.x-1.8',
        ),
      ),
      'themes' => 
      array (
        'eldir' => 
        array (
          'filename' => '/data/disk/o1/aegir/distro/001/profiles/hostmaster/themes/eldir/eldir.info',
          'basename' => 'eldir.info',
          'name' => 'Eldir',
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
          ),
          'project' => '',
          'version' => '6.34',
        ),
      ),
    ),
  ),
);