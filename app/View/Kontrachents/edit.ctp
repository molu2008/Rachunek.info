<div class="kontrachents form">
<?php echo $this->Form->create('Kontrachent'); ?>
	<fieldset>
		<legend><?php echo __('Edit Kontrachent'); ?></legend>
	<?php
		echo $this->Form->input('kontrachents_id');
		echo $this->Form->input('nip');
		echo $this->Form->input('ulica');
		echo $this->Form->input('numer_domu');
		echo $this->Form->input('miasto');
		echo $this->Form->input('kod_pocztowy');
		echo $this->Form->input('nazwa_firmy');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Kontrachent.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Kontrachent.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Kontrachents'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Kontrachents'), array('controller' => 'kontrachents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kontrachents'), array('controller' => 'kontrachents', 'action' => 'add')); ?> </li>
	</ul>
</div>
