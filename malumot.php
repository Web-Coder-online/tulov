<?php

    include './db/db_con.php';

        $id = $_GET['seeid'];

        $pdoStatement = $pdo->prepare("SELECT * FROM `people` WHERE id=$id");

        if($pdoStatement->execute()) {
            while($row = $pdoStatement->fetch()){
                $id = $row['id'];
                $familiya = $row['familiya'];
                $ism = $row['ism'];
                $sharif = $row['sharif'];
                $paspurt = $row['paspurt'];
                $t_sana = $row['t_sana'];
                $jins = $row['jins'];
                $yunalish = $row['yunalish'];
                $tel = $row['tel'];
                $r_sana = $row['r_sana'];
                $uqituvchi = $row['uqituvchi'];

                
            }
        } else {
            print "Qanaqadir xatolik";
            exit;
        }

        

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="grid">
        <div class="header d-flex justify-content-start align-items-center">
            <h2 class="text-light d-flex justify-content-start align-items-center ps-3">O'quvchi statusi</h2>
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
                        <a href="#" class="nav-link active" aria-current="page">
                            <i class="bi bi-house-door"></i>&nbsp;&nbsp;Registratsiya
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <i class="bi bi-calendar2"></i>&nbsp;&nbsp;
                            Ruyxat
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <i class="bi bi-grid-3x3-gap"></i>&nbsp;&nbsp;
                            To'lov
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <i class="bi bi-person-circle"></i>&nbsp;&nbsp;
                            Ma'lumot
                        </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="container-fluid"> <br>
            <!-- <h2>O'quvchi statusi</h2> <br>
            <hr> -->
            <h4 class="text-center"><i class="bi bi-person-video2"></i>
                <?php echo  $ism . ' ' . $familiya . ' ' . $sharif; ?>
            </h4>
            <hr>
            <form action="" method="post">

            </form>
            <div class="row ps-5">
                <div class="col-12">
                    <!-- <h4 class="text-center">Akmal Kadirov Rustamovich</h4> -->
                </div>
                <div class="col-2  py-4 col-ms-12">
                    <p class="d-flex justify-content-end">Tel nomeri:</p>
                    <p class="d-flex justify-content-end">Yo'nalishi:</p>
                    <p class="d-flex justify-content-end">Passpurt Seriyasi:</p>
                    <p class="d-flex justify-content-end">Tug'ilgan sana:</p>
                    <p class="d-flex justify-content-end">Jinsi:</p>
                    <p class="d-flex justify-content-end">Ro'yxatdan o'tgan sana:</p>
                    <p class="d-flex justify-content-end">O'qituvchi:</p>
                </div>
                <div class="col-4  py-4 col-ms-12">
                    <p class="fw-bold ">
                        <?php echo $tel; ?>
                    </p>
                    <p class="fw-bold ">
                        <?php echo $yunalish; ?>
                    </p>
                    <p class="fw-bold ">
                        <?php echo $paspurt; ?>
                    </p>
                    <p class="fw-bold ">
                        <?php echo $t_sana; ?>
                    </p>
                    <p class="fw-bold ">
                        <?php echo $jins; ?>
                    </p>
                    <p class="fw-bold ">
                        <?php echo $r_sana; ?>
                    </p>
                    <p class="fw-bold ">
                        <?php echo $uqituvchi; ?>
                    </p>
                </div>
                <!-- <div class="col-2  py-4 col-ms-12 ">
                    <span class="d-flex justify-content-end">Yanvar:</span>
                    <span class="d-flex justify-content-end">Fevral:</span>
                    <span class="d-flex justify-content-end">Mart:</span>
                    <span class="d-flex justify-content-end">Aprel:</span>
                    <span class="d-flex justify-content-end">May:</span>
                    <span class="d-flex justify-content-end">Iyun:</span>
                    <span class="d-flex justify-content-end">Iyul:</span>
                    <span class="d-flex justify-content-end">Avgust:</span>
                    <span class="d-flex justify-content-end">Sentabr:</span>
                    <span class="d-flex justify-content-end">Oktabr:</span>
                    <span class="d-flex justify-content-end">Noyabr:</span>
                    <span class="d-flex justify-content-end">Dekabr:</span>
                </div>
                <div class="col-4  py-4 col-ms-12">
                    <div class="d-flex justify-content-between" style="width: 35%;"><span class="fw-bold d-flex">300 000 so'm</span> <span class="d-flex text-warning">( Bank )</span></div>
                    <div class="d-flex justify-content-between" style="width: 35%;"><span class="fw-bold d-flex">300 000 so'm</span> <span class="d-flex text-warning">( Bank )</span></div>
                    <div class="d-flex justify-content-between" style="width: 35%;"><span class="fw-bold d-flex">300 000 so'm</span> <span class="d-flex text-warning">( Bank )</span></div>
                </div> -->


                <div class="col-3 py-4">
                    <ul class="list-group mb-3">

                        <?php
                            $name = $_GET['name']; 

                            $pdoStatement = $pdo->prepare("SELECT * FROM `summa` WHERE `ism`='$name'");
                    
                            if($pdoStatement->execute()) {
                                while($row = $pdoStatement->fetch()){
                                    $summa=$row['sum'];
                                    $t_date=$row['oy'];
                                    $click=$row['click'];

                                    echo '
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                        <h6 class="my-0">'.$t_date.'</h6>
                                        <small class="text-muted">'.$click.'</small>
                                        </div>
                                        <span class="text-muted">'.$summa.' so\'m</span>
                                    </li>
                                    ';
                    
                                }
                            } else {
                                print "Qanaqadir xatolik";
                                exit;
                            }
                        ?>                        
                        <li class="list-group-item d-flex justify-content-between bg-success text-light">
                            <span>Jami (SUMMA)</span>
                            <strong>
                                <?php
                                    $pdoStatement = $pdo->prepare("SELECT SUM(`sum`) FROM `summa` WHERE `ism`='$name'");

                                    if($pdoStatement->execute()) {
                                        $row = $pdoStatement->fetch();
                                        echo $row['0'] . ' so\'m';
                                        
                                    }
                                ?>
                            </strong>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </div>


</body>

</html>