<?php
session_start();
require_once 'database.php';
require_once 'library.php';
isUser();
$cid = (int)$_GET['cid'];

$sql = "SELECT *
		FROM tbl_courier
		WHERE cid = $cid";
$sql_1 = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result = mysqli_query($dbConn, $sql);
$result_1 = mysqli_query($dbConn, $sql_1);
while ($data = mysqli_fetch_array($result)) {
    extract($data); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Administrador</title>
    <link href="css/mystyle.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        .style1 {
            color: #FF0000
        }

        .style3 {
            font-family: verdana, tohama, arial
        }

    </style>
</head>

<body>

    <table border="0" cellpadding="0" cellspacing="0" align="center" width="900">

        <tbody>
            <tr>

                <td width="900">
                    <?php include "header.php"; ?>

                </td>

            </tr>



            <tr>

                <td bgcolor="#FFFFFF">

                    <style type="text/css">
                        .ds_box {
                            background-color: #FFF;
                            border: 1px solid #000;
                            position: absolute;
                            z-index: 32767;
                        }

                        .ds_tbl {
                            background-color: #FFF;
                        }

                        .ds_head {
                            background-color: #333;

                            color: #FFF;

                            font-family: Arial, Helvetica, sans-serif;

                            font-size: 13px;

                            font-weight: bold;

                            text-align: center;

                            letter-spacing: 2px;

                        }

                        .ds_subhead {
                            background-color: #CCC;
                            color: #000;
                            font-size: 12px;
                            font-weight: bold;
                            text-align: center;
                            font-family: Arial, Helvetica, sans-serif;
                            width: 32px;
                        }

                        .ds_cell {
                            background-color: #EEE;
                            color: #000;
                            font-size: 13px;

                            text-align: center;

                            font-family: Arial, Helvetica, sans-serif;

                            padding: 5px;

                            cursor: pointer;

                        }

                        .ds_cell:hover {
                            background-color: #F3F3F3;
                        }

                        /* This hover code won't work for IE */

                    </style>
                    <style type="text/css">
                        <!--
                        body {

                            margin-left: 0px;

                            margin-top: 0px;

                            margin-right: 0px;

                            margin-bottom: 0px;

                        }

                        -->

                    </style>





                    <table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0">

                        <tbody>
                            <tr>

                                <td id="ds_calclass"> </td>

                            </tr>

                        </tbody>
                    </table>



                    <br>

                    <table border="0" align="center" width="98%">

                        <tbody>
                            <tr>

                                <td class="Partext1" bgcolor="F9F5F5" align="center"><strong>Editar remessa </strong></td>

                            </tr>

                        </tbody>
                    </table>



                    <br>

                    <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">



                        <tbody>
                            <tr>

                                <td class="Partext1" bgcolor="#FFFFFF" align="right">
                                    <div align="center">

                                        <table border="0" cellpadding="1" cellspacing="1" width="80%">

                                            <tbody>
                                                <tr>

                                                    <td width="55%">
                                                        <div align="left" class="style3">Nome do remetente : </div>
                                                    </td>

                                                    <td width="45%">
                                                        <div align="left" class="style3">

                                                            <?php echo $ship_name; ?>
                                                        </div>
                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        <div align="left" class="style3">Telefone do remetente : </div>
                                                    </td>

                                                    <td>
                                                        <div align="left" class="style3">

                                                            <?php echo $phone; ?>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td>
                                                        <div align="left" class="style3">Endereço do remetente : </div>
                                                    </td>

                                                    <td>
                                                        <div align="left" class="style3">
                                                            <?php echo $s_add; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </td>

                                <td class="Partext1" bgcolor="#FFFFFF">
                                    <div align="center">

                                        <table border="0" cellpadding="1" cellspacing="1" width="80%">

                                            <tbody>
                                                <tr>

                                                    <td width="55%" class="style3">
                                                        <div align="left">Nome do recebedor : </div>
                                                    </td>

                                                    <td width="45%" class="style3">
                                                        <div align="left"><?php echo $rev_name; ?></div>
                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td class="style3">
                                                        <div align="left">Telefone receptor : </div>
                                                    </td>

                                                    <td class="style3">
                                                        <div align="left">
                                                            <?php echo $r_phone; ?>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td class="style3">
                                                        <div align="left">Endereço do destinatário : </div>
                                                    </td>

                                                    <td class="style3">
                                                        <div align="left">
                                                            <?php echo $r_add; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>

                            </tr>

                            <tr>

                                <td class="Partext1" bgcolor="#FFFFFF" align="right">&nbsp;</td>

                                <td class="Partext1" bgcolor="#FFFFFF">&nbsp;</td>
                            </tr>

                            <tr>

                                <td class="style3" bgcolor="#FFFFFF" align="right" width="336">Número da remessa: </td>

                                <td class="style3" bgcolor="#FFFFFF" width="394">
                                    <font color="#FF0000"><?php echo $cons_no; ?></font>&nbsp;
                                </td>
                            </tr>

                            <tr>

                                <td class="style3" bgcolor="#FFFFFF" align="right">Tipo de navio :</td>

                                <td class="style3" bgcolor="#FFFFFF"><?php echo $type; ?>&nbsp;</td>
                            </tr>

                            <tr>

                                <td class="style3" bgcolor="#FFFFFF" align="right">Peso :</td>

                                <td class="style3" bgcolor="#FFFFFF"><?php echo $weight; ?>&nbsp;kg</td>
                            </tr>
														<tr>

																<td class="style3" bgcolor="#FFFFFF" align="right">Entregador :</td>

																<td class="style3" bgcolor="#FFFFFF"><?php echo $delivery_boy_name; ?>&nbsp;</td>
														</tr>
                            <tr>

                                <td class="style3" bgcolor="#F3F3F3" align="right">Número da fatura :</td>

                                <td class="style3" bgcolor="#FFFFFF"><?php echo $invice_no; ?>&nbsp;</td>
                            </tr>

                            <tr>

                                <td class="style3" bgcolor="#F3F3F3" align="right">Modo de reserva :</td>

                                <td class="style3" bgcolor="#FFFFFF"><?php echo $book_mode; ?>&nbsp;</td>
                            </tr>

                            <tr>

                                <td class="style3" bgcolor="#F3F3F3" align="right">Frete total : </td>

                                <td class="style3" bgcolor="#FFFFFF"><?php echo $freight; ?>&nbsp;Rs.</td>
                            </tr>

                            <tr>

                                <td class="style3" bgcolor="#F3F3F3" align="right">Modo : </td>

                                <td class="style3" bgcolor="#FFFFFF"><?php echo $mode; ?></td>
                            </tr>

                            <tr>

                                <td class="style3" bgcolor="#FFFFFF" align="right">Data/hora de coleta :</td>

                                <td class="style3" bgcolor="#FFFFFF">

                                    <?php echo $pick_date; ?> -<span class="gentxt">
                                        <?php echo $pick_time; ?>
                                    </span> </td>
                            </tr>

                            <tr>

                                <td class="style3" bgcolor="#FFFFFF" align="right">Status :</td>

                                <td class="style3" bgcolor="#FFFFFF">&nbsp;<?php echo $status; ?></td>
                            </tr>



                            <tr>

                                <td class="style3" bgcolor="#FFFFFF" align="right" valign="top">Comentários :</td>

                                <td class="style3" bgcolor="#FFFFFF">&nbsp;<?php echo $comments; ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <span class="Partext1"><br>
                    </span><span class="Partext1"><br>

                        <br>

                    </span>

                    <form action="process.php?action=update-status" method="post" name="frmShipment" id="frmShipment">

                        <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">

                            <tbody>
                                <tr>

                                    <td colspan="3" bgcolor="#FFFFFF" align="right">
                                        <div class="Partext1" align="center"><strong>ATUALIZAR O STATUS </strong>

                                        </div>
                                    </td>

                                </tr>

                                <tr>

                                    <td colspan="3" bgcolor="#FFFFFF" align="right"></td>
                                </tr>

                                <tr>

                                    <td class="Partext1" bgcolor="#FFFFFF" align="right" width="16%">Nova localização:</td>

                                    <td colspan="2" class="Partext1" bgcolor="#FFFFFF">

                                        <select name="OfficeName">
                                            <?php
    while ($data = mysqli_fetch_array($result_1)) {
        ?>
                                            <option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
                                            <?php
    } //while ?>
                                        </select>
                                    </td>
                                </tr>

                                <tr>

                                    <td class="Partext1" bgcolor="#FFFFFF" align="right">Novo status: </td>

                                    <td class="Partext1" bgcolor="#FFFFFF" width="26%">








                                        <select name="status">

                                            <option value="In Transit">Em trânsito</option>

                                            <option value="Landed">Parada</option>

                                            <option value="Delayed">Atrasada</option>

                                            <option value="Completed">Concluída</option>
                                            <option value="Onhold">Onhold</option>
                                        </select>

                                        <br>
                                    </td>

                                    <td class="Partext1" bgcolor="#FFFFFF" width="58%">
                                        <div align="center">
                                        <a href="process.php?action=delivered&cid=<?php echo $cid; ?>">Marcou esta remessa como sendo <span class="style1">ENTREGUE </span></a><span class ="estilo1"></span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>

                                    <td bgcolor="#FFFFFF" align="right"><span class="Partext1">Comentários:</span></td>

                                    <td colspan="2" class="Partext1" bgcolor="#FFFFFF">
                                        <textarea name="comments" cols="40" rows="3" id="comments"></textarea>
                                    </td>
                                </tr>



                                <tr>

                                    <td bgcolor="#FFFFFF" align="right">&nbsp;</td>

                                    <td colspan="2" class="Partext1" bgcolor="#FFFFFF">

                                        <input name="submit" value="Submit" type="submit">

                                        <input name="cid" id="cid" value="<?php echo $cid; ?>" type="hidden">

                                        <input name="cons_no" id="cons_no" value="<?php echo $cons_no; ?>" type="hidden">
                                    </td>
                                </tr>

                                <tr>

                                    <td colspan="3" bgcolor="#FFFFFF" align="right">
                                        <div align="center">


                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <br>

                    </form>
                </td>

            </tr>

            <tr>

                <td>
                    <table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
                        <tbody>
                            <tr>
                                <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
                                <td bgcolor="#2284d5" width="304">
                                    <div align="right"></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>

            </tr>

        </tbody>
    </table>





</body>

</html>
<?php
}
?>
