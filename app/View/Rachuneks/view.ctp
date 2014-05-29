<div class="rachuneks view">
<h2><?php echo __('Rachunek'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rachunek['Rachunek']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Wystawienia'); ?></dt>
		<dd>
			<?php echo h($rachunek['Rachunek']['data_wystawienia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kwota Total'); ?></dt>
		<dd>
			<?php echo h($rachunek['Rachunek']['kwota_total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($rachunek['Rachunek']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numer'); ?></dt>
		<dd>
			<?php echo h($rachunek['Rachunek']['numer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Sprzedazy'); ?></dt>
		<dd>
			<?php echo h($rachunek['Rachunek']['data_sprzedazy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kwota Zaplacona'); ?></dt>
		<dd>
			<?php echo h($rachunek['Rachunek']['kwota_zaplacona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uwagi'); ?></dt>
		<dd>
			<?php echo h($rachunek['Rachunek']['uwagi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rachunek['User']['id'], array('controller' => 'users', 'action' => 'view', $rachunek['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Typ'); ?></dt>
		<dd>
			<?php echo h($rachunek['Rachunek']['typ']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rachunek'), array('action' => 'edit', $rachunek['Rachunek']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rachunek'), array('action' => 'delete', $rachunek['Rachunek']['id']), null, __('Are you sure you want to delete # %s?', $rachunek['Rachunek']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rachuneks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rachunek'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
