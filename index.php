<?php

include './db/db_con.php';


if(isset($_POST['submit'])){
    $familiya=$_POST['familiya'];
    $ism=$_POST['ism'];
    $sharif=$_POST['sharif'];
    $paspurt=$_POST['paspurt'];
    $tDate=$_POST['t-date'];
    $flexRadioDefault=$_POST['flexRadioDefault'];
    $yunalish=$_POST['yunalish'];
    $tel=$_POST['tel'];
    $uqituvchi=$_POST['uqituvchi'];
    

    $pdoStatement = $pdo->prepare("INSERT INTO `people`
                                    (`familiya`, `ism`, `sharif`, `paspurt` , `t_sana`, `jins`, `yunalish`, `tel`, `uqituvchi`)
                                    VALUES
                                    (:familiya, :ism, :sharif, :paspurt, :tDate, :flexRadioDefault, :yunalish, :tel, :uqituvchi ) 
                                ");

    $pdoStatement->bindParam(':familiya', $familiya);
    $pdoStatement->bindParam(':ism', $ism);
    $pdoStatement->bindParam(':sharif', $sharif);
    $pdoStatement->bindParam(':paspurt', $paspurt);
    $pdoStatement->bindParam(':tDate', $tDate);
    $pdoStatement->bindParam(':flexRadioDefault', $flexRadioDefault);
    $pdoStatement->bindParam(':yunalish', $yunalish);
    $pdoStatement->bindParam(':tel', $tel);
    $pdoStatement->bindParam(':uqituvchi', $uqituvchi);
    

    if($pdoStatement->execute()) {
        print "Ma'lumot qo'shildi";
        header("Location: index.php");
        $_SESSION['status'] = "Ma'lumot yuborildi";
    } else {
        print "Qanaqadir xatolik ruy berdi";
        header("Location: index.php");
        $_SESSION['status'] = "";
    }
};

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
            <h2  class="text-light d-flex justify-content-start align-items-center ps-3">Ro'yxatga olish</h2> 
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
                        <a href="#" class="nav-link text-white active" aria-current="page">
                            <i class="bi bi-house-door"></i>&nbsp;&nbsp;Registratsiya
                        </a>
                    </li>
                    <li>
                        <a href="ruyxat.php" class="nav-link text-white">
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
        <div class="container-fluid"> <br>
            <form action="" method="post">
                
                <div class="box d-flex justify-content-around">
                    
                    <div class="m-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Familiya</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="" name="familiya">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Ism</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="" name="ism">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Sharif</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="" name="sharif">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Paspurt SR</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="" name="paspurt">
                        </div>
                    </div>
                    <!-- <?php echo $_SESSION; ?> -->
                    <div class="m-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tug'ilgan sana</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1"
                                placeholder="" name="t-date">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Erkak yoki ayol?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" value="Erkak" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Erkak
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" value="Ayol" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Ayol
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Yunalishi</label>
                            <select class="form-select" aria-label="Default select example" name="yunalish">
                                <option selected>Yo'nalish tanlang</option>
                                <option value="Kompyuter savodxonligi">Kompyuter savodxonligi</option>
                                <option value="Web dasturlash">Web dasturlash</option>
                                <option value="IT English">IT English</option>
                                <option value="IT Matematika">IT Matematika</option>
                                <option value="Kibersport">Kibersport</option>
                                <option value="Robototexnika">Robototexnika</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <br>
                            <span>300,000 so'm</span>
                        </div>
                    </div>

                    <div class=" m-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tel nomer</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="" name="tel">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">O'qituvchi</label>
                            <select class="form-select" aria-label="Default select example" name="uqituvchi">
                                <option selected>O'qituvchini tanlang</option>
                                <option value="Shamsiboyev Muxriddin">Shamsiboyev Muxriddin</option>
                                <option value="Muminov Nodir">Muminov Nodir</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <br><button class="btn btn-success" name="submit" type="submit">Yuborish</button>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>


</body>

</html>