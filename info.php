<?php
include './statistika.php';
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
            <h2 class="text-light d-flex justify-content-start align-items-center ps-3">Umumiy statistika</h2> <br> 
        </div>
        <div class="menu">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 100%; min-height:100vh">
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
                        <a href="tulov.php" class="nav-link text-white ">
                            <i class="bi bi-grid-3x3-gap"></i>&nbsp;&nbsp;
                            To'lov
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white active">
                            <i class="bi bi-person-circle"></i>&nbsp;&nbsp;
                            Ma'lumot
                        </a>
                    </li>

                </ul>
                <hr>
            </div>
        </div>
        <div class="container-fluid"
             style="background-color: #e7eaf0;">
            <div class="row mt-4">
                <div class="col-3">
                    <div class="d-flex justify-content-center align-items-center p-4  bg-opacity-15 rounded-3" 
                         style="background-color: #F7C32E35;">
                        <span class="display-6 lh-1 text-warning mb-0 " ><i class="bi bi-code-square"></i></span>
                        <div class="ms-4 h6 fw-normal mb-0">
                            <div class="d-flex">
                                <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="10" data-purecounter-delay="200" data-purecounter-duration="0">
                                   <?php echo $totalNumberOfStudents; ?> 
                                </h5>
                                <span class="mb-0 h5">&nbsp; ta</span>
                            </div>
                            <p class="mb-0">Jami ro'yxatdan o'tganlar</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-center align-items-center p-4 bg-blue bg-opacity-10 rounded-3"
                         style="background-color: #1D3B531A;">
                        <span class="display-6 lh-1 text-blue mb-0"><i class="bi bi-laptop"></i></span>
                        <div class="ms-4 h6 fw-normal mb-0">
                            <div class="d-flex">
                                <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="200" data-purecounter-delay="200" data-purecounter-duration="0">
                                    <?php echo $totalNumberOfNowStudents; ?>
                                </h5>
                                <span class="mb-0 h5">&nbsp; ta</span>
                            </div>
                            <p class="mb-0">Ayni vaqtda o'qiyotganlar</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-center align-items-center p-4  bg-opacity-10 rounded-3"
                         style="background-color: #6F42C11A;">
                        <span class="display-6 lh-1 text-purple mb-0"
                              style="color: #7952B3"><i class="bi bi-type"></i></span>
                        <div class="ms-4 h6 fw-normal mb-0">
                            <div class="d-flex">
                                <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="60" data-purecounter-delay="200" data-purecounter-duration="0">60</h5>
                                <span class="mb-0 h5">K+</span>
                            </div>
                            <p class="mb-0">30 Yoshgacha bo'lganlar</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-center align-items-center p-4 bg-info bg-opacity-10 rounded-3"
                         style="">
                        <span class="display-6 lh-1 text-info mb-0"><i class="bi bi-calculator-fill"></i></i></span>
                        <div class="ms-4 h6 fw-normal mb-0">
                            <div class="d-flex">
                                <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="6" data-purecounter-delay="300" data-purecounter-duration="0">6</h5>
                                <span class="mb-0 h5">K+</span>
                            </div>
                            <p class="mb-0">IT Matematika</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-start align-items-center mt-5">

                <div class="col-4">
                    <div class="card-body ps-4 bg-light ">
                        <h5 ><i class="bi bi-globe"></i> Web dasturlash</h5>
                        <small class="text-muted">2022.06.01 dan </small>&nbsp;~&nbsp;&nbsp; 
                        <small class="text-muted"><?php echo date("Y.m.d") . " gacha";?></small> <br> <br>
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-info"><i class="bi bi-person-check-fill text-primary display-"></i>&nbsp;  O'qishni tugatganlar</p>
                            <p class="fw-bold"><?php echo $w_graduated;?></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-info"><i class="bi bi-person-plus-fill text-warning"></i>&nbsp; Hozir o'qiyotganlar</p>
                            <p class="fw-bold"><?php echo $w_reading; ?></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-info"><i class="bi bi-patch-check-fill text-success"></i>&nbsp; Sertifikat olganlar</p>
                            <p class="fw-bold"><?php echo $w_haveCertificate; ?></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center ">
                            <p class="text-info"><i class="bi bi-patch-exclamation-fill text-danger"></i>&nbsp; Sertifikat olishi keraglar</p>
                            <p class="fw-bold"><?php echo $w_waitingCertificate; ?></p>
                        </div>
                        
                    </div>
                </div>

                <div class="col-4">
                    <div class="card-body ps-4 bg-light">
                        <h5 ><i class="bi bi-laptop-fill"></i> Kompyuter savodxonligi</h5>
                        <small class="text-muted">2022.06.01 dan </small>&nbsp;~&nbsp;&nbsp; 
                        <small class="text-muted"><?php echo date("Y.m.d") . " gacha";?></small> <br> <br>
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-info"><i class="bi bi-person-check-fill text-primary display-"></i>&nbsp;  O'qishni tugatganlar</p>
                            <p class="fw-bold"><?php echo $k_graduated;?></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-info"><i class="bi bi-person-plus-fill text-warning"></i>&nbsp; Hozir o'qiyotganlar</p>
                            <p class="fw-bold"><?php echo $k_reading; ?></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-info"><i class="bi bi-patch-check-fill text-success"></i>&nbsp; Sertifikat olganlar</p>
                            <p class="fw-bold"><?php echo $k_haveCertificate; ?></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center ">
                            <p class="text-info"><i class="bi bi-patch-exclamation-fill text-danger"></i>&nbsp; Sertifikat olishi keraglar</p>
                            <p class="fw-bold"><?php echo $k_waitingCertificate; ?></p>
                        </div>
                        
                    </div>
                </div>

                <div class="col-4">
                    <div class="card-body ps-4 bg-light">
                        <h5 ><i class="bi bi-calculator-fill"></i> IT Matematika</h5>
                        <small class="text-muted">2022.06.01 dan </small>&nbsp;~&nbsp;&nbsp; 
                        <small class="text-muted"><?php echo date("Y.m.d") . " gacha";?></small> <br> <br>
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-info"><i class="bi bi-person-check-fill text-primary display-"></i>&nbsp;  O'qishni tugatganlar</p>
                            <p class="fw-bold"><?php echo $m_graduated;?></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-info"><i class="bi bi-person-plus-fill text-warning"></i>&nbsp; Hozir o'qiyotganlar</p>
                            <p class="fw-bold"><?php echo $m_reading; ?></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-info"><i class="bi bi-patch-check-fill text-success"></i>&nbsp; Sertifikat olganlar</p>
                            <p class="fw-bold"><?php echo $m_haveCertificate; ?></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center ">
                            <p class="text-info"><i class="bi bi-patch-exclamation-fill text-danger"></i>&nbsp; Sertifikat olishi keraglar</p>
                            <p class="fw-bold"><?php echo $m_waitingCertificate; ?></p>
                        </div>
                        
                    </div>
                </div>

                
            </div>

            <div class="row mt-5">
                <div class="col-6">
                    <div class="card-body bg-light">
                        <h4 class="header-title mb-3">To'lovlar</h4>

                        <div class="chart-content-bg">
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <p class="text-muted mb-0 mt-3">Hamma Oylar</p>
                                    <h2 class="fw-normal mb-3">
                                        <span><?php echo number_format($totalSummma);?> so'm </span>
                                    </h2>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-muted mb-0 mt-3">Joriy Oy</p>
                                    <h2 class="fw-normal mb-3">
                                        <span><?php echo number_format($nowSumma);?> so'm</span>
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <div dir="ltr">
                            <div id="dash-revenue-chart" class="apex-charts" data-colors="#42d29d,#44badc"></div>
                        </div>

                    </div>
                </div>

                <div class="col-6">
                <div class="card-body bg-light">
                        <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                            </div>
                        </div>

                        <h4 class="header-title mb-1">To'lov turi</h4>

                        <div id="dash-campaigns-chart" class="apex-charts" data-colors="#42d29d,#ffa866,#44badc"></div>

                        <div class="row text-center mt-2">
                            <div class="col-md-4">
                                <i class="mdi mdi-send widget-icon rounded-circle bg-light-lighten text-muted"></i>
                                <h3 class="fw-normal mt-3">
                                    <span><?php echo number_format($totalBank);?></span>
                                </h3>
                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Bank</p>
                            </div>
                            <div class="col-md-4">
                                <i class="mdi mdi-flag-variant widget-icon rounded-circle bg-light-lighten text-muted"></i>
                                <h3 class="fw-normal mt-3">
                                    <span><?php echo number_format($totalPayMe);?></span>
                                </h3>
                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> PayMe</p>
                            </div>
                            <div class="col-md-4">
                                <i class="mdi mdi-email-open widget-icon rounded-circle bg-light-lighten text-muted"></i>
                                <h3 class="fw-normal mt-3">
                                    <span><?php echo number_format($totalCash);?></span>
                                </h3>
                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> Naxt</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    <div class="card card-table">
                        <div class="card-body table-responsive">
                        <h4 class="header-title mb-1">Raqamlarda</h4> <br>
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th >Yo'nalish</th>
                                    <th >18 - yoshgacha</th>
                                    <th >18-30 yoshgacha</th>
                                    <th class="text-success">Yoshlar daftari</th>
                                    <th class="text-info">Ayollar daftari</th>
                                    <th class="text-warning">Temir daftar </th>
                                    <th class="text-primary">Erkak</th>
                                    <th class="text-danger">Ayol</th>
                                </tr>
                            </thead>
                            <tbody class="no-border-x">
                                <tr>
                                    <td >Web dasturlash</td>
                                    <td><?php echo $w_age18;?></td>
                                    <td><?php echo $w_age18_30;?></td>
                                    <td><?php echo $w_youthNotebook; ?></td>
                                    <td><?php echo $w_womensNotebook; ?></td>
                                    <td><?php echo $w_ironNotebook; ?></td>
                                    <td><?php echo $w_men; ?></td>
                                    <td><?php echo $w_women; ?></td>
                                </tr>
                                <tr>
                                    <td>Kompyuter savodxonligi</td>
                                    <td><?php echo $k_age18;?></td>
                                    <td><?php echo $k_age18_30;?></td>
                                    <td><?php echo $k_youthNotebook; ?></td>
                                    <td><?php echo $k_womensNotebook; ?></td>
                                    <td><?php echo $k_ironNotebook; ?></td>
                                    <td><?php echo $k_men; ?></td>
                                    <td><?php echo $k_women; ?></td>
                                </tr>
                                <tr>
                                    <td>IT Matematika</td>
                                    <td><?php echo $m_age18;?></td>
                                    <td><?php echo $m_age18_30;?></td>
                                    <td><?php echo $m_youthNotebook; ?></td>
                                    <td><?php echo $m_womensNotebook; ?></td>
                                    <td><?php echo $m_ironNotebook; ?></td>
                                    <td><?php echo $m_men; ?></td>
                                    <td><?php echo $m_women; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>


</body>

</html>