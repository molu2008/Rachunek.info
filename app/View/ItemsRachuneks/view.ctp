<div class="itemsRachuneks view">
<h2><?php echo __('Items Rachunek'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itemsRachunek['ItemsRachunek']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rachunek Id'); ?></dt>
		<dd>
			<?php echo h($itemsRachunek['ItemsRachunek']['rachunek_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemsRachunek['Item']['id'], array('controller' => 'items', 'action' => 'view', $itemsRachunek['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ilosc'); ?></dt>
		<dd>
			<?php echo h($itemsRachunek['ItemsRachunek']['ilosc']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Items Rachunek'), array('action' => 'edit', $itemsRachunek['ItemsRachunek']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Items Rachunek'), array('action' => 'delete', $itemsRachunek['ItemsRachunek']['id']), null, __('Are you sure you want to delete # %s?', $itemsRachunek['ItemsRachunek']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items Rachuneks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Items Rachunek'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rachuneks'), array('controller' => 'rachuneks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rachuneks'), array('controller' => 'rachuneks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
