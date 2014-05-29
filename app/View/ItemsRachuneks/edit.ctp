<div class="itemsRachuneks form">
<?php echo $this->Form->create('ItemsRachunek'); ?>
	<fieldset>
		<legend><?php echo __('Edit Items Rachunek'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('rachunek_id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('ilosc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ItemsRachunek.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ItemsRachunek.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Items Rachuneks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rachuneks'), array('controller' => 'rachuneks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rachuneks'), array('controller' => 'rachuneks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
