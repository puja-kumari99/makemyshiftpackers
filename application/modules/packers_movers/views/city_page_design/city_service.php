<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>


<div class="container">
<div class="row g-4 mt-5 mb-4">
    <!-- Home Shifting -->
    <div class="col-md-6 col-lg-3 d-flex">
        <div class="pm-city-srv-card w-100 d-flex flex-column">
            <div class="pm-city-srv-icon-wrap">
                <img src="<?= base_url('assets/img/services_modules/home-shifting-services.webp') ?>" alt="Home Shifting in <?= $city ?>" onerror="this.src='<?= base_url('assets/img/about/packers_movers.jpg') ?>'">
            </div>
            <div class="pm-city-srv-title">Home Shifting<br>in <?= $city ?></div>
            <div class="pm-city-srv-desc flex-grow-1">A hassle-free solution for relocating your home in <?= $city ?>, ensuring safe packing, loading, and transport of your belongings to your new location from <?= $city ?>, while minimizing stress and effort.</div>
            <a href="<?= site_url('home-shifting-in-'.$ctlink) ?>" class="pm-city-srv-link mt-auto">Read more home shifting..</a>
        </div>
    </div>
    
    <!-- Office Shifting -->
    <div class="col-md-6 col-lg-3 d-flex">
        <div class="pm-city-srv-card w-100 d-flex flex-column">
            <div class="pm-city-srv-icon-wrap">
                <img src="<?= base_url('assets/img/services_modules/office-relocation-services.webp') ?>" alt="Office Shifting in <?= $city ?>" onerror="this.src='<?= base_url('assets/img/about/packers_movers.jpg') ?>'">
            </div>
            <div class="pm-city-srv-title">Office Shifting<br>in <?= $city ?></div>
            <div class="pm-city-srv-desc flex-grow-1">A comprehensive service for relocating offices, ensuring the safe and efficient transport of office equipment, furniture, and documents.</div>
            <a href="<?= site_url('office-shifting-in-'.$ctlink) ?>" class="pm-city-srv-link mt-auto">Read more office shifting..</a>
        </div>
    </div>
    
    <!-- Car Shifting -->
    <div class="col-md-6 col-lg-3 d-flex">
        <div class="pm-city-srv-card w-100 d-flex flex-column">
            <div class="pm-city-srv-icon-wrap">
                <img src="<?= base_url('assets/img/services_modules/car-transportation-services.webp') ?>" alt="Car Shifting in <?= $city ?>" onerror="this.src='<?= base_url('assets/img/about/packers_movers.jpg') ?>'">
            </div>
            <div class="pm-city-srv-title">Car Shifting<br>in <?= $city ?></div>
            <div class="pm-city-srv-desc flex-grow-1"><?= $city ?> <?= htmlspecialchars($company3) ?> Professional car relocation service offering secure transport of vehicles, either through dedicated car carriers or enclosed trailers, ensuring your car is safely delivered from <?= $city ?> to the new location.</div>
            <a href="<?= site_url('car-transport-in-'.$ctlink) ?>" class="pm-city-srv-link mt-auto">Read more car transport..</a>
        </div>
    </div>
    
    <!-- Bike Shifting -->
    <div class="col-md-6 col-lg-3 d-flex">
        <div class="pm-city-srv-card w-100 d-flex flex-column">
            <div class="pm-city-srv-icon-wrap">
                <img src="<?= base_url('assets/img/services_modules/bike-transportation-services.webp') ?>" alt="Bike Shifting in <?= $city ?>" onerror="this.src='<?= base_url('assets/img/about/packers_movers.jpg') ?>'">
            </div>
            <div class="pm-city-srv-title">Bike Shifting<br>in <?= $city ?></div>
            <div class="pm-city-srv-desc flex-grow-1">Specialized service designed for safe and secure transport of bikes, using protective packaging and experienced handling to ensure your two-wheeler reaches its destination without damage from <?= $city ?>.</div>
            <a href="<?= site_url('bike-transport-in-'.$ctlink) ?>" class="pm-city-srv-link mt-auto">Read more bike transport..</a>
        </div>
    </div>
</div>
</div>