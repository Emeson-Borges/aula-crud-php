<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="style.css">

    <script>
        function edit(id, name, email) {
            document.getElementById("id").value = id;
            document.getElementById("name").value = name;
            document.getElementById("email").value = email;
            document.getElementById("submitBtn").value = "Atualizar";
            document.getElementById("form").action = "update.php"

        }

    </script>


</head>
<body>
    <div class="container">
        <h2>Gereciamento de Usuários</h2>

        <form id="form" method="POST" action="insert.php" class="form"> 
            <input type="hidden" name="id" id="id">
            <label>Nome: </label>
            <input type="text" name="name" id="name" required>
            <label>Email:</label>
            <input type="email" name="email" id="email" required>
            <input type="submit" id="submitBtn" value="Salvar">

        </form>

        <h3>Usuarios Cadastrados</h3>
        <table>
            <thead>
                <tr><th>ID</th><th>Nome</th><th>Email</th><th>Ações</th></tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM users");
                while ($row = $result->fetch_assoc()):
                ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td>
                        <button onclick="edit('<?= $row['id'] ?>','<?= $row['name'] ?>','<?= $row['email'] ?>')">Editar</button>
                        <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </div>


</body>
</html>