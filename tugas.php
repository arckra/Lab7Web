<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dasar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 100%;
            max-width: 500px;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        .header h2 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .header p {
            opacity: 0.9;
            font-size: 14px;
        }

        .form-container {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
            font-size: 14px;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e1e1e1;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        select:focus {
            outline: none;
            border-color: #667eea;
            background-color: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .result {
            margin-top: 30px;
            padding: 25px;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            border-radius: 10px;
            color: white;
            display: none;
        }

        .result.show {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        .result h3 {
            margin-bottom: 15px;
            font-size: 22px;
            text-align: center;
        }

        .result-item {
            background: rgba(255, 255, 255, 0.2);
            padding: 12px 15px;
            margin-bottom: 10px;
            border-radius: 6px;
            font-size: 14px;
        }

        .result-item:last-child {
            margin-bottom: 0;
        }

        .salary {
            background: rgba(255, 255, 255, 0.3);
            font-weight: bold;
            font-size: 16px !important;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .required {
            color: #e74c3c;
        }

        .form-note {
            text-align: center;
            color: #666;
            font-size: 12px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Data Diri dan Pekerjaan</h2>
            <p>Isi form berikut untuk melihat informasi lengkap</p>
        </div>
        
        <div class="form-container">
            <form method="post" id="dataForm">
                <div class="form-group">
                    <label for="nama">Nama <span class="required">*</span></label>
                    <input type="text" name="nama" id="nama" required placeholder="Masukkan nama lengkap">
                </div>
                
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir <span class="required">*</span></label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
                </div>
                
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan <span class="required">*</span></label>
                    <select name="pekerjaan" id="pekerjaan" required>
                        <option value="">-- Pilih Pekerjaan --</option>
                        <option value="programmer">Programmer</option>
                        <option value="designer">Designer</option>
                        <option value="manager">Manager</option>
                        <option value="kasir">Kasir</option>
                        <option value="dokter">Dokter</option>
                        <option value="guru">Guru</option>
                    </select>
                </div>
                
                <button type="submit" class="btn">Kirim Data</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Ambil data dari form
                $nama = htmlspecialchars($_POST['nama']);
                $tanggal_lahir = $_POST['tanggal_lahir'];
                $pekerjaan = $_POST['pekerjaan'];
                
                // Hitung umur
                $tgl_lahir = new DateTime($tanggal_lahir);
                $today = new DateTime();
                $umur = $today->diff($tgl_lahir)->y;
                
                // Tentukan gaji berdasarkan pekerjaan
                $gaji = 0;
                switch ($pekerjaan) {
                    case 'programmer':
                        $gaji = 12000000;
                        $pekerjaan_text = "Programmer";
                        $color = "#3498db";
                        break;
                    case 'designer':
                        $gaji = 8000000;
                        $pekerjaan_text = "Designer";
                        $color = "#9b59b6";
                        break;
                    case 'manager':
                        $gaji = 20000000;
                        $pekerjaan_text = "Manager";
                        $color = "#e74c3c";
                        break;
                    case 'kasir':
                        $gaji = 4500000;
                        $pekerjaan_text = "Kasir";
                        $color = "#f39c12";
                        break;
                    case 'dokter':
                        $gaji = 25000000;
                        $pekerjaan_text = "Dokter";
                        $color = "#e74c3c";
                        break;
                    case 'guru':
                        $gaji = 6000000;
                        $pekerjaan_text = "Guru";
                        $color = "#2ecc71";
                        break;
                    default:
                        $pekerjaan_text = "Tidak diketahui";
                        $color = "#95a5a6";
                }
                
                // Format gaji ke format Rupiah
                $gaji_format = "Rp " . number_format($gaji, 0, ',', '.');
                
                // Tampilkan output dengan styling
                echo "<div class='result show'>";
                echo "<h3>📋 Hasil Data Diri</h3>";
                echo "<div class='result-item'><strong>Nama:</strong> $nama</div>";
                echo "<div class='result-item'><strong>Tanggal Lahir:</strong> " . date('d F Y', strtotime($tanggal_lahir)) . "</div>";
                echo "<div class='result-item'><strong>Umur:</strong> $umur tahun</div>";
                echo "<div class='result-item'><strong>Pekerjaan:</strong> $pekerjaan_text</div>";
                echo "<div class='result-item salary'><strong>Gaji:</strong> $gaji_format per bulan</div>";
                echo "</div>";
            }
            ?>

            <div class="form-note">
                * Harap isi semua field yang wajib diisi
            </div>
        </div>
    </div>

    <script>
        // Script untuk menampilkan hasil dengan smooth transition
        document.getElementById('dataForm').addEventListener('submit', function(e) {
            if (this.checkValidity()) {
                e.preventDefault();
                // Form akan tetap submit karena kita tidak mencegah default
                // Script ini hanya untuk demonstrasi
            }
        });

        // Set tanggal maksimum untuk input date (hari ini)
        document.getElementById('tanggal_lahir').max = new Date().toISOString().split("T")[0];
    </script>
</body>
</html>