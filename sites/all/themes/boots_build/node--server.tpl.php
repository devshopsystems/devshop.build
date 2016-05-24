

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">

        <a class="btn btn-link" href="<?php print $node_url; ?>">
          <?php print $node->title; ?>
        </a>
        <?php foreach ($node->ip_addresses as $ip): ?>
          <label class='label label-default'><?php print $ip; ?></label>
        <?php endforeach; ?>
        <?php if (empty($node->ip_addresses)): ?>
          <small class="text-muted">No IPs. <?php if (node_access('update', $node)): ?><a href="<?php print url("node/$node->nid/edit"); ?>">Edit</a><?php endif; ?></small>
        <?php endif; ?>
      </h3>
    </div>
      <?php hide($content['info']['ip_addresses']) ?>
      <?php hide($content['info']['status']) ?>
      <?php hide($content['info']['verified']) ?>
      <?php hide($content['tasks_view']) ?>

    <div class="panel-body">
      <span class="pull-left">
      <?php print render($content['info']['verified']); ?>
      </span>
      <span class="pull-left">
        <?php print render($content['info']['status']); ?>
      </span>
    </div>
    <table class="table">
      <tr>
        <td>
          <?php print render($content); ?>
        </td>
        <td>
          <?php print render($content['tasks_view']); ?>
        </td>
      </tr>
    </table>
  </div>


</div>