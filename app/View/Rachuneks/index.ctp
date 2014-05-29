<div class="rachuneks index">
	<h2><?php echo __('Rachuneks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('data_wystawienia'); ?></th>
			<th><?php echo $this->Paginator->sort('kwota_total'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('numer'); ?></th>
			<th><?php echo $this->Paginator->sort('data_sprzedazy'); ?></th>
			<th><?php echo $this->Paginator->sort('kwota_zaplacona'); ?></th>
			<th><?php echo $this->Paginator->sort('uwagi'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('typ'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($rachuneks as $rachunek): ?>
	<tr>
		<td><?php echo h($rachunek['Rachunek']['id']); ?>&nbsp;</td>
		<td><?php echo h($rachunek['Rachunek']['data_wystawienia']); ?>&nbsp;</td>
		<td><?php echo h($rachunek['Rachunek']['kwota_total']); ?>&nbsp;</td>
		<td><?php echo h($rachunek['Rachunek']['status']); ?>&nbsp;</td>
		<td><?php echo h($rachunek['Rachunek']['numer']); ?>&nbsp;</td>
		<td><?php echo h($rachunek['Rachunek']['data_sprzedazy']); ?>&nbsp;</td>
		<td><?php echo h($rachunek['Rachunek']['kwota_zaplacona']); ?>&nbsp;</td>
		<td><?php echo h($rachunek['Rachunek']['uwagi']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rachunek['User']['id'], array('controller' => 'users', 'action' => 'view', $rachunek['User']['id'])); ?>
		</td>
		<td><?php echo h($rachunek['Rachunek']['typ']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rachunek['Rachunek']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rachunek['Rachunek']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rachunek['Rachunek']['id']), null, __('Are you sure you want to delete # %s?', $rachunek['Rachunek']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Rachunek'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
