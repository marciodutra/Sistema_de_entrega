<?php
// session_start();
?>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
    <tbody>
        <tr>
            <td>
                <style type="text/css">
                    <!--
                    .style2 {
                        color: #FFFFFF
                    }

                    -->
                </style>

                <table border="0" cellpadding="0" cellspacing="0" width="900">
                    <tbody>
                        <tr>
                            <td colspan="16">
                                <img src="images/trheader.jpeg" height="109" width="900">
                            </td>
                        </tr>
                        <tr bgcolor="#2284d5">
                            <style>
                                td {
                                    white-space: nowrap;

                                }

                            </style>
                            <td height="30">
                                <div align="center"><span class="headtext13 style2"><strong>ENVIO:</strong></span></div>
                            </td>
                            <td height="30">
                                <div class="lowerstyle" align="center"> <a href="add-courier.php">Adicionar</a></div>
                            </td>
                            <td width="3">
                                <div align="center">|</div>
                            </td>
                            <td height="30">
                                <div class="lowerstyle" align="center"><a href="courier-list.php">Atualizar </a></div>
                            </td>
                            <td width="3">
                                <div align="center">|</div>
                            </td>
                            <td>
                                <div class="lowerstyle" align="center">
                                    <div align="center"><a href="search-edit.php">Procurar &amp; Editar </a></div>
                                </div>
                            </td>
                            <td width="3">
                                <div align="center">|</div>
                            </td>
                            <td height="30">
                                <div align="center"><span class="headtext13 style2"><strong>RELATÓRIOS</strong></span><span class="heading"><strong> : </strong></span></div>
                            </td>
                            <td height="30">
                                <div class="lowerstyle" align="center"><a href="delivered-list.php">Entregue </a> </div>
                            </td>
                            <td width="3">|</td>
                            <td>
                                <div class="lowerstyle" align="center"><a href="datewise-list.php">Data </a> </div>
                            </td>

                            <td width="3">
                                <div align="center">|</div>
                            </td>



                            <td height="30">
                                <div align="center"><span class="headtext13 style2"><strong>Entregador:</strong></span></div>
                            </td>
                            <td height="30">
                                <div class="lowerstyle" align="center"> <a href="add-new-delivery-boy.php">Adicionar</a></div>
                            </td>
                            <td width="3">
                                <div align="center">|</div>
                            </td>
                            <td height="30">
                                <div class="lowerstyle" align="center"><a href="delivery-boy-list.php">Listar tudo</a></div>
                            </td>



                        </tr>

                    </tbody>
                </table>

                <?php
if (isset($_SESSION['user_type'])) { // && $_SESSION['user_type'] == 'admin-role') {
    ?>
                <table border="0" cellpadding="0" cellspacing="0" width="900">
                    <tbody>
                        <tr style="height:25px;">
                            <td bgcolor="#E2E2E2" width="4">&nbsp;</td>
                            <td bgcolor="#E2E2E2" width="240">&nbsp;<b>Menu de administração</b></td>
                            <td bgcolor="#E2E2E2" width="130">
                                <div align="center"><a href="offices-list.php" class="headtext13">Detalhes do escritório</a></div>
                            </td>
                            <td bgcolor="#E2E2E2" width="10">|</td>

                            <td bgcolor="#E2E2E2" width="100">
                                <div align="center"><a href="add-office.php" class="headtext13">Adicionar novo escritório</a></div>
                            </td>
                            <td bgcolor="#E2E2E2" width="10">|</td>
                            <td bgcolor="#E2E2E2" width="162">
                                <div align="center"><a href="manager-list.php" class="headtext13">Detalhes do gerente</a> </div>
                            </td>
                            <td bgcolor="#E2E2E2" width="7">|</td>
                            <td bgcolor="#E2E2E2" width="125">
                                <div align="center"><a href="add-new-officer.php" class="headtext13">Adicionar novo gerente</a></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php
}
?>
                <table border="0" cellpadding="0" cellspacing="0" width="900">
                    <tbody>
                        <tr style="height:25px;">
                            <td bgcolor="#99CCFF" width="4">&nbsp;</td>
                            <td bgcolor="#99CCFF" width="350">&nbsp;</td>
                            <td bgcolor="#99CCFF" width="130">
                                <div align="center"><a href="admin.php" class="headtext13"></a></div>
                            </td>
                            <td bgcolor="#99CCFF" width="10"></td>
                            <td bgcolor="#99CCFF" width="162">
                                <div align="center"><a href="admin.php" class="headtext13">Home</a> </div>
                            </td>
                            <td bgcolor="#99CCFF" width="7">|</td>
                            <td bgcolor="#99CCFF" width="125">
                                <div align="center"><a href="process.php?action=logOut" class="headtext13">Sair</a></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
