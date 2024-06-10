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
    <header class="lowerHeader">
        <?php include '_navbar.php' ?>
    </header>
    <main>
    <?php if($_POST!=null && count($_POST)>0)
        {
            var_dump($_POST);
            $errors = [];
            if(!array_key_exists('name', $_POST) || $_POST['name'] =='' || preg_match("/^[A-Za-z]+$/", $_POST['name'])<1)
            {
                $errors['name'] ="Name is required.";
            }
            if(!array_key_exists('webmail', $_POST) || $_POST['webmail'] =='' || !filter_var($_POST['webmail'], FILTER_VALIDATE_EMAIL))
            {
                $errors['webmail'] ="Email is required.";
            }
            if(!array_key_exists('subject', $_POST) || $_POST['subject'] =='' )
            {
                $errors['subject'] ="Subject is required.";
            }
            if(!array_key_exists('message', $_POST) || $_POST['message'] =='' )
            {
                $errors['message'] ="Message is required.";
            }

            if(!empty($errors))
            {
                session_start();
                $_SESSION['errors']=$errors;
                header('Location: index.php');
            }
        }
        ?>
        <section id="thanks" class="container">
            <h1>Thank you for your message</h1>
            <div class="container">
                <p>
                    your message is being processed.            
                </p>
                <p>
                    Our team will get back to you within 48 hours.
                </p>
                <p>
                    Have a nice day and see you soon 🙂
                </p>
            </div>
        </section>
    </main>
</body>