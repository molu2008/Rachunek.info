<div class="personalDatas view">
<h2><?php echo __('Personal Data'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personalData['PersonalData']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imie'); ?></dt>
		<dd>
			<?php echo h($personalData['PersonalData']['imie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nazwisko'); ?></dt>
		<dd>
			<?php echo h($personalData['PersonalData']['nazwisko']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nip'); ?></dt>
		<dd>
			<?php echo h($personalData['PersonalData']['nip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regon'); ?></dt>
		<dd>
			<?php echo h($personalData['PersonalData']['regon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel1'); ?></dt>
		<dd>
			<?php echo h($personalData['PersonalData']['tel1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel2'); ?></dt>
		<dd>
			<?php echo h($personalData['PersonalData']['tel2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($personalData['PersonalData']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($personalData['PersonalData']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Budynku'); ?></dt>
		<dd>
			<?php echo h($personalData['PersonalData']['no_budynku']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kod Pocztowy'); ?></dt>
		<dd>
			<?php echo h($personalData['PersonalData']['kod_pocztowy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nazwa Firmy'); ?></dt>
		<dd>
			<?php echo h($personalData['PersonalData']['nazwa_firmy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo Firmy'); ?></dt>
		<dd>
			<?php echo h($personalData['PersonalData']['logo_firmy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kraj'); ?></dt>
		<dd>
			<?php echo h($personalData['PersonalData']['kraj']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Typ Firmy'); ?></dt>
		<dd>
			<?php echo h($personalData['PersonalData']['typ_firmy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nazwa Banku'); ?></dt>
		<dd>
			<?php echo h($personalData['PersonalData']['nazwa_banku']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numer Konta'); ?></dt>
		<dd>
			<?php echo h($personalData['PersonalData']['numer_konta']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personal Data'), array('action' => 'edit', $personalData['PersonalData']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Personal Data'), array('action' => 'delete', $personalData['PersonalData']['id']), null, __('Are you sure you want to delete # %s?', $personalData['PersonalData']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Datas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Data'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($personalData['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Admin'); ?></th>
		<th><?php echo __('Personal Data Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($personalData['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['admin']; ?></td>
			<td><?php echo $user['personal_data_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
