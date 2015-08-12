<div class="salesInfos view">
<h2><?php echo __('Sales Info'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($salesInfo['SalesInfo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sales Date'); ?></dt>
		<dd>
			<?php echo h($salesInfo['SalesInfo']['sales_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salesInfo['Customer']['customer_name'], array('controller' => 'customers', 'action' => 'view', $salesInfo['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Good'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salesInfo['Good']['good_name'], array('controller' => 'goods', 'action' => 'view', $salesInfo['Good']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($salesInfo['SalesInfo']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($salesInfo['SalesInfo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($salesInfo['SalesInfo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sales Info'), array('action' => 'edit', $salesInfo['SalesInfo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sales Info'), array('action' => 'delete', $salesInfo['SalesInfo']['id']), array(), __('Are you sure you want to delete # %s?', $salesInfo['SalesInfo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Goods'), array('controller' => 'goods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Good'), array('controller' => 'goods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Infos'), array('controller' => 'sales_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Info'), array('controller' => 'sales_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
