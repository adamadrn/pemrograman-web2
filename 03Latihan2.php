<html>
<head>
<title>contoh penggunaan IF </title>
</head>
<body>
<form>
Besar Pembelian :
<input type=text name="total_beli"><br><br>
<input type="submit" value="Tentukan Diskon">
</form>
<?php
if (isset($total_beli))
{
    $total_beli=intval($total_beli);
    $Diskon=0;
    if($total_beli>=200000)
    $Diskon=0.1;
    else if($total_beli>=100000)
    $Diskon=0.05;
    else
    $Diskon=0.01;

    $Diskon=$Diskon*intval($total_beli);
    printf("Diskon  = %s<br>\n",$Diskon);
    printf("pembayaran  = %s<br>\n",$total_beli-$Diskon);    
}
?>
</body>
</html>