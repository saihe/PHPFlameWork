<div class="settlements form">
<?php echo $this->Form->create('Settlement'); ?>
	<fieldset>
		<legend><?php echo __('Edit Settlement'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Settlement.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Settlement.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cash Infos'), array('controller' => 'cash_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cash Info'), array('controller' => 'cash_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cashers'), array('controller' => 'cashers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casher'), array('controller' => 'cashers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Settlements'), array('controller' => 'settlements', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New Settlement'), array('controller' => 'settlements', 'action' => 'add')); ?></li>
	</ul>
</div>
