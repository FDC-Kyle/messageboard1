<h1>Posts</h1>

<table>
    <tr>
        <th>ID</th>
        <th>TOPIC_ID</th>
    </tr>
    <?php foreach($posts as $post):?>
    <tr>
        <td><?php echo $this->HTML->link($post['Post']['id'], array('controller' => 'posts', 'action'=>'view', $post['Post']['id']));?></td>
        <td><?php echo $this->HTML->link($post['Topic']['title'], array('controller' => 'posts', 'action'=>'view', $post['Post']['id']));?></td>
        
    <?php endforeach;?>
    <?php unset($post);?>
</table>