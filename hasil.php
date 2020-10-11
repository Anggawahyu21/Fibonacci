<html>
<head>
    <title>Hasil Deret</title>
</head>
<body>
    <table>
    <?php
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $deret = $_POST['banyakderet'];
        
        echo 
            "<h4>Hasil :</h4> <table border=1 cellspacing=0 cellpadding=9>
            <tr align=center>
                <td>i</td>
                <td>x</td>
            </tr>";
        $fibonacci = 0;
        for ($i=1; $i <= $deret; $i++) {
            if ($i == 1) {
                echo " <tr align=center>
                        <td>$i</td>
                        <td>$angka1</td>
                    </tr>";
            }elseif ($i == 2) {
                echo "<tr align=center>
                        <td>$i</td>
                        <td>$angka2</td>
                    </tr>";
            }else {
                $fibonacci = $angka1 + $angka2;
                $angka1 = $angka2;
                $angka2 = $fibonacci;
                
                echo "<tr align=center>
                        <td>$i</td>
                        <td>$fibonacci</td>
                    </tr>";
                $hasil=$hasil+$fibonacci;
            }
        }
        echo "</table> <br>";
        echo "Rata-rata : ";
        $rata=$hasil/$deret;
        echo $rata."<br>";

        echo "Banyak Deret : ".$deret;
    ?>

</body>
</html>