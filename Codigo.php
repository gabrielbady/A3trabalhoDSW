<?php
    $action = "inserir";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas do restaurante</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" >
</head>
<body>

    <?php  require_once "menu.php"; ?>

	<br>
    <center><h1><font face="Impact">Bem-vindo ao restaurante do Xefs!</font></h1></center>
    <center><h1><font face="Monotype Corsiva">Faça já a sua reserva!</font></h1></center>

    <form method="POST" action="salvarCadastro.php?<?php echo $action; ?>">
        <br><br>
		<center><label for="txtNome"><h3><font face="Monotype Corsiva">Nome completo:</font><h3></label></center>
        <center><input type="text" name="txtNome" required /></center>
		
		<br>

		<center><label for="hourHora"><h3><font face="Monotype Corsiva">Informe o horário da reserva (das 18:00 às 23:00):</font><h3></label></center>
        <center><input type="time" name="hourHora" min="18:00" max="23:00" required /></center>
		
		<br>
		
		<center><label for="phoneNum"><h3><font face="Monotype Corsiva">Telefone para contato:</font><h3></label></center>
        <center><input type="tel" name="phoneNum" maxlength="13" placeholder="99 99999-9999" required /></center>
		<center><small>Exemplo: 51 98427-1302</small></center><br><br>
        <br>
        <center><input type="submit" value="Salvar" /></center>
        <center><input type="reset" value="Limpar" /></center>
		<br>
    </form>

    <hr>

    <center><table id="tbl_categorias"></center>
	
        <br><br><center><h1><font face="Impact">Reservas:</font></h1></center><br>
		
		<tr>
            <th>Nome</th>
            <th>Horário</th>
			<th>Telefone</th>
        </tr>

        <?php
            include_once 'clsConexao.php';
            $query = "SELECT * FROM Main_Code";
            $result = Conexao::consultar( $query );

            while( $cat = mysqli_fetch_array($result)){
                echo '<tr>'; 
                echo '    <td>'.$cat['Nome'].'</td>';
                echo '    <td>'.$cat['Horário'].'</td>';
				echo '    <td>'.$cat['Telefone'].'</td>';
                echo '</tr>';
            }
        ?>
        
    </table>
 
</body>
</html>