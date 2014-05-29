<div class="items index">
	<h2><?php echo __('Items'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<?php foreach ($items as $item): ?>
			<tr>
				<td><?php echo h($item['Item']['id']); ?>&nbsp;</td>
				<td><?php echo h($item['Item']['user_id']); ?>&nbsp;</td>
				<td><?php echo h($item['Item']['cena']); ?>&nbsp;</td>
				<td><?php echo h($item['Item']['nazwa']); ?>&nbsp;</td>
				<td><?php echo h($item['Item']['opis']); ?>&nbsp;</td>
				<td><?php echo h($item['Item']['jed_miary']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $item['Item']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $item['Item']['id'])); ?>
					<?php echo $this->Form->postLink(
						__('Delete'),
						array('action' => 'delete', $item['Item']['id']),
						null,
						__('Are you sure you want to delete # %s?', $item['Item']['id'])
					); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(
				__('List Rachuneks'),
				array('controller' => 'rachuneks', 'action' => 'index')
			); ?> </li>
		<li><?php echo $this->Html->link(
				__('New Rachunek'),
				array('controller' => 'rachuneks', 'action' => 'add')
			); ?> </li>
	</ul>
</div>
