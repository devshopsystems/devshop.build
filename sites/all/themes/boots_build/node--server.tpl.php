

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">

        <a class="btn btn-link" href="<?php print $node_url; ?>">
          <?php print $node->title; ?>
        </a>
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
      <span class="pull-left">
      <?php print render($content['info']['verified']); ?>
      </span>
      <span class="pull-left">
        <?php print render($content['info']['status']); ?>
      </span>
    </div>

    <div class="tasks pull-right">
      <?php print render($content['tasks_view']); ?>
    </div>

    <div class="task-details">
      <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapseLogs" aria-expanded="false" aria-controls="collapseLogs">
        <i class="fa fa-list"></i> <?php print t('Details'); ?>
      </button>
      <div class="collapse" id="collapseLogs">
        <div class="well">
          <?php print render($content); ?>
          <?php print render($content['info']); ?>
        </div>
      </div>
    </div>

  </div>


</div>