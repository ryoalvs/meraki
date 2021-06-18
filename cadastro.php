<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meraki | Cadastro</title>
    <link rel="stylesheet" href="_css/cadastro.css">
    <link rel="icon" type="image/svg+xml" href="_img/_svg/icons/favicon.svg">
</head>
<body>
	 <div class="box">
        <h1 class="h-form">Cadastro</h1>
        <form action="_php/fazerCadastro.php" method="POST" class="form">
            
            <div class="form-content">
                <div class="field">
                    <label for="iptNome" class="lbl-form">nome</label>
                    <input type="text" name="nome" id="iptNome" class="ipt-form" placeholder="seu primeiro nome" required>
                </div>
                <div class="field">
                    <label for="iptSbNome" class="lbl-form">sobrenome</label>
                    <input type="text" name="sbNome" id="iptSbNome" class="ipt-form" placeholder="seu sobrenome" required>
                </div>
                <div class="field">
                    <label for="iptEmail" class="lbl-form">e-mail</label>
                    <input type="email" name="email" id="iptEmail" class="ipt-form" placeholder="ex: meraki@gmail.com" required>
                </div>
                <div class="field">
                    <label for="iptPass" class="lbl-form">senha</label>
                    <input type="password" name="senha" id="iptPass" class="ipt-form" placeholder="sua senha" required>
                    <input type="checkbox" id="showpass" onclick="showPass()">
                    <label for="showpass">mostrar senha</label>
                </div>
                <div class="field">
                    <label for="iptVlPass" class="lbl-form">confime a senha</label>
                    <input type="password" id="iptVlPass" class="ipt-form" placeholder="confirme a senha" required>
                    <input type="checkbox" id="showVlpass" onclick="showVlPass()">
                    <label for="showVlpass">mostrar senha</label>
                </div>
                <div class="field">
                    <label for="iptCpf" class="lbl-form">CPF</label>
                    <input type="number" name="cpf" id="iptCpf" class="ipt-form" placeholder="seu cpf (apenas números)" required>
                </div>
                <div class="field">
                    <label for="iptTell" class="lbl-form">telefone</label>
                    <input type="tel" name="tell" id="iptTell" class="ipt-form" placeholder="seu número de telefone" required>
                </div>
                <div class="field submit">
                    <input type="submit" value="cadastrar" >
                </div>
                
                <script src="_js/show-form-hidden-content.js"></script>
            	

            </div>

        </form>

        <span>já possui uma conta?<a href="login.php">faça login</a>!</span>
    </div>

</body>
</html>