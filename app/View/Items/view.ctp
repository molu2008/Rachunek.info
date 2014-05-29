<div class="items view">
<h2><?php echo __('Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cena'); ?></dt>
		<dd>
			<?php echo h($item['Item']['cena']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nazwa'); ?></dt>
		<dd>
			<?php echo h($item['Item']['nazwa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opis'); ?></dt>
		<dd>
			<?php echo h($item['Item']['opis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jed Miary'); ?></dt>
		<dd>
			<?php echo h($item['Item']['jed_miary']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rachuneks'), array('controller' => 'rachuneks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rachunek'), array('controller' => 'rachuneks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Rachuneks'); ?></h3>
	<?php if (!empty($item['Rachunek'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Data Wystawienia'); ?></th>
		<th><?php echo __('Kwota Total'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Numer'); ?></th>
		<th><?php echo __('Data Sprzedazy'); ?></th>
		<th><?php echo __('Kwota Zaplacona'); ?></th>
		<th><?php echo __('Uwagi'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Typ'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($item['Rachunek'] as $rachunek): ?>
		<tr>
			<td><?php echo $rachunek['id']; ?></td>
			<td><?php echo $rachunek['data_wystawienia']; ?></td>
			<td><?php echo $rachunek['kwota_total']; ?></td>
			<td><?php echo $rachunek['status']; ?></td>
			<td><?php echo $rachunek['numer']; ?></td>
			<td><?php echo $rachunek['data_sprzedazy']; ?></td>
			<td><?php echo $rachunek['kwota_zaplacona']; ?></td>
			<td><?php echo $rachunek['uwagi']; ?></td>
			<td><?php echo $rachunek['user_id']; ?></td>
			<td><?php echo $rachunek['typ']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rachuneks', 'action' => 'view', $rachunek['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rachuneks', 'action' => 'edit', $rachunek['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rachuneks', 'action' => 'delete', $rachunek['id']), null, __('Are you sure you want to delete # %s?', $rachunek['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rachunek'), array('controller' => 'rachuneks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
