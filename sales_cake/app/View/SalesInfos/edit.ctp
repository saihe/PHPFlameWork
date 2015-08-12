<div class="salesInfos form">
<?php echo $this->Form->create('SalesInfo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sales Info'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sales_date');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('good_id');
		echo $this->Form->input('quantity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SalesInfo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('SalesInfo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sales Infos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Goods'), array('controller' => 'goods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Good'), array('controller' => 'goods', 'action' => 'add')); ?> </li>
	</ul>
</div>
