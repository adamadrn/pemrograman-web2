<html>
<head>
><title>PenggunaanSwitch-Case</title>
</head>
<body>
Hari ini :
<?php
    $nama_hari=date("1");
    switch ($nama_hari) {
        case "Sunday";
            printf("Minggu");
                print "Waktu untuk istirahat";
            break;
        
        case "Monday";
            Print("Senin<br>");
                print "Meeting awal minggu jam 08.00";
            break;
        
        case "Tuesday";
            Print("Selasa<br>");
                print "Pembukaan Workshop Diklat";
            break;

        case "Thrusday";
            Print("Rabu<br>");
                print "Seminar Launching Window Vista di JHCC";
            break;    

        case "Wednesday";
            Print("Kamis<br>");
                print "Pertemuan dengan Mahasiswa";
            break;

        case "Friday";
            Print("Juma'at<br>");
            print"Jogging bersama";
            break;
    
        default:
        print("Sabtu<br>");
        print "Survey harga ke Dusit, Mangga Dua";

    }
?>
</body>
</html>