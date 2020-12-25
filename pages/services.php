<?php



include "header.php";


echo <<<HTML

<section class="service">
    <div class="container">
        <div class="service__wrapper">

           <a href="#">
            <div class="service__item">
               
                <img src="../img/service/audit-it.png" alt="audit it-infrasrukturi" class="service__img">
           
            <h2 class="service__title">Аудит IT-Инфраструктуры</h2>
        </div>
        </a>
        <a href="#">
            <div class="service__item">
               
                <img src="../img/service/audit-ib.png" alt="audit-ib" class="service__img">
           
            <h2 class="service__title">Аудит информационной безопасности
            </h2>
        </div>
        </a>
        <a href="#">
            <div class="service__item">
               
                <img src="../img/service/obslujivanie-serverov.jpg" alt="obslujivanie-serverov" class="service__img">
           
            <h2 class="service__title">Гарантийное обслуживание серверов
            </h2>
        </div>
        </a>

        <a href="#">
            <div class="service__item">
               
                <img src="../img/service/konsultirovanie.jpg" alt="konsultirovanie" class="service__img">
           
            <h2 class="service__title">Консультирование
            </h2>
        </div>
        </a>

        
        <a href="#">
            <div class="service__item">
               
                <img src="../img/service/proektirovka.jpg" alt="proektirovka" class="service__img">
           
            <h2 class="service__title">Проэктирование, монтаж, пусконаладка
            </h2>
        </div>
        </a>

        <a href="#">
            <div class="service__item">
               
                <img src="../img/service/service.jpg" alt="proektirovka" class="service__img">
           
            <h2 class="service__title">Сервис негарантийного и снятого с  производства оборудования
            </h2>
        </div>
        </a>
         
        </div>
    </div>
    

</section>



HTML;



    include "footer.php"; 
    
    
?>