<div class="kontrachents index">
	<h2><?php echo __('Kontrachents'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('kontrachents_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nip'); ?></th>
			<th><?php echo $this->Paginator->sort('ulica'); ?></th>
			<th><?php echo $this->Paginator->sort('numer_domu'); ?></th>
			<th><?php echo $this->Paginator->sort('miasto'); ?></th>
			<th><?php echo $this->Paginator->sort('kod_pocztowy'); ?></th>
			<th><?php echo $this->Paginator->sort('nazwa_firmy'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($kontrachents as $kontrachent): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($kontrachent['Kontrachents'][''], array('controller' => 'kontrachents', 'action' => 'view', $kontrachent['Kontrachents']['id'])); ?>
		</td>
		<td><?php echo h($kontrachent['Kontrachent']['nip']); ?>&nbsp;</td>
		<td><?php echo h($kontrachent['Kontrachent']['ulica']); ?>&nbsp;</td>
		<td><?php echo h($kontrachent['Kontrachent']['numer_domu']); ?>&nbsp;</td>
		<td><?php echo h($kontrachent['Kontrachent']['miasto']); ?>&nbsp;</td>
		<td><?php echo h($kontrachent['Kontrachent']['kod_pocztowy']); ?>&nbsp;</td>
		<td><?php echo h($kontrachent['Kontrachent']['nazwa_firmy']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $kontrachent['Kontrachent']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $kontrachent['Kontrachent']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $kontrachent['Kontrachent']['id']), null, __('Are you sure you want to delete # %s?', $kontrachent['Kontrachent']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Kontrachent'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Kontrachents'), array('controller' => 'kontrachents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kontrachents'), array('controller' => 'kontrachents', 'action' => 'add')); ?> </li>
	</ul>
</div>
