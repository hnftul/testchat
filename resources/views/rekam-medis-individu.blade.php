<!DOCTYPE html>
<head>
    <title>::Rekam Medis::</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">        
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <script src="js/bootstrap.min.js"></script>
</head>

@extends('layouts.master')
<body class="bg-purple">
    <div class="page-section bg-purple">
        <div class="container">
            <div class="rekmed">
                <div class="box-rekmed">
                    <div class="kolom-profil">
                        <div class="card-profil"> 
                            <div class="foto-profil">
                            <img src="{{url('/images/profil-2.png')}}"/>   
                            </div>
                            <div class="main-inf">
                                <h5>{{ Auth::user()->name }}</h5>
                                <p>{{ Auth::user()->id_pasien }}</p>
                            </div>
                            <div class="kotak-dua">
                                <div class="kotak-dalam float-left">
                                    <h5>Jenis Kelamin</h5>
                                    <p>{{ Auth::user()->jenis_kelamin }}</p>
                                </div>
                                <div class="kotak-dalam float-right">
                                    <h5>Umur</h5>
                                    <p>{{ Auth::user()->umur }}</p>
                                </div>
                            </div>
                            <div class="kotak-info">
                                <div class="info-pasien">
                                    <h5>No. BPJS</h5>
                                    <p>{{ Auth::user()->no_bpjs }}</p>
                                </div>
                                <div class="info-pasien">
                                    <h5>Golongan Darah</h5>
                                    <p>{{ Auth::user()->goldar }}</p>
                                </div>
                                <div class="info-pasien">
                                    <h5>Fakultas/Departemen</h5>
                                    <p>{{ Auth::user()->fakultas }} / {{ Auth::user()->mayor }}</p>
                                </div>
                                <div class="info-pasien">
                                    <h5>Alamat</h5>
                                    <p>{{ Auth::user()->alamat }}</p>
                                </div>
                                <div class="info-pasien">
                                    <h5>No. HP</h5>
                                    <p>{{ Auth::user()->no_hp }}</p>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="kolom-rekmed">
                        <div class="card-rekmed">
                            <div class="pemeriksa">
                                <div class="tanggal-periksa float-left">
                                    <img src="{{url('/images/kalender.png')}}"class="float-left margin-icon"> 
                                    <p>Selasa, 4 September 2021</p>
                                </div>
                                <div class="dokter-periksa float-right">
                                    <img src="{{url('/images/dokter.png')}}"class="float-left margin-icon"> 
                                    <p>Dr. Alwi Firdausi</p> 
                                </div>
                            </div>
                            <div class="garis"></div>
                            <div class="box-basic">
                                <div class="card-basic margin-top-0 float-left">
                                    <h5>Tekanan Darah<span class="float-right">120/80</span></h5> 
                                    <p>mmh</p>      
                                    <div class="graphic">
                                        <img src="{{url('/images/vec1.png')}}"/>   
                                    </div>                           
                                </div>
                                <div class="card-basic  margin-top-0 float-right">
                                    <h5>Denyut Jantung<span class="float-right">120</span></h5> 
                                    <p>BPM</p> 
                                    <div class="graphic">
                                        <img src="{{url('/images/vec4.png')}}"/>  
                                    </div>  
                                </div>
                                <div class="card-basic float-left">
                                    <h5>Temperatur<span class="float-right">36</span></h5> 
                                    <p>C</p> 
                                    <div class="graphic">
                                    <img src="{{url('/images/vec2.png')}}"/>   
                                    </div>   
                                </div>
                                <div class="card-basic float-right">
                                    <h5>Tekanan Darah<span class="float-right">120/80</span></h5> 
                                    <p>mmh</p> 
                                    <div class="graphic">
                                    <img src="{{url('/images/vec3.png')}}"/>  
                                    </div>  
                                </div>
                            </div>
                            <div class="detail-rekmed">
                                <div class="info-rekmed padding-top-0">
                                    <h5>Keluhan</h5>
                                    <p>Lorem ipsum dolor sit amet, contetur adipiscing elit sed do eiusmod. Lorem ipsum dolor sit amet. co adipiscing elit sed do eiusmod tempor. cont adipiscing elit sed do eiusmod tempor. Lorem ipsum dolor sit amet. cont adipiscing elit sed do eiusmod tempor. cont adipiscing elit sed do eiusmod.</p>
                                </div>
                                <div class="info-rekmed">
                                    <h5>Diagnosis</h5>
                                    <p>Lorem ipsum dolor sit amet, contetur adipiscing elit sed do eiusmod.</p>
                                </div>
                                <div class="info-rekmed">
                                    <h5>Pemberian obat</h5>
                                    <p>Lorem ipsum dolor sit amet. cont adipiscing elit sed do eiusmod tempor. cont adipiscing elit sed do eiusmod tempor. Lorem ipsum dolor sit amet, contetur adipiscing elit sed do eiusmod tempor.</p>
                                </div>
                                <div class="info-rekmed padding-bot-0">
                                    <h5>Tindak Lanjut</h5>
                                    <p>Lorem ipsum dolor sit amet, contetur adipiscing elit sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    </body>
</html>

