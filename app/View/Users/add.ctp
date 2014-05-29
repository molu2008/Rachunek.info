<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Register'); ?></legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('password');
        echo $this->Form->input('password_confirmation' , array('type'=>'password'));
		//secho $this->Form->input('admin');
		//echo $this->Form->input('personal_data_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>



<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personal Datas'), array('controller' => 'personal_datas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Data'), array('controller' => 'personal_datas', 'action' => 'add')); ?> </li>
	</ul>
</div>
