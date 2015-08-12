<div class="cashInfos view">
<h2><?php echo __('Cash Info'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cashInfo['CashInfo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Settlement Date'); ?></dt>
		<dd>
			<?php echo h($cashInfo['CashInfo']['settlement_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pay Date'); ?></dt>
		<dd>
			<?php echo h($cashInfo['CashInfo']['pay_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo h($cashInfo['CashInfo']['person']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo h($cashInfo['CashInfo']['item']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment'); ?></dt>
		<dd>
			<?php echo h($cashInfo['CashInfo']['payment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Casher'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cashInfo['Casher']['casher_name'], array('controller' => 'cashers', 'action' => 'view', $cashInfo['Casher']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cashInfo['CashInfo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cashInfo['CashInfo']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Settlement'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cashInfo['Settlement']['type'], array('controller' => 'settlements', 'action' => 'view', $cashInfo['Settlement']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cash Info'), array('action' => 'edit', $cashInfo['CashInfo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cash Info'), array('action' => 'delete', $cashInfo['CashInfo']['id']), array(), __('Are you sure you want to delete # %s?', $cashInfo['CashInfo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cash Infos'), array('controller' => 'cash_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash Info'), array('controller' => 'cash_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cashers'), array('controller' => 'cashers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casher'), array('controller' => 'cashers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Settlements'), array('controller' => 'settlements', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New Settlement'), array('controller' => 'settlements', 'action' => 'add')); ?></li>
	</ul>
</div>
