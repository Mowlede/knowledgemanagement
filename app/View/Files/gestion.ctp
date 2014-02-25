<div class="column10 prefix1">
	<table>
		<tr>
			<th>Image</th>
			<th>Nom</th>
			<th>Actions</th>
		</tr>
		<?php foreach($files as $k=>$v): ?>
			<tr>
				<td><?php echo $this->Html->image($v['File']['url'], array('style' =>'max-width:200px')); ?></td>
				<td><?php echo $v['File']['name']?></td>
				<td>
					<?php echo $this->Html->link("Insérer", array('action' =>'show', $v['File']['id'])); ?> - 
					<?php echo $this->Html->link("Supprimer", array('action' =>'delete', $v['File']['id']), null, "Voulez vous vraiment supprimer l'image ?"); ?>
				</td>
			</tr>
		<?php endforeach;?>
	</table>
</div>

<div class="column12 prefix1">
	<h1>Ajouter un fichier</h1>
</div>

<div class="column10 prefix1">
	<?php echo $this->Form->create('File', array('type' => 'file')); ?>
		<?php echo $this->Form->input('file', array('label' => "Fichier", 'type' => 'file')); ?>
		<?php echo $this->Form->input('name', array('label' => 'Nom')); ?>
	<?php echo $this->Form->end('Ajouter'); ?>
</div>