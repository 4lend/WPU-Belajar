<!-- tag PHP pembuka -->

<!-- // pengulangan -->
<!-- // for -->
<!-- // while -->
<!-- // do.. while -->
<!-- // foreach -> pengulangan khusus array -->
<!--  -->
<!-- // for -->
<!-- /*  -->
<!-- urutan nilai yang ada di for  -->
<!-- for( inisialisasi; kondisi; iterasi -->
<!-- */ -->
<!-- for( $i = 0; $i < 5; $i++ ){ -->
    <!-- echo "Hello Mom!<br>". PHP_EOL; -->
<!-- } -->
<!--  -->
<!-- // while -->
<!-- // sebenarnya fungsinya sama hanya penulisannya saja yang  berbeda -->
<!-- // perlu diingat bahwa di while kita harus menuliskan nilai pertamanya diluar while operator -->
<!-- // while akan mengecek kondisinya terlebih dahulu baru akan menjalankan perulangannya -->
<!-- $i = 0; -->
<!-- while( $i < 5 ){ -->
    <!-- echo "Hello Mom!<br>". PHP_EOL; -->
<!-- $i ++; -->
<!-- } -->
<!--  -->
<!-- // do while -->
<!-- // perbedaan antara while dengan do while adalah do while akan menjalakan programnya terlebih dahulu minimal satu kali baru untuk perulangannya akan dicek setelah menjalankan program -->
<!-- $i = 0; -->
<!-- do { -->
    <!-- echo "Hello Mom!<br>". PHP_EOL; -->
<!-- $i++; -->
<!-- } while( $i < 5 ); -->

<!-- tag PHP penutup -->

<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->
<!-- <head> -->
    <!-- <meta charset="UTF-8"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <title>latihan1</title> -->
<!-- </head> -->
<!-- <body> -->
<!-- <table border="1" cellpadding="10" cellspacing="0"> -->
    <!-- <tr> -->
        <!-- <td>1,1</td> -->
        <!-- <td>1,2</td> -->
        <!-- <td>1,3</td> -->
        <!-- <td>1,4</td> -->
        <!-- <td>1,5</td> -->
    <!-- </tr> -->
    <!-- <tr> -->
        <!-- <td>1,1</td> -->
        <!-- <td>1,2</td> -->
        <!-- <td>1,3</td> -->
        <!-- <td>1,4</td> -->
        <!-- <td>1,5</td> -->
    <!-- </tr> -->

<!-- <table border="1" cellpadding="10" cellspacing="0"> -->
    <!-- baris ini berisi awal tag HTML -->
        <!-- // for( $i = 1; $i <=3; $i++ ){ -->
            <!-- // echo "<tr>"; -->
            <!-- // for( $j = 1; $j <= 5; $j++ ){ -->
                <!-- // echo "<td>$i,$j</td>"; -->
            <!-- // } -->
            <!-- // echo "</tr>"; -->
        <!-- // } -->
    <!-- sedangkan baris ini berisi penutup dari tag HTML -->
<!-- </table> -->

<!-- <br> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>penggunaan PHP dan HTML bersaam ditiap barisnya</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    
</body>
</html>
<table border="1" cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 5; $i++ ): ?>
        <?php if( $i % 2 == 1 ): ?>
            <tr class="warna-baris">
        <?php else: ?>
            <tr>
        <?php endif;?>
            <?php for( $j = 1; $j <= 5; $j++): ?>
                <!-- dibaris bawah tidak menggunakan tag pembuka PHP seperti biasanya -->
                <!-- tapi menggunakan <"?=", fungsinya sama jika hanya membutuhkan untuk memprint / mengecho / mencetak tulisan dari PHP-->
                <td><?= "$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>

</table>

</body>
</html>