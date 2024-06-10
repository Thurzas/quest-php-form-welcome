<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome on board</title>
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <?php include '_navbar.php' ?>
        <div class="container">
            <h1>Welcome on board!</h1>
            <img src="/assets/images/avatar.png" alt="">
        </div>
    </header>
    <main>
        <section class="container">
            <h2 id="articles">Recent articles</h2>
            <div class="articles">
                <article>
                    <img src="/assets/images/responsive.png" alt="Responsive">
                    <h3>Responsive</h3>
                    <a href="#">Read</a>
                </article>
                <article>
                    <img src="/assets/images/scalable.png" alt="Scalable">
                    <h3>Scalable</h3>
                    <a href="#">Read</a>
                </article>
                <article>
                    <img src="/assets/images/inclusive.png" alt="Inclusive">
                    <h3>Inclusive</h3>
                    <a href="#">Read</a>
                </article>
            </div>
        </section>
        <section class="container">
            <h2 id="about">About</h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi rerum debitis fugit similique laborum,
                eveniet nam ratione sed, itaque, minus in hic dolores suscipit molestias quis quibusdam error blanditiis
                sapiente.
                Laborum laudantium aut, consequuntur voluptatum animi eaque mollitia? Saepe neque facilis minima
                laborum, provident numquam ipsum laudantium totam porro placeat exercitationem voluptates quia explicabo
                temporibus sapiente non. Quo, repellat corrupti.
            </p>
            <p>
                Excepturi dolore saepe, temporibus est voluptate necessitatibus molestiae sit minima eum quisquam et qui
                quaerat nemo nam, consequuntur nisi alias in praesentium. Fuga amet esse nam doloremque ut nemo nostrum.
            </p>
        </section>
        <section id="contact" class="container">
            <h2>Get in touch</h2>
            <?php if(array_key_exists('errors', $_SESSION)): ?>            
                <h3> Please fix errors below : </h3>
                <ul>
                    <li>
                    <?= implode('<li>', $_SESSION['errors']); ?>
                </ul>
            <?php unset($_SESSION['errors']); endif; ?>
            <p>Please leave us a message and we will come back to you as soon as possible.</p>
            <form class="contact" method="POST" action="contact.php">
            <label for="name">Name <span class="redWildcard">*</span></label><input name="name" type="text">
            <label for="webmail">Email <span class="redWildcard">*</span></label><input name="webmail" type="text">
            <label for="subject">Subject <span class="redWildcard">*</span></label><input name="subject" type="text">
            <label for="message">Message <span class="redWildcard">*</span></label><textarea name="message" ></textarea>
            <input id="submit" type="submit"  value="Send" />
            </form>
        </section>
    </main>
    <?php include '_footer.php' ?>
</body>
</html>