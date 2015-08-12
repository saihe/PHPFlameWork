<div class="cashers view">
<h2><?php echo __('Casher'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($casher['Casher']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Casher Name'); ?></dt>
		<dd>
			<?php echo h($casher['Casher']['casher_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($casher['Casher']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($casher['Casher']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($casher['Casher']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Casher'), array('action' => 'edit', $casher['Casher']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Casher'), array('action' => 'delete', $casher['Casher']['id']), array(), __('Are you sure you want to delete # %s?', $casher['Casher']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cashers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casher'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cash Infos'), array('controller' => 'cash_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash Info'), array('controller' => 'cash_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cash Infos'); ?></h3>
	<?php if (!empty($casher['CashInfo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Settlement Date'); ?></th>
		<th><?php echo __('Pay Date'); ?></th>
		<th><?php echo __('Person'); ?></th>
		<th><?php echo __('Item'); ?></th>
		<th><?php echo __('Payment'); ?></th>
		<th><?php echo __('Casher Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Settlement Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($casher['CashInfo'] as $cashInfo): ?>
		<tr>
			<td><?php echo $cashInfo['id']; ?></td>
			<td><?php echo $cashInfo['settlement_date']; ?></td>
			<td><?php echo $cashInfo['pay_date']; ?></td>
			<td><?php echo $cashInfo['person']; ?></td>
			<td><?php echo $cashInfo['item']; ?></td>
			<td><?php echo $cashInfo['payment']; ?></td>
			<td><?php echo $cashInfo['casher_id']; ?></td>
			<td><?php echo $cashInfo['created']; ?></td>
			<td><?php echo $cashInfo['modified']; ?></td>
			<td><?php echo $cashInfo['settlement_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cash_infos', 'action' => 'view', $cashInfo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cash_infos', 'action' => 'edit', $cashInfo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cash_infos', 'action' => 'delete', $cashInfo['id']), array(), __('Are you sure you want to delete # %s?', $cashInfo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
		<li><?php echo $this->Html->link(__('List Cash Infos'), array('controller' => 'cash_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash Info'), array('controller' => 'cash_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cashers'), array('controller' => 'cashers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casher'), array('controller' => 'cashers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Settlements'), array('controller' => 'settlements', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New Settlement'), array('controller' => 'settlements', 'action' => 'add')); ?></li>
		</ul>
	</div>
</div>
