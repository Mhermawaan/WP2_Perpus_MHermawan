<!DOCTYPE html>
<html>

<head>
    <title>Form Input Data Siswa</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #007bff;
        }

        fieldset {
            width: 40%;
            margin: 40px auto;
            border-radius: 10px;
            background-color: #ffffff;
            padding: 20px;
        }

        table {
            width: 100%;
        }

        th,
        td {
            padding: 10px;
        }

        th {
            width: 30%;
            text-align: left;
        }

        td {
            width: 70%;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="radio"],
        label {
            display: inline-block;
            margin-right: 10px;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Form Input Data Siswa</h1>
    <fieldset>
        <form action="<?= base_url('siswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th>Nama Lengkap</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>Nomor Induk Siswa</th>
                    <td>
                        <input type="number" name="nis" id="nis">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>
                        <input type="text" name="tempat" id="tempat">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>
                        <input type="date" name="tanggal" id="tanggal">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>
                        <input type="radio" id="jekel" name="jekel" value="Laki-Laki">
                        <label for="lakilaki">Laki-Laki</label>
                        <input type="radio" id="jekel" name="jekel" value="Perempuan">
                        <label for="perempuan">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
        </fieldset>
    </center>
</body>

</html>