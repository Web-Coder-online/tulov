<?php

declare(strict_types=1);

ini_set('display_errors', '1');
error_reporting(E_ALL);

include './db/db_con.php';



    if(isset($_POST['btn_search'])){
        $search = $_POST['search'];

        $pdoStatement=$pdo->prepare("SELECT * FROM `people` WHERE `familiya` LIKE '%$search%' OR `ism` LIKE '%$search%'");

        if($pdoStatement->execute()){
            while($row=$pdoStatement->fetch()){
                $id=$row['id'];
                $familiya=$row['familiya'];
                $ism=$row['ism'];
            };
        }
    }

    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $ism=$_POST['ism'];
        $familiya=$_POST['familiya'];
        $yunalish=$_POST['yunalish'];
        $summa=$_POST['summa'];
        $t_date=$_POST['t-date'];
        $itc=$_POST['itc'];
        $click=$_POST['click'];

        $pdoStatement=$pdo->prepare("INSERT INTO `summa`
                                                  (`id_person`,`ism`, `fam`, `yunalish`, `oy`, `sum`, `itc`, `click`)
                                                  VALUES
                                                  (:id, :ism, :familiya , :yunalish , :t_date , :summa , :itc, :click)");

        $pdoStatement->bindParam(':id', $id);
        $pdoStatement->bindParam(':ism', $ism);
        $pdoStatement->bindParam(':familiya', $familiya);
        $pdoStatement->bindParam(':yunalish', $yunalish);
        $pdoStatement->bindParam(':summa', $summa);
        $pdoStatement->bindParam(':t_date', $t_date);
        $pdoStatement->bindParam(':itc', $itc);
        $pdoStatement->bindParam(':click', $click);
        
        if($pdoStatement->execute()) {
            print "Ma'lumot qo'shildi";
            header("Location: tulov.php");
        } else {
            print "Qanaqadir xatolik ruy berdi";
            header("Location: tulov.php");
        }

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
        <div class="header  d-flex justify-content-between align-items-center">
            <h2 class="text-light d-flex justify-content-start align-items-center ps-3">O'quvchi tulovi</h2> <br> 
            <header class="p-3  text-white d-flex justify-content-end">
                <form action="" method="post">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <div class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <input type="search" name="search" class="form-control form-control-dark text-dark" placeholder="Qidiruv..." aria-label="Search">
                        </div>

                        <div class="text-end">
                        <button type="submit" name="btn_search" class="btn btn-outline-light me-2">Qidirish</button>
                        </div>
                    </div>
                </form>
            </header>
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
                        <a href="ruyxat.php" class="nav-link text-white ">
                            <i class="bi bi-calendar2"></i>&nbsp;&nbsp;
                            Ruyxat
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white active">
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
        <form action="" method="post">
            <div class="row mt-5">
                <div class="col">
                
                </div>
            </div>

            <div class="row">
                <div class="col">

                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col"># ID</th>
                                <th scope="col">Ism</th>
                                <th scope="col">Familiya</th>
                                <th scope="col">Yo'nalish</th>
                                <th scope="col">Summa</th>
                                <th scope="col">To'lov sanasi</th>
                                <th scope="col">ITC</th>
                                <th scope="col">To'lov turi</th>
                                <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <?php if(isset($id)){
                                            ?>
                                            <input type="text" class="form-control border-success border-0 fw-bold" id="exampleFormControlInput1"  size="1" name="id" value="<?php echo $id; ?>">
                                            <?php
                                        }?> 
                                    </th>
                                    <td>
                                        <?php if(isset($ism)){
                                            ?>
                                            <input type="text" class="form-control border-success" id="exampleFormControlInput1" name="ism" value="<?php echo $ism; ?>">
                                            <?php
                                        }?>    
                                    </td>
                                    <td>
                                        <?php if(isset($familiya)){
                                            ?>
                                            <input type="text" class="form-control border-success" id="exampleFormControlInput1" name="familiya" value="<?php echo $familiya; ?>">
                                            <?php
                                        }?>   
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label="Default select example" name="yunalish">
                                            <option selected>Yo'nalish tanlang</option>
                                            <option value="Kompyuter savodxonligi">Kompyuter savodxonligi</option>
                                            <option value="Web dasturlash">Web dasturlash</option>
                                            <option value="IT English">IT English</option>
                                            <option value="Kibersport">Kibersport</option>
                                            <option value="Robototexnika">Robototexnika</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="summa">
                                    </td>
                                    <td>
                                        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="" name="t-date">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="itc" value="054/">
                                    </td>
                                    <td>
                                        <select class="form-select" aria-label="Default select example" name="click">
                                            <option selected>To'lov turini tanlang</option>
                                            <option value="Bank">Bank</option>
                                            <option value="PayMe">PayMe</option>
                                            <option value="Click">Click</option>
                                            <option value="Naxt">Naxt</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn btn-success" name="submit" type="submit">Yuborish</button>
                                    </td>
                                </tr>                                
                            </tbody>
                        </table>
                </div>
            </div>
        </form>
        </div>
    </div>


</body>

</html>