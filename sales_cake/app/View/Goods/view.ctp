<div class="goods view">
<h2><?php echo __('Good'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($good['Good']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Good Name'); ?></dt>
		<dd>
			<?php echo h($good['Good']['good_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($good['Good']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($good['Good']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($good['Good']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Good'), array('action' => 'edit', $good['Good']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Good'), array('action' => 'delete', $good['Good']['id']), array(), __('Are you sure you want to delete # %s?', $good['Good']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Goods'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Good'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Infos'), array('controller' => 'sales_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Info'), array('controller' => 'sales_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sales Infos'); ?></h3>
	<?php if (!empty($good['SalesInfo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Sales Date'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Good Id'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($good['SalesInfo'] as $salesInfo): ?>
		<tr>
			<td><?php echo $salesInfo['id']; ?></td>
			<td><?php echo $salesInfo['sales_date']; ?></td>
			<td><?php echo $salesInfo['customer_id']; ?></td>
			<td><?php echo $salesInfo['good_id']; ?></td>
			<td><?php echo $salesInfo['quantity']; ?></td>
			<td><?php echo $salesInfo['created']; ?></td>
			<td><?php echo $salesInfo['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sales_infos', 'action' => 'view', $salesInfo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sales_infos', 'action' => 'edit', $salesInfo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sales_infos', 'action' => 'delete', $salesInfo['id']), array(), __('Are you sure you want to delete # %s?', $salesInfo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sales Info'), array('controller' => 'sales_infos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
