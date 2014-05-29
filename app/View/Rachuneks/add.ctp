<div class="rachuneks form">
<?php echo $this->Form->create('Rachunek'); ?>
	<fieldset>
		<legend><?php echo __('Add Rachunek'); ?></legend>
	<?php
		echo $this->Form->input('data_wystawienia');
		echo $this->Form->input('kwota_total');
		echo $this->Form->input('status');
		echo $this->Form->input('numer');
		echo $this->Form->input('data_sprzedazy');
		echo $this->Form->input('kwota_zaplacona');
		echo $this->Form->input('uwagi');
		echo $this->Form->input('user_id');
		echo $this->Form->input('typ');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rachuneks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
