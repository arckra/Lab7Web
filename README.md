# Lab7Web

#
<img width="510" height="189" alt="Screenshot 2025-11-10 114518" src="https://github.com/user-attachments/assets/cedd6acb-8656-4291-9be9-fd7091d6d1de" />

#
<img width="514" height="327" alt="Screenshot 2025-11-10 114459" src="https://github.com/user-attachments/assets/7c147ea9-ce4a-4d3c-a07c-0a56da5e21bd" />

#
<img width="586" height="216" alt="Screenshot 2025-11-10 114432" src="https://github.com/user-attachments/assets/4493e8cc-092c-4396-a115-3660ed4ed12f" />

# Form Input
```php
<?php
    echo 'Selamat Datang '. $_POST['nama'];
    ?>
```

Output :

<img width="302" height="108" alt="image" src="https://github.com/user-attachments/assets/a559817e-fd3d-4b04-b706-dc5bb0ffa2c4" />

# Operator
```php
?php
        $gaji = 1000000;
        $pajak = 0.1;
        $thp = $gaji - ($gaji*$pajak);
        echo "Gaji sebelum pajak = Rp. $gaji <br>";
        echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
```

Output :

<img width="277" height="102" alt="image" src="https://github.com/user-attachments/assets/c4a998b8-c3e0-4d63-ac27-335447647f7a" />

# Kondisi IF
```php
<?php
        $nama_hari = date("l");
        if ($nama_hari == "Sunday") {
            echo "Minggu";
        } elseif ($nama_hari == "Monday") {
            echo "Senin";
        } else {
            echo "Selasa";
        }
    ?>
```

Output :

<img width="141" height="78" alt="image" src="https://github.com/user-attachments/assets/116df1eb-8af7-43ed-9d42-4b68d2a7f22e" />

# Kondisi Switch
```php
<?php
        $nama_hari = date("l");
        switch ($nama_hari) {
            case "Sunday":
                echo "Minggu";
                break;
            case "Monday":
                echo "Senin";
                break;
            case "Tuesday":
                echo "Selasa";
                break;
            default:
                echo "Sabtu";
            }
    ?>
```

Output :

<img width="187" height="90" alt="image" src="https://github.com/user-attachments/assets/67d45147-0b53-45d9-ae35-93c3b448e1bd" />

# Perulangan for
```php
<?php
        echo "Perulangan 1 sampai 10 <br />";
        for ($i=1; $i<=10; $i++) {
            echo "Perulangan ke: " . $i . '<br />';
        }
        echo "Perulangan Menurun dari 10 ke 1 <br />";
        for ($i=10; $i>=1; $i--) {
            echo "Perulangan ke: " . $i . '<br />';
        }
    ?>
```

Output :

<img width="236" height="452" alt="image" src="https://github.com/user-attachments/assets/42bb1452-bc73-458f-a391-79a6999a0c97" />

# Perulangan while
```php
<?php
        echo "Perulangan 1 sampai 10 <br />";
        $i=1;
        while ($i<=10) {
            echo "Perulangan ke: " . $i . '<br />';
            $i++;
        }
    ?>
```

Output :

<img width="215" height="263" alt="image" src="https://github.com/user-attachments/assets/919dcb72-60e6-490d-9b03-d7b8e43edd95" />

# Perulangan dowhile
```php
<?php
        echo "Perulangan 1 sampai 10 <br />";
        $i=1;
        do {
            echo "Perulangan ke: " . $i . '<br />';
            $i++;
        } while ($i<=10);
    ?>
```

Output :

<img width="230" height="260" alt="image" src="https://github.com/user-attachments/assets/2d29d152-ba50-46fa-95cb-ffaf6d8f8dd1" />

# Pertanyaan dan Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan nama, tanggal lahir dan pekerjaan. 
Kemudian tampilkan outputnya dengan menghitung umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang berbeda-beda sesuai pilihan pekerjaan.

**JAWABAN**

**Sebelum dimasukkan css**

Output :

<img width="486" height="298" alt="Screenshot 2025-11-10 210923" src="https://github.com/user-attachments/assets/2072450a-75ce-4179-88e5-3ef109326b72" />

**Setelah dimasukkan css**

Output :

<img width="608" height="592" alt="Screenshot 2025-11-10 211009" src="https://github.com/user-attachments/assets/918d6360-d15f-4ce9-94db-c687a2eb21be" />

**Penjelasan Alur**

1. User mengisi form dengan data dirinya.
2. PHP menerima data lewat $_POST.
3. Dari tanggal lahir → diambil tahun untuk menghitung umur.
4. PHP menggunakan switch untuk menentukan gaji sesuai pekerjaan.
5. Semua hasil ditampilkan kembali di halaman output.
