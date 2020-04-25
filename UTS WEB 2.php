<html>
<head>
    <title> Data Pemantauan Covid-19 </title>
</head>
<body>
<div style="width: 70%; margin: 10px auto;margin-left: 500px;">
    <h2>Data Pemantauan Covid-19</h2>
<form action="" method="post">
<table>
<tr>
    <td><label>Nama Operator</label></td>
    <td><input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama']: ''?>"/></td>
</tr>
<tr>
    <td><label>NIM</label></td>
    <td><input type="text" name="nim" value="<?=isset($_POST['nim']) ? $_POST['nim']: ''?>"/></td>
</tr>
<tr>
    <td><label>Nama Wilayah</label></td>
    <td><select name="area">
        <?php $opsi = array('DKI Jakarta','Banten','Jawa Barat','Jawa Tengah');
        foreach ($opsi as $area){
        $selected = @$_POST['area']==$area ? 'selected ="selected"' :'';
        echo '<option value="'.$area.'"'.$selected.'>' . $area . '</option>';
        }?>
    </select></td>
</tr>
<tr>
    <td><label>Jumlah Positif</label></td>
    <td><input type="text" name="positif" value="<?=isset($_POST['positif']) ? $_POST['positif']: ''?>"/></td>
</tr>
<tr>
    <td><label>Jumlah Dirawat</label></td>
    <td><input type="text" name="rawat" value="<?=isset($_POST['rawat']) ? $_POST['rawat']: ''?>"/></td>
</tr>
<tr>
    <td><label>Jumlah Sembuh</label></td>
    <td><input type="text" name="sembuh" value="<?=isset($_POST['sembuh']) ? $_POST['sembuh']: ''?>"/></td>
</tr>
<tr>
    <td><label>Jumlah Meninggal</label></td>
    <td><input type="text" name="meninggal" value="<?=isset($_POST['meninggal']) ? $_POST['meninggal']: ''?>"/></td>
</tr>
<tr>
    <td><input type="submit" name="submit" value="Input"/></td>
</tr>
</table>
    </div>
<?php 
echo "<div style='margin: 10px auto;margin-left: 480px;'>";
    if (isset($_POST['submit'])) {
    echo '<br>';
    echo 'Data Pemantauan Covid-19 wilayah ' . $_POST['area'] . '<br>';
    $tgl=date("d-m-Y h:i:s");
    echo $tgl;
    echo '<br>';
    echo ''. $_POST['nama'] .'';
    echo ' / '. $_POST['nim'] . '';
    echo '<table border="1" style="undefined;table-layout: fixed; width: 342px">';
    echo '<colgroup>';
        echo '<col style="width: 86px">';
        echo '<col style="width: 86px">';
        echo '<col style="width: 85px">';
        echo '<col style="width: 85px">';
    echo '</colgroup>';
    echo '<tr>';
        echo '<th>Positif</th>';
        echo '<th>Dirawat</th>';
        echo '<th>Sembuh</th>';
        echo '<th>Meninggal</th>';
    echo '</tr>';
    echo '<tr>';
        echo '<td>' . $_POST['positif'] . '</td>';
        echo '<td>' . $_POST['rawat'] . '</td>';
        echo '<td>' . $_POST['sembuh'] . '</td>';
        echo '<td>' . $_POST['meninggal'] . '</td>';
    echo '</tr>';
echo '</table>';
}
echo '</div>';
?>

</form>
</body>
</html>