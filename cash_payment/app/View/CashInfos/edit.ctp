<div class="cashInfos form">
<?php echo $this->Form->create('CashInfo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cash Info'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('settlement_date');
		echo $this->Form->input('pay_date');
		echo $this->Form->input('person');
		echo $this->Form->input('item');
		echo $this->Form->input('payment');
		echo $this->Form->input('casher_id');
		echo $this->Form->input('settlement_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CashInfo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('CashInfo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cash Infos'), array('controller' => 'cash_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash Info'), array('controller' => 'cash_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cashers'), array('controller' => 'cashers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casher'), array('controller' => 'cashers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Settlements'), array('controller' => 'settlements', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New Settlement'), array('controller' => 'settlements', 'action' => 'add')); ?></li>
	</ul>
</div>
