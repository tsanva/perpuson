<!DOCTYPE html>
<?php include("conf/db.php");
session_start();

  ?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perpus.On</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/buttonadd.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
    <body class="sb-nav-fixed">

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Perpus.On</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Log Aktivitas</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Laporan</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Pengelolaan</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Transaksi Buku
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="dataPinjam.php">Peminjaman</a>
                                    <a class="nav-link" href="dataPengembalian.php">Pengembalian</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Buku
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="dataBuku.php">Daftar Buku</a>
                                    <a class="nav-link" href="kategori.php">Kategori</a>
                                </nav>

                            </div>
                            <a class="nav-link" href="dataSiswa.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-graduate"></i></div>
                                Siswa
                            </a>
                            <!-- <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div> -->
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tabel Daftar Buku</h1>
                        <ol class="breadcrumb mb-4">
                            <!-- <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li> -->
                        </ol>
                        <div class="card mb-4">
                            <!-- <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div> -->
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Input Data Buku
                            </div>
                            <div class="card-body">
        <form action="dataBuku.php" method="post" enctype="multipart/form-data"> 
        
         <table align="center" width="795" border="2" bgcolor="#FFFFFF">
            
            <tr align="center">
                <td colspan="7"><h2>Tambah Data Buku</h2></td>
            </tr>
            <tr>
                <td align="right"><b>Pengarang:</b></td>
                <td><input type="text"  name="pengarang" size="60" required/></td>
            </tr>
            <tr>
                <td align="right"><b>Keyword Buku:</b></td>
                <td><input type="text"  name="keyword_buku" size="50" required/></td>
            </tr>
            
            <tr>
                <td align="right"><b>Judul Buku:</b></td>
                <td><input type="text" name="judul_buku" size="60" required/></td>
            </tr>
            
            <tr>
                <td align="right"><b>Cover Buku:</b></td>
                <td><input type="file" name="cover_buku" /></td>
            </tr>
            <tr>
                <td align="right"><b>Deskripsi Buku:</b></td>
                <td><textarea name="deskripsi_buku" cols="20" rows="10"></textarea></td>
            </tr>
            
            
            <tr>
                <td align="right"><b>Kategori Buku:</b></td>
                <td>
                <select name="kategori_buku" >
                    <option>Pilih Kategori</option>
                    <?php 
        $get_cats = "select * from category";
    
        $run_cats = mysqli_query($koneksi, $get_cats);
    
        while ($row_cats=mysqli_fetch_array($run_cats)){
    
         
        $cat_title = $row_cats['name'];
    
        echo "<option value='$cat_title'>$cat_title</option>";
    
    
    }
                    
                    ?>
                </select>
                
                
                </td>
            </tr>
            
        
            
            <tr align="center">
                <td colspan="7"><input type="submit" name="input_data" class="btn btn-primary" value="Tambah Buku"/></td>
            </tr>
        
        </table>
    
    
    </form>
                            </div>

                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabel Data Buku
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kategori</th>
                                            <th>Judul Buku</th>
                                            <th>Penulis</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Kategori</th>
                                            <th>Judul Buku</th>
                                            <th>Penulis</th>
                                            <th>Stok</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                    $cat = mysqli_query($koneksi, "select * from books");
                                    while($c = mysqli_fetch_array($cat)){
                                        ?>
                                        <tr>
                                            <td><?php echo $c['category'] ?></td>
                                            <td><?php echo $c['title'] ?></td>
                                            <td><?php echo $c['author'] ?></td>
                                            <td>
                                                <a href="hapus.php?id=<?php echo $c['book_id']; ?>"><button class="tmbl tmbl-masuk">Hapus</button></a> <a href="#popup"></a>

                                            </td>
                                        </tr>
                                        <?php 
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Perpus.0n 2021</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
    <?php 

    if(isset($_POST['input_data'])){
    
        //getting the text data from the fields
        $product_author = $_POST['pengarang'];
        $product_keywords = $_POST['keyword_buku'];
        $product_title = $_POST['judul_buku'];
        $product_image = $_FILES['cover_buku']['name'];
        $product_desc = $_POST['deskripsi_buku'];
        $product_cat= $_POST['kategori_buku'];

    
        //getting the image from the field

        move_uploaded_file($_FILES['cover_buku']['tmp_name'],"../Member/assets/images/$product_image");
         
        $insert_pro = mysqli_query($koneksi, "INSERT INTO books (author, keywords, title, image, description, category) VALUES ('$product_author','$product_keywords','$product_title','$product_image','$product_desc','$product_cat')");
            if($insert_pro){
            
         echo "<script>alert('Penambahan Data Buku Sukses')</script>";
         echo "<script>window.open('dataBuku.php','_self')</script>";
         }
    }








?>
</html>


