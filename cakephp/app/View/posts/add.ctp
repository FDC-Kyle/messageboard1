<h1>Create Posts</h1>

<?php

echo $this->Form->create('Post');

// echo $this->Form->input('user_id');
// echo $this->Form->input('topic_id');
echo $this->Form->input('body');
echo $this->Form->end('create post');
