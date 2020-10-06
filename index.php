<!DOCTYPE html>

<?php
//require_once "conexao.php";
?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Agenda de Contatos</title>
</head>
<body>
    <header>
        <h1>Agenda de Contatos</h1>
    </header>

    <section>
        <form action="inserir.php" method="POST">
            <fieldset>
                <legend>Cadastrar Contato</legend>

                <label>
                    Nome: <input type="text" name="nome_contato" id="nome_contato" required>
                </label>
                <label>
                    Telefone: <input type="number" name="tele_contato" required>
                </label>
                <label>
                    E-mail: <input type="text" name="email_contato">
                </label>

                <input type="submit" value="Cadastrar">
                <input type="reset" value="Limpar">
            </fieldset>
        </form>
    </section>

    <section>
        <h2>Lista de Contatos</h2>

        <div class="fundo_padrao">
            <form action="select.php" method="POST">
                <fieldset>
                    <legend>Filtrar Contato:</legend>

                    <label>
                        Nome: <input type="text" name="nome_contato" id="nome_contato" required>
                    </label>
                    <label>
                        Telefone: <input type="number" name="tele_contato" required>
                    </label>
                    <label>
                        E-mail: <input type="text" name="email_contato">
                    </label>

                    <input type="submit" value="Buscar">
                    <input type="reset" value="Limpar">
                </fieldset>
            </form>
        </div>

        <div class="fundo_padrao">
            <table>
                <tr class="cabecalho_tabela">
                    <td>Nome do Contato</td>
                    <td>Telefone</td>
                    <td>Email</td>
                </tr>
                <tr>
                    <?php
                    foreach ($variable as $key => $value) {
                        # code...
                    }
                    
                    ?>
                </tr>
            </table>
        </div>

    </section>
</body>
</html>