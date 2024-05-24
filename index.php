<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        center {
            background-color: #ffffff;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            box-shadow: black 5px 5px 5px;
        }
        .title {
            background-color: blue;
            border-radius: 10px;
            box-shadow: black 3px 3px 3px;
        }
        h1 {
            color: white;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label, select, input {
            text-align: center;
            margin: 10px 0;
            width: 100%;
        }
        select, input[type="number"], input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            box-shadow: black 3px 3px 3px;
        }
        input[type="submit"]:hover {
            background-color: lightblue;
            box-shadow: black 3px 3px 3px;
        }
    </style>
</head>
<body>
    <center>
        <div class="title">
            <h1>Rental Motor</h1>
        </div>
        <form action="" method="POST">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama" id="nama" required><br>
            <label>Waktu Rental (Perhari) :</label>
            <input type="number" name="Waktu" id="Waktu" placeholder="Masukan Lama Rental" required><br>
            <label>Pilih Tipe Motor :</label>
            <select name="JenisMotor" id="JenisMotor" required>
                <option disabled selected> --- Pilih Tipe Motor ---</option>
                <option value="Kawasaki">Kawasaki</option>
                <option value="Kago">Kago</option>
                <option value="Kriko">Kriko</option>
                <option value="Estriper">Estriper</option>
            </select><br>
            <input type="submit" value="kirim" name="kirim">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'Rental.php';
            $Rental = new Rent();
            $Rental->Setharga(70000, 140000, 210000, 280000);
            $Rental->nama = $_POST['nama'];
            $Rental->Waktu = $_POST['Waktu'];
            $Rental->JenisMotor = $_POST['JenisMotor'];
            $Rental->CetakPembelian();
        }
        ?>
    </center>
</body>
</html>
