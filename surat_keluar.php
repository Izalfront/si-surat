<?php
session_start();
include 'config/database.php';

if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

$tipe_surat = 'keluar';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Surat Keluar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php include 'includes/footer.php'; ?>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Surat Keluar</h2>
            <a href="tambah_surat.php?tipe=<?php echo $tipe_surat; ?>" class="btn btn-primary">Tambah Surat</a>
        </div>

        <form method="GET" action="" class="mb-4">
            <div class="input-group">
                <input type="text" name="keyword" class="form-control" placeholder="Cari ..." aria-label="Cari ...">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-secondary">Cari</button>
                </div>
            </div>
        </form>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nomor Surat</th>
                    <th>Pengirim</th>
                    <th>Waktu</th>
                    <th>Perihal</th>
                    <th>Penerima</th>
                    <th>Unit Penerbit</th>
                    <th>Nama yang Mengesahkan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_GET['keyword'])) {
                    $keyword = $_GET['keyword'];
                    $sql = "SELECT * FROM surat WHERE tipe_surat='$tipe_surat' AND nomor_surat LIKE '%$keyword%' OR pengirim_surat LIKE '%$keyword%' OR perihal_surat LIKE '%$keyword%' OR penerima_surat LIKE '%$keyword%' OR unit_penerbit LIKE '%$keyword%' OR nama_mengesahkan LIKE '%$keyword%'";
                } else {
                    $sql = "SELECT * FROM surat WHERE tipe_surat='$tipe_surat'";
                }
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['nomor_surat'] . "</td>";
                        echo "<td>" . $row['pengirim_surat'] . "</td>";
                        echo "<td>" . $row['waktu_surat'] . "</td>";
                        echo "<td>" . $row['perihal_surat'] . "</td>";
                        echo "<td>" . $row['penerima_surat'] . "</td>";
                        echo "<td>" . $row['unit_penerbit'] . "</td>";
                        echo "<td>" . $row['nama_mengesahkan'] . "</td>";
                        echo "<td>
                                <a href='edit_surat.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                                <a href='hapus_surat.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Hapus</a>
                                <a href='detail_surat.php?id=" . $row['id'] . "' class='btn btn-info btn-sm'>Detail & Cetak</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>Tidak ada data surat</td></tr>";
                }
                ?>
            </tbody>
        </table>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>