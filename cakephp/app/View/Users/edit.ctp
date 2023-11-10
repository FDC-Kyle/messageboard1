<div class="users form">

<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-1">
                            <div class="d-flex justify-content-start">
								<?php echo $this->Form->create('User', ['enctype' => 'multipart/form-data']); ?>
									<fieldset>
										<legend><?php echo __('Edit Profile'); ?></legend>
									<?php
									
										echo $this->Form->input('id');
										echo $this->Form->input('username');
										echo $this->Form->input('email');
										// echo $this->Form->input('password');
										echo $this->Form->input('full_name');
										echo $this->Form->input('gender');
										echo $this->Form->input('birthdate', [
											'type' => 'text',
											'id' => 'datepicker' // Set the desired ID value here
										]);
										echo $this->Form->input('hobby');
										
										
										if (!empty(h($userSpecificData['User']['image']))) {
											// Display the user's uploaded image
											
											echo $this->Html->image(
												'/img/upload/' . h($userSpecificData['User']['image']),
												array('class' => 'img-thumbnail', 'width' => 150, 'height' => 150)
											);
											
										} else {
											// Display a default placeholder image if the user doesn't have an uploaded image
											echo $this->Html->image('/img/upload/default-placeholder-image.jpg',
											array('class' => 'img-thumbnail', 'width' => 150, 'height' => 150));
										}
										echo $this->Form->input('image', ['type' => 'file']);
			
									?>
									</fieldset>
								<?php echo $this->Form->end(__('Submit')); ?>
                            </div>
                        </div>
						
	

                    </div>

                </div>
            </div>
        </div>
    </div>
	



</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<!-- <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('User.id')))); ?></li> -->
		<li><?php echo $this->Html->link(__('Back To Profile'), array('action' => 'index')); ?></li>
		<li>
		<?php
			echo $this->HTML->link('Logout', array('controller'=>'users', 'action'=>'logout'));
		?>
		</li>
		<!-- <li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Topics'), array('controller' => 'topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Topic'), array('controller' => 'topics', 'action' => 'add')); ?> </li>
	 -->
	</ul>
</div>
