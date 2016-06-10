

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">

        <?php if ($node->services['ansible_roles']->type == 'devmaster'): ?>
          <a href="http://<?php print $node->title ?>" target="_blank" class="btn btn-primary btn-small launch-devshop"><img src="https://raw.githubusercontent.com/opendevshop/devshop/0.x/logo.png" width="32" height="32"> Launch this DevShop</a>

        <?php else: ?>
          <a class="btn btn-link" href="<?php print $node_url; ?>">
            <?php print $node->title; ?>
          </a>
        <?php endif; ?>

        <div class="pull-right">
          <?php foreach ($node->ip_addresses as $ip): ?>
            <label class='label label-default'><?php print $ip; ?></label>
          <?php endforeach; ?>
          <?php if (empty($node->ip_addresses)): ?>
            <small class="text-muted">No IPs.</small>
          <?php endif; ?>
          <?php if (node_access('update', $node)): ?><a href="<?php print url("node/$node->nid/edit"); ?>" class="btn btm-sm">Edit</a><?php endif; ?>
        </div>
      </h3>
    </div>
      <?php hide($content['info']) ?>

    <div class="panel-body">
      <?php print render($content['verify_button']); ?>
    </div>
    <div class="panel-body">
      <span class="pull-left">
      <?php print render($content['info']['ansible_roles']); ?>
      </span>
      <span class="pull-left">
        <?php print render($content['info']['status']); ?>
      </span>
    </div>

    <div class="panel-body tasks">
      <?php print views_embed_view('hosting_task_list', 'page_contextual', $node->nid); ?>
    </div>

    <div class="panel-footer task-details">
      <?php if (user_access('administer hosting')): ?>
        <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapseLogs" aria-expanded="false" aria-controls="collapseLogs">
          <i class="fa fa-list"></i> <?php print t('Details'); ?>
        </button>
        <div class="collapse" id="collapseLogs">
          <div class="well">
            <?php print render($content); ?>
            <?php print render($content['info']); ?>
          </div>
        </div>
      <?php endif; ?>
      <?php if (node_access('delete', $node)): ?>
        <a href="<?php print url("hosting_confirm/{$node->nid}/server_delete", array(
          'query' => array(
            'token' => drupal_get_token($user->uid)
          )
        )); ?>" class="btn btn-danger pull-right">
          <i class="fa fa-trash"></i> <?php print t('Destroy Server'); ?>
        </a>
      <?php endif; ?>
    </div>
  </div>
</div>