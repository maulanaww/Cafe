<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #DCDCDC;
            text-align: center;
            font-family: sans-serif;
            font-size: 15px;
        }
        .tombol {
            background-color: #faebd7;
            height: 40px;
            line-height: 42px;
            color: black;
            text-decoration: none;
            display: inline-block;
            padding: 0px 20px 0px 20px;
            font-size: 15px;
            border-radius: 10px;
        }
        .table {
           border-collapse: collapse;
           font-size: 10pt;
           border: 1px solid #cccccc;
           text-align: center;
           opacity: 90%;
        }
        td {
            padding: 3px;
            height: 25px;
            background-color: #faebd7;
        }
        th {
           background-color:  #d2691e;
           height: 30px;
        }
        h2 {
            color: white;
        }
    </style>
</head>
<body background="../gambar/bg2.jpg">
    <center>
    <h2>DATA PESANAN CAFE</h2>
    <p>
        <a href="../html/frame.html" target="_parent" class="tombol">Back</a>
    </p>
    <br>
    <table class="table" border="1">
        <tr>
            <th>No</th>
            <th>Nomor Meja</th>
            <th>Atas Nama</th>
            <th>Menu 1</th>
            <th>Jumlah</th>
            <th>Menu 2</th>
            <th>Jumlah</th>
            <th>Menu 3</th>
            <th>Jumlah</th>
            <th>Menu 4</th>
            <th>Jumlah</th>
            <th>Menu 5</th>
            <th>Jumlah</th>
            <th>Waktu</th>
        </tr>
        <?php
        $koneksi = mysqli_connect("localhost", "root", "", "dessert_cafe");
        
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " .mysqli_connect_error();
        }

        $no = 1;
        $data = mysqli_query($koneksi, "select * from pemesanan");
        while($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nomor_meja']; ?></td>
                <td><?php echo $d['atas_nama']; ?></td>
                <td><?php echo $d['menu_1']; ?></td>
                <td><?php echo $d['jumlah_1']; ?></td>
                <td><?php echo $d['menu_2']; ?></td>
                <td><?php echo $d['jumlah_2']; ?></td>
                <td><?php echo $d['menu_3']; ?></td>
                <td><?php echo $d['jumlah_3']; ?></td>
                <td><?php echo $d['menu_4']; ?></td>
                <td><?php echo $d['jumlah_4']; ?></td>
                <td><?php echo $d['menu_5']; ?></td>
                <td><?php echo $d['jumlah_5']; ?></td>
                <td><?php echo $d['tanggal_pesanan']; ?></td>
            </tr>
            <?php
        }
        ?>
    </center>
    </table>
</body>
</html>