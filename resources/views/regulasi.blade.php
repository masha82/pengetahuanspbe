@extends('layouts.master')
@section('title')
    <title>Regulasi SPBE</title>
@endsection

@section('content')
<section>
    <div class="content-wrap p-0 mb-4">
    <div>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Regulasi</li>
        </ol>
      </nav></div>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading1">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
              Peraturan Presiden
            </button>
          </h2>
          <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <a href="#">Nomor 95 Tahun 2018 Tentang SPBE</a><br>
                    <a href="#">Nomor 39 Tahun 2019 Tentang Satu Data Indonesia </a><br>
                    <a href="#">Nomor 132 Tahun 2022 Tentang Arsitektur SPBE Nasional</a><br>
                </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                Peraturan Menteri
            </button>
          </h2>
          <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <a href="#">PAN RB Nomor 5 Tahun 2020 Tentang Manajemen Risiko SPBE</a><br>
                    <a href="#">Bappenas/PPN Nomor 16 Tahun 2020 Tentang Manajemen Data SPBE</a><br>
                    <a href="#">PAN RB Nomor 59 Tahun 2020 Tentang Pemantauan dan Evaluasi SPBE</a><br>
                    <a href="#">BSSN Nomor 4 Tahun 2021 Tentang Manajemen Keamanan SPBE</a><br>
                </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-heading3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                Keputusan Menteri
            </button>
          </h2>
          <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <a href="#">PAN RB Nomor 962 Tahun 2021 Tentang Pedoman Teknis Pelaksanaan Pemantauan dan Evaluasi SPBE</a><br>
                    <a href="#">PAN RB Nomor 1503 Tahun 2021 Tentang Hasil Evaluasi SPBE Pada Kementerian, Lembaga dan Pemerintah Daerah Tahun 2021</a><br>
                    <a href="#">PAN RB Nomor 108 Tahun 2023 Tentang Hasil Pemantauan dan Evaluasi SPBE Pada Instansi Pusat dan Pemerintah Daerah Tahun 2022</a><br>
                </div>          
           </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading4">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                Surat Edaran Menteri
              </button>
            </h2>
            <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                      <a href="#">PAN RB Nomor 18 Tahun 2022 Tentang Keterpaduan Layanan Digital Nasional Melalui Penerapan Arsitektur SPBE dan Peta Rencana SPBE</a><br>
                  </div>          
             </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading5">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                  Peraturan Bupati Situbondo
              </button>
            </h2>
            <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                      <a href="#">Nomor 49 Tahun 2022 Tentang Penyelenggaraan Sistem Pemerintahan Berbasis Elektronik Di Lingkungan Pemerintah Kabupaten Situbondo</a><br>
                      <a href="#">Nomor 51 Tahun 2022 Tentang Rencana Induk Dan Arsitektur Sistem Pemerintahan Berbasis Elektronik Di Lingkungan Pemerintah Kabupaten Situbondo</a><br>
                  </div>          
             </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading6">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                  Keputusan Bupati Situbondo
              </button>
            </h2>
            <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                      <a href="#">Nomor 49 Tahun 2022 Tentang Penyelenggaraan Sistem Pemerintahan Berbasis Elektronik Di Lingkungan Pemerintah Kabupaten Situbondo</a><br>
                      <a href="#">Nomor 51 Tahun 2022 Tentang Rencana Induk Dan Arsitektur Sistem Pemerintahan Berbasis Elektronik Di Lingkungan Pemerintah Kabupaten Situbondo</a><br>
                  </div>          
             </div>
          </div>
      </div>
    </div>
</section>

@endsection