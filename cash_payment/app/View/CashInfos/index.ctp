<div class="cashInfos index">
	<h2><?php echo __('Cash Infos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('settlement_date'); ?></th>
			<th><?php echo $this->Paginator->sort('pay_date'); ?></th>
			<th><?php echo $this->Paginator->sort('person'); ?></th>
			<th><?php echo $this->Paginator->sort('item'); ?></th>
			<th><?php echo $this->Paginator->sort('payment'); ?></th>
			<th><?php echo $this->Paginator->sort('casher_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('settlement_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cashInfos as $cashInfo): ?>
	<tr>
		<td><?php echo h($cashInfo['CashInfo']['id']); ?>&nbsp;</td>
		<td><?php echo h($cashInfo['CashInfo']['settlement_date']); ?>&nbsp;</td>
		<td><?php echo h($cashInfo['CashInfo']['pay_date']); ?>&nbsp;</td>
		<td><?php echo h($cashInfo['CashInfo']['person']); ?>&nbsp;</td>
		<td><?php echo h($cashInfo['CashInfo']['item']); ?>&nbsp;</td>
		<td><?php echo h($cashInfo['CashInfo']['payment']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cashInfo['Casher']['casher_name'], array('controller' => 'cashers', 'action' => 'view', $cashInfo['Casher']['id'])); ?>
		</td>
		<td><?php echo h($cashInfo['CashInfo']['created']); ?>&nbsp;</td>
		<td><?php echo h($cashInfo['CashInfo']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cashInfo['Settlement']['type'], array('controller' => 'settlements', 'action' => 'view', $cashInfo['Settlement']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cashInfo['CashInfo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cashInfo['CashInfo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cashInfo['CashInfo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cashInfo['CashInfo']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Cash Infos'), array('controller' => 'cash_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash Info'), array('controller' => 'cash_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cashers'), array('controller' => 'cashers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casher'), array('controller' => 'cashers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Settlements'), array('controller' => 'settlements', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New Settlement'), array('controller' => 'settlements', 'action' => 'add')); ?></li>
	</ul>
</div>
