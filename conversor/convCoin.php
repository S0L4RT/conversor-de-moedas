<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Coin</title>
</head>
<body>
    <label>Insira um valor em real(BRL)</label><br>
    <input class="inserir" type="number" step="0.01" required name="real">
    <input type="reset" value="limpar"><br>
    <label>Escolha uma moeda para converter:</label><br>
    <select name="money" required>
        <option value="dol">
            <img src="euaFlag.svg">
            Dólar</option>
        <option value="eur">Euro</option>
        <option value="khr">Riel</option>
    </select>
    <input type="submit" value="converter"><br>
    <div class="resposta">
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset('real')){
                $real = $_POST['real'];
                $erro = empty($real) ? "O campo é obrigatório" :
                ((!is_numeric($real) || $real <= 0) ? "Por favor, insira valores válidos para converter" : "");
                if($erro){
                    echo $erro;
                }else{
                    $dol = $real * 0.19;
                }
            }else{
                echo "Formulário não enviado corretamente";
            }
        }
    ?>
    </div>
</body>
</html>