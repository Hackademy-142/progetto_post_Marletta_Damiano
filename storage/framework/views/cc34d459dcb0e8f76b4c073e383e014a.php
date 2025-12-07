<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Abbiamo ricevuto </h1>
    <h4>Una richiesta per il ruolo di <?php echo e($info['role']); ?></h4>
    <p>Ricevuta da <?php echo e($info['email']); ?></p>


    <h4>Messaggio:</h4>
    <p><?php echo e($info['message']); ?></p>
</body>
</html><?php /**PATH C:\laragon\www\progetto_post_Marletta_Damiano-main\resources\views/mail/career-request-mail.blade.php ENDPATH**/ ?>