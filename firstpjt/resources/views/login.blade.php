<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding:0;
            font-family: sans-serif;
        }
        body{
            height: 100%;
            width:100%;
            justify-content: center;
            display: flex;
            background: linear-gradient(
                to right, steelblue, cyan
            );
              
        }
        .form-class{
            background-color: white;
            padding: 40px 30px;
        }
        .form-class h2{
            color: orange;
        }
        .block-input{
            display: flex;
            flex-direction: column;
            margin-top: 30px;
        }
        .block-input input{
            border: none;
            border-bottom: 1px solid black;
            margin-top: 15px;
        }
        .block-input input:has{
            border: 2px solid red;
        }
        .form-class button{
            margin-top: 20px;
        }
        .buttons{
            display: flex;
            flex-direction: column;
            text-align: center;
            gap: 20px
        }

    </style>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>

        <div class="form-class">
            <h2>Entre ou cadastre-se</h2>
            <form action="">
                <div class="block-input">
                    <label>E-mail:</label>
                    <input type="text" placeholder="exemplo@gmail.com">
                </div>
                <div class="block-input">
                    <label>Senha:</label>
                    <input type="text"placeholder="senha123" >
                </div>
                <div class="buttons">
                    <button type="submit">Entrar</button>
                    <a href="/cadastro">Cadastrar</a>
                </div>
                
            </form>
        </div>
    
</body>
</html>