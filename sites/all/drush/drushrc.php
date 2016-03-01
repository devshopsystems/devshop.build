<?php 


$options['sites'] = array (
  0 => 'system.devshop.build',
);
$options['profiles'] = array (
  0 => 'default',
  1 => 'devmaster',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'dblog' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core - required',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6055',
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/tracker/tracker.module',
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
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Handles the filtering of content in preparation for display.',
          'package' => 'Core - required',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'profile' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6005',
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'throttle' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/throttle/throttle.module',
        'basename' => 'throttle.module',
        'name' => 'throttle',
        'info' => 
        array (
          'name' => 'Throttle',
          'description' => 'Handles the auto-throttling mechanism, to control site congestion.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'upload' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/upload/upload.module',
        'basename' => 'upload.module',
        'name' => 'upload',
        'info' => 
        array (
          'name' => 'Upload',
          'description' => 'Allows users to upload and attach files to content.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'menu' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core - required',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update status',
          'description' => 'Checks the status of available updates for Drupal and your installed modules and themes.',
          'version' => '6.37',
          'package' => 'Core - optional',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows the user to change the color scheme of certain themes.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/forum/forum.module',
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
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '6.37',
          'package' => 'Core - optional',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'php' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the boxes that are displayed around the main content.',
          'package' => 'Core - required',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core - required',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/translation/translation.module',
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
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'poll' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to structure site pages in a hierarchy or outline.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'blogapi' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/blogapi/blogapi.module',
        'basename' => 'blogapi.module',
        'name' => 'blogapi',
        'info' => 
        array (
          'name' => 'Blog API',
          'description' => 'Allows users to post content using applications that support XML-RPC blog APIs.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6001',
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables keeping easily and regularly updated user web pages or blogs.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'ping' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/ping/ping.module',
        'basename' => 'ping.module',
        'name' => 'ping',
        'info' => 
        array (
          'name' => 'Ping',
          'description' => 'Alerts other sites when your site has been updated.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core - optional',
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
          'dependencies' => 
          array (
          ),
          'php' => '4.3.5',
        ),
        'schema_version' => '6007',
        'project' => 'drupal',
        'version' => '6.37',
      ),
    ),
    'themes' => 
    array (
      'pushbutton' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/themes/pushbutton/pushbutton.info',
        'basename' => 'pushbutton.info',
        'name' => 'Pushbutton',
        'info' => 
        array (
          'name' => 'Pushbutton',
          'description' => 'Tabled, multi-column theme in blue and orange tones.',
          'version' => '6.37',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'project' => 'drupal',
          'datestamp' => '1440020160',
        ),
        'owner' => '/var/aegir/devmaster-0.8.1/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'marvin' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/themes/chameleon/marvin/marvin.info',
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
          'version' => '6.37',
          'core' => '6.x',
          'base theme' => 'chameleon',
          'project' => 'drupal',
          'datestamp' => '1440020160',
        ),
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'chameleon' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/themes/chameleon/chameleon.info',
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
          'version' => '6.37',
          'core' => '6.x',
          'project' => 'drupal',
          'datestamp' => '1440020160',
        ),
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'minnelli' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/themes/garland/minnelli/minnelli.info',
        'basename' => 'minnelli.info',
        'name' => 'Minnelli',
        'info' => 
        array (
          'name' => 'Minnelli',
          'description' => 'Tableless, recolorable, multi-column, fixed width theme.',
          'version' => '6.37',
          'core' => '6.x',
          'base theme' => 'garland',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'minnelli.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1440020160',
        ),
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'garland' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'Tableless, recolorable, multi-column, fluid width theme (default).',
          'version' => '6.37',
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
          'project' => 'drupal',
          'datestamp' => '1440020160',
        ),
        'owner' => '/var/aegir/devmaster-0.8.1/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'drupal',
        'version' => '6.37',
      ),
      'bluemarine' => 
      array (
        'filename' => '/var/aegir/devmaster-0.8.1/themes/bluemarine/bluemarine.info',
        'basename' => 'bluemarine.info',
        'name' => 'Bluemarine',
        'info' => 
        array (
          'name' => 'Bluemarine',
          'description' => 'Table-based multi-column theme with a marine and ash color scheme.',
          'version' => '6.37',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'project' => 'drupal',
          'datestamp' => '1440020160',
        ),
        'owner' => '/var/aegir/devmaster-0.8.1/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'drupal',
        'version' => '6.37',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '6.37',
        'description' => 'This platform is running Drupal 6.37',
      ),
    ),
    'profiles' => 
    array (
      'default' => 
      array (
        'name' => 'default',
        'filename' => '/var/aegir/devmaster-0.8.1/profiles/default/default.profile',
        'project' => '',
        'info' => 
        array (
          'name' => 'Drupal',
          'description' => 'Select this profile to enable some basic Drupal functionality and the default theme.',
          'languages' => 
          array (
            0 => 'en',
          ),
          'version' => NULL,
        ),
        'version' => '6.37',
      ),
      'devmaster' => 
      array (
        'name' => 'devmaster',
        'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/devmaster.profile',
        'project' => '',
        'info' => 
        array (
          'name' => 'Devmaster',
          'description' => 'The DevShop front-end.',
          'languages' => 
          array (
            0 => 'en',
          ),
          'version' => NULL,
        ),
        'version' => '6.37',
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
    'default' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'devmaster' => 
    array (
      'modules' => 
      array (
        'hosting_cron' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/cron/hosting_cron.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_server' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/server/hosting_server.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => '6203',
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_migrate' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/migrate/hosting_migrate.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_queued' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/queued/hosting_queued.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => '6201',
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_subdirs' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/subdirs/hosting_subdirs.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_site' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/site/hosting_site.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => '6207',
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_package' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/package/hosting_package.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => '6202',
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_db_server' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/db_server/hosting_db_server.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => '6001',
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_dns' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/dns/hosting_dns.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_alias' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/alias/hosting_alias.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => '6204',
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_quota' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/quota/hosting_quota.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_web_cluster' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/web_cluster/hosting_web_cluster.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_client' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/client/hosting_client.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => '6004',
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_web_pack' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/web_pack/hosting_web_pack.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_platform' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/platform/hosting_platform.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => '6209',
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_signup' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/signup/hosting_signup.module',
          'basename' => 'hosting_signup.module',
          'name' => 'hosting_signup',
          'info' => 
          array (
            'name' => 'Signup form',
            'description' => 'A simple signup form that allows users to sign up for a new site.',
            'package' => 'Hosting',
            'core' => '6.x',
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'dependencies' => 
            array (
            ),
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_site_data' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/example/site_data/hosting_site_data.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_example' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/example/hosting_example.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_ssl' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/web_server/ssl/hosting_ssl.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_nginx_ssl' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/web_server/nginx/ssl/hosting_nginx_ssl.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_nginx' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/web_server/nginx/hosting_nginx.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_web_server' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/web_server/hosting_web_server.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => '6002',
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_clone' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/clone/hosting_clone.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting_task' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/task/hosting_task.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => '6200',
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'hosting' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/hosting/hosting.module',
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
            'version' => '6.x-2.5',
            'project' => 'hosting',
            'datestamp' => '1440771843',
            'php' => '4.3.5',
          ),
          'schema_version' => '6208',
          'project' => 'hosting',
          'version' => '6.x-2.5',
        ),
        'views_export' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/views/views_export/views_export.module',
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
            'version' => '6.x-3.2',
            'project' => 'views',
            'datestamp' => '1423647787',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'views',
          'version' => '6.x-3.2',
        ),
        'views_ui' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/views/views_ui.module',
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
            'version' => '6.x-3.2',
            'project' => 'views',
            'datestamp' => '1423647787',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'views',
          'version' => '6.x-3.2',
        ),
        'views' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/views/views.module',
          'basename' => 'views.module',
          'name' => 'views',
          'info' => 
          array (
            'name' => 'Views',
            'description' => 'Create customized lists and queries from your database.',
            'package' => 'Views',
            'core' => '6.x',
            'version' => '6.x-3.2',
            'project' => 'views',
            'datestamp' => '1423647787',
            'dependencies' => 
            array (
            ),
            'php' => '4.3.5',
          ),
          'schema_version' => '6300',
          'project' => 'views',
          'version' => '6.x-3.2',
        ),
        'views_content' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/ctools/views_content/views_content.module',
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
            'version' => '6.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1450810742',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '6.x-1.15',
        ),
        'page_manager' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/ctools/page_manager/page_manager.module',
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
            'version' => '6.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1450810742',
            'php' => '4.3.5',
          ),
          'schema_version' => '6101',
          'project' => 'ctools',
          'version' => '6.x-1.15',
        ),
        'ctools_plugin_example' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
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
            'version' => '6.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1450810742',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '6.x-1.15',
        ),
        'bulk_export' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/ctools/bulk_export/bulk_export.module',
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
            'version' => '6.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1450810742',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '6.x-1.15',
        ),
        'ctools_ajax_sample' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
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
            'version' => '6.x-1.15',
            'core' => '6.x',
            'project' => 'ctools',
            'datestamp' => '1450810742',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '6.x-1.15',
        ),
        'ctools_custom_content' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
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
            'version' => '6.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1450810742',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '6.x-1.15',
        ),
        'stylizer' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/ctools/stylizer/stylizer.module',
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
            'version' => '6.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1450810742',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '6.x-1.15',
        ),
        'ctools_access_ruleset' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
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
            'version' => '6.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1450810742',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'ctools',
          'version' => '6.x-1.15',
        ),
        'ctools' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/ctools/ctools.module',
          'basename' => 'ctools.module',
          'name' => 'ctools',
          'info' => 
          array (
            'name' => 'Chaos tools',
            'description' => 'A library of helpful tools by Merlin of Chaos.',
            'core' => '6.x',
            'package' => 'Chaos tool suite',
            'version' => '6.x-1.15',
            'project' => 'ctools',
            'datestamp' => '1450810742',
            'dependencies' => 
            array (
            ),
            'php' => '4.3.5',
          ),
          'schema_version' => '6007',
          'project' => 'ctools',
          'version' => '6.x-1.15',
        ),
        'install_profile_api' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/install_profile_api/install_profile_api.module',
          'basename' => 'install_profile_api.module',
          'name' => 'install_profile_api',
          'info' => 
          array (
            'name' => 'Install Profile API',
            'description' => 'Utility functions that help with install profile creation and running',
            'core' => '6.x',
            'version' => '6.x-2.2',
            'project' => 'install_profile_api',
            'datestamp' => '1330014049',
            'dependencies' => 
            array (
            ),
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'install_profile_api',
          'version' => '6.x-2.2',
        ),
        'openidadmin' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/openidadmin/openidadmin.module',
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
        'jquery_update' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/jquery_update/jquery_update.module',
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
        'sshkey_blacklist' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/sshkey/sshkey_blacklist/sshkey_blacklist.module',
          'basename' => 'sshkey_blacklist.module',
          'name' => 'sshkey_blacklist',
          'info' => 
          array (
            'name' => 'SSH key blacklist checking',
            'description' => 'Validates SSH keys using the ssh-vulnkey blacklist.',
            'core' => '6.x',
            'dependencies' => 
            array (
              0 => 'sshkey',
            ),
            'version' => '6.x-2.0',
            'project' => 'sshkey',
            'datestamp' => '1347551754',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'sshkey',
          'version' => '6.x-2.0',
        ),
        'sshkey' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/sshkey/sshkey.module',
          'basename' => 'sshkey.module',
          'name' => 'sshkey',
          'info' => 
          array (
            'name' => 'SSH public keys',
            'description' => 'Allows users to associated public keys with their user accounts.',
            'core' => '6.x',
            'php' => '5.x',
            'files' => 
            array (
              0 => 'sshkey.test',
            ),
            'version' => '6.x-2.0',
            'project' => 'sshkey',
            'datestamp' => '1347551754',
            'dependencies' => 
            array (
            ),
          ),
          'schema_version' => 0,
          'project' => 'sshkey',
          'version' => '6.x-2.0',
        ),
        'adminrole' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/adminrole/adminrole.module',
          'basename' => 'adminrole.module',
          'name' => 'adminrole',
          'info' => 
          array (
            'name' => 'Admin Role',
            'description' => 'Automatically assign all permissions to an admin role.',
            'package' => 'Administration',
            'core' => '6.x',
            'version' => '6.x-1.3',
            'project' => 'adminrole',
            'datestamp' => '1281809488',
            'dependencies' => 
            array (
            ),
            'php' => '4.3.5',
          ),
          'schema_version' => '5100',
          'project' => 'adminrole',
          'version' => '6.x-1.3',
        ),
        'hosting_logs' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/hosting_logs/hosting_logs.module',
          'basename' => 'hosting_logs.module',
          'name' => 'hosting_logs',
          'info' => 
          array (
            'name' => 'Hosting Logs',
            'description' => 'Provides a site\'s error and watchdog logs to hostmaster front end.',
            'core' => '6.x',
            'package' => 'Hosting',
            'dependencies' => 
            array (
              0 => 'hosting_site',
            ),
            'version' => '6.x-2.0-alpha1',
            'project' => 'hosting_logs',
            'datestamp' => '1430531584',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting_logs',
          'version' => '6.x-2.0-alpha1',
        ),
        'hosting_filemanager' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/hosting_filemanager/hosting_filemanager.module',
          'basename' => 'hosting_filemanager.module',
          'name' => 'hosting_filemanager',
          'info' => 
          array (
            'name' => 'Hosting Filemanager',
            'description' => 'File manager for aegir sites.',
            'core' => '6.x',
            'dependencies' => 
            array (
              0 => 'hosting_site',
            ),
            'version' => '6.x-1.0-beta1',
            'project' => 'hosting_filemanager',
            'datestamp' => '1346149935',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting_filemanager',
          'version' => '6.x-1.0-beta1',
        ),
        'jquery_ui' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/jquery_ui/jquery_ui.module',
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
        'hosting_solr_jetty' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/hosting_solr/hosting_solr_jetty/hosting_solr_jetty.module',
          'basename' => 'hosting_solr_jetty.module',
          'name' => 'hosting_solr_jetty',
          'info' => 
          array (
            'name' => 'Hosting Solr Jetty',
            'description' => 'Use Jetty for Solr',
            'package' => 'Hosting',
            'dependencies' => 
            array (
              0 => 'hosting',
              1 => 'hosting_solr',
            ),
            'core' => '6.x',
            'version' => '6.x-1.0-beta3',
            'project' => 'hosting_solr',
            'datestamp' => '1430531312',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting_solr',
          'version' => '6.x-1.0-beta3',
        ),
        'hosting_solr' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/hosting_solr/hosting_solr.module',
          'basename' => 'hosting_solr.module',
          'name' => 'hosting_solr',
          'info' => 
          array (
            'name' => 'Hosting solr',
            'description' => 'Allow hostmaster to configure solr servers.',
            'package' => 'Hosting',
            'dependencies' => 
            array (
              0 => 'hosting',
            ),
            'core' => '6.x',
            'version' => '6.x-1.0-beta3',
            'project' => 'hosting_solr',
            'datestamp' => '1430531312',
            'php' => '4.3.5',
          ),
          'schema_version' => '6002',
          'project' => 'hosting_solr',
          'version' => '6.x-1.0-beta3',
        ),
        'actions_permissions' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/views_bulk_operations/actions_permissions.module',
          'basename' => 'actions_permissions.module',
          'name' => 'actions_permissions',
          'info' => 
          array (
            'name' => 'Actions permissions',
            'description' => 'Integrates actions with the permission system.',
            'package' => 'Administration',
            'core' => '6.x',
            'version' => '6.x-1.17',
            'project' => 'views_bulk_operations',
            'datestamp' => '1438697638',
            'dependencies' => 
            array (
            ),
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'views_bulk_operations',
          'version' => '6.x-1.17',
        ),
        'views_bulk_operations' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/views_bulk_operations/views_bulk_operations.module',
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
            'version' => '6.x-1.17',
            'project' => 'views_bulk_operations',
            'datestamp' => '1438697638',
          ),
          'schema_version' => '6002',
          'project' => 'views_bulk_operations',
          'version' => '6.x-1.17',
        ),
        'hosting_backup_queue' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/hosting_site_backup_manager/hosting_backup_queue/hosting_backup_queue.module',
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
              1 => 'hosting_site_backup_manager',
            ),
            'version' => '6.x-2.0',
            'project' => 'hosting_site_backup_manager',
            'datestamp' => '1384868611',
            'php' => '4.3.5',
          ),
          'schema_version' => '6100',
          'project' => 'hosting_site_backup_manager',
          'version' => '6.x-2.0',
        ),
        'hosting_site_backup_manager' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/hosting_site_backup_manager/hosting_site_backup_manager.module',
          'basename' => 'hosting_site_backup_manager.module',
          'name' => 'hosting_site_backup_manager',
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
            'version' => '6.x-2.0',
            'project' => 'hosting_site_backup_manager',
            'datestamp' => '1384868611',
            'php' => '4.3.5',
          ),
          'schema_version' => '6201',
          'project' => 'hosting_site_backup_manager',
          'version' => '6.x-2.0',
        ),
        'modalframe_example' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/modalframe/modules/modalframe_example/modalframe_example.module',
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
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/modalframe/modalframe.module',
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
        'admin_menu' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/admin_menu/admin_menu.module',
          'basename' => 'admin_menu.module',
          'name' => 'admin_menu',
          'info' => 
          array (
            'name' => 'Administration menu',
            'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
            'package' => 'Administration',
            'core' => '6.x',
            'version' => '6.x-1.9',
            'project' => 'admin_menu',
            'datestamp' => '1424535792',
            'dependencies' => 
            array (
            ),
            'php' => '4.3.5',
          ),
          'schema_version' => '6001',
          'project' => 'admin_menu',
          'version' => '6.x-1.9',
        ),
        'hosting_sync' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/hosting_tasks_extra/hosting_sync/hosting_sync.module',
          'basename' => 'hosting_sync.module',
          'name' => 'hosting_sync',
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
            'version' => '6.x-2.1',
            'project' => 'hosting_tasks_extra',
            'datestamp' => '1400489329',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting_tasks_extra',
          'version' => '6.x-2.1',
        ),
        'hosting_http_basic_auth' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/hosting_tasks_extra/http_basic_auth/hosting_http_basic_auth.module',
          'basename' => 'hosting_http_basic_auth.module',
          'name' => 'hosting_http_basic_auth',
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
            'version' => '6.x-2.1',
            'project' => 'hosting_tasks_extra',
            'datestamp' => '1400489329',
            'php' => '4.3.5',
          ),
          'schema_version' => '6100',
          'project' => 'hosting_tasks_extra',
          'version' => '6.x-2.1',
        ),
        'hosting_tasks_extra' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/hosting_tasks_extra/hosting_tasks_extra.module',
          'basename' => 'hosting_tasks_extra.module',
          'name' => 'hosting_tasks_extra',
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
            'version' => '6.x-2.1',
            'project' => 'hosting_tasks_extra',
            'datestamp' => '1400489329',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'hosting_tasks_extra',
          'version' => '6.x-2.1',
        ),
        'aegir_ssh' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/aegir_ssh/aegir_ssh.module',
          'basename' => 'aegir_ssh.module',
          'name' => 'aegir_ssh',
          'info' => 
          array (
            'name' => 'Aegir SSH',
            'description' => 'Allows users to upload their SSH keys to Hostmaster to get access to server_master.',
            'core' => '6.x',
            'package' => 'Aegir',
            'dependencies' => 
            array (
              0 => 'sshkey',
            ),
            'version' => '6.x-0.3',
            'project' => 'aegir_ssh',
            'datestamp' => '1439904841',
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => 'aegir_ssh',
          'version' => '6.x-0.3',
        ),
        'features_test' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/features/tests/features_test.module',
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
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/contrib/features/features.module',
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
        'devshop_pull' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/devshop/devshop_pull/devshop_pull.module',
          'basename' => 'devshop_pull.module',
          'name' => 'devshop_pull',
          'info' => 
          array (
            'name' => 'DevShop Pull',
            'description' => 'Provides a variety of methods to trigger a Pull Code task on DevShop projects.',
            'core' => '6.x',
            'package' => 'DevShop',
            'dependencies' => 
            array (
              0 => 'devshop_projects',
            ),
            'version' => NULL,
            'php' => '4.3.5',
          ),
          'schema_version' => '6002',
          'project' => '',
          'version' => NULL,
        ),
        'aegir_commit' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/devshop/aegir_commit/aegir_commit.module',
          'basename' => 'aegir_commit.module',
          'name' => 'aegir_commit',
          'info' => 
          array (
            'name' => 'Aegir Commit',
            'description' => 'Task for committing changes to a site.',
            'core' => '6.x',
            'dependencies' => 
            array (
              0 => 'hosting_site',
            ),
            'version' => NULL,
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'devshop_github' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/devshop/devshop_github/devshop_github.module',
          'basename' => 'devshop_github.module',
          'name' => 'devshop_github',
          'info' => 
          array (
            'name' => 'DevShop GitHub',
            'description' => 'Integration with GitHub',
            'core' => '6.x',
            'package' => 'DevShop',
            'dependencies' => 
            array (
              0 => 'devshop_projects',
            ),
            'version' => NULL,
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'devshop_acquia' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/devshop/devshop_acquia/devshop_acquia.module',
          'basename' => 'devshop_acquia.module',
          'name' => 'devshop_acquia',
          'info' => 
          array (
            'name' => 'DevShop Acquia Integration',
            'description' => 'Allows for Acquia Cloud Hooks to be used as deploy hooks in DevShop.',
            'core' => '6.x',
            'package' => 'DevShop',
            'dependencies' => 
            array (
              0 => 'devshop_hosting',
            ),
            'version' => NULL,
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'devshop_testing' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/devshop/devshop_testing/devshop_testing.module',
          'basename' => 'devshop_testing.module',
          'name' => 'devshop_testing',
          'info' => 
          array (
            'name' => 'DevShop Testing',
            'description' => 'Allow simpletests to be run easily on your DevShop projects.',
            'core' => '6.x',
            'package' => 'DevShop',
            'dependencies' => 
            array (
              0 => 'devshop_projects',
            ),
            'version' => NULL,
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'devshop_permissions' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/devshop/devshop_permissions/devshop_permissions.module',
          'basename' => 'devshop_permissions.module',
          'name' => 'devshop_permissions',
          'info' => 
          array (
            'name' => 'DevShop Permissions',
            'description' => 'Default user permissions for devshop.',
            'core' => '6.x',
            'package' => 'Features',
            'dependencies' => 
            array (
              0 => 'devshop_projects',
              1 => 'features',
            ),
            'features' => 
            array (
              'user_permission' => 
              array (
                0 => 'access content',
                1 => 'access disabled sites',
                2 => 'access filemanager',
                3 => 'access hosting logs',
                4 => 'access hosting wizard',
                5 => 'access project logs',
                6 => 'access task logs',
                7 => 'administer SSH public keys',
                8 => 'administer clients',
                9 => 'administer hosting',
                10 => 'administer hosting aliases',
                11 => 'administer hosting backup queue',
                12 => 'administer hosting features',
                13 => 'administer hosting queues',
                14 => 'administer hosting settings',
                15 => 'administer hosting site backup manager',
                16 => 'administer platforms',
                17 => 'administer projects',
                18 => 'administer servers',
                19 => 'administer sites',
                20 => 'administer tasks',
                21 => 'cancel own tasks',
                22 => 'configure devshop pull',
                23 => 'create backup schedules',
                24 => 'create backup task',
                25 => 'create backup-delete task',
                26 => 'create client',
                27 => 'create clone task',
                28 => 'create delete task',
                29 => 'create devshop-commit task',
                30 => 'create devshop-create task',
                31 => 'create devshop-delete task',
                32 => 'create devshop-deploy task',
                33 => 'create disable task',
                34 => 'create download task',
                35 => 'create enable task',
                36 => 'create flush_cache task',
                37 => 'create flush_drush_cache task',
                38 => 'create lock task',
                39 => 'create login-reset task',
                40 => 'create migrate task',
                41 => 'create package',
                42 => 'create platform',
                43 => 'create project',
                44 => 'create rebuild_registry task',
                45 => 'create restore task',
                46 => 'create run_cron task',
                47 => 'create server',
                48 => 'create site',
                49 => 'create site aliases',
                50 => 'create sites on locked platforms',
                51 => 'create sync task',
                52 => 'create unlock task',
                53 => 'create update task',
                54 => 'create verify task',
                55 => 'delete own client',
                56 => 'delete package',
                57 => 'delete platform',
                58 => 'delete projects',
                59 => 'delete server',
                60 => 'delete site',
                61 => 'edit client uname',
                62 => 'edit client users',
                63 => 'edit own client',
                64 => 'edit package',
                65 => 'edit platform',
                66 => 'edit project',
                67 => 'edit server',
                68 => 'edit site',
                69 => 'manage any SSH public keys',
                70 => 'manage own SSH public keys',
                71 => 'retry failed tasks',
                72 => 'update status of tasks',
                73 => 'view any SSH public keys',
                74 => 'view client',
                75 => 'view git commit logs',
                76 => 'view locked platforms',
                77 => 'view own SSH public keys',
                78 => 'view own tasks',
                79 => 'view package',
                80 => 'view platform',
                81 => 'view project',
                82 => 'view projects',
                83 => 'view server',
                84 => 'view site',
                85 => 'view task',
              ),
            ),
            'version' => NULL,
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'devshop_dothooks' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/devshop/devshop_dothooks/devshop_dothooks.module',
          'basename' => 'devshop_dothooks.module',
          'name' => 'devshop_dothooks',
          'info' => 
          array (
            'name' => 'DevShop .hooks integration',
            'description' => 'Allows the usage of a .hooks file when running tasks on environments.',
            'core' => '6.x',
            'package' => 'DevShop',
            'dependencies' => 
            array (
              0 => 'devshop_projects',
            ),
            'version' => NULL,
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'devshop_extra_users' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/devshop/devshop_extra_users/devshop_extra_users.module',
          'basename' => 'devshop_extra_users.module',
          'name' => 'devshop_extra_users',
          'info' => 
          array (
            'name' => 'DevShop Extra Install',
            'description' => 'Example module for loading extra info for an install profile.',
            'core' => '6.x',
            'package' => 'DevShop',
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
        'aegir_features' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/devshop/aegir_features/aegir_features.module',
          'basename' => 'aegir_features.module',
          'name' => 'aegir_features',
          'info' => 
          array (
            'name' => 'Aegir Features',
            'description' => 'Tools for managing the Drupal Features.module.',
            'core' => '6.x',
            'dependencies' => 
            array (
              0 => 'hosting_site',
            ),
            'version' => NULL,
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'devshop_projects' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/devshop/devshop_projects/devshop_projects.module',
          'basename' => 'devshop_projects.module',
          'name' => 'devshop_projects',
          'info' => 
          array (
            'name' => 'DevShop Projects',
            'description' => 'A DevShop module to sites/platforms together into projects.',
            'core' => '6.x',
            'package' => 'DevShop',
            'dependencies' => 
            array (
              0 => 'hosting',
              1 => 'hosting_alias',
              2 => 'ctools',
            ),
            'version' => NULL,
            'php' => '4.3.5',
          ),
          'schema_version' => '6011',
          'project' => '',
          'version' => NULL,
        ),
        'aegir_download' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/devshop/aegir_download/aegir_download.module',
          'basename' => 'aegir_download.module',
          'name' => 'aegir_download',
          'info' => 
          array (
            'name' => 'Aegir Download',
            'description' => 'Adds the ability to download packages to aegir hosted sites.',
            'core' => '6.x',
            'dependencies' => 
            array (
              0 => 'hosting_site',
            ),
            'version' => NULL,
            'php' => '4.3.5',
          ),
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'devshop_hosting' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/modules/devshop/devshop_hosting.module',
          'basename' => 'devshop_hosting.module',
          'name' => 'devshop_hosting',
          'info' => 
          array (
            'name' => 'DevShop Hosting',
            'description' => 'Provides the streamlined DevShop user interface and experience.  NOTE: This module alters some of of the UI of Aegir Hostmaster.',
            'core' => '6.x',
            'package' => 'DevShop',
            'dependencies' => 
            array (
              0 => 'hosting',
            ),
            'version' => NULL,
            'php' => '4.3.5',
          ),
          'schema_version' => '7004',
          'project' => '',
          'version' => NULL,
        ),
      ),
      'themes' => 
      array (
        'boots' => 
        array (
          'filename' => '/var/aegir/devmaster-0.8.1/profiles/devmaster/themes/boots/boots.info',
          'basename' => 'boots.info',
          'name' => 'Boots',
          'info' => 
          array (
            'name' => 'Boots',
            'description' => 'Bootstrap-powered theme for devshop.',
            'core' => '6.x',
            'engine' => 'phptemplate',
            'stylesheets' => 
            array (
              'all' => 
              array (
                0 => 'bootstrap.min.css',
                1 => 'boots.css',
                2 => 'fontawesome/css/font-awesome.min.css',
              ),
            ),
            'scripts' => 
            array (
              0 => 'js/jquery.min.js',
              1 => 'js/bootstrap.min.js',
              2 => 'js/jquery.matchHeight.js',
              3 => 'js/boots.js',
              4 => 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js',
            ),
            'regions' => 
            array (
              'header' => 'Header',
              'pre_content' => 'Pre-content',
              'content' => 'Content',
              'left' => 'Left',
              'footer' => 'Footer',
            ),
            'version' => NULL,
          ),
          'project' => '',
          'version' => NULL,
        ),
      ),
    ),
  ),
);