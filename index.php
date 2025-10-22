<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Biodata </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f6ff;
            color: #222;
            padding: 20px;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            justify-content: center;
            align-items: center;
            background: url('https://rbogor.oss-ap-southeast-5.aliyuncs.com/rbogor/2023/08/Gedung-Utama-SMK-Plus-Pelita-Nusantara-1024x597.jpg') no-repeat center center/cover;
            backdrop-filter: blur(3px);
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            max-width: 500px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .form-input {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-s;
            ize: 16px;
            /* transition: background-color 0.5s  animasi halus */
            transition: all 0.3s ease;


        }

        button:hover {
            background-color: #2980b9;
            /* warna saat di-hover */
            transform: translateY(-6px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);

        }

        .hasil {
            background-color: #fff;
            margin: 20px auto;
            padding: 20px;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .hasil p {
            margin: 8px 0;
        }

        .alert-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(6px);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .alert-overlay.show {
            opacity: 1;
            visibility: visible;
        }

        .alert-box {
            background: #ffffff;
            border-radius: 15px;
            padding: 30px 40px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transform: scale(0.8);
            transition: transform 0.3s ease;
            width: 350px;
        }

        .alert-overlay.show .alert-box {
            transform: scale(1);
        }

        .alert-icon {
            font-size: 40px;
            color: #e67e22;
            margin-bottom: 10px;
        }

        .alert-title {
            font-size: 22px;
            font-weight: 600;
            color: #333;
        }

        .alert-message {
            font-size: 15px;
            color: #555;
            margin-top: 8px;
        }

        .alert-btn {
            margin-top: 20px;
            background: #3498db;
            color: white;
            border: none;
            padding: 10px 24px;
            border-radius: 8px;
            font-size: 15px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .alert-btn:hover {
            background: #2980b9;
        }

        #customAlert {
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s ease;
        }

        #customAlert.show {
            opacity: 1;
            visibility: visible;
        }
    </style>
</head>

<body>

    <!-- Tombol contoh
    <button onclick="showAlert()">Tampilkan Alert</button> -->

    <!-- Alert Box -->
    <div class="alert-overlay" id="customAlert">
        <div class="alert-box">
            <div class="alert-icon">⚠️</div>
            <div class="alert-title">Data Belum Lengkap!</div>
            <div class="alert-message">Silahkan masukkan NAMA, NIS, Jenis Kelamin, Alamat, dan Agama</div>
            <button class="alert-btn" onclick="closeAlert()">OK</button>
        </div>
    </div>


    <h2>Form Biodata <span class="mail-icon">📩</span></h2>

    <!-- form -->
    <form action="" method="POST" id="form-biodata">
        <div class="form-input">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap">
        </div>

        <div class="form-input">
            <label for="nis">NIS</label>
            <input type="number" name="nis" id="nis">
        </div>

        <div class="form-input">
            <label>Jenis Kelamin</label>
            <input type="radio" name="jenis_kelamin" value="Laki-laki" id="jenis_kelamin"> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="jenis_kelamin"> Perempuan
        </div>

        <div class="form-input">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" rows="3"></textarea>
        </div>

        <div class="form-input">
            <label for="agama">Agama</label>
            <select name="agama" id="agama">
                <option value="">-- Pilih Agama --</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
                <option value="Ateis">Ateis</option>
                <option value="Sekte">Sekte</option>

            </select>
        </div>

        <button type="submit" name="btn_submit" id="btn_submit">Kirim Data</button>
    </form>

    <?php
    // Blok PHP untuk menampilkan hasil
    if (isset($_POST['btn_submit'])) {
        $nama = $_POST['nama_lengkap'] ?? '';
        $nis = $_POST['nis'] ?? '';
        $jenis_kelamin = $_POST['jenis_kelamin'] ?? '';
        $alamat = $_POST['alamat'] ?? '';
        $agama = $_POST['agama'] ?? '';

        ?>

        <div class="hasil">
            <h3>Hasil Biodata</h3>
            <p><strong>Nama Lengkap:</strong> <?= htmlspecialchars($nama); ?></p>
            <p><strong>NIS:</strong> <?= htmlspecialchars($nis); ?></p>
            <p><strong>Jenis Kelamin:</strong> <?= htmlspecialchars($jenis_kelamin); ?></p>
            <p><strong>Alamat:</strong> <?= htmlspecialchars($alamat); ?></p>
            <p><strong>Agama:</strong> <?= htmlspecialchars($agama); ?></p>
        </div>

        <?php
    }
    ?>

    <script>
        function showAlert() {
            const alertBox = document.getElementById("customAlert");
            alertBox.classList.add("show");

            // Tutup otomatis setelah 3 detik
            setTimeout(() => {
                alertBox.classList.remove("show");
            }, 3000);
        }

        function closeAlert() {
            document.getElementById("customAlert").classList.remove("show");
        }

        const formBiodata = document.getElementById("form-biodata");

        formBiodata.addEventListener("submit", function (e) {
            const nama = document.getElementById("nama_lengkap").value.trim();
            const nis = document.getElementById("nis").value.trim();
            const alamat = document.getElementById("alamat").value.trim();
            const agama = document.getElementById("agama").value;
            const jenisKelamin = document.querySelector('input[name="jenis_kelamin"]:checked');

            // Cek semua input wajib
            if (!nama || !nis || !alamat || !agama || !jenisKelamin) {
                e.preventDefault(); // Hentikan pengiriman form
                showAlert();        // Tampilkan alert
            }
        });
    </script>

</body>

</html>