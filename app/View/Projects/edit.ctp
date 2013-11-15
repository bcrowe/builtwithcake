<div class="projects form">
<?php echo $this->Form->create('Project'); ?>
	<fieldset>
		<legend><?php echo __('Edit Project'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('url');
		echo $this->Form->input('summary');
		echo $this->Form->input('description');
		echo $this->Form->input('screenshot', array('type' => 'file', 'after' => $this->Html->image('../files/project/screenshot/' . $this->request->data['Project']['screenshot_dir'] . '/medium_' . $this->request->data['Project']['screenshot'])));
		echo $this->Form->input('screenshot_dir', array('type' => 'hidden'));
	?>
	</fieldset>
<?php
echo $this->Form->submit('Save my project', array('class' => 'btn btn-success', 'after' => $this->Html->link('Cancel', array('controller' => 'bwc_users', 'action' => 'view', 'slug' => AuthComponent::user('slug')), array('class' => 'btn btn-danger'))));
echo $this->Form->end();
?>
</div>
