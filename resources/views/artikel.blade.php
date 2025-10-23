@extends('layouts.main')
@section('title','Artikel')

@section('content')
  <!-- Page hero -->
  <section class="page-hero" style="background-image:url('{{ asset('assets/images/picgedung.png') }}')">
    <div class="page-hero__overlay">
      <h1>ARTIKEL TERBARU</h1>
    </div>
  </section>

  <section class="section">
    <div class="articles-grid">
      @php
        $posts = [
          ['img'=>'assets/images/studijerman.png','title'=>'5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman'],
          ['img'=>'assets/images/tupai.png','title'=>'Uni Eropa Menghadapi Virus Korona'],
          ['img'=>'assets/images/bahasajerman.png','title'=>'Belajar Bahasa Jerman Bersama Goethe Insitut'],
          ['img'=>'assets/images/gatescambride.png','title'=>'Apa Itu Gates Cambridge? Yuk Cari Tahu'],
          ['img'=>'assets/images/chinatown.png','title'=>'Tips Persiapan Dokumen Beasiswa'],
          ['img'=>'assets/images/kursus.png','title'=>'Panduan Visa Pelajar Eropa'],
        ];
      @endphp
      @foreach($posts as $p)
        <article class="article-card article-card--list">
          <img src="{{ asset($p['img']) }}" alt="{{ $p['title'] }}">
          <div class="article-card__body">
            <h3 class="article-card__title">{{ $p['title'] }}</h3>
            <a href="#" class="btn-outline-pill btn-outline-pill--primary">BACA</a>
          </div>
        </article>
      @endforeach
    </div>

    <div class="mt-32" style="text-align:center">
      <a href="#" class="btn-outline-pill btn-outline-pill--primary">ARTIKEL LAINNYA</a>
    </div>
  </section>
@endsection
