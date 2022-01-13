<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<Form name="f1" action="calc.php" method="POST">

    <input type="number" name="valor1" size="10" maxlength="10"><br />
    <input type="number" name="valor2" size="10" maxlength="10"><br />
    <select name="tipo" >
        <option value="soma">Soma</option>
        <option value="multi">Multiplicação</option>
        <option value="div">Divisão</option>
        <option value="sub">Subtração</option>
    </select>
    <input type="submit" name="submit" value="Calcular"/>
</form>
</body>
</html>

