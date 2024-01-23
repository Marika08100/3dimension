<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Mail</title>
</head>
<body>
    <p>Name:  <?php echo e($data['name']); ?>  </p>
    <p>Email:    <?php echo e($data['email']); ?> </p>
    <p>Phone:   <?php echo e($data['phone']); ?>  </p>
    <p>Subject:    <?php echo e($data['subject']); ?> </p>
    <p>message:   <?php echo e($data['message']); ?>  </p>
    <p>attachment:   <?php echo e($data['attachment']); ?>  </p>


</body>
</html>
<?php /**PATH C:\laragon\www\3dimension\3dimension\resources\views/mails/contact_mail.blade.php ENDPATH**/ ?>