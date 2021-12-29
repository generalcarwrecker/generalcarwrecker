<?php

$field_first_name = $_POST['name'];
$field_email = $_POST['email'];
$field_mobile = $_POST['phone'];
$field_pickup = $_POST['pickup'];
$field_modal = $_POST['make-modal'];
$field_message = $_POST['contact_message'];

$mail_to = 'to@email.com';

$subject = 'Message from a site visitor '.$field_first_name;

$body_message = 'From: '.$field_first_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Mobile: '.$field_mobile."\n";
$body_message .= 'pickup: '.$field_pickup."\n";
$body_message .= 'message: '.$field_message."\n";

$headers = 'From: '.$field_email."\r\n";

$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);


if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		//alert('Thank you for the message. We will contact you shortly.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		//alert('Message failed. Please, send an email to gordon@template-help.com');
		window.location = 'index.html';
	</script>
<?php
}
?>