<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?= base_url(); ?>dashboard">
        <img src="<?= base_url(); ?>assets/fe/assets/img/logo.png" style="height: 40px; object-fit: cover;" alt="">
      </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="<?= base_url(); ?>dashboard">
        <img src="<?= base_url(); ?>assets/fe/assets/img/logo_only.png" style="height: 40px; object-fit: cover;" alt="">
      </a>
    </div>
    <ul class="sidebar-menu mt-3">
      <li class="menu-header">Dashboard</li>
      <li class="<?= $this->uri->segment(1) == 'dashboard' ? 'active' : ''; ?>">
        <a href="<?= base_url() ?>dashboard" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      </li>
      <li class="menu-header">Master</li>
      <li class="<?= $this->uri->segment(1) == 'penyakit' ? 'active' : ''; ?>">
        <a href="<?= base_url() ?>penyakit" class="nav-link"><i class="fas fa-stethoscope"></i><span>Daftar Penyakit</span></a>
      </li>
      <li class="<?= $this->uri->segment(1) == 'gejala' ? 'active' : ''; ?>">
        <a href="<?= base_url() ?>gejala" class="nav-link"><i class="fas fa-temperature-high"></i><span>Daftar Gejala</span></a>
      </li>
      <li class="menu-header">Options</li>
      <li class="<?= $this->uri->segment(1) == 'rule' ? 'active' : ''; ?>">
        <a href="<?= base_url() ?>rule" class="nav-link"><i class="fas fa-cogs"></i><span>Rule Penyakit</span></a>
      </li>
      <li class="<?= $this->uri->segment(1) == 'matriks' ? 'active' : ''; ?>">
        <a href="<?= base_url() ?>matriks" class="nav-link"><i class="fas fa-square-root-alt"></i><span>Matriks AHP</span></a>
      </li>
      <li class="<?= $this->uri->segment(1) == 'laporan' ? 'active' : ''; ?>">
        <a href="<?= base_url() ?>laporan" class="nav-link"><i class="fas fa-file-alt"></i><span>Riwayat Diagnosis</span></a>
      </li>
      <li class="menu-header">Miscellaneous</li>
      <li class="<?= $this->uri->segment(1) == 'pasien' ? 'active' : ''; ?>">
        <a href="<?= base_url() ?>pasien" class="nav-link"><i class="fas fa-users"></i><span>Daftar Pengguna</span></a>
      </li>
      <li class="<?= $this->uri->segment(1) == 'admin' ? 'active' : ''; ?>">
        <a href="<?= base_url() ?>admin" class="nav-link"><i class="fas fa-users-cog"></i><span>Daftar Admin</span></a>
      </li>
    </ul>
  </aside>
</div>