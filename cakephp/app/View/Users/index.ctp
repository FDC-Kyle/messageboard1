<!-- <div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('full_name'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('birthdate'); ?></th>
			<th><?php echo $this->Paginator->sort('hobby'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['full_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['gender']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['birthdate']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['hobby']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
</div> -->
<div class="users index">
    <h2><?php echo __('Your Profile'); ?></h2>
	

    
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
								<?php
									if (!empty($userSpecificData['User']['image'])) {
										// Display the user's uploaded image with specific width, height, and class
										echo $this->Html->image(
											'/img/upload/' . h($userSpecificData['User']['image']),
											array('class' => 'img-thumbnail', 'width' => 150, 'height' => 150)
										);
									} else {
										// Display a default placeholder image with specific width, height, and class
										echo $this->Html->image(
											'/img/upload/default-placeholder-image.jpg',
											array('class' => 'img-thumbnail', 'width' => 150, 'height' => 150)
										);
									}
								?>
                                </div>
								<div class="userData ml-3">
									<div class="mt-3">
										<a class="mt-4"href="javascript:void(0)">Hobby:</a>
									</div>
								<h6 class="d-block mt-3">
									<?php echo h($userSpecificData['User']['hobby']); ?>
								</h6>

                                    
                                </div>
                             
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											<?php echo h($userSpecificData['User']['username']);?>
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Birth Date</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											<?php echo h($userSpecificData['User']['birthdate']);?>
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Gender</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											<?php
											 if(h($userSpecificData['User']['gender']) == 1){
												echo"Male";

												}else{
												echo"Female";
												} ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Joined</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											<?php echo h($userSpecificData['User']['created']); ?>
                                            </div>
                                        </div>
										<hr />
										<div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Last Login</label>
                                            </div>
                                            <div class="col-md-8 col-6">
											<?php echo h($userSpecificData['User']['created']); ?>
                                            </div>
                                        </div>
                                        <hr />
                                    </div>
                                 
                                </div>
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
		<?php if ($isLoggedIn): ?>
		<p>Welcome, <?php echo h($userSpecificData['User']['username']); ?>!</p>
		
		<li>
		<?php
			echo $this->HTML->link('Message Board', array('controller'=>'messages', 'action'=>'index'));
		?>
		</li>
		<li>
		<?php
			echo $this->HTML->link('Create Message', array('controller'=>'messages', 'action'=>'add'));
		?>
		</li>
		<li>
		<?php echo $this->Html->link('Edit Profile', array('controller' => 'users', 'action' => 'edit', $userSpecificData['User']['id'])); ?>
		<?php else: ?>
		<p>You are not logged in.</p>
		<?php endif; ?>
		</li>
		<li>
		<?php
			echo $this->HTML->link('Logout', array('controller'=>'users', 'action'=>'logout'));
		?>
		</li>
		<!-- <li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Topics'), array('controller' => 'topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Topic'), array('controller' => 'topics', 'action' => 'add')); ?> </li> -->

	</ul>
</div>


