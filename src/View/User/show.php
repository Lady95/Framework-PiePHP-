<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PiePHP - Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">PiePHP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/projet_perso/w2php502p1/user/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projet_perso/w2php502p1/user/register">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projet_perso/w2php502p1/user">Home User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projet_perso/w2php502p1/user/read">Users</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="container mt-5">
            <h1>Tables Users</h1>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php var_dump($user_2); ?>
                <?php foreach($user_0 as $value): ?>
                    <tr>
                        <td><?php echo $user_0['id']; ?></td>
                        <td><?php echo $user_0['email']; ?></td>
                        <td><?php echo $user_0['password']; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    </body>
</html>
