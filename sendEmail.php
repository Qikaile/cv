<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $from_name = 'ml';
        $from_email = 'qikaile15205626407@gmail.com';
        $headers = 'From: $from_name <$from_email>';
        $body = 'This is a test email';
        $subject = 'test email from php mail()';
        $to = '2295716873@qq.com';
        if (mail($to, $subject, $body, $headers)) {
            echo "success!";
        }else{
            echo "fail...";
        }
    ?>
</body>
</html>