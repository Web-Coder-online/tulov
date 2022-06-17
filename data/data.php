<?php

    include '../db/db_con.php';

        $id = $_GET['changeid']; 

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
                $ijtimoiyStatus = $row['ijtimoiyStatus'];
                $tinglovchiStatusi = $row['tinglovchiStatusi'];
                $sertifikat = $row['sertifikat'];
                $tel = $row['tel'];
                $uqituvchi = $row['uqituvchi'];

                
            }
        } else {
            print "Qanaqadir xatolik";
            exit;
        };

                
        if(isset($_POST['submit'])){

            $familiya = $_POST['familiya'];
            $ism = $_POST['ism'];
            $sharif = $_POST['sharif'];
            $paspurt = $_POST['paspurt'];
            $t_sana = $_POST['t_sana'];
            $jins = $_POST['flexRadioDefault'];
            $yunalish = $_POST['yunalish'];
            $ijtimoiyStatus = $_POST['ijtimoiyStatus'];
            $tinglovchiStatusi = $_POST['tinglovchiStatusi'];
            $sertifikat = $_POST['sertifikat'];
            $tel = $_POST['tel'];
            $uqituvchi = $_POST['uqituvchi'];

            $pdoStatement = $pdo->prepare("UPDATE  `people` SET id=$id, `familiya`=:familiya, `ism`=:ism, `sharif`=:sharif, `paspurt`=:paspurt , `t_sana`=:tDate, `jins`=:jins, `yunalish`=:yunalish, `ijtimoiyStatus`=:ijtimoiyStatus, `tinglovchiStatusi`=:tinglovchiStatusi, `sertifikat`=:sertifikat, `tel`=:tel, `uqituvchi`=:uqituvchi WHERE id=$id");
            $pdoStatement->bindParam(':familiya', $familiya);
            $pdoStatement->bindParam(':ism', $ism);
            $pdoStatement->bindParam(':sharif', $sharif);
            $pdoStatement->bindParam(':paspurt', $paspurt);
            $pdoStatement->bindParam(':tDate', $t_sana);
            $pdoStatement->bindParam(':jins', $jins);
            $pdoStatement->bindParam(':yunalish', $yunalish);
            $pdoStatement->bindParam(':ijtimoiyStatus', $ijtimoiyStatus);
            $pdoStatement->bindParam(':tinglovchiStatusi', $tinglovchiStatusi);
            $pdoStatement->bindParam(':sertifikat', $sertifikat);
            $pdoStatement->bindParam(':tel', $tel);
            $pdoStatement->bindParam(':uqituvchi', $uqituvchi);
            if($pdoStatement->execute()) {
                print "Ma'lumot o'zgartirildi";
                header("Location: ../ruyxat.php");
            } else {
                print "Qanaqadir xatolik ruy berdi";
            };

            $pdoStatement = $pdo->prepare("UPDATE  `summa` SET id_person=$id, `fam`=:familiya, `ism`=:ism WHERE id_person=$id");
            $pdoStatement->bindParam(':familiya', $familiya);
            $pdoStatement->bindParam(':ism', $ism);
            if($pdoStatement->execute()) {
                print "Ma'lumot o'zgartirildi";
                header("Location: ../ruyxat.php");
            } else {
                print "Qanaqadir xatolik ruy berdi";
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
    <link rel="stylesheet" href="../css/style.css">
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
            <h2 class="text-light d-flex justify-content-start align-items-center ps-3">O'quvchi ma'lumotlarini o'zgartirish</h2>
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
            <div class="row">
                <div class="col-6">
                    <form action="" method="post">
                        <div class="form-control">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Familiya</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="familiya" placeholder="Typeng..." value="<?php echo $familiya; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Ism</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="ism" placeholder="Typeng..." value="<?php echo $ism; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Sharif</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="sharif" placeholder="Typeng..." value="<?php echo $sharif; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Paspurt SR</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="paspurt" placeholder="Typeng..." value="<?php echo $paspurt; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Tug'ilgan sana</label>
                                <input type="date" class="form-control" id="exampleFormControlInput1" name="t_sana" placeholder="Typeng..." value="<?php echo $t_sana; ?>">
                            </div>
                            
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Erkak yoki ayol?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="Erkak" id="flexRadioDefault1" <?php if($jins=="Erkak") echo "checked" ;?>>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Erkak
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="Ayol" id="flexRadioDefault2" <?php if($jins=="Ayol") echo "checked" ;?>>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Ayol
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Yunalishi</label>
                                <select class="form-select" aria-label="Default select example" name="yunalish" value="<?php echo $t_sana; ?>">
                                    <option selected>Yo'nalish tanlang</option>
                                    <option value="Kompyuter savodxonligi" <?php if($yunalish=="Kompyuter savodxonligi") echo "selected=\"selected\"";?>>Kompyuter savodxonligi</option>
                                    <option value="Web dasturlash" <?php if($yunalish=="Web dasturlash") echo "selected=\"selected\"";?>>Web dasturlash</option>
                                    <option value="IT English" <?php if($yunalish=="IT English") echo "selected=\"selected\"";?>>IT English</option>
                                    <option value="IT Matematika" <?php if($yunalish=="IT Matematika") echo "selected=\"selected\"";?>>IT Matematika</option>
                                    <option value="Kibersport" <?php if($yunalish=="Kibersport") echo "selected=\"selected\"";?>>Kibersport</option>
                                    <option value="Robototexnika" <?php if($yunalish=="Robototexnika") echo "selected=\"selected\"";?>>Robototexnika</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label fw-bold">Tel nomer</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="tel" placeholder="Typeng..." value="<?php echo $tel; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Ijtimoiy status</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ijtimoiyStatus" value="Yoshlar daftari" <?php if($ijtimoiyStatus=="Yoshlar daftari") echo "checked" ;?> id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yoshlar daftari
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ijtimoiyStatus" value="Ayollar daftari"<?php if($ijtimoiyStatus=="Ayollar daftari") echo "checked" ;?> id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Ayollar daftari
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ijtimoiyStatus" value="Temir daftar" <?php if($ijtimoiyStatus=="Temir daftar") echo "checked" ;?> id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Temir daftar
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3"> 
                                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Tinglovchi statusi</label>
                                <div class="form-check">
                                    
                                    <input class="form-check-input" type="radio" name="tinglovchiStatusi" value="O'qimoqda" <?php if($tinglovchiStatusi=="O'qimoqda") echo "checked" ;?> id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1" >
                                        O'qimoqda
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tinglovchiStatusi" value="Ketgan" <?php if($tinglovchiStatusi=="Ketgan") echo "checked" ;?> id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Ketgan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tinglovchiStatusi" value="Bitirgan" <?php if($tinglovchiStatusi=="Bitirgan") echo "checked" ;?> id="flexRadioDefault2" >
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Bitirgan
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3"> 
                                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Sertifikat</label>
                                <div class="form-check">
                                    
                                    <input class="form-check-input" type="radio" name="sertifikat" value="Sertifikat olgan" <?php if($sertifikat=="Sertifikat olgan") echo "checked" ;?> id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1" >
                                        Sertifikat olgan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sertifikat" value="Sertifikat kutmoqda" <?php if($sertifikat=="Sertifikat kutmoqda") echo "checked" ;?> id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Sertifikat kutmoqda
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sertifikat" value="Sertifikatsiz" <?php if($sertifikat=="Sertifikatsiz") echo "checked" ;?> id="flexRadioDefault2" >
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Sertifikatsiz
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label fw-bold">O'qituvchi</label>
                                <select class="form-select" aria-label="Default select example" name="uqituvchi">
                                    <option selected>O'qituvchini tanlang</option>
                                    <option value="Shamsiboyev Muxriddin" <?php if($uqituvchi=="Shamsiboyev Muxriddin") echo "selected=\"selected\"";?>>Shamsiboyev Muxriddin</option>
                                    <option value="Muminov Nodir" <?php if($uqituvchi=="Muminov Nodir") echo "selected=\"selected\"";?>>Muminov Nodir</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <br><button class="btn btn-success" name="submit" type="submit">O'zgartirish</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Col-6 End -->
            </div>
        </div>
    </div>


</body>

</html>