@extends('layouts.main')
@section('title','Layanan Kami')

@section('content')
  <!-- Page hero (same header style as Tentang) -->
  <section class="page-hero" style="background-image:url('{{ asset('assets/images/jmbt.jpg') }}'); background-position:center;">
    <div class="page-hero__overlay">
      <h1>LAYANAN KAMI</h1>
    </div>
  </section>

  <section class="section">
    <div class="services-grid services-grid--large">
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
        <div class="service-card service-card--elevated">
          <img src="{{ asset($s['img']) }}" alt="{{ $s['text'] }}">
          <div class="service-card__overlay"></div>
          <div class="service-card__title">{{ $s['text'] }}</div>
        </div>
      @endforeach
    </div>
  </section>

  <section class="section">
    <div class="cta-row">
      <a href="{{ url('/hubungi-kami') }}" class="btn-gradient">KONSULTASI GRATIS</a>
      <a href="{{ url('/artikel') }}" class="btn-outline-pill btn-outline-pill--primary">BACA ARTIKEL</a>
    </div>
  </section>
@endsection
