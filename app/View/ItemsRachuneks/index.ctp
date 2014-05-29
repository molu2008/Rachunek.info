<div class="itemsRachuneks index">
	<h2><?php echo __('Items Rachuneks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('rachunek_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ilosc'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($itemsRachuneks as $itemsRachunek): ?>
	<tr>
		<td><?php echo h($itemsRachunek['ItemsRachunek']['id']); ?>&nbsp;</td>
		<td><?php echo h($itemsRachunek['ItemsRachunek']['rachunek_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($itemsRachunek['Item']['id'], array('controller' => 'items', 'action' => 'view', $itemsRachunek['Item']['id'])); ?>
		</td>
		<td><?php echo h($itemsRachunek['ItemsRachunek']['ilosc']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itemsRachunek['ItemsRachunek']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itemsRachunek['ItemsRachunek']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itemsRachunek['ItemsRachunek']['id']), null, __('Are you sure you want to delete # %s?', $itemsRachunek['ItemsRachunek']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Items Rachunek'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Rachuneks'), array('controller' => 'rachuneks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rachuneks'), array('controller' => 'rachuneks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
