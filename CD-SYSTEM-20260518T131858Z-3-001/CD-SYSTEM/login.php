<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>FindWare - Login</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background:
        radial-gradient(circle at top left, rgba(37, 99, 235, 0.18), transparent 22%),
        linear-gradient(135deg, #f8fbff 0%, #eef4ff 100%);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 24px;
}

.card {
    background: rgba(255,255,255,0.96);
    width: 430px;
    padding: 40px;
    border-radius: 24px;
    border: 1px solid rgba(148, 163, 184, 0.24);
    box-shadow: 0 20px 50px rgba(15, 23, 42, 0.14);
    backdrop-filter: blur(10px);
}

.logo {
    text-align: center;
    margin-bottom: 30px;
}

.logo h1 {
    color: #17202c;
    font-size: 36px;
}

.logo p {
    color: #64748b;
    margin-top: 6px;
    font-size: 14px;
}

label {
    font-size: 14px;
    font-weight: bold;
    color: #374151;
    display: block;
    margin-bottom: 6px;
}

input {
    width: 100%;
    padding: 14px;
    border: 1px solid #cbd5e1;
    border-radius: 5px;
    margin-bottom: 16px;
    font-size: 15px;
}

input:focus {
    outline: none;
    border-color: #17202c;
}

button {
    width: 100%;
    padding: 14px;
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    color: white;
    border: none;
    border-radius: 999px;
    cursor: pointer;
    font-weight: bold;
    box-shadow: 0 10px 24px rgba(37, 99, 235, 0.22);
}

button:hover {
    background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%);
}

.links {
    margin-top: 20px;
    text-align: center;
}

.links a {
    color: #17202c;
    text-decoration: none;
    font-weight: bold;
    font-size: 14px;
}

.links a:hover {
    text-decoration: underline;
}
</style>
</head>

<body>

<div class="card">

    <div class="logo">
        <h1>FindWare</h1>
        <p>Sistema Inteligente de Localização de Produtos</p>
    </div>

    <form action="validar_login.php" method="POST">

        <label>Usuário ou E-mail</label>
        <input
            type="text"
            name="email"
            placeholder="Digite seu usuário ou e-mail"
            required>

        <label>Senha</label>
        <input
            type="password"
            name="senha"
            placeholder="Digite sua senha"
            required>

        <button type="submit">
            Entrar no Sistema
        </button>

    </form>

    <div class="links">
        <a href="cadastro.php">Criar novo usuário</a>
    </div>

</div>

</body>
</html>