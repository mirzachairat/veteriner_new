<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<style>
    /* CSS RESETTER START */
    /* http://meyerweb.com/eric/tools/css/reset/
    v2.0 | 20110126
    License: none (domain)
    */
    html,
    body,
    div,
    span,
    applet,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    center,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        /* vertical-align: baseline; */
    }

    /* HTML5 display-role reset for older browsers */
    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block;
    }

    body {
        line-height: 1;
    }

    /* ol,
    ul {
        list-style: none;
    } */

    blockquote,
    q {
        quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
        content: '';
        content: none;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    /* CSS RESTTER END */
    html {
        font-family: calibri, sans-serif !important;
    }

    body {
        margin-top: 48px;
        margin-bottom: 48px;
    }

    .footer {
        position: absolute;
        bottom: 0;
        left: 20px;
        right: 20px;
        width: 100%;
        height: 300px;
        display: block;
        /* background: red; */
        z-index: 1;
    }

    .header {
        position: relative;
        top: 10px;
        /* left: 0; */
        width: 100%;
        /* padding: 20px; */
        /* height: 150px; */
        display: block;
        /* background: yellow; */
        align-items: center;
    } 

    .content {
        position: relative;
        padding: 20px;
        margin-left: 20px;
        /* top: 150px; */
        width: 100%;
        display: block;
        /* background: blue; */
        z-index: 1;
    }

    #qrcode {
        display: inline-block;
        /* width: 100%;
        height: 100%; */
    }

    .icon {
        display: inline-block;
        height: 100px;
        margin-top: 15px;
        margin-right: 10px;
    }

    .title-bordered {
        display: inline-block;
        height: 100px;
        border: 1px solid #000;
        padding: 15px 20px 0px 5px;
        margin: 0 10px 0 0;
        font-size: 14px;
    }

    .second-border {
        padding-left: 30px;
    }

    .bold-text {
        font-size: 12px;
        font-weight: bold;
        line-height: 14px;
    }

    .float-left {
        float: left;
    }

    .float-right {
        float: right;
    }

    .inner-content {
        position: relative;
        display: block;
        margin-left: 75px;
    }

    .table-header{
        padding: 0.1em;
    }

    .has-padding td {
        font-size: 12px;
        padding: 0.3em;
        text-align: center;
    }

    .draft-img {
        position: fixed;
        top: 150px;
        left: 0;
        width: 100vw;
        height: 100vh;
        opacity: .3;
        z-index: -1;
    }

    td p {
        text-align: justify;
        line-height: 16px;
        font-size: 12px;
    }
    ol {
        margin: 10px 0px 10px 20px;
    }

    li {
        text-align: justify;
        line-height: 16px;
        font-size: 12px;
    }

    table, th, td {
        border: 1px solid;
        
        }
    img{
        padding: 0.5em;
        
    }
    .flex-container {
        margin-top: 1em;
        display: flex;
        flex-direction: row;
    }    

.flex-container > div {
    background-color: #f1f1f1;
  margin: 10px;
  padding: 20px;
  font-size: 30px;
}

.header-list1 tr td {
    border-style: none;
}
.header-list2 tr td {
    border-style: none;
}
.tabel_sample{
    font-size: small;
    width:100%; 
    border-style: hidden
}
.tabel_sample tr td{
    border-style: none;
    padding: 0.5em;
}
.tanda_tangan{
    margin-top: 30px;
    width: 100% ;
    vertical-align: middle;
}
.td-kanan{
    float: right
}
.tanda_tangan tr td{
    border-style: none;
    font-size: 14px;
}
.tanggal_surat{
    margin-top:10px;
    border-style: none;
}
.tanggal_surat tr td{
    border-style: none;
}
.td_pj{
    margin-top: 80px;
    float: right;
    padding-top: 20px;
}

.column {
  float: left;
  width: 45%;
  font-size: 5px;
  height: 100px; /* Should be removed. Only for demonstration */
}

.datasampel tr{
}
.datasampel tr td{
    width: 180px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.tanggal_surat tr td{
    font-size: 14px;
}

.ceklist_tabel tr td{
    font-size: 13px;
}

</style>

<body  style="
margin-left: 40px;
margin-right: 90px;
margin-top: 10px;
margin-bottom: 10px; 
">
    <div class="content">
        <div class="header">
            <table style="width: 100%">
              <tr>
                <td
                  style="
                    border: 1px solid #000;
                    border-right: 0px;
                    text-align: right;
                    vertical-align: middle !important;
                    background-color: #d4d4d4d4;
                    padding: 15px 10px 20px 0px;
                    width: 10%;
                  "
                >
                  <img
                    style="width: 90px"
                    src="assets/images/banten.png"
                    alt=""
                  />
                </td>
                <td
                  style="
                    border: 1px solid #000;
                    border-left: 0px;
                    text-align: center;
                    vertical-align: middle !important;
                    background-color: #d4d4d4d4;
                    width: 40%;
                    padding: 15px 10px 20px 0px;
                    line-height:21px;
                  "
                >
                  <span class="bold-text">UNIT PELAKSANA TEKNIS DAERAH</span>
                  <span class="bold-text">PELAYANAN DAN PENGUJIAN VETERINER</span>
                  <span class="bold-text">DINAS PERTANIAN PROVINSI BANTEN</span><br><br>
                  <span class="bold-text" style="font-size: 23px">FORMULIR</span>
                </td>
                <td
                  style="
                    border: 1px solid #000;
                    text-align: left;
                    vertical-align: middle !important;
                    background-color: #d4d4d4d4;
                    padding: 15px 10px 15px;
                    line-height: 100%;
                  "
                >
                  <span class="bold-text">No.Bagian</span><br />
                  <span class="bold-text">Halaman</span><br />
                  <span class="bold-text">Terbitan/Revisi</span><br />
                  <span class="bold-text">Tanggal/Terbitan</span><br />
                  <span class="bold-text">Tanggal/Revisi</span><br />
                  <span class="bold-text">Disetujui Kepala UPTD</span><br />
                </td>
                <td
                  style="
                    border: 1px solid #000;
                    text-align: left;
                    vertical-align: middle !important;
                    background-color: #d4d4d4d4;
                    padding: 13px 6px 15px 10px;
                  "
                >
                  <span class="bold-text">:</span><br />
                  <span class="bold-text">:</span><br />
                  <span class="bold-text">:</span><br />
                  <span class="bold-text">:</span><br />
                  <span class="bold-text">:</span><br />
                  <span class="bold-text">:</span><br />
                  <span class="bold-text">:</span><br />
                </td>
                <td
                  style="
                    border: 1px solid #000;
                    text-align: left;
                    vertical-align: middle !important;
                    background-color: #d4d4d4d4;
                    padding: 20px 6px 15px;
                  "
                >
                  <span class="bold-text">7 F 2</span><br />
                  <span class="bold-text">1 dari 1</span><br />
                  <span class="bold-text">4/0</span><br />
                  <span class="bold-text">21 Januari 2022</span><br />
                  <span class="bold-text">-</span><br />
                  <span class="bold-text">-</span><br />
                </td>
              </tr>
              <tr>
                <td
                  colspan="5"
                  style="
                    border: 1px solid #000;
                    text-align: center;
                    vertical-align: middle !important;
                    background-color: #d4d4d4d4;
                    padding: 15px 10px 10px;
                  "
                >
                  <span class="bold-text" style="font-size: 15px"
                    >KAJI ULANG PERMINTAAN</span
                  ><br />
                </td>
              </tr>
            </table>
          </div>
        <br>
          <table style="width: 100%;line-height: 30px;" class="tanggal_surat" >
            <tr>
                <tr>
                    <td>Tanggal Terima</td>
                    <td style="width: 2%;">:</td>
                    <td style="padding-left:0px">{{$tgl_terima}}</td>
                    <td >No.Contoh Uji</td>
                    <td style="width: 2%;">:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tanggal diserahkan ke MT</td>
                    <td style="width: 5%;">:</td>
                    <td style="padding-left:0px">{{$tgl_diserahkan_mt}}</td>
                    <td>No.Epi</td>
                    <td style="width: 2%;">:</td>
                    <td>{{$no_epi}}</td>
                </tr>
            </tr>
            <tr>
            </tr>
          </table>

        <div class="table-content" style="margin-top: 10px">
            <div class="container">
                <table class="has-padding" style="width: 100%;" style>
                    <tr>
                        <td rowspan="2">No</td>
                        <td rowspan="2">Jenis Hewan</td>
                        <td rowspan="2">Jenis Contoh Uji</td>
                        <td rowspan="2">Jumlah Contoh Uji</td>
                        <td rowspan="2">Bahan Pengawet</td>
                        <td colspan="2">Kondisi</td>
                        <td colspan="2">Jumlah Contoh Uji</td>
                        <td rowspan="2">Metode Uji Yang Di Mohon</td>
                        <!-- <td colspan="2">Ketersediaan Alat, Bahan, Media dan SDM (laboratorium)</td> -->
                    </tr>
                    <tr>
                        <td>Baik</td>
                        <td>Kurang Baik</td>
                        <td>Memenuhi</td>
                        <td>Kurang</td>
                    </tr>
                    @foreach($jenis as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$jenis_hewan}}</td>
                        <td>{{$item->jenis_sampel}}</td>
                        <td>{{$item->jumlah_contoh}}</td>
                        <td>{{$item->bahan_pengawet}}</td>
                        <td colspan="2">{{$item->kondisi}}</td>
                        <td colspan="2">{{$item->kriteria}}</td>
                        <td>{{$item->jenis_harga->jenis_pengujian}}</td>
                        
                    </tr>
                    @endforeach
                </table>
           </div>
        </div>
    
        {{-- class tandan tangan --}}
        <table style=" border-style: hidden; width: 100%;" class="tanda_tangan" >
            <tr>
                <td style="width: 60%;">
                        <span>Penerima Contoh Uji</span><br />
                        
                        <br />
                        <br />
                        <br />
                        <br />
                        
                        <br />
                    
                        <span>{{Auth::user()->nama}}</span>
                </td>
                <td>
                        <span>Serang,...................</span><br />
                        <span>Pengirim Contoh Uji</span><br />
                        
                        <br />
                        <br />
                        <br />
                        <br />
                        
                        <br />
                        
                        <span>{{$nama}}</span>
                </td>
            </tr>
        </table>
    
        <div style="padding: 20px;">
            <text>Data Sampel/Contoh : Ruang Lingkup Akreditasi</text>
        </div>
    
        <div class="row">
            <div class="column">
                <table style="font-size:x-small;width:80%;">
                    <tr>
                        <td colspan="1">1.Tanggal Penerima</td>
                        <td>:{{$tgl_terima}}</td>
                    </tr>
                    <tr>
                        <td colspan="1">2.Pengiriman Sampel </td>
                        <td>:</td>
                    </tr>
                    <tr>
                        <td colspan="1">3.Jenis Sampel </td>
                        <td>:{{$jenis_hewan}}</td>
                    </tr>
                    @foreach($jenis as $item)
                    <tr>
                        <td colspan="1">4.Jumlah Sampel </td>
                        <td>:{{$item->jumlah_contoh}}</td>
                    </tr>
                    <tr>
                        <td colspan="1">5. Metode Uji </td>
                        <td>:{{$item->jenis_harga->jenis_pengujian}}</td>
                    </tr>
                    <tr>
                        <td colspan="1">6. Biaya Uji </td>
                        <td>:{{$jumlah}}</td>
                    </tr>
                    <tr>
                        <td colspan="1">7. Laboratorium </td>
                        <td>:.....</td>
                    </tr>
                    <tr>
                        <td colspan="1">8. No. Epid/Contoh Uji </td>
                        <td>:{{$no_epi}}</td>
                    </tr>
                    <tr>
                        <td colspan="1">9. Lama Pengujian </td>
                        <td>:{{$item->jenis_harga->lama_pengujian}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="column">
                <table class="datasampel" style="font-size:10px;">
                    <tr style="t10xt-align: center;">
                        <td>Jenis Pengujian atau 
                            <br>sifat-sifat yang diukur</td>
                        <td>Metode Pengujian, teknik yang di gunakan</td>
                        
                    </tr>
                    <tr>
                        <tr>
                            <td>
                                <span>Seriologi</span><br>
                                <span>Rose Bengal Test(RBT)</span><br>
                            </td>
                            <td>OIE Terrestrial Manual 2018, Chapter 3.1.4:368-369</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Pulorum test</span><br>
                            </td>
                            <td>OIE Terrestrial Manual 2018, Chapter 3.3.11:922-923</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Haemoaglutianation/ Haemoaglutianation Inhibition test untuk Ai</span><br />
                            </td>
                            <td>OIE Terrestrial Manual 2018, Chapter 3.3.4:830-831</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Haemoaglutianation/ Haemoaglutianation Inhibition test untuk ND</span><br>
                                <td>OIE Terrestrial Manual 2018, Chapter 3.3.14:970-971</td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Parasitologi:</span><br>
                                <span>Uji Sedimentasi (telur cacing Fasiola sp paramphistomum)</span><br />
                            </td>
                            <td>3.3 Manual Standar Metode Diagnosa Laboratorium Kesehatan Hewan Tahun 1990 Hal 38-51</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Uji Kualitatif telur cacing</span><br>
                            </td>
                            <td>3.3 Manual Standar Metode Diagnosa Laboratorium Kesehatan Hewan Tahun 1990 Hal 34-37</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Formaldehyde</span><br>
                            </td>
                            <td>7IK 1.7(Kuantitatif)</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Total Plate Count (TPC)</span><br>
                            </td>
                            <td>SNI 2987:2008, butir 1</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Coliform</span><br>
                            </td>
                            <td>ISO 16649-2:2001</td>
                        </tr>
                        <tr>
                            <td>
                                <span>E Coli</span><br>
                            </td>
                            <td>ISO 16649-2:2001</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Salmonelia sp</span><br>
                            </td>
                            <td>SNI 2987:2008, butir 4</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Indetifikasi spesies babi(pork)</span><br>
                            </td>
                            <td>User Manual IQ Plus tm, User manual Procine ingredient Reagent Set Tahun 2012(Poumerase Chain Reaction)</td>
                        </tr>
                        <tr>
                            <td>
                                <span>Identifikasi Avian Influenza</span><br>
                            </td>
                            <td>User Manual IQ Plus tm, User Manual Pockit  Avian Influenza H5 Detection KIT H5 Detection KIT Tahun 2012(Polymerase Chain Reaction)</td>
                        </tr>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row" style="margin-top:140px">
            <table class="ceklist_tabel" style=" width: 40%;">
                <tr>
                    <td>Dilanjutkan</td>
                    <td>Disubkontrak</td>
                    <td>Tidak Dapat Dilakukan Pengujian</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>      
            </table>
        </div>
        <text>Catatan : Bubuhkan tanda </text>
        <div class="td_pj" >
                <table style="border-style: hidden">
                    <tr>
                        <span>Mengetahui</span><br>
                        <span>Penanggung Jawab Teknis</span><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <span>.......................................</span>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
