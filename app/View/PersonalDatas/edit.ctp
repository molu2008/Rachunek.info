<div class="personalDatas form">
<?php echo $this->Form->create('PersonalData'); ?>
	<fieldset>
		<legend><?php echo __('Edit Personal Data'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('imie');
		echo $this->Form->input('nazwisko');
		echo $this->Form->input('nip');
		echo $this->Form->input('regon');
		echo $this->Form->input('tel1');
		echo $this->Form->input('tel2');
		echo $this->Form->input('city');
		echo $this->Form->input('street');
		echo $this->Form->input('no_budynku');
		echo $this->Form->input('kod_pocztowy');
		echo $this->Form->input('nazwa_firmy');
		echo $this->Form->input('logo_firmy');
		echo $this->Form->input('kraj');
		echo $this->Form->input('typ_firmy');
		echo $this->Form->input('nazwa_banku');
		echo $this->Form->input('numer_konta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PersonalData.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PersonalData.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Personal Datas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
