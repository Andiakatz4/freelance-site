<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <main>
        <p>CONTACT ME</p>
        <form class="contact-form" action="contactform.php" method="post">
            <input type="text" name="name" placeholder="First Name">
            <input type="text" name="lastname" placeholder="Last Name">
            <input type="text" name="mail" placeholder="Your email">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Message"></textarea>
            <button type="submit" name="submit">SEND MAIL</button>
        </form>
    </main>
</body>
</html>