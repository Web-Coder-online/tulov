<?php
    include './db/db_con.php';
        // row 1
        // Jami uqigan uquvchilar soni;
        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people`");

            if($pdoStatement->execute()) {
                $row = $pdoStatement->fetch();
                $totalNumberOfStudents = $row['0'];
                    
            };

        // Ayni vaqtda uqiyotgan uquvchilar soni;
        $pdoStatement = $pdo->prepare("SELECT COUNT(`tinglovchiStatusi`) FROM `people` WHERE `tinglovchiStatusi`='O\'qimoqda'");

            if($pdoStatement->execute()) {
                $row = $pdoStatement->fetch();
                $totalNumberOfNowStudents = $row['0'];

                    
            };

        // row 1 end

        // row 2 Web dasturlash start

        // O'qishni tugatganlar

        $pdoStatement = $pdo->prepare("SELECT COUNT(`tinglovchiStatusi`) FROM `people` WHERE `yunalish`='Web dasturlash' AND `tinglovchiStatusi`='Bitirgan'");

        if($pdoStatement->execute()) {
            $row = $pdoStatement->fetch();
            $w_graduated = $row['0'];

                
        };

        // row 2 Web dasturlash

        // O'qishni Hozir o'qiyotganlar

        $pdoStatement = $pdo->prepare("SELECT COUNT(`tinglovchiStatusi`) FROM `people` WHERE `yunalish`='Web dasturlash' AND `tinglovchiStatusi`='O\'qimoqda'");

        if($pdoStatement->execute()) {
            $row = $pdoStatement->fetch();
            $w_reading = $row['0'];
                
        };

        // row 2 Web dasturlash

        // Sertifikat olganlar

        $pdoStatement = $pdo->prepare("SELECT COUNT(`sertifikat`) FROM `people` WHERE `yunalish`='Web dasturlash' AND `sertifikat`='Sertifikat olgan'");

        if($pdoStatement->execute()) {
            $row = $pdoStatement->fetch();
            $w_haveCertificate = $row['0'];

        };

        // row 2 Web dasturlash

        // Sertifikat olishi kerag

        $pdoStatement = $pdo->prepare("SELECT COUNT(`sertifikat`) FROM `people` WHERE `yunalish`='Web dasturlash' AND `sertifikat`='Sertifikat kutmoqda'");

        if($pdoStatement->execute()) {
            $row = $pdoStatement->fetch();
            $w_waitingCertificate = $row['0'];

                
        };

        // row 2 Web dasturlash end


        // row 2 Komp savod start

        // O'qishni tugatganlar

        $pdoStatement = $pdo->prepare("SELECT COUNT(`tinglovchiStatusi`) FROM `people` WHERE `yunalish`='Kompyuter savodxonligi' AND `tinglovchiStatusi`='Bitirgan'");

        if($pdoStatement->execute()) {
            $row = $pdoStatement->fetch();
            $k_graduated = $row['0'];

                
        };

        // row 2 Komp savod

        // O'qishni Hozir o'qiyotganlar

        $pdoStatement = $pdo->prepare("SELECT COUNT(`tinglovchiStatusi`) FROM `people` WHERE `yunalish`='Kompyuter savodxonligi' AND `tinglovchiStatusi`='O\'qimoqda'");

        if($pdoStatement->execute()) {
            $row = $pdoStatement->fetch();
            $k_reading = $row['0'];
                
        };

        // row 2 Komp savod

        // Sertifikat olganlar

        $pdoStatement = $pdo->prepare("SELECT COUNT(`sertifikat`) FROM `people` WHERE `yunalish`='Kompyuter savodxonligi' AND `sertifikat`='Sertifikat olgan'");

        if($pdoStatement->execute()) {
            $row = $pdoStatement->fetch();
            $k_haveCertificate = $row['0'];

        };

        // row 2 Komp savod

        // Sertifikat olishi kerag

        $pdoStatement = $pdo->prepare("SELECT COUNT(`sertifikat`) FROM `people` WHERE `yunalish`='Kompyuter savodxonligi' AND `sertifikat`='Sertifikat kutmoqda'");

        if($pdoStatement->execute()) {
            $row = $pdoStatement->fetch();
            $k_waitingCertificate = $row['0'];

                
        };

        // row 2 Komp savod end 



        // row 2  IT Matematika start

        // O'qishni tugatganlar

        $pdoStatement = $pdo->prepare("SELECT COUNT(`tinglovchiStatusi`) FROM `people` WHERE `yunalish`='IT Matematika' AND `tinglovchiStatusi`='Bitirgan'");

        if($pdoStatement->execute()) {
            $row = $pdoStatement->fetch();
            $m_graduated = $row['0'];

                
        };

        // row 2 IT Matematika

        // O'qishni Hozir o'qiyotganlar

        $pdoStatement = $pdo->prepare("SELECT COUNT(`tinglovchiStatusi`) FROM `people` WHERE `yunalish`='IT Matematika' AND `tinglovchiStatusi`='O\'qimoqda'");

        if($pdoStatement->execute()) {
            $row = $pdoStatement->fetch();
            $m_reading = $row['0'];
                
        };

        // row 2 IT Matematika

        // Sertifikat olganlar

        $pdoStatement = $pdo->prepare("SELECT COUNT(`sertifikat`) FROM `people` WHERE `yunalish`='IT Matematika' AND `sertifikat`='Sertifikat olgan'");

        if($pdoStatement->execute()) {
            $row = $pdoStatement->fetch();
            $m_haveCertificate = $row['0'];

        };

        // row 2 IT Matematika

        // Sertifikat olishi kerag

        $pdoStatement = $pdo->prepare("SELECT COUNT(`sertifikat`) FROM `people` WHERE `yunalish`='IT Matematika' AND `sertifikat`='Sertifikat kutmoqda'");

        if($pdoStatement->execute()) {
            $row = $pdoStatement->fetch();
            $m_waitingCertificate = $row['0'];

                
        };

        // row 2 IT Matematika end 



        // row 3 tulov
        // Jami tulangan summa;
        $pdoStatement = $pdo->prepare("SELECT SUM(`sum`) FROM `summa`");

            if($pdoStatement->execute()) {
                $row=$pdoStatement->fetch(); 
                    // echo var_dump($row);
                    $totalSummma= $row['0'];
            };

        // Joriy oydagi tulov summasi;
        $pdoStatement = $pdo->prepare("SELECT SUM(`sum`) FROM `summa`  WHERE month(`oy`)=month(now())");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();
                // echo $row['sum'] . " <br>";    
            $nowSumma = $row['0'];

                
        // Naqt tulov summasi;
        $pdoStatement = $pdo->prepare("SELECT SUM(`sum`) FROM `summa`  WHERE `click`='Naxt'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();
                // echo $row['sum'] . " <br>";    
            $totalCash = $row['0'];


        // PayME tulov summasi;
        $pdoStatement = $pdo->prepare("SELECT SUM(`sum`) FROM `summa`  WHERE `click`='PayMe'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();
                // echo $row['sum'] . " <br>";    
            $totalPayMe = $row['0'];


        // Bank tulov summasi;
        $pdoStatement = $pdo->prepare("SELECT SUM(`sum`) FROM `summa`  WHERE `click`='Bank'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();
                // echo $row['sum'] . " <br>";    
            $totalBank = $row['0'];


        // Click tulov summasi;
        $pdoStatement = $pdo->prepare("SELECT SUM(`sum`) FROM `summa`  WHERE `click`='Click'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();
                // echo $row['sum'] . " <br>";    
            $totalClick= $row['0'];

        // row 3 tulov end




        // row 4 Raqamlar Web
        // 18 yosh web dasturlash

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE year(`t_sana`) >= 2004 AND `yunalish`='Web dasturlash'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();
                // echo $row['sum'] . " <br>";    
            $w_age18 = $row['0'];

        // 18-30 yosh web dasturlash

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE year(`t_sana`) < 2004 AND `yunalish`='Web dasturlash'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();
                // echo $row['sum'] . " <br>";    
            $w_age18_30 = $row['0'];

        // Ayollar daftari web dasturlash

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE `ijtimoiyStatus`='Ayollar daftari'  AND `yunalish`='Web dasturlash'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();
                // echo $row['sum'] . " <br>";    
            $w_womensNotebook = $row['0'];

        
        // 	Temir daftari web dasturlash

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE `ijtimoiyStatus`='Temir daftar'  AND `yunalish`='Web dasturlash'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();
                // echo $row['sum'] . " <br>";    
            $w_ironNotebook = $row['0'];

        // 	Yoshlar daftari web dasturlash

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE `ijtimoiyStatus`='Yoshlar daftari'  AND `yunalish`='Web dasturlash'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch(); 
            $w_youthNotebook = $row['0'];


        // 	Erkaklar web dasturlash

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE `jins`='Erkak'  AND `yunalish`='Web dasturlash'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();   
            $w_men = $row['0'];


        // 	Ayollar web dasturlash

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE `jins`='Ayol'  AND `yunalish`='Web dasturlash'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();   
            $w_women = $row['0'];

        // row 4 Raqamlar Web end


        // row 4 Raqamlar Komp savod start
        // 18 yosh Komp savod

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE year(`t_sana`) >= 2004 AND `yunalish`='Kompyuter savodxonligi'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();
                // echo $row['sum'] . " <br>";    
            $k_age18 = $row['0'];

        // 18-30 yosh Komp savod

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE year(`t_sana`) < 2004 AND `yunalish`='Kompyuter savodxonligi'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();
                // echo $row['sum'] . " <br>";    
            $k_age18_30 = $row['0'];

        // Ayollar daftari Komp savod

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE `ijtimoiyStatus`='Ayollar daftari'  AND `yunalish`='Kompyuter savodxonligi'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();
                // echo $row['sum'] . " <br>";    
            $k_womensNotebook = $row['0'];

        
        // 	Temir daftari Komp savod

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE `ijtimoiyStatus`='Temir daftar'  AND `yunalish`='Kompyuter savodxonligi'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();
                // echo $row['sum'] . " <br>";    
            $k_ironNotebook = $row['0'];

        // 	Yoshlar daftari Komp savod

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE `ijtimoiyStatus`='Yoshlar daftari'  AND `yunalish`='Kompyuter savodxonligi'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch(); 
            $k_youthNotebook = $row['0'];


        // 	Erkaklar Komp savod

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE `jins`='Erkak'  AND `yunalish`='Kompyuter savodxonligi'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();   
            $k_men = $row['0'];


        // 	Ayollar Komp savod

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE `jins`='Ayol'  AND `yunalish`='Kompyuter savodxonligi'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();   
            $k_women = $row['0'];

        // row 4 Raqamlar Komp end


        // row 4 Raqamlar IT Matematika start
        // 18 yosh IT Matematika

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE year(`t_sana`) >= 2004 AND `yunalish`='IT Matematika'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();
                // echo $row['sum'] . " <br>";    
            $m_age18 = $row['0'];

        // 18-30 yosh IT Matematika

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE year(`t_sana`) < 2004 AND `yunalish`='IT Matematika'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();
                // echo $row['sum'] . " <br>";    
            $m_age18_30 = $row['0'];

        // Ayollar daftari IT Matematika

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE `ijtimoiyStatus`='Ayollar daftari'  AND `yunalish`='IT Matematika'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();
                // echo $row['sum'] . " <br>";    
            $m_womensNotebook = $row['0'];

        
        // 	Temir daftari IT Matematika

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE `ijtimoiyStatus`='Temir daftar'  AND `yunalish`='IT Matematika'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();
                // echo $row['sum'] . " <br>";    
            $m_ironNotebook = $row['0'];

        // 	Yoshlar daftari IT Matematika

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE `ijtimoiyStatus`='Yoshlar daftari'  AND `yunalish`='IT Matematika'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch(); 
            $m_youthNotebook = $row['0'];


        // 	Erkaklar IT Matematika

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE `jins`='Erkak'  AND `yunalish`='IT Matematika'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();   
            $m_men = $row['0'];


        // 	Ayollar IT Matematika

        $pdoStatement = $pdo->prepare("SELECT COUNT(`id`) FROM `people` WHERE `jins`='Ayol'  AND `yunalish`='IT Matematika'");

            $pdoStatement->execute();
            $row=$pdoStatement->fetch();   
            $m_women = $row['0'];

        // row 4 Raqamlar IT Matematika end


        // 30 toshgacha bo'lganlar;
        // row 4 Raqamlar

        


                // $datetime1 = date_create('2017-06-28');
                // $datetime2 = date_create('2017-06-8');
  
                // // calculates the difference between DateTime objects
                // $interval = date_diff($datetime1, $datetime2);
                
                // // printing result in days format
                // echo $interval->format('%R%a days');



                // 30 yoshga tulganni aniqlash

                // $datetime1 = date_create($oy);
                // $datetime2 = new DateTime();

                // // // calculates the difference between DateTime objects
                // $interval = date_diff($datetime1, $datetime2);
                // echo $interval->format('%R%a days') . "   ";

?>


