
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meraki | Login</title>
    <link rel="stylesheet" href="_css/login.css">
    <link rel="icon" type="image/svg+xml" href="_img/_svg/icons/favicon.svg">
</head>
<body>
    <div class="box">
        <h1 class="h-form">Login</h1>
        <form action="_php/fazerLogin.php" method="POST" class="form">
            
            <div class="form-content">
                <div class="field">
                    <label for="iptEmail" class="lbl-form">e-mail</label>
                    <input type="email" name="email" id="iptEmail" class="ipt-form" placeholder="ex: meraki@gmail.com" required>
                </div>
                <div class="field">
                    <label for="iptPass" class="lbl-form">senha</label>
                    <input type="password" name="password" id="iptPass" class="ipt-form" placeholder="sua senha" required>
                    <input type="checkbox" id="showpass" onclick="showPass()">
                    <label for="showpass">mostrar senha</label>
                </div>
                <div class="field admField" style="display: none;">
                    <label for="iptAdmPass" class="lbl-form">código de administrador</label>
                    <input type="password" name="admPassword" id="iptAdmPass" class="ipt-form" placeholder="seu código">
                    <input type="checkbox" id="showAdmpass" onclick="showAdmPass()">
                    <label for="showAdmpass">mostrar código</label>
                </div>
                <div class="field submit">
                    <input type="submit" name="action" value="login">
                </div>
                <div class="dev-login-btn" onclick="showAdmField()">
                </div>
                <script src="_js/show-form-hidden-content.js"></script>
            </div>

        </form>

        <span>não possui uma conta?<a href="cadastro.php">cadastre-se</a>!</span>
    </div>

    <script src="_js/login.js"></script>
</body>
</html>