<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Contact Form - Admin - <?php echo e($request('subject')); ?></title>
</head>
<body>
    <p>Hello Admin</p>
    <p>You have received an enquiry from the below detail </p>
    <p>Name:  <?php echo e($request['name']); ?>  </p>
    <p>Email:    <?php echo e($request['email']); ?> </p>
    <p>Phone:   <?php echo e($request['phone']); ?>  </p>
    <p>Subject:    <?php echo e($request['subject']); ?> </p>
    <p>message:   <?php echo e($request['message']); ?>  </p>
    <p>attachment:   <?php echo e($request['attachment']); ?>  </p>


</body>
</html>
<?php /**PATH C:\laragon\www\3dimension\3dimension\resources\views/contact_mail.blade.php ENDPATH**/ ?>