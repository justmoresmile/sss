<?php



include "header.php";


echo <<<HTML

<section class="ib">
	<div class="container">
		<h2 class="ib__title">
			Комплексные меры информационной безопасности
		</h2>

		<div class="ib__wrapper">

		<a href="mdm.php">
			<div class="ib__item">
				<div>
					<img src="../img/decisions/mdm.png" alt="Mobile_device_management" class="ib__img">
				</div>
				<h2 class="ib__subtitle">	
					Централизованные системы управления мобильными устройствами
				</h2>
			</div>
		</a>

		<a href="dlp.php">
			<div class="ib__item">
				<div>
					<img src="../img/decisions/dlp.png" alt="DLP" class="ib__img">
				</div>
				<h2 class="ib__subtitle">	
					Системы предотвращения утечки информации
				</h2>
			</div>
		</a>

		<a href="antivirusnaya-zashita.php">
			<div class="ib__item">
				<div>
					<img src="../img/decisions/antivirusnaya-zaschita.webp" alt="antivirusnaya-zaschita" class="ib__img">
				</div>
				<h2 class="ib__subtitle">	
					Антивирусная защита
				</h2>
			</div>
		</a>

		<a href="me.php">
			<div class="ib__item">
				<div>
					<img src="../img/decisions/ME.jpg" alt="Mejsetevoe_ekranirovanie" class="ib__img">
				</div>
				<h2 class="ib__subtitle">	
					Межсетевое экранирование
				</h2>
			</div>
		</a>

		<a href="ids-ips.php">
			<div class="ib__item">
				<div>
					<img src="../img/decisions/ips-ids.jpg" alt="IDS/IPS" class="ib__img">
				</div>
				<h2 class="ib__subtitle">	
					IDS/IPS – предотвращение вторжений
				</h2>
			</div>
		</a>

		<a href="szi-ot-nsd.php">
			<div class="ib__item">
				<div>
					<img src="../img/decisions/NSD.jpg" alt="NSD" class="ib__img">
				</div>
				<h2 class="ib__subtitle">	
					Средства защиты от НСД
				</h2>
			</div>
		</a>

		<a href="zashita-informacii.php">
			<div class="ib__item">
				<div>
					<img src="../img/decisions/shifrovanie_dannih.jpg" alt="shifrovanie_dannih" class="ib__img">
				</div>
				<h2 class="ib__subtitle">	
					Системы криптографической защиты информации и каналов связи
				</h2>
			</div>
		</a>

		<a href="siem.php">
			<div class="ib__item">
				<div>
					<img src="../img/decisions/siem.png" alt="siem" class="ib__img">
				</div>
				<h2 class="ib__subtitle">	
					SIEM и центры мониторинга информационной безопасности
				</h2>
			</div>
		</a>
			
			



		</div>
	</div>
</section>


HTML;



	include "footer.php"; 
	
	
?>