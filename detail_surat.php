<?php
session_start();
include 'config/database.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM surat WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Surat tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            line-height: 1.5;
        }

        .header {
            width: 100%;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .header table {
            width: 100%;
            border-collapse: collapse;
        }

        .header .logo {
            width: 100px;
            text-align: center;
            vertical-align: top;
        }

        .header .logo img {
            max-width: 100px;
            height: auto;
        }

        .header .text {
            text-align: center;
        }

        .header .text h1,
        .header .text h2,
        .header .text h3,
        .header .text p {
            margin: 0;
        }

        .header .text h1 {
            font-size: 14px;
            font-weight: bold;
        }

        .header .text h2 {
            font-size: 16px;
            font-weight: bold;
            margin-top: 5px;
        }

        .header .text h3 {
            font-size: 14px;
            font-weight: bold;
            margin-top: 5px;
        }

        .header .text p {
            font-size: 12px;
            margin-top: 2px;
        }

        .content {
            margin-top: 20px;
        }

        .content p {
            margin: 5px 0;
        }

        .footer {
            margin-top: 50px;
            text-align: center;
        }

        .footer p {
            margin: 5px 0;
        }

        .signature {
            text-align: right;
            margin-top: 50px;
        }

        .tembusan ol {
            margin: 0;
            padding-left: 20px;
        }

        @media print {

            .print-button,
            .footer {
                display: none;
            }

            .header,
            .card {
                border: none;
            }
        }

        .print-button {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="header">
        <table>
            <tr>
                <td class="logo">
                    <img src="./img/poliban.png" alt="Poliban Logo">
                </td>
                <td class="text">
                    <h1>KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN TEKNOLOGI</h1>
                    <h2>POLITEKNIK NEGERI BANJARMASIN</h2>
                    <h3>JURUSAN TEKNIK ELEKTRO</h3>
                    <p>Jl. Brigjen H. Hasan Basri (Komplek Unlam) Kayutangi, Banjarmasin 70123</p>
                    <p>Telp: (0511) 3305052, 3308245, Fax : 0511-3308244, 3308245</p>
                    <p>E-mail Jurusan : <a href="mailto:elektro@poliban.ac.id">elektro@poliban.ac.id</a> &nbsp; E-mail Prodi : <a href="mailto:prodi.ti@poliban.ac.id">prodi.ti@poliban.ac.id</a></p>
                </td>
            </tr>
        </table>
    </div>

    <div class="container mt-5">
        <div class="content">
            <p>Nomor: <?php echo $row['nomor_surat']; ?></p>
            <p>Lampiran: <?php echo $row['lampiran_surat']; ?></p>
            <p>Perihal: <?php echo $row['perihal_surat']; ?></p>

            <br>

            <p>Kepada Yth.</p>
            <p><?php echo $row['penerima_surat']; ?></p>
            <p>di -</p>
            <p>Tempat</p>

            <br>

            <p>Dengan hormat,</p>
            <p>Sehubungan dengan <?php echo $row['perihal_surat']; ?>, yang akan diselenggarakan pada:</p>
            <p>Tanggal : <?php echo date('d-m-Y', strtotime($row['waktu_surat'])); ?></p>
            <p>Tempat : <?php echo $row['tempat_surat']; ?></p>
            <p><?php echo nl2br($row['isi_surat']); ?></p>

            <br>

            <p>Demikian Surat Permohonan ini kami ajukan. Atas kerjasama dan perhatiannya kami ucapkan terima kasih.</p>
        </div>

        <div class="signature">
            <p>Mengetahui,</p>
            <br>
            <br>
            <p><?php echo $row['nama_mengesahkan']; ?></p>
        </div>

        <p>Tembusan:</p>
        <div class="tembusan">
            <ol>
                <?php
                $tembusanList = explode(',', $row['nama_tembusan']);
                foreach ($tembusanList as $tembusan) {
                    echo '<li>' . trim($tembusan) . '</li>';
                }
                ?>
            </ol>
        </div>

        <button class="print-button btn btn-primary" onclick="window.print()">Cetak Surat</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>