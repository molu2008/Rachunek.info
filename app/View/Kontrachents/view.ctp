<div class="kontrachents view">
<h2><?php echo __('Kontrachent'); ?></h2>
	<dl>
		<dt><?php echo __('Kontrachents'); ?></dt>
		<dd>
			<?php echo $this->Html->link($kontrachent['Kontrachents'][''], array('controller' => 'kontrachents', 'action' => 'view', $kontrachent['Kontrachents']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nip'); ?></dt>
		<dd>
			<?php echo h($kontrachent['Kontrachent']['nip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ulica'); ?></dt>
		<dd>
			<?php echo h($kontrachent['Kontrachent']['ulica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numer Domu'); ?></dt>
		<dd>
			<?php echo h($kontrachent['Kontrachent']['numer_domu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Miasto'); ?></dt>
		<dd>
			<?php echo h($kontrachent['Kontrachent']['miasto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kod Pocztowy'); ?></dt>
		<dd>
			<?php echo h($kontrachent['Kontrachent']['kod_pocztowy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nazwa Firmy'); ?></dt>
		<dd>
			<?php echo h($kontrachent['Kontrachent']['nazwa_firmy']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Kontrachent'), array('action' => 'edit', $kontrachent['Kontrachent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Kontrachent'), array('action' => 'delete', $kontrachent['Kontrachent']['id']), null, __('Are you sure you want to delete # %s?', $kontrachent['Kontrachent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Kontrachents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kontrachent'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Kontrachents'), array('controller' => 'kontrachents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kontrachents'), array('controller' => 'kontrachents', 'action' => 'add')); ?> </li>
	</ul>
</div>
