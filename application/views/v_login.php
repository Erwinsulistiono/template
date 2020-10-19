<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Template</title>
    ]
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <form class="form-signin" action='<?= base_url() ?>login/auth' accept-charset='utf-8' method='post'>
        <h1 class="h3 mb-3 font-weight-normal">Please sign in <?= $title; ?></h1>
        <label for="userName" class="sr-only">Username</label>
        <input type="text" id="userName" class="form-control" placeholder="Username" name="username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2020-2020</p>
    </form>
</body>

</html>