<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hitung Energi Kinetik</title>
    </head>
    <body>
        <h1>HITUNG ENERGI KINETIK</h1>
        <form method="POST">
            <label for="massa">Massa:</label>
            <input type="number" id="massa" name="massa" required="required" >kg
            <br>
            <label for="kecepatan">Kecepatan:</label>
            <input type="number" id="kecepatan" name="kecepatan" required="required">m/s
            <br>
            <br>
            <input type="submit" name="submit" value="Hitung Energi Kinetik">
        </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Ambil nilai massa dan Kecepatan  dari input HTML
    $massa = $_POST["massa"];
    $kecepatan = $_POST["kecepatan"];
    
    
    // Fungsi menghitung energi kinetik
    function kinetik ($massa, $kecepatan)
    {
        return 0.5 * $massa *pow($kecepatan, 2);
    }

    // Hitung energi kinetik dan cetak hasilnya
    $energi_kinetik = kinetik($massa, $kecepatan);

    echo "Energi kinetik =" . $energi_kinetik;
    echo "</br></br>";
}


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari input
        echo "Nilai massa = $massa </br>";  
        echo "Nilai kecepatan = $kecepatan </br></br>";

        if ($massa > 0 && $kecepatan > 0){
            echo " Nilai Massa atau Kecepatan yang anda masukan adalah Bilangan Positif ";
        }
        else if ($massa < 0 || $kecepatan < 0){
            echo "  Nilai Massa atau Kecepatan yang anda masukan Bilangan Negatif";
        }
        else {
            echo " Perhitungan Tidak dapat dilakukan karena bilanggan yang anda masukan pada Massa atau Kecepatan adalah bilangan 0";
        }
    }
    ?>
    </body>
</html>