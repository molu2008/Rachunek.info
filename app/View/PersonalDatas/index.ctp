<div class="personalDatas index">
	<h2><?php echo __('Personal Datas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('imie'); ?></th>
			<th><?php echo $this->Paginator->sort('nazwisko'); ?></th>
			<th><?php echo $this->Paginator->sort('nip'); ?></th>
			<th><?php echo $this->Paginator->sort('regon'); ?></th>
			<th><?php echo $this->Paginator->sort('tel1'); ?></th>
			<th><?php echo $this->Paginator->sort('tel2'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('street'); ?></th>
			<th><?php echo $this->Paginator->sort('no_budynku'); ?></th>
			<th><?php echo $this->Paginator->sort('kod_pocztowy'); ?></th>
			<th><?php echo $this->Paginator->sort('nazwa_firmy'); ?></th>
			<th><?php echo $this->Paginator->sort('logo_firmy'); ?></th>
			<th><?php echo $this->Paginator->sort('kraj'); ?></th>
			<th><?php echo $this->Paginator->sort('typ_firmy'); ?></th>
			<th><?php echo $this->Paginator->sort('nazwa_banku'); ?></th>
			<th><?php echo $this->Paginator->sort('numer_konta'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($personalDatas as $personalData): ?>
	<tr>
		<td><?php echo h($personalData['PersonalData']['id']); ?>&nbsp;</td>
		<td><?php echo h($personalData['PersonalData']['imie']); ?>&nbsp;</td>
		<td><?php echo h($personalData['PersonalData']['nazwisko']); ?>&nbsp;</td>
		<td><?php echo h($personalData['PersonalData']['nip']); ?>&nbsp;</td>
		<td><?php echo h($personalData['PersonalData']['regon']); ?>&nbsp;</td>
		<td><?php echo h($personalData['PersonalData']['tel1']); ?>&nbsp;</td>
		<td><?php echo h($personalData['PersonalData']['tel2']); ?>&nbsp;</td>
		<td><?php echo h($personalData['PersonalData']['city']); ?>&nbsp;</td>
		<td><?php echo h($personalData['PersonalData']['street']); ?>&nbsp;</td>
		<td><?php echo h($personalData['PersonalData']['no_budynku']); ?>&nbsp;</td>
		<td><?php echo h($personalData['PersonalData']['kod_pocztowy']); ?>&nbsp;</td>
		<td><?php echo h($personalData['PersonalData']['nazwa_firmy']); ?>&nbsp;</td>
		<td><?php echo h($personalData['PersonalData']['logo_firmy']); ?>&nbsp;</td>
		<td><?php echo h($personalData['PersonalData']['kraj']); ?>&nbsp;</td>
		<td><?php echo h($personalData['PersonalData']['typ_firmy']); ?>&nbsp;</td>
		<td><?php echo h($personalData['PersonalData']['nazwa_banku']); ?>&nbsp;</td>
		<td><?php echo h($personalData['PersonalData']['numer_konta']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $personalData['PersonalData']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $personalData['PersonalData']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $personalData['PersonalData']['id']), null, __('Are you sure you want to delete # %s?', $personalData['PersonalData']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Personal Data'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
