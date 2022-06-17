<?php
    include './db/db_con.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="grid">
        <div class="header  d-flex justify-content-start align-items-center">
            <h2 class="text-light d-flex justify-content-start align-items-center ps-3">O'quvchilar ruyxati</h2> <br> 
        </div>
        <div class="menu">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 100%; height:100vh;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi pe-none me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">Menu</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                        <a href="index.php" class="nav-link text-white" aria-current="page">
                            <i class="bi bi-house-door"></i>&nbsp;&nbsp;Registratsiya
                        </a>
                    </li>
                    <li>
                        <a href="" class="nav-link text-white active">
                            <i class="bi bi-calendar2"></i>&nbsp;&nbsp;
                            Ruyxat
                        </a>
                    </li>
                    <li>
                        <a href="tulov.php" class="nav-link text-white">
                            <i class="bi bi-grid-3x3-gap"></i>&nbsp;&nbsp;
                            To'lov
                        </a>
                    </li>
                    <li>
                        <a href="info.php" class="nav-link text-white">
                            <i class="bi bi-person-circle"></i>&nbsp;&nbsp;
                            Ma'lumot
                        </a>
                    </li>

                </ul>
                <hr>
            </div>
        </div>
        <div class="container-fluid">
            <!-- <h2>O'quvchilar ruyxati</h2> <br> <hr> -->
            <table class="table table-striped mt-5 table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Familiyasi</th>
                        <th scope="col">Ismi</th>
                        <th scope="col">Yo'nalishi</th>
                        <th scope="col">Tahrirlash</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $pdoStatement = $pdo->prepare("SELECT * FROM `people`");

                        if($pdoStatement->execute()) {
                            while($row = $pdoStatement->fetch()){
                                $id = $row['id'];
                                $familiya = $row['familiya'];
                                $ism = $row['ism'];
                                $yunalish = $row['yunalish'];

                                echo '<tr role="button">
                                        <th scope="row">'.$id.'</th>
                                        <td>'.$familiya.'</td>
                                        <td>'.$ism.'</td>
                                        <td>'.$yunalish.'</td>
                                        <td>
                                                <a href="data/data.php?changeid='.$id.'"
                                                        class="p-2 fs-5 text-decoration-none"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" title="O\'zgartirish">

                                                    <i class="bi bi-pencil-square text-success"></i>
                                                </a>

                                                <a href="malumot.php?seeid='.$id.'&name='.$ism.'"
                                                        class="p-2 fs-5 text-decoration-none"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" title="Ko\'rish">

                                                    <i class="bi bi-eye-fill text-secondary" ></i>
                                                </a>
                                                
                                                <a href="data/delete.php?deleteid='.$id.'"
                                                        class="p-2 fs-5 text-decoration-none"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-custom-class="custom-tooltip" title="O\'chirish">

                                                    <i class="bi bi-trash3 text-danger"></i>
                                                </a>
                                        </td>
                                    </tr>';
                            }
                        } else {
                            print "Qanaqadir xatolik";
                            exit;
                        }
                    ?>
                </tbody>
            </table>
            <form action="excel.php" method="post">
                <button type="submit" name="excel_btn" class="btn btn-success">Excel faylni yuklash</button>
            </form>
        </div>
    </div>


</body>

</html>