<div class="goods form">
<?php echo $this->Form->create('Good'); ?>
	<fieldset>
		<legend><?php echo __('Edit Good'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('good_name');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Good.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Good.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Goods'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sales Infos'), array('controller' => 'sales_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Info'), array('controller' => 'sales_infos', 'action' => 'add')); ?> </li>
	</ul>
</div>
