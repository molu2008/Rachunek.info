<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Add Item'); ?></legend>
	<?php
		//echo $this->Form->input('user_id');
		echo $this->Form->input('cena');
		echo $this->Form->input('nazwa');
		echo $this->Form->input('opis');
		echo $this->Form->input('jed_miary');
		//echo $this->Form->input('Rachunek');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rachuneks'), array('controller' => 'rachuneks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rachunek'), array('controller' => 'rachuneks', 'action' => 'add')); ?> </li>
	</ul>
</div>
