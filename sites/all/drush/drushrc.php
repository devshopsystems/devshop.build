<?php 


$options['sites'] = array (
  0 => 'live.build.devshop.build',
);
$options['profiles'] = array (
  0 => 'minimal',
  1 => 'standard',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'dblog' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7080',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'file' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'simpletest' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/boot.test',
            6 => 'tests/bootstrap.test',
            7 => 'tests/cache.test',
            8 => 'tests/common.test',
            9 => 'tests/database_test.test',
            10 => 'tests/entity_crud.test',
            11 => 'tests/entity_crud_hook_test.test',
            12 => 'tests/entity_query.test',
            13 => 'tests/error.test',
            14 => 'tests/file.test',
            15 => 'tests/filetransfer.test',
            16 => 'tests/form.test',
            17 => 'tests/graph.test',
            18 => 'tests/image.test',
            19 => 'tests/lock.test',
            20 => 'tests/mail.test',
            21 => 'tests/menu.test',
            22 => 'tests/module.test',
            23 => 'tests/pager.test',
            24 => 'tests/password.test',
            25 => 'tests/path.test',
            26 => 'tests/registry.test',
            27 => 'tests/schema.test',
            28 => 'tests/session.test',
            29 => 'tests/tablesort.test',
            30 => 'tests/theme.test',
            31 => 'tests/unicode.test',
            32 => 'tests/update.test',
            33 => 'tests/xmlrpc.test',
            34 => 'tests/upgrade/upgrade.test',
            35 => 'tests/upgrade/upgrade.comment.test',
            36 => 'tests/upgrade/upgrade.filter.test',
            37 => 'tests/upgrade/upgrade.forum.test',
            38 => 'tests/upgrade/upgrade.locale.test',
            39 => 'tests/upgrade/upgrade.menu.test',
            40 => 'tests/upgrade/upgrade.node.test',
            41 => 'tests/upgrade/upgrade.taxonomy.test',
            42 => 'tests/upgrade/upgrade.trigger.test',
            43 => 'tests/upgrade/upgrade.translatable.test',
            44 => 'tests/upgrade/upgrade.upload.test',
            45 => 'tests/upgrade/upgrade.user.test',
            46 => 'tests/upgrade/update.aggregator.test',
            47 => 'tests/upgrade/update.trigger.test',
            48 => 'tests/upgrade/update.field.test',
            49 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'configure' => 'admin/config/development/logging',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'overlay' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'menu' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.40',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.40',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'image' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'php' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.40',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7015',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'field_ui' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/translation/translation.module',
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
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'poll' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'rdf' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'contextual' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'dashboard' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.40',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'php' => '5.2.4',
        ),
        'schema_version' => '7011',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'list' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'options' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'number' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'field' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'field.info.class.inc',
            3 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/projects/build/live/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.40',
      ),
    ),
    'themes' => 
    array (
      'bartik' => 
      array (
        'filename' => '/var/aegir/projects/build/live/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
        ),
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'stark' => 
      array (
        'filename' => '/var/aegir/projects/build/live/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
        ),
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'garland' => 
      array (
        'filename' => '/var/aegir/projects/build/live/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
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
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
        ),
        'project' => 'drupal',
        'version' => '7.40',
      ),
      'seven' => 
      array (
        'filename' => '/var/aegir/projects/build/live/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.40',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
        ),
        'project' => 'drupal',
        'version' => '7.40',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.40',
        'description' => 'This platform is running Drupal 7.40',
      ),
    ),
    'profiles' => 
    array (
      'minimal' => 
      array (
        'name' => 'minimal',
        'filename' => '/var/aegir/projects/build/live/profiles/minimal/minimal.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.40',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.40',
      ),
      'standard' => 
      array (
        'name' => 'standard',
        'filename' => '/var/aegir/projects/build/live/profiles/standard/standard.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.40',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1444866674',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'version' => '7.40',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'jenkins' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/jenkins/jenkins.module',
        'basename' => 'jenkins.module',
        'name' => 'jenkins',
        'info' => 
        array (
          'name' => 'Jenkins',
          'description' => 'Provide user interface for some Jenkins management tasks.',
          'core' => '7.x',
          'configure' => 'admin/config/services/jenkins',
          'version' => '7.x-1.0-beta7',
          'project' => 'jenkins',
          'datestamp' => '1391562334',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'jenkins',
        'version' => '7.x-1.0-beta7',
      ),
      'path_alias_xt' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/path_alias_xt/path_alias_xt.module',
        'basename' => 'path_alias_xt.module',
        'name' => 'path_alias_xt',
        'info' => 
        array (
          'name' => 'Extended Path Aliases',
          'description' => 'Automatically extend path aliases to include tabs, like <em>about-us/edit</em> for <em>node/123/edit</em>. Allow these aliases to be entered in page specification wild-cards, <em>about-us*</em>, e.g for block visibility.',
          'core' => '7.x',
          'configure' => 'admin/config/system/path_alias_xt',
          'version' => '7.x-1.2',
          'project' => 'path_alias_xt',
          'datestamp' => '1394573307',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'path_alias_xt',
        'version' => '7.x-1.2',
      ),
      'views_export' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'views_ui' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_ui.module',
            1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.11',
          'project' => 'views',
          'datestamp' => '1430321048',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.11',
      ),
      'views' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_messages.inc',
            2 => 'handlers/views_handler_area_result.inc',
            3 => 'handlers/views_handler_area_text.inc',
            4 => 'handlers/views_handler_area_text_custom.inc',
            5 => 'handlers/views_handler_area_view.inc',
            6 => 'handlers/views_handler_argument.inc',
            7 => 'handlers/views_handler_argument_date.inc',
            8 => 'handlers/views_handler_argument_formula.inc',
            9 => 'handlers/views_handler_argument_many_to_one.inc',
            10 => 'handlers/views_handler_argument_null.inc',
            11 => 'handlers/views_handler_argument_numeric.inc',
            12 => 'handlers/views_handler_argument_string.inc',
            13 => 'handlers/views_handler_argument_group_by_numeric.inc',
            14 => 'handlers/views_handler_field.inc',
            15 => 'handlers/views_handler_field_counter.inc',
            16 => 'handlers/views_handler_field_boolean.inc',
            17 => 'handlers/views_handler_field_contextual_links.inc',
            18 => 'handlers/views_handler_field_custom.inc',
            19 => 'handlers/views_handler_field_date.inc',
            20 => 'handlers/views_handler_field_entity.inc',
            21 => 'handlers/views_handler_field_markup.inc',
            22 => 'handlers/views_handler_field_math.inc',
            23 => 'handlers/views_handler_field_numeric.inc',
            24 => 'handlers/views_handler_field_prerender_list.inc',
            25 => 'handlers/views_handler_field_time_interval.inc',
            26 => 'handlers/views_handler_field_serialized.inc',
            27 => 'handlers/views_handler_field_machine_name.inc',
            28 => 'handlers/views_handler_field_url.inc',
            29 => 'handlers/views_handler_filter.inc',
            30 => 'handlers/views_handler_filter_boolean_operator.inc',
            31 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            32 => 'handlers/views_handler_filter_combine.inc',
            33 => 'handlers/views_handler_filter_date.inc',
            34 => 'handlers/views_handler_filter_equality.inc',
            35 => 'handlers/views_handler_filter_entity_bundle.inc',
            36 => 'handlers/views_handler_filter_group_by_numeric.inc',
            37 => 'handlers/views_handler_filter_in_operator.inc',
            38 => 'handlers/views_handler_filter_many_to_one.inc',
            39 => 'handlers/views_handler_filter_numeric.inc',
            40 => 'handlers/views_handler_filter_string.inc',
            41 => 'handlers/views_handler_filter_fields_compare.inc',
            42 => 'handlers/views_handler_relationship.inc',
            43 => 'handlers/views_handler_relationship_groupwise_max.inc',
            44 => 'handlers/views_handler_sort.inc',
            45 => 'handlers/views_handler_sort_date.inc',
            46 => 'handlers/views_handler_sort_formula.inc',
            47 => 'handlers/views_handler_sort_group_by_numeric.inc',
            48 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            49 => 'handlers/views_handler_sort_random.inc',
            50 => 'includes/base.inc',
            51 => 'includes/handlers.inc',
            52 => 'includes/plugins.inc',
            53 => 'includes/view.inc',
            54 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            55 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            56 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            57 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            58 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            59 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            60 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            61 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            62 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            63 => 'modules/book/views_plugin_argument_default_book_root.inc',
            64 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            65 => 'modules/comment/views_handler_field_comment.inc',
            66 => 'modules/comment/views_handler_field_comment_depth.inc',
            67 => 'modules/comment/views_handler_field_comment_link.inc',
            68 => 'modules/comment/views_handler_field_comment_link_approve.inc',
            69 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            70 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            71 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            72 => 'modules/comment/views_handler_field_comment_node_link.inc',
            73 => 'modules/comment/views_handler_field_comment_username.inc',
            74 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            75 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            76 => 'modules/comment/views_handler_field_node_comment.inc',
            77 => 'modules/comment/views_handler_field_node_new_comments.inc',
            78 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            79 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            80 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            81 => 'modules/comment/views_handler_filter_node_comment.inc',
            82 => 'modules/comment/views_handler_sort_comment_thread.inc',
            83 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            84 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            85 => 'modules/comment/views_plugin_row_comment_rss.inc',
            86 => 'modules/comment/views_plugin_row_comment_view.inc',
            87 => 'modules/contact/views_handler_field_contact_link.inc',
            88 => 'modules/field/views_handler_field_field.inc',
            89 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            90 => 'modules/field/views_handler_argument_field_list.inc',
            91 => 'modules/field/views_handler_filter_field_list_boolean.inc',
            92 => 'modules/field/views_handler_argument_field_list_string.inc',
            93 => 'modules/field/views_handler_filter_field_list.inc',
            94 => 'modules/filter/views_handler_field_filter_format_name.inc',
            95 => 'modules/locale/views_handler_field_node_language.inc',
            96 => 'modules/locale/views_handler_filter_node_language.inc',
            97 => 'modules/locale/views_handler_argument_locale_group.inc',
            98 => 'modules/locale/views_handler_argument_locale_language.inc',
            99 => 'modules/locale/views_handler_field_locale_group.inc',
            100 => 'modules/locale/views_handler_field_locale_language.inc',
            101 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            102 => 'modules/locale/views_handler_filter_locale_group.inc',
            103 => 'modules/locale/views_handler_filter_locale_language.inc',
            104 => 'modules/locale/views_handler_filter_locale_version.inc',
            105 => 'modules/node/views_handler_argument_dates_various.inc',
            106 => 'modules/node/views_handler_argument_node_language.inc',
            107 => 'modules/node/views_handler_argument_node_nid.inc',
            108 => 'modules/node/views_handler_argument_node_type.inc',
            109 => 'modules/node/views_handler_argument_node_vid.inc',
            110 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            111 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            112 => 'modules/node/views_handler_field_node.inc',
            113 => 'modules/node/views_handler_field_node_link.inc',
            114 => 'modules/node/views_handler_field_node_link_delete.inc',
            115 => 'modules/node/views_handler_field_node_link_edit.inc',
            116 => 'modules/node/views_handler_field_node_revision.inc',
            117 => 'modules/node/views_handler_field_node_revision_link.inc',
            118 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            119 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            120 => 'modules/node/views_handler_field_node_path.inc',
            121 => 'modules/node/views_handler_field_node_type.inc',
            122 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            123 => 'modules/node/views_handler_filter_node_access.inc',
            124 => 'modules/node/views_handler_filter_node_status.inc',
            125 => 'modules/node/views_handler_filter_node_type.inc',
            126 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            127 => 'modules/node/views_plugin_argument_default_node.inc',
            128 => 'modules/node/views_plugin_argument_validate_node.inc',
            129 => 'modules/node/views_plugin_row_node_rss.inc',
            130 => 'modules/node/views_plugin_row_node_view.inc',
            131 => 'modules/profile/views_handler_field_profile_date.inc',
            132 => 'modules/profile/views_handler_field_profile_list.inc',
            133 => 'modules/profile/views_handler_filter_profile_selection.inc',
            134 => 'modules/search/views_handler_argument_search.inc',
            135 => 'modules/search/views_handler_field_search_score.inc',
            136 => 'modules/search/views_handler_filter_search.inc',
            137 => 'modules/search/views_handler_sort_search_score.inc',
            138 => 'modules/search/views_plugin_row_search_view.inc',
            139 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            140 => 'modules/system/views_handler_argument_file_fid.inc',
            141 => 'modules/system/views_handler_field_file.inc',
            142 => 'modules/system/views_handler_field_file_extension.inc',
            143 => 'modules/system/views_handler_field_file_filemime.inc',
            144 => 'modules/system/views_handler_field_file_uri.inc',
            145 => 'modules/system/views_handler_field_file_status.inc',
            146 => 'modules/system/views_handler_filter_file_status.inc',
            147 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            148 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            149 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            150 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            151 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            152 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            153 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            154 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            155 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            156 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            157 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            158 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            159 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            160 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            161 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            162 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            163 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
            164 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
            165 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
            166 => 'modules/system/views_handler_filter_system_type.inc',
            167 => 'modules/translation/views_handler_argument_node_tnid.inc',
            168 => 'modules/translation/views_handler_field_node_link_translate.inc',
            169 => 'modules/translation/views_handler_field_node_translation_link.inc',
            170 => 'modules/translation/views_handler_filter_node_tnid.inc',
            171 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            172 => 'modules/translation/views_handler_relationship_translation.inc',
            173 => 'modules/user/views_handler_argument_user_uid.inc',
            174 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            175 => 'modules/user/views_handler_field_user.inc',
            176 => 'modules/user/views_handler_field_user_language.inc',
            177 => 'modules/user/views_handler_field_user_link.inc',
            178 => 'modules/user/views_handler_field_user_link_cancel.inc',
            179 => 'modules/user/views_handler_field_user_link_edit.inc',
            180 => 'modules/user/views_handler_field_user_mail.inc',
            181 => 'modules/user/views_handler_field_user_name.inc',
            182 => 'modules/user/views_handler_field_user_permissions.inc',
            183 => 'modules/user/views_handler_field_user_picture.inc',
            184 => 'modules/user/views_handler_field_user_roles.inc',
            185 => 'modules/user/views_handler_filter_user_current.inc',
            186 => 'modules/user/views_handler_filter_user_name.inc',
            187 => 'modules/user/views_handler_filter_user_permissions.inc',
            188 => 'modules/user/views_handler_filter_user_roles.inc',
            189 => 'modules/user/views_plugin_argument_default_current_user.inc',
            190 => 'modules/user/views_plugin_argument_default_user.inc',
            191 => 'modules/user/views_plugin_argument_validate_user.inc',
            192 => 'modules/user/views_plugin_row_user_view.inc',
            193 => 'plugins/views_plugin_access.inc',
            194 => 'plugins/views_plugin_access_none.inc',
            195 => 'plugins/views_plugin_access_perm.inc',
            196 => 'plugins/views_plugin_access_role.inc',
            197 => 'plugins/views_plugin_argument_default.inc',
            198 => 'plugins/views_plugin_argument_default_php.inc',
            199 => 'plugins/views_plugin_argument_default_fixed.inc',
            200 => 'plugins/views_plugin_argument_default_raw.inc',
            201 => 'plugins/views_plugin_argument_validate.inc',
            202 => 'plugins/views_plugin_argument_validate_numeric.inc',
            203 => 'plugins/views_plugin_argument_validate_php.inc',
            204 => 'plugins/views_plugin_cache.inc',
            205 => 'plugins/views_plugin_cache_none.inc',
            206 => 'plugins/views_plugin_cache_time.inc',
            207 => 'plugins/views_plugin_display.inc',
            208 => 'plugins/views_plugin_display_attachment.inc',
            209 => 'plugins/views_plugin_display_block.inc',
            210 => 'plugins/views_plugin_display_default.inc',
            211 => 'plugins/views_plugin_display_embed.inc',
            212 => 'plugins/views_plugin_display_extender.inc',
            213 => 'plugins/views_plugin_display_feed.inc',
            214 => 'plugins/views_plugin_display_page.inc',
            215 => 'plugins/views_plugin_exposed_form_basic.inc',
            216 => 'plugins/views_plugin_exposed_form.inc',
            217 => 'plugins/views_plugin_exposed_form_input_required.inc',
            218 => 'plugins/views_plugin_localization_core.inc',
            219 => 'plugins/views_plugin_localization.inc',
            220 => 'plugins/views_plugin_localization_none.inc',
            221 => 'plugins/views_plugin_pager.inc',
            222 => 'plugins/views_plugin_pager_full.inc',
            223 => 'plugins/views_plugin_pager_mini.inc',
            224 => 'plugins/views_plugin_pager_none.inc',
            225 => 'plugins/views_plugin_pager_some.inc',
            226 => 'plugins/views_plugin_query.inc',
            227 => 'plugins/views_plugin_query_default.inc',
            228 => 'plugins/views_plugin_row.inc',
            229 => 'plugins/views_plugin_row_fields.inc',
            230 => 'plugins/views_plugin_row_rss_fields.inc',
            231 => 'plugins/views_plugin_style.inc',
            232 => 'plugins/views_plugin_style_default.inc',
            233 => 'plugins/views_plugin_style_grid.inc',
            234 => 'plugins/views_plugin_style_list.inc',
            235 => 'plugins/views_plugin_style_jump_menu.inc',
            236 => 'plugins/views_plugin_style_mapping.inc',
            237 => 'plugins/views_plugin_style_rss.inc',
            238 => 'plugins/views_plugin_style_summary.inc',
            239 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            240 => 'plugins/views_plugin_style_summary_unformatted.inc',
            241 => 'plugins/views_plugin_style_table.inc',
            242 => 'tests/handlers/views_handlers.test',
            243 => 'tests/handlers/views_handler_area_text.test',
            244 => 'tests/handlers/views_handler_argument_null.test',
            245 => 'tests/handlers/views_handler_argument_string.test',
            246 => 'tests/handlers/views_handler_field.test',
            247 => 'tests/handlers/views_handler_field_boolean.test',
            248 => 'tests/handlers/views_handler_field_custom.test',
            249 => 'tests/handlers/views_handler_field_counter.test',
            250 => 'tests/handlers/views_handler_field_date.test',
            251 => 'tests/handlers/views_handler_field_file_extension.test',
            252 => 'tests/handlers/views_handler_field_file_size.test',
            253 => 'tests/handlers/views_handler_field_math.test',
            254 => 'tests/handlers/views_handler_field_url.test',
            255 => 'tests/handlers/views_handler_field_xss.test',
            256 => 'tests/handlers/views_handler_filter_combine.test',
            257 => 'tests/handlers/views_handler_filter_date.test',
            258 => 'tests/handlers/views_handler_filter_equality.test',
            259 => 'tests/handlers/views_handler_filter_in_operator.test',
            260 => 'tests/handlers/views_handler_filter_numeric.test',
            261 => 'tests/handlers/views_handler_filter_string.test',
            262 => 'tests/handlers/views_handler_sort_random.test',
            263 => 'tests/handlers/views_handler_sort_date.test',
            264 => 'tests/handlers/views_handler_sort.test',
            265 => 'tests/test_handlers/views_test_area_access.inc',
            266 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            267 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            268 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
            269 => 'tests/plugins/views_plugin_display.test',
            270 => 'tests/styles/views_plugin_style_jump_menu.test',
            271 => 'tests/styles/views_plugin_style.test',
            272 => 'tests/styles/views_plugin_style_base.test',
            273 => 'tests/styles/views_plugin_style_mapping.test',
            274 => 'tests/styles/views_plugin_style_unformatted.test',
            275 => 'tests/views_access.test',
            276 => 'tests/views_analyze.test',
            277 => 'tests/views_basic.test',
            278 => 'tests/views_argument_default.test',
            279 => 'tests/views_argument_validator.test',
            280 => 'tests/views_exposed_form.test',
            281 => 'tests/field/views_fieldapi.test',
            282 => 'tests/views_glossary.test',
            283 => 'tests/views_groupby.test',
            284 => 'tests/views_handlers.test',
            285 => 'tests/views_module.test',
            286 => 'tests/views_pager.test',
            287 => 'tests/views_plugin_localization_test.inc',
            288 => 'tests/views_translatable.test',
            289 => 'tests/views_query.test',
            290 => 'tests/views_upgrade.test',
            291 => 'tests/views_test.views_default.inc',
            292 => 'tests/comment/views_handler_argument_comment_user_uid.test',
            293 => 'tests/comment/views_handler_filter_comment_user_uid.test',
            294 => 'tests/node/views_node_revision_relations.test',
            295 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
            296 => 'tests/user/views_handler_field_user_name.test',
            297 => 'tests/user/views_user_argument_default.test',
            298 => 'tests/user/views_user_argument_validate.test',
            299 => 'tests/user/views_user.test',
            300 => 'tests/views_cache.test',
            301 => 'tests/views_view.test',
            302 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.11',
          'project' => 'views',
          'datestamp' => '1430321048',
        ),
        'schema_version' => '7301',
        'project' => 'views',
        'version' => '7.x-3.11',
      ),
      'views_content' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/ctools/views_content/views_content.module',
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
          'core' => '7.x',
          'version' => '7.x-1.9',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'page_manager' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'bulk_export' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'term_depth' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/ctools/term_depth/term_depth.module',
        'basename' => 'term_depth.module',
        'name' => 'term_depth',
        'info' => 
        array (
          'name' => 'Term Depth access',
          'description' => 'Controls access to context based upon term depth',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'stylizer' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'ctools' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.9',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/css-cache.inc',
            2 => 'includes/math-expr.inc',
            3 => 'includes/stylizer.inc',
            4 => 'tests/css_cache.test',
          ),
          'project' => 'ctools',
          'datestamp' => '1440020680',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'ctools',
        'version' => '7.x-1.9',
      ),
      'openid_provider' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/openid_provider/openid_provider.module',
        'basename' => 'openid_provider.module',
        'name' => 'openid_provider',
        'info' => 
        array (
          'name' => 'Openid Provider',
          'description' => 'OpenID Provider (or server) support allows you to login to other OpenID enabled sites using your local account.',
          'core' => '7.x',
          'php' => '5.2',
          'package' => 'OpenID',
          'dependencies' => 
          array (
            0 => 'xrds_simple',
          ),
          'files' => 
          array (
            0 => 'openid_provider.inc',
            1 => 'openid_provider.install',
            2 => 'openid_provider.module',
            3 => 'openid_provider.pages.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'openid_provider',
          'datestamp' => '1353176000',
        ),
        'schema_version' => 0,
        'project' => 'openid_provider',
        'version' => '7.x-1.0',
      ),
      'field_group' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/field_group/field_group.module',
        'basename' => 'field_group.module',
        'name' => 'field_group',
        'info' => 
        array (
          'name' => 'Field Group',
          'description' => 'Provides the ability to group your fields on both form and display.',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'ctools',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/field_group.ui.test',
            1 => 'tests/field_group.display.test',
          ),
          'version' => '7.x-1.4',
          'project' => 'field_group',
          'datestamp' => '1401918529',
          'php' => '5.2.4',
        ),
        'schema_version' => '7007',
        'project' => 'field_group',
        'version' => '7.x-1.4',
      ),
      'jquery_update' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/jquery_update/jquery_update.module',
        'basename' => 'jquery_update.module',
        'name' => 'jquery_update',
        'info' => 
        array (
          'name' => 'jQuery Update',
          'description' => 'Update jQuery and jQuery UI to a more recent version.',
          'package' => 'User interface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jquery_update.module',
            1 => 'jquery_update.install',
          ),
          'configure' => 'admin/config/development/jquery_update',
          'version' => '7.x-2.6',
          'project' => 'jquery_update',
          'datestamp' => '1434549783',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'jquery_update',
        'version' => '7.x-2.6',
      ),
      'oauth2_common' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/oauthconnector/modules/oauth2/oauth2_common.module',
        'basename' => 'oauth2_common.module',
        'name' => 'oauth2_common',
        'info' => 
        array (
          'name' => 'OAuth2',
          'description' => 'Extends OAuth functionality with Oauth2',
          'package' => 'OAuth',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'lib/DrupalOAuth2Client.inc',
          ),
          'version' => '7.x-1.0-beta2',
          'project' => 'oauthconnector',
          'datestamp' => '1369926362',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'oauthconnector',
        'version' => '7.x-1.0-beta2',
      ),
      'oauthconnector' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/oauthconnector/oauthconnector.module',
        'basename' => 'oauthconnector.module',
        'name' => 'oauthconnector',
        'info' => 
        array (
          'name' => 'OAuth Connector',
          'description' => 'OAuth support for the Connector module',
          'core' => '7.x',
          'package' => 'Connector',
          'dependencies' => 
          array (
            0 => 'connector',
            1 => 'oauth_common',
            2 => 'oauth2_common',
            3 => 'http_client',
            4 => 'http_client_oauth',
            5 => 'ctools',
          ),
          'version' => '7.x-1.0-beta2',
          'project' => 'oauthconnector',
          'datestamp' => '1369926362',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'oauthconnector',
        'version' => '7.x-1.0-beta2',
      ),
      'pathauto' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.2',
          'project' => 'pathauto',
          'datestamp' => '1344525185',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'pathauto',
        'version' => '7.x-1.2',
      ),
      'devel_generate' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '7.x',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'configure' => 'admin/config/development/generate',
          'files' => 
          array (
            0 => 'devel_generate.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.5',
      ),
      'devel' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
        'info' => 
        array (
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'files' => 
          array (
            0 => 'devel.test',
            1 => 'devel.mail.inc',
          ),
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'project' => 'devel',
        'version' => '7.x-1.5',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
        'info' => 
        array (
          'name' => 'Devel node access',
          'description' => 'Developer blocks and page illustrating relevant node_access records.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.5',
          'project' => 'devel',
          'datestamp' => '1398963366',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.5',
      ),
      'sshkey_blacklist' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/sshkey/sshkey_blacklist/sshkey_blacklist.module',
        'basename' => 'sshkey_blacklist.module',
        'name' => 'sshkey_blacklist',
        'info' => 
        array (
          'name' => 'SSH key blacklist checking',
          'description' => 'Validates SSH keys using the ssh-vulnkey blacklist.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'sshkey',
          ),
          'version' => '7.x-2.0',
          'project' => 'sshkey',
          'datestamp' => '1347551755',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'sshkey',
        'version' => '7.x-2.0',
      ),
      'sshkey' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/sshkey/sshkey.module',
        'basename' => 'sshkey.module',
        'name' => 'sshkey',
        'info' => 
        array (
          'name' => 'SSH public keys',
          'description' => 'Allows users to associated public keys with their user accounts.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'sshkey.test',
            1 => 'views/sshkey.views.inc',
            2 => 'views/sshkey_handler_field_sshkey_operations.inc',
            3 => 'views/sshkey_handler_field_sshkey_link.inc',
            4 => 'views/sshkey_handler_field_sshkey_link_edit.inc',
            5 => 'views/sshkey_handler_field_sshkey_link_delete.inc',
          ),
          'version' => '7.x-2.0',
          'project' => 'sshkey',
          'datestamp' => '1347551755',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'sshkey',
        'version' => '7.x-2.0',
      ),
      'backup_migrate' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/backup_migrate/backup_migrate.module',
        'basename' => 'backup_migrate.module',
        'name' => 'backup_migrate',
        'info' => 
        array (
          'name' => 'Backup and Migrate',
          'description' => 'Backup the Drupal database and files or migrate them to another environment.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/destinations.inc',
            1 => 'includes/profiles.inc',
            2 => 'includes/schedules.inc',
          ),
          'configure' => 'admin/config/system/backup_migrate',
          'version' => '7.x-3.0',
          'project' => 'backup_migrate',
          'datestamp' => '1401209057',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'project' => 'backup_migrate',
        'version' => '7.x-3.0',
      ),
      'xautoload' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/xautoload/xautoload.module',
        'basename' => 'xautoload.module',
        'name' => 'xautoload',
        'info' => 
        array (
          'name' => 'X Autoload',
          'description' => 'Autoload based on PSR-0, PSR-4 and a custom PHP 5.2 compatibility mode.',
          'core' => '7.x',
          'php' => '5.3',
          'version' => '7.x-5.5',
          'project' => 'xautoload',
          'datestamp' => '1442068740',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7000',
        'project' => 'xautoload',
        'version' => '7.x-5.5',
      ),
      'adminrole' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/adminrole/adminrole.module',
        'basename' => 'adminrole.module',
        'name' => 'adminrole',
        'info' => 
        array (
          'name' => 'Admin Role',
          'description' => 'Automatically assign all permissions to an admin role.',
          'package' => 'Administration',
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'adminrole',
          'datestamp' => '1351352467',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'adminrole',
        'version' => '7.x-1.0',
      ),
      'field_collection' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/field_collection/field_collection.module',
        'basename' => 'field_collection.module',
        'name' => 'field_collection',
        'info' => 
        array (
          'name' => 'Field collection',
          'description' => 'Provides a field collection field, to which any number of fields can be attached.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'files' => 
          array (
            0 => 'field_collection.test',
            1 => 'field_collection.info.inc',
            2 => 'views/field_collection_handler_relationship.inc',
            3 => 'field_collection.migrate.inc',
          ),
          'configure' => 'admin/structure/field-collections',
          'package' => 'Fields',
          'version' => '7.x-1.0-beta8',
          'project' => 'field_collection',
          'datestamp' => '1415122384',
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'project' => 'field_collection',
        'version' => '7.x-1.0-beta8',
      ),
      'oauthloginprovider' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/oauthloginprovider/oauthloginprovider.module',
        'basename' => 'oauthloginprovider.module',
        'name' => 'oauthloginprovider',
        'info' => 
        array (
          'name' => 'OAuth Login Provider',
          'description' => 'Allows users to log in to other sites through your site using OAuth',
          'core' => '7.x',
          'package' => 'OAuth',
          'dependencies' => 
          array (
            0 => 'services',
            1 => 'services_oauth',
            2 => 'rest_server',
          ),
          'version' => '7.x-1.1',
          'project' => 'oauthloginprovider',
          'datestamp' => '1306530416',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'oauthloginprovider',
        'version' => '7.x-1.1',
      ),
      'connector_action_default_register_form' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/connector/modules/connector_action_default_register_form/connector_action_default_register_form.module',
        'basename' => 'connector_action_default_register_form.module',
        'name' => 'connector_action_default_register_form',
        'info' => 
        array (
          'name' => 'Connector Action Default Register Form',
          'description' => 'Adepts the default action for new accounts.',
          'core' => '7.x',
          'package' => 'Connector Action',
          'dependencies' => 
          array (
            0 => 'connector',
          ),
          'version' => '7.x-1.0-beta2',
          'project' => 'connector',
          'datestamp' => '1361736072',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'connector',
        'version' => '7.x-1.0-beta2',
      ),
      'connector' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/connector/connector.module',
        'basename' => 'connector.module',
        'name' => 'connector',
        'info' => 
        array (
          'name' => 'Connector',
          'description' => 'Provides base functionality for one-click login with eg. Facebook Connect and Twitter Connect',
          'core' => '7.x',
          'package' => 'Connector',
          'version' => '7.x-1.0-beta2',
          'project' => 'connector',
          'datestamp' => '1361736072',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'connector',
        'version' => '7.x-1.0-beta2',
      ),
      'field_ipaddress' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/field_ipaddress/field_ipaddress.module',
        'basename' => 'field_ipaddress.module',
        'name' => 'field_ipaddress',
        'info' => 
        array (
          'name' => 'IP Address Field',
          'description' => 'Provides a field for storing IP Addresses.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ipaddress.migrate.inc',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'field_ipaddress',
          'datestamp' => '1330998344',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'field_ipaddress',
        'version' => '7.x-1.0-beta1',
      ),
      'libraries' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version-dependent and shared usage of external libraries.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'system (>=7.11)',
          ),
          'files' => 
          array (
            0 => 'tests/libraries.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'libraries',
          'datestamp' => '1391965716',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'libraries',
        'version' => '7.x-2.2',
      ),
      'field_permissions' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/field_permissions/field_permissions.module',
        'basename' => 'field_permissions.module',
        'name' => 'field_permissions',
        'info' => 
        array (
          'name' => 'Field Permissions',
          'description' => 'Set field-level permissions to create, update or view fields.',
          'package' => 'Fields',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field_permissions.module',
            1 => 'field_permissions.admin.inc',
            2 => 'field_permissions.test',
          ),
          'configure' => 'admin/reports/fields/permissions',
          'version' => '7.x-1.0-beta2',
          'project' => 'field_permissions',
          'datestamp' => '1327510549',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'field_permissions',
        'version' => '7.x-1.0-beta2',
      ),
      'github_connect' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/github_connect/github_connect.module',
        'basename' => 'github_connect.module',
        'name' => 'github_connect',
        'info' => 
        array (
          'name' => 'Github Connect',
          'description' => 'Enables connecting Drupal accounts with Github.',
          'package' => 'Github',
          'core' => '7.x',
          'version' => '7.x-1.1',
          'project' => 'github_connect',
          'datestamp' => '1332538851',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'github_connect',
        'version' => '7.x-1.1',
      ),
      'entityreference_behavior_example' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
        'basename' => 'entityreference_behavior_example.module',
        'name' => 'entityreference_behavior_example',
        'info' => 
        array (
          'name' => 'Entity Reference Behavior Example',
          'description' => 'Provides some example code for implementing Entity Reference behaviors.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entityreference',
          ),
          'version' => '7.x-1.1',
          'project' => 'entityreference',
          'datestamp' => '1384973110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entityreference',
        'version' => '7.x-1.1',
      ),
      'entityreference' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/entityreference/entityreference.module',
        'basename' => 'entityreference.module',
        'name' => 'entityreference',
        'info' => 
        array (
          'name' => 'Entity Reference',
          'description' => 'Provides a field that can reference other entities.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'entityreference.migrate.inc',
            1 => 'plugins/selection/abstract.inc',
            2 => 'plugins/selection/views.inc',
            3 => 'plugins/behavior/abstract.inc',
            4 => 'views/entityreference_plugin_display.inc',
            5 => 'views/entityreference_plugin_style.inc',
            6 => 'views/entityreference_plugin_row_fields.inc',
            7 => 'tests/entityreference.handlers.test',
            8 => 'tests/entityreference.taxonomy.test',
            9 => 'tests/entityreference.admin.test',
            10 => 'tests/entityreference.feeds.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'entityreference',
          'datestamp' => '1384973110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entityreference',
        'version' => '7.x-1.1',
      ),
      'strongarm' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/strongarm/strongarm.module',
        'basename' => 'strongarm.module',
        'name' => 'strongarm',
        'info' => 
        array (
          'name' => 'Strongarm',
          'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'strongarm.admin.inc',
            1 => 'strongarm.install',
            2 => 'strongarm.module',
          ),
          'version' => '7.x-2.0',
          'project' => 'strongarm',
          'datestamp' => '1339604214',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'strongarm',
        'version' => '7.x-2.0',
      ),
      'oauth2_server' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/oauth2_server/oauth2_server.module',
        'basename' => 'oauth2_server.module',
        'name' => 'oauth2_server',
        'info' => 
        array (
          'name' => 'OAuth2 Server',
          'description' => 'Provides OAuth2 server functionality',
          'package' => 'OAuth2',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'entityreference',
            2 => 'xautoload',
          ),
          'core' => '7.x',
          'configure' => 'admin/structure/oauth2-servers',
          'php' => '5.3.9',
          'files' => 
          array (
            0 => 'oauth2_server.info.inc',
            1 => 'includes/oauth2_server.server_admin.inc',
            2 => 'includes/oauth2_server.scope_admin.inc',
            3 => 'includes/oauth2_server.client_admin.inc',
            4 => 'includes/oauth2_server.server_controller.inc',
            5 => 'includes/oauth2_server.scope_i18n.inc',
            6 => 'includes/oauth2_server.server.inc',
            7 => 'includes/oauth2_server.scope.inc',
            8 => 'includes/oauth2_server.client.inc',
            9 => 'includes/oauth2_server.authorization_code.inc',
            10 => 'includes/oauth2_server.token.inc',
            11 => 'tests/oauth2_server.test',
          ),
          'version' => '7.x-1.3',
          'project' => 'oauth2_server',
          'datestamp' => '1430995689',
        ),
        'schema_version' => '7106',
        'project' => 'oauth2_server',
        'version' => '7.x-1.3',
      ),
      'bakery' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/bakery/bakery.module',
        'basename' => 'bakery.module',
        'name' => 'bakery',
        'info' => 
        array (
          'name' => 'Bakery',
          'description' => 'Provides single-sign-on support across second-level domains.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'bakery.module',
          ),
          'php' => '5.1.2',
          'version' => '7.x-2.0-alpha4',
          'project' => 'bakery',
          'datestamp' => '1360785914',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => 0,
        'project' => 'bakery',
        'version' => '7.x-2.0-alpha4',
      ),
      'oauth_common_providerui' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/oauth/oauth_common_providerui.module',
        'basename' => 'oauth_common_providerui.module',
        'name' => 'oauth_common_providerui',
        'info' => 
        array (
          'name' => 'OAuth Provider UI',
          'description' => 'Provides a UI for when OAuth is acting as a provider.',
          'package' => 'OAuth',
          'dependencies' => 
          array (
            0 => 'oauth_common',
          ),
          'core' => '7.x',
          'version' => '7.x-3.2',
          'project' => 'oauth',
          'datestamp' => '1390561406',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'oauth',
        'version' => '7.x-3.2',
      ),
      'oauth_common' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/oauth/oauth_common.module',
        'basename' => 'oauth_common.module',
        'name' => 'oauth_common',
        'info' => 
        array (
          'name' => 'OAuth',
          'description' => 'Provides OAuth functionality',
          'configure' => 'admin/config/services/oauth',
          'package' => 'OAuth',
          'recommends' => 
          array (
            0 => 'ctools',
          ),
          'suggests' => 
          array (
            0 => 'inputstream',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'lib/OAuth.php',
            1 => 'includes/DrupalOAuthServer.inc',
            2 => 'includes/DrupalOAuthDataStore.inc',
            3 => 'includes/DrupalOAuthRequest.inc',
            4 => 'includes/DrupalOAuthToken.inc',
            5 => 'includes/DrupalOAuthConsumer.inc',
            6 => 'includes/DrupalOAuthClient.inc',
            7 => 'includes/OAuthSignatureMethod_HMAC.inc',
          ),
          'version' => '7.x-3.2',
          'project' => 'oauth',
          'datestamp' => '1390561406',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'oauth',
        'version' => '7.x-3.2',
      ),
      'nodeaccess_userreference' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/nodeaccess_userreference/nodeaccess_userreference.module',
        'basename' => 'nodeaccess_userreference.module',
        'name' => 'nodeaccess_userreference',
        'info' => 
        array (
          'name' => 'Node access user reference',
          'description' => 'Gives content access permissions to users for content that references the users with User reference or Entity reference.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/nodeaccess_userreference_views_plugin_display.inc',
            1 => 'includes/nodeaccess_userreference_views_plugin_style.inc',
          ),
          'version' => '7.x-3.10',
          'project' => 'nodeaccess_userreference',
          'datestamp' => '1369838762',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7306',
        'project' => 'nodeaccess_userreference',
        'version' => '7.x-3.10',
      ),
      'http_client_oauth' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/http_client/http_client_oauth.module',
        'basename' => 'http_client_oauth.module',
        'name' => 'http_client_oauth',
        'info' => 
        array (
          'name' => 'Http Client OAuth',
          'description' => 'Provides a OAuth authentication mechanism for the Http Client',
          'dependencies' => 
          array (
            0 => 'oauth_common',
            1 => 'http_client',
          ),
          'files' => 
          array (
            0 => 'includes/HttpClientOAuth.inc',
          ),
          'package' => 'Services - clients',
          'core' => '7.x',
          'version' => '7.x-2.4',
          'project' => 'http_client',
          'datestamp' => '1345646840',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'http_client',
        'version' => '7.x-2.4',
      ),
      'http_client' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/http_client/http_client.module',
        'basename' => 'http_client.module',
        'name' => 'http_client',
        'info' => 
        array (
          'name' => 'Http Client',
          'description' => 'Provides a Http client for use with the services Http server',
          'files' => 
          array (
            0 => 'includes/HttpClient.inc',
            1 => 'includes/HttpClientXMLFormatter.inc',
            2 => 'includes/HttpClientCurlDelegate.inc',
          ),
          'package' => 'Services - clients',
          'core' => '7.x',
          'version' => '7.x-2.4',
          'project' => 'http_client',
          'datestamp' => '1345646840',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'http_client',
        'version' => '7.x-2.4',
      ),
      'navbar' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/navbar/navbar.module',
        'basename' => 'navbar.module',
        'name' => 'navbar',
        'info' => 
        array (
          'name' => 'Navbar',
          'description' => 'A very simple mobile friendly navigation toolbar that lets you switch between frontend and backend.',
          'core' => '7.x',
          'package' => 'Administration',
          'dependencies' => 
          array (
            0 => 'libraries (>=2.0)',
          ),
          'version' => '7.x-1.6',
          'project' => 'navbar',
          'datestamp' => '1424653389',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'navbar',
        'version' => '7.x-1.6',
      ),
      'help_example' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/advanced_help/help_example/help_example.module',
        'basename' => 'help_example.module',
        'name' => 'help_example',
        'info' => 
        array (
          'name' => 'Advanced help example',
          'description' => 'A example help module to demonstrate the advanced help module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'advanced_help',
          ),
          'version' => '7.x-1.1',
          'project' => 'advanced_help',
          'datestamp' => '1386871727',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advanced_help',
        'version' => '7.x-1.1',
      ),
      'advanced_help' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/advanced_help/advanced_help.module',
        'basename' => 'advanced_help.module',
        'name' => 'advanced_help',
        'info' => 
        array (
          'name' => 'Advanced help',
          'description' => 'Allow advanced help and documentation.',
          'core' => '7.x',
          'version' => '7.x-1.1',
          'project' => 'advanced_help',
          'datestamp' => '1386871727',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'advanced_help',
        'version' => '7.x-1.1',
      ),
      'unique_field' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/unique_field/unique_field.module',
        'basename' => 'unique_field.module',
        'name' => 'unique_field',
        'info' => 
        array (
          'name' => 'Unique Field',
          'description' => 'Provides content validation requirement that a node\'s author, language, taxonomy terms, or other fields are unique.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'unique_field.module',
            1 => 'unique_field.install',
            2 => 'tests/core.test',
            3 => 'tests/date.test',
            4 => 'tests/references.test',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'unique_field',
          'datestamp' => '1311648120',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'unique_field',
        'version' => '7.x-1.0-rc1',
      ),
      'conditional_fields' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/conditional_fields/conditional_fields.module',
        'basename' => 'conditional_fields.module',
        'name' => 'conditional_fields',
        'info' => 
        array (
          'name' => 'Conditional Fields',
          'description' => 'Define dependencies between fields based on their states and values.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'configure' => 'admin/structure/dependencies',
          'version' => '7.x-3.0-alpha1',
          'project' => 'conditional_fields',
          'datestamp' => '1384798705',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'conditional_fields',
        'version' => '7.x-3.0-alpha1',
      ),
      'xrds_simple' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/xrds_simple/xrds_simple.module',
        'basename' => 'xrds_simple.module',
        'name' => 'xrds_simple',
        'info' => 
        array (
          'name' => 'XRDS Simple',
          'description' => 'Implements the XRDS-Simple spec for discovering services',
          'core' => '7.x',
          'package' => 'OpenID',
          'files' => 
          array (
            0 => 'xrds_simple.api.php',
            1 => 'xrds_simple.module',
          ),
          'version' => '7.x-1.1',
          'project' => 'xrds_simple',
          'datestamp' => '1370878254',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'xrds_simple',
        'version' => '7.x-1.1',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
        'info' => 
        array (
          'name' => 'Administration menu Toolbar style',
          'description' => 'A better Toolbar.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
          ),
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc5',
      ),
      'admin_devel' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
        'info' => 
        array (
          'name' => 'Administration Development tools',
          'description' => 'Administration and debugging functionality for developers and site builders.',
          'package' => 'Administration',
          'core' => '7.x',
          'scripts' => 
          array (
            0 => 'admin_devel.js',
          ),
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc5',
      ),
      'admin_menu' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/administration/admin_menu',
          'dependencies' => 
          array (
            0 => 'system (>7.10)',
          ),
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'version' => '7.x-3.0-rc5',
          'project' => 'admin_menu',
          'datestamp' => '1419029284',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc5',
      ),
      'rules_scheduler' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
        'basename' => 'rules_scheduler.module',
        'name' => 'rules_scheduler',
        'info' => 
        array (
          'name' => 'Rules Scheduler',
          'description' => 'Schedule the execution of Rules components using actions.',
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler.admin.inc',
            1 => 'rules_scheduler.module',
            2 => 'rules_scheduler.install',
            3 => 'rules_scheduler.rules.inc',
            4 => 'rules_scheduler.test',
            5 => 'includes/rules_scheduler.handler.inc',
            6 => 'includes/rules_scheduler.views_default.inc',
            7 => 'includes/rules_scheduler.views.inc',
            8 => 'includes/rules_scheduler_views_filter.inc',
          ),
          'version' => '7.x-2.8',
          'project' => 'rules',
          'datestamp' => '1420734780',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'project' => 'rules',
        'version' => '7.x-2.8',
      ),
      'rules_i18n' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/rules/rules_i18n/rules_i18n.module',
        'basename' => 'rules_i18n.module',
        'name' => 'rules_i18n',
        'info' => 
        array (
          'name' => 'Rules translation',
          'description' => 'Allows translating rules.',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_i18n.i18n.inc',
            1 => 'rules_i18n.rules.inc',
            2 => 'rules_i18n.test',
          ),
          'version' => '7.x-2.8',
          'project' => 'rules',
          'datestamp' => '1420734780',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.8',
      ),
      'rules_admin' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/rules/rules_admin/rules_admin.module',
        'basename' => 'rules_admin.module',
        'name' => 'rules_admin',
        'info' => 
        array (
          'name' => 'Rules UI',
          'description' => 'Administrative interface for managing rules.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_admin.module',
            1 => 'rules_admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'version' => '7.x-2.8',
          'project' => 'rules',
          'datestamp' => '1420734780',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.8',
      ),
      'rules' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/rules/rules.module',
        'basename' => 'rules.module',
        'name' => 'rules',
        'info' => 
        array (
          'name' => 'Rules',
          'description' => 'React on events and conditionally evaluate actions.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules.features.inc',
            1 => 'tests/rules.test',
            2 => 'includes/faces.inc',
            3 => 'includes/rules.core.inc',
            4 => 'includes/rules.event.inc',
            5 => 'includes/rules.processor.inc',
            6 => 'includes/rules.plugins.inc',
            7 => 'includes/rules.state.inc',
            8 => 'includes/rules.dispatcher.inc',
            9 => 'modules/node.eval.inc',
            10 => 'modules/php.eval.inc',
            11 => 'modules/rules_core.eval.inc',
            12 => 'modules/system.eval.inc',
            13 => 'ui/ui.controller.inc',
            14 => 'ui/ui.core.inc',
            15 => 'ui/ui.data.inc',
            16 => 'ui/ui.plugins.inc',
          ),
          'dependencies' => 
          array (
            0 => 'entity_token',
            1 => 'entity',
          ),
          'version' => '7.x-2.8',
          'project' => 'rules',
          'datestamp' => '1420734780',
          'php' => '5.2.4',
        ),
        'schema_version' => '7213',
        'project' => 'rules',
        'version' => '7.x-2.8',
      ),
      'eva' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/eva/eva.module',
        'basename' => 'eva.module',
        'name' => 'eva',
        'info' => 
        array (
          'name' => 'Eva',
          'description' => 'Provides a Views display type that can be attached to entities.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'files' => 
          array (
            0 => 'eva_plugin_display_entity.inc',
          ),
          'version' => '7.x-1.2',
          'project' => 'eva',
          'datestamp' => '1343701935',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'eva',
        'version' => '7.x-1.2',
      ),
      'module_filter' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/module_filter/module_filter.module',
        'basename' => 'module_filter.module',
        'name' => 'module_filter',
        'info' => 
        array (
          'name' => 'Module filter',
          'description' => 'Filter the modules list.',
          'core' => '7.x',
          'package' => 'Administration',
          'files' => 
          array (
            0 => 'module_filter.install',
            1 => 'module_filter.js',
            2 => 'module_filter.module',
            3 => 'module_filter.admin.inc',
            4 => 'module_filter.theme.inc',
            5 => 'css/module_filter.css',
            6 => 'css/module_filter_tab.css',
            7 => 'js/module_filter.js',
            8 => 'js/module_filter_tab.js',
          ),
          'configure' => 'admin/config/user-interface/modulefilter',
          'version' => '7.x-2.0',
          'project' => 'module_filter',
          'datestamp' => '1424631189',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'module_filter',
        'version' => '7.x-2.0',
      ),
      'entity' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.6',
          'project' => 'entity',
          'datestamp' => '1424876582',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'entity',
        'version' => '7.x-1.6',
      ),
      'entity_token' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.6',
          'project' => 'entity',
          'datestamp' => '1424876582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.6',
      ),
      'panels_node' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/panels/panels_node/panels_node.module',
        'basename' => 'panels_node.module',
        'name' => 'panels_node',
        'info' => 
        array (
          'name' => 'Panel nodes',
          'description' => 'Create nodes that are divided into areas with selectable content.',
          'package' => 'Panels',
          'version' => '7.x-3.5',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'configure' => 'admin/structure/panels',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'panels_node.module',
          ),
          'project' => 'panels',
          'datestamp' => '1422472985',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'panels',
        'version' => '7.x-3.5',
      ),
      'i18n_panels' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/panels/i18n_panels/i18n_panels.module',
        'basename' => 'i18n_panels.module',
        'name' => 'i18n_panels',
        'info' => 
        array (
          'name' => 'Panels translation',
          'description' => 'Supports translatable panels items.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'panels',
            2 => 'i18n_string',
            3 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-3.5',
          'project' => 'panels',
          'datestamp' => '1422472985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.5',
      ),
      'panels_ipe' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/panels/panels_ipe/panels_ipe.module',
        'basename' => 'panels_ipe.module',
        'name' => 'panels_ipe',
        'info' => 
        array (
          'name' => 'Panels In-Place Editor',
          'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
          'package' => 'Panels',
          'version' => '7.x-3.5',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'configure' => 'admin/structure/panels',
          'files' => 
          array (
            0 => 'panels_ipe.module',
          ),
          'project' => 'panels',
          'datestamp' => '1422472985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.5',
      ),
      'panels_mini' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/panels/panels_mini/panels_mini.module',
        'basename' => 'panels_mini.module',
        'name' => 'panels_mini',
        'info' => 
        array (
          'name' => 'Mini panels',
          'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
          'package' => 'Panels',
          'version' => '7.x-3.5',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/export_ui/panels_mini_ui.class.php',
          ),
          'project' => 'panels',
          'datestamp' => '1422472985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.5',
      ),
      'panels' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/panels/panels.module',
        'basename' => 'panels.module',
        'name' => 'panels',
        'info' => 
        array (
          'name' => 'Panels',
          'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
          'core' => '7.x',
          'package' => 'Panels',
          'version' => '7.x-3.5',
          'configure' => 'admin/structure/panels',
          'dependencies' => 
          array (
            0 => 'ctools (>1.5)',
          ),
          'files' => 
          array (
            0 => 'panels.module',
            1 => 'includes/common.inc',
            2 => 'includes/legacy.inc',
            3 => 'includes/plugins.inc',
            4 => 'plugins/views/panels_views_plugin_row_fields.inc',
          ),
          'project' => 'panels',
          'datestamp' => '1422472985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'project' => 'panels',
        'version' => '7.x-3.5',
      ),
      'token' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.test',
          ),
          'version' => '7.x-1.6',
          'project' => 'token',
          'datestamp' => '1425149060',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'token',
        'version' => '7.x-1.6',
      ),
      'machine_name' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/machine_name/machine_name.module',
        'basename' => 'machine_name.module',
        'name' => 'machine_name',
        'info' => 
        array (
          'name' => 'Machine name',
          'description' => 'Provides a machine name field.',
          'package' => 'Fields',
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'machine_name',
          'datestamp' => '1353012408',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'machine_name',
        'version' => '7.x-1.0',
      ),
      'features' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/contrib/features/features.module',
        'basename' => 'features.module',
        'name' => 'features',
        'info' => 
        array (
          'name' => 'Features',
          'description' => 'Provides feature management for Drupal.',
          'core' => '7.x',
          'package' => 'Features',
          'files' => 
          array (
            0 => 'tests/features.test',
          ),
          'configure' => 'admin/structure/features/settings',
          'version' => '7.x-2.7',
          'project' => 'features',
          'datestamp' => '1444829630',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'features',
        'version' => '7.x-2.7',
      ),
      'devshop_servers' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/modules/devshop_build/devshop_servers/devshop_servers.module',
        'basename' => 'devshop_servers.module',
        'name' => 'devshop_servers',
        'info' => 
        array (
          'name' => 'DevShop Servers',
          'core' => '7.x',
          'package' => 'DevShop',
          'version' => '7.x-1.0',
          'project' => 'devshop_servers',
          'dependencies' => 
          array (
            0 => 'entityreference',
            1 => 'features',
            2 => 'field_ipaddress',
            3 => 'link',
            4 => 'node',
            5 => 'strongarm',
            6 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'devshop_server_ip_address',
              1 => 'devshop_server_users',
              2 => 'field_url',
            ),
            'field_instance' => 
            array (
              0 => 'node-server-devshop_server_ip_address',
              1 => 'node-server-devshop_server_users',
              2 => 'node-server-field_url',
            ),
            'node' => 
            array (
              0 => 'server',
            ),
            'user_permission' => 
            array (
              0 => 'create server content',
              1 => 'delete any server content',
              2 => 'delete own server content',
              3 => 'edit any server content',
              4 => 'edit own server content',
            ),
            'user_role' => 
            array (
              0 => 'system administrator',
            ),
            'variable' => 
            array (
              0 => 'comment_anonymous_server',
              1 => 'comment_default_mode_server',
              2 => 'comment_default_per_page_server',
              3 => 'comment_form_location_server',
              4 => 'comment_preview_server',
              5 => 'comment_server',
              6 => 'comment_subject_field_server',
              7 => 'field_bundle_settings_node__server',
              8 => 'menu_options_server',
              9 => 'menu_parent_server',
              10 => 'node_options_server',
              11 => 'node_preview_server',
              12 => 'node_submitted_server',
            ),
            'views_view' => 
            array (
              0 => 'devshop_servers',
            ),
          ),
          'features_exclude' => 
          array (
            'dependencies' => 
            array (
              'ctools' => 'ctools',
            ),
            'field_base' => 
            array (
              'field_server_users_admins' => 'field_server_users_admins',
            ),
            'field_instance' => 
            array (
              'node-server-field_server_users_admins' => 'node-server-field_server_users_admins',
            ),
          ),
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devshop_servers',
        'version' => '7.x-1.0',
      ),
    ),
    'themes' => 
    array (
      'buildstrap' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/themes/buildstrap/buildstrap.info',
        'basename' => 'buildstrap.info',
        'name' => 'BuildStrap',
        'info' => 
        array (
          'name' => 'BuildStrap',
          'description' => 'devshop.build starter theme.',
          'core' => '7.x',
          'base theme' => 'bootstrap',
          'version' => NULL,
        ),
        'project' => '',
        'version' => NULL,
      ),
      'bootstrap' => 
      array (
        'filename' => '/var/aegir/projects/build/live/sites/all/themes/bootstrap/bootstrap.info',
        'basename' => 'bootstrap.info',
        'name' => 'Bootstrap',
        'info' => 
        array (
          'name' => 'Bootstrap',
          'description' => 'Built to use Bootstrap, a sleek, intuitive, and powerful front-end framework for faster and easier web development.',
          'core' => '7.x',
          'simplytest_dependencies' => 
          array (
            0 => 'jquery_update',
          ),
          'regions' => 
          array (
            'navigation' => 'Navigation',
            'header' => 'Top Bar',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'sidebar_first' => 'Primary',
            'sidebar_second' => 'Secondary',
            'footer' => 'Footer',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'settings' => 
          array (
            'bootstrap_fluid_container' => '0',
            'bootstrap_button_size' => '',
            'bootstrap_button_colorize' => '1',
            'bootstrap_button_iconize' => '1',
            'bootstrap_image_shape' => '',
            'bootstrap_image_responsive' => '1',
            'bootstrap_table_bordered' => '0',
            'bootstrap_table_condensed' => '0',
            'bootstrap_table_hover' => '1',
            'bootstrap_table_striped' => '1',
            'bootstrap_table_responsive' => '1',
            'bootstrap_breadcrumb' => '1',
            'bootstrap_breadcrumb_home' => '0',
            'bootstrap_breadcrumb_title' => '1',
            'bootstrap_navbar_position' => '',
            'bootstrap_navbar_inverse' => '0',
            'bootstrap_pager_first_and_last' => '1',
            'bootstrap_region_well-navigation' => '',
            'bootstrap_region_well-header' => '',
            'bootstrap_region_well-highlighted' => '',
            'bootstrap_region_well-help' => '',
            'bootstrap_region_well-content' => '',
            'bootstrap_region_well-sidebar_first' => 'well',
            'bootstrap_region_well-sidebar_second' => '',
            'bootstrap_region_well-footer' => '',
            'bootstrap_anchors_fix' => '1',
            'bootstrap_anchors_smooth_scrolling' => '1',
            'bootstrap_forms_required_has_error' => '0',
            'bootstrap_forms_has_error_value_toggle' => '1',
            'bootstrap_forms_smart_descriptions' => '1',
            'bootstrap_forms_smart_descriptions_limit' => '250',
            'bootstrap_forms_smart_descriptions_allowed_tags' => 'b, code, em, i, kbd, span, strong',
            'bootstrap_popover_enabled' => '1',
            'bootstrap_popover_animation' => '1',
            'bootstrap_popover_html' => '0',
            'bootstrap_popover_placement' => 'right',
            'bootstrap_popover_selector' => '',
            'bootstrap_popover_trigger' => 
            array (
              '\'hover\'' => '0',
              '\'focus\'' => '0',
              '\'click\'' => 'click',
            ),
            'bootstrap_popover_trigger_autoclose' => '1',
            'bootstrap_popover_title' => '',
            'bootstrap_popover_content' => '',
            'bootstrap_popover_delay' => '0',
            'bootstrap_popover_container' => 'body',
            'bootstrap_tooltip_enabled' => '1',
            'bootstrap_tooltip_animation' => '1',
            'bootstrap_tooltip_html' => '0',
            'bootstrap_tooltip_placement' => 'auto left',
            'bootstrap_tooltip_selector' => '',
            'bootstrap_tooltip_trigger' => 
            array (
              '\'hover\'' => 'hover',
              '\'focus\'' => 'focus',
              '\'click\'' => '0',
            ),
            'bootstrap_tooltip_delay' => '0',
            'bootstrap_tooltip_container' => 'body',
            'bootstrap_cdn_provider' => 'jsdelivr',
            'bootstrap_cdn_custom_css' => '//cdn.jsdelivr.net/bootstrap/3.3.2/css/bootstrap.css',
            'bootstrap_cdn_custom_css_min' => '//cdn.jsdelivr.net/bootstrap/3.3.2/css/bootstrap.min.css',
            'bootstrap_cdn_custom_js' => '//cdn.jsdelivr.net/bootstrap/3.3.2/js/bootstrap.js',
            'bootstrap_cdn_custom_js_min' => '//cdn.jsdelivr.net/bootstrap/3.3.2/js/bootstrap.min.js',
            'bootstrap_cdn_jsdelivr_version' => '3.3.2',
            'bootstrap_cdn_jsdelivr_theme' => 'bootstrap',
            'toggle_name' => '1',
            'toggle_search' => '1',
          ),
          'exclude' => 
          array (
            'css' => 
            array (
              0 => 'misc/vertical-tabs.css',
              1 => 'modules/aggregator/aggregator.css',
              2 => 'modules/book/book.css',
              3 => 'modules/comment/comment.css',
              4 => 'modules/dblog/dblog.css',
              5 => 'modules/file/file.css',
              6 => 'modules/filter/filter.css',
              7 => 'modules/forum/forum.css',
              8 => 'modules/help/help.css',
              9 => 'modules/menu/menu.css',
              10 => 'modules/openid/openid.css',
              11 => 'modules/poll/poll.css',
              12 => 'modules/search/search.css',
              13 => 'modules/statistics/statistics.css',
              14 => 'modules/syslog/syslog.css',
              15 => 'modules/system/maintenance.css',
              16 => 'modules/system/system.maintenance.css',
              17 => 'modules/system/system.menus.css',
              18 => 'modules/system/system.messages.css',
              19 => 'modules/system/system.theme.css',
              20 => 'modules/taxonomy/taxonomy.css',
              21 => 'modules/tracker/tracker.css',
              22 => 'modules/update/update.css',
              23 => 'modules/user/user.css',
            ),
          ),
          'breakpoints' => 
          array (
            'screen-xs-max' => '(max-width: 767px)',
            'screen-sm-min' => '(max-width: 768px)',
            'screen-sm-max' => '(max-width: 991px)',
            'screen-md-min' => '(max-width: 992px)',
            'screen-md-max' => '(max-width: 1199px)',
            'screen-lg-min' => '(min-width: 1200px)',
          ),
          'multipliers' => 
          array (
            'screen-xs-max' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
            'screen-sm-min' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
            'screen-sm-max' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
            'screen-md-min' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
            'screen-md-max' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
            'screen-lg-min' => 
            array (
              0 => '1.5x',
              1 => '2x',
            ),
          ),
          'version' => '7.x-3.1-beta3+11-dev',
          'project' => 'bootstrap',
          'datestamp' => '1442935176',
        ),
        'project' => 'bootstrap',
        'version' => '7.x-3.1-beta3+11-dev',
      ),
    ),
  ),
  'profiles' => 
  array (
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);