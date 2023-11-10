<h1>This is create a message</h1>

<!-- app/View/Messages/add.ctp -->
<h1>Add a Message</h1>

<form id="messageForm">
    <?php
    echo $this->Form->input('user_id', array(
        'class' => 's-example-basic-single',
        'options' => $users,
    ));
    echo $this->Form->input('message', array('type'=>'text'));
    echo $this->Form->input('recipient_id', array(
        'type' => 'hidden',
        'value' => isset($loggedInUserId) ? $loggedInUserId : ''
    ));
    echo $this->Form->button(__('Send Message'), array('type' => 'button', 'onclick' => 'sendMessage()'));
    ?>
</form>

<div id="response"></div>

<script>
function sendMessage() {
    var formData = $('#messageForm').serialize(); // Serialize the form data
    var baseUrl = '<?php echo $this->Html->url('/'); ?>';

    $.ajax({
        
        type: 'POST',
        url: baseUrl + '/messages/add',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status === 'success') {
                $('#response').html(response.message);
            } else {
                $('#response').html(response.message);
            }
        },
        error: function() {
            $('#response').html('Error sending message.');
        }
    });
}
</script>

 
