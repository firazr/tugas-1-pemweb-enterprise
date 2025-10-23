@extends('layouts.main')
@section('title','Beranda')

@section('content')
  <!-- HERO -->
  <section class="hero" style="background-image:url('{{ asset('assets/images/picgedung.png') }}');">
    <div class="hero-overlay">
      <h1>INGIN KULIAH DAN BERKARIR DI LUAR NEGERI?</h1>
      <a href="#tentang" class="btn-outline-pill">SELENGKAPNYA</a>
    </div>
  </section>

  <!-- TENTANG KAMI -->
  <section class="section section--narrow" id="tentang">
    <h2 class="section-title">TENTANG KAMI</h2>
    <p class="section-lead">
      INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah
      memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah,
      perjalanan wisata, dan berkarir di negara maju di dunia.
    </p>
    <hr class="divider">
  </section>

  <!-- LAYANAN KAMI -->
  <section class="section" id="layanan">
    <h2 class="section-title">LAYANAN KAMI</h2>
    <div class="services-grid">
      @php
        $services = [
          ['img'=>'assets/images/bachelor.png','text'=>'Studi S1 - Bachelor'],
          ['img'=>'assets/images/master.png','text'=>'Studi S2 - Master'],
          ['img'=>'assets/images/phd.jpg','text'=>'Studi S3 - Ph.D'],
          ['img'=>'assets/images/kursus.png','text'=>'Kursus Bahasa Asing'],
          ['img'=>'assets/images/studytour.png','text'=>'Study Tour'],
          ['img'=>'assets/images/ausbildung.jpg','text'=>'Ausbildung'],
        ];
      @endphp
      @foreach($services as $s)
      <div class="service-card">
        <img src="{{ asset($s['img']) }}" alt="{{ $s['text'] }}">
        <div class="service-card__overlay"></div>
        <div class="service-card__title">{{ $s['text'] }}</div>
      </div>
      @endforeach
    </div>
  </section>

  <!-- MITRA KAMI -->
  <section class="section" id="mitra">
    <h2 class="section-title">MITRA KAMI</h2>
    <div class="partners-row">
      @php
        $partners = [
          'assets/images/aviation.jpg',
          'assets/images/adrew.png',
          'assets/images/htw.png',
          'assets/images/studygroup.png',
        ];
      @endphp
      @foreach($partners as $p)
        <div class="partner-card">
          <img src="{{ asset($p) }}" alt="Partner">
        </div>
      @endforeach
    </div>

    <div class="consult-banner">
      <div>
        <div class="consult-text">GRATIS KONSELING STUDI DI LUAR NEGERI !!!</div>
        <div class="consult-subtext">Konsultasi seputar kuliah / bekerja di Luar Negeri</div>
      </div>
      <a href="#hubungi" class="btn-outline-pill btn-outline-pill--light">MULAI KONSULTASI ▾</a>
    </div>
  </section>

  <!-- ARTIKEL TERBARU -->
  <section class="section" id="artikel">
    <h2 class="section-title">ARTIKEL TERBARU</h2>
    <div class="articles-grid">
      @php
        $posts = [
          ['img'=>'assets/images/studijerman.png','title'=>'5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman'],
          ['img'=>'assets/images/korona.png','title'=>'Uni Eropa Menghadapi Virus Korona'],
          ['img'=>'assets/images/bahasajerman.png','title'=>'Belajar Bahasa Jerman Bersama Goethe Insitut'],
          ['img'=>'assets/images/gatescambride.png','title'=>'Apa Itu Gates Cambridge? Yuk Cari Tahu'],
        ];
      @endphp
      @foreach($posts as $post)
      <div class="article-card">
        <img src="{{ asset($post['img']) }}" alt="{{ $post['title'] }}">
        <p>{{ $post['title'] }}</p>
      </div>
      @endforeach
    </div>
    <a href="#" class="btn-outline-pill btn-outline-pill--primary mt-32">ARTIKEL LAINNYA</a>
  </section>

  <!-- HUBUNGI KAMI -->
  <section class="section" id="hubungi">
    <h2 class="section-title">HUBUNGI KAMI</h2>
    <h3 class="section-subtitle">KANTOR PUSAT</h3>
    <p class="section-lead">Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
    <p class="section-lead">Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
    <p class="section-lead">Hotline: +6281519040071 / +62811998167</p>

    <div class="cta-row">
      <a href="#" class="btn-gradient">LOKASI KAMI</a>
      <a href="#" class="btn-outline-pill btn-outline-pill--primary">KIRIM PESAN</a>
    </div>
  </section>
@endsection
