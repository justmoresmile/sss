<?php



include "header.php";


echo <<<HTML
  
<section class='decisions'>
    <div class="container">
        <div class="decisions__wrapper">
       
            <a href="informacionnaya-bezopasnost.php">
                
                <div class="decisions__item">
                    <img src="../img/decisions/informacionnaya-bezopasnost.jpg" alt="informacionnaya-bezopasnost" class="decisions__img">
                    <h2 class="decisions__title">Информационная безопасность</h2>
                </div>

            </a>
            <a href="osnashenie-conferenc-zalov.php">
                
                <div class="decisions__item">
                    <img src="../img/decisions/osnashenie-konferenc-zalov.jpg" alt="osnashenie-konferenc-zalov" class="decisions__img">
                    <h2 class="decisions__title">Оснащение конференц-залов  и переговорных</h2>
                </div>

            </a>
                  
            <a href="it-infrastruktura.php">
                <div class="decisions__item">
                    <img src="../img/decisions/it-infrastruktura.png" alt="it-infrastruktura" class="decisions__img">
                    <h2 class="decisions__title">IT Инфраструктура</h2>
                </div>

            </a>
                    
            <a href="videonabludenie.php"><div class="decisions__item">
                <img src="../img/decisions/videonabludenie.jpg" alt="videonabludenie" class="decisions__img">
                <h2 class="decisions__title">Видеонаблюдение</h2>
            </div>
        
            </a>

            <a href="autsorsing.php"><div class="decisions__item">
                <img src="../img/decisions/autsorsing.jpg" alt="autsorsing" class="decisions__img">
                <h2 class="decisions__title">Сервисное сопровождение,  аутсорсинг</h2>
            </div>
        
            </a>

            <a href="postavka.php"><div class="decisions__item">
                <img src="../img/decisions/postavka-oborudovaniya-i-po.jpg" alt="postavka-oborudovaniya-i-po" class="decisions__img">
                <h2 class="decisions__title">Поставка оборудования, ПО  и расходных материалов</h2>
            </div>
        
            </a>

            <a href="#"><div class="decisions__item">
                <img src="../img/decisions/kabelnie-sistemi.jpg" alt="kabelnie-sistemi" class="decisions__img">
                <h2 class="decisions__title">Структурированные кабельные системы</h2>
            </div>
        
            </a>
            

              
        </div>
    </div>
</section>

HTML;



    include "footer.php"; 
    
    
?>