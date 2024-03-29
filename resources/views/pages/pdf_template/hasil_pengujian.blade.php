<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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
      content: "";
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

    .content {
      position: relative;
      padding: 20px;
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

    .table-header {
      padding: 0.1em;
    }

    .has-padding td {
      font-size: 12px;
      padding: 0.3em;
    }

    .draft-img {
      position: fixed;
      top: 150px;
      left: 0;
      width: 100vw;
      height: 100vh;
      opacity: 0.3;
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

    table th {
      padding: 10px;
    }

    table,
    th,
    td {
      border: 1px solid;
    }
    img {
      padding: 0.5em;
    }
    .flex-container {
      margin-top: 1em;
      display: flex;
      flex-direction: row;
    }

    .tanda_tangan {
      margin-top: 20px;
      width: 100%;
      vertical-align: middle;
    }
    .td-kanan {
      float: right;
    }
    .tanda_tangan tr td {
      border-style: none;
    }

    .hr-line {
      padding: 0em;
    }
    .hr-new1 {
      border: 1px solid black;
      margin: 0%;
    }
    .hr-new2 {
      border: 2px solid black;
      border-radius: 5px;
      margin: 0.1em;
    }

    .kop2 {
      margin-left: 20em;
    }

    .kop1 tr td {
      border-style: none;
    }
    .kop2 tr td {
      border-style: none;
    }

    .body-content {
      margin-top: 20px;
    }
  </style>

  <body
    style="
      margin-left: 50px;
      margin-right: 50px;
      margin-top: 48px;
      margin-bottom: 48px;
    "
  >
    <div class="content">
      <div class="header">
        <table class="table-header" style="width: 100%; border-style: hidden">
          <tr>
            <td
              style="
                width: 10%;
                text-align: right;
                vertical-align: middle !important;
                border-style: hidden;
              "
            >
              <img
                style="width: 50%; height: 8%"
                src="assets/images/banten.png"
                alt=""
              />
            </td>
            <td
              style="
                text-align: center;
                vertical-align: middle !important;
                width: 50%;
              "
            >
              <span class="bold-text" style="font-size: 20px"
                >PEMERINTAH PROVINSI BANTEN</span
              ><br /><br>
              <span class="bold-text" style="font-size: 28px"
                >DINAS PERTANIAN</span
              ><br /><br>
              <span class="bold-text" style="font-size: 15px"
                >UPTD PELAYANAN DAN PENGUJIAN VETERINER</span
              ><br />
              <span class="bold-text" style="font-size: 10px"
                >Jl. Raya Cilegon KM.04 Drangong - Serang 42162 Telp. (0254)
                7913148 Fax. (0254) 7913148</span
            </td>
          </tr>
        </table>
        <div class="hr-line">
          <hr class="hr-new1" />
          <hr class="hr-new2" />
        </div>
      </div>

      <div class="flex-container">
        <div class="kop1">
          <table style="border-style: hidden">
            <tr>
              <td>No</td>
              <td >: 524.36/56</td>
              <td></td>
            </tr>
            <tr>
              <td>Lampiran</td>
              <td>: 1 berkas</td>
              <td></td>
            </tr>
            <tr>
              <td>Perihal</td>
              <td>:</td>
              <td></td>
            </tr>
            <tr>
              <td>Tgl. Kirim / No Surat </td>
              <td> :</td>
              <td></td>
            </tr>
            <tr>
              <td>Tgl. Terima</td>
              <td> : {{\Carbon\Carbon::parse($tgl_terima)->format('j F, Y')}}</td>
            </tr>
            <tr>
              <td>Tgl. Uji</td>
              <td> : {{\Carbon\Carbon::parse($tgl_terima)->format('j F, Y')}}</td>
              <td></td>
            </tr>
            <tr>
              <td>No Epi</td>
              <td> : {{$no_epi}}</td>
            </tr>
            <tr>
              <td>Jenis Layanan</td>
              <td> :</td>
              <td></td>
            </tr>
            <tr>
              <td>Input Data</td>
              <td>:</td>
              <td></td>
            </tr>
          </table>
        </div>
        <div class="kop2" style="margin-top:5%">
          <table style="border-style: none">
            <tr>
              <td></td>
              <td>Kepada YTH:</td>
            </tr>
            <tr>
              <td></td>
              <td>{{$instansi}}</td>
            </tr>
            <tr>
              <td></td>
              <td>{{$alamat}}</td>
            </tr>
            <tr>
              <td></td>
              <td>Kabupaten Tangerang</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="body-content">
        <hr />
        <text>Hasil Uji Laboratorium</text>
        <br />
        <table style="width: 100%">
          <tr>
            <th>No</th>
            <th>IdHw</th>
            <th>Lokasi</th>
            <th>Pemilik</th>
            <th>Jns Sample</th>
            <th>Nilai</th>
            <th>Nama Jenis Pengujian</th>
          </tr>
          @foreach($jenis as $item)
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>{{$nama}}</td>
            <td>{{$item->jenis_sampel}}</td>
            <td>{{$item->nilai}}</td>
            <td>{{$item->jenis_harga->jenis_pengujian}}</td>
          </tr>
          @endforeach
        </table>
        <br />
        <text>Keterangan Uji</text>
        <table style="width: 100%">
          <tr>
            <th>Uji</th>
            <th>Keterangan</th>
            <th>Tgl Selesai</th>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
        </table>
        <br />
        <text>ID Keterangan/Nama Hewan</text>
        <table style="width: 100%">
        @foreach($jenis as $item)
          <th>{{$item->jenis_sampel}}</th>
        @endforeach
        </table>
        <br />
        <text>Diagnosa</text>
        <table style="width: 100%">
          <tr style="padding: 10px">
            <th>No</th>
            <th>IdHw</th>
            <th>Desa</th>
            <th>Hewan</th>
            <th>Penyakit & Jumlah</th>
          </tr>
          <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
          </tr>
        </table>
        <br />
        <text>Catatan</text>
        <table style="width: 100%">
          <tr>
            <td style="height:35%">{{$catatan}}</td>
          </tr>
        </table>
        <br />
        <text>Saran</text>
        <table style="width: 100%">
          <tr>
            <td style="height:20%">{{$saran}}</td>
          </tr>
        </table>
      </div>

      <div class="tanda_tangan">
        <table style="border-style: hidden; width: 100%;">
          <tr>
            <td>
              <span style="font-weight: bold">Kepala UPTD</span><br />
              <span>Pelanggan</span>
              <br />
              <br />
              <br />
              <br />

              <br /><br /><br /><br />

              <span>.......................</span>
            </td>
            <td>
              <span style="font-weight: bold">Serang, .............</span><br />
              <span>Penanggung Jawab Teknis</span><br />
              <br />
              <br />
              <br />
              <br />

              <br /><br /><br /><br />

              <span>.......................</span>
              <span>NIP.</span>
            </td>
          </tr>
        </table>
        <br />
      </div>
      <div class="tembusan">
        <text style="font-weight: bold">Tembusan</text><br /><br />
        <table style="border-style: hidden">
          <tr>
            <td style="border-style: none">1. Arsip</td>
          </tr>
          <tr>
            <td style="border-style: none">2. Direktur</td>
          </tr>
          <tr>
            <td style="border-style: none">3. Arsip</td>
          </tr>
        </table>
        <br />
        <text>
          <span style="font-weight: bold"
            >TAGIHAN BIAYA PENGUJIAN SPESIMEN NO: 2893465826348756287346</span
          >
          <br />Berdasarkan Peraturan Gubernur Banten Nomor 54 Tahun 2001
          tentang Peninjauan Tarif Retribusi Daerah
        </text>
        <br />
        <br />
        <table style="width: 100%">
          <tr>
            <th>No</th>
            <th>Jenis Uji</th>
            <th>Jumlah</th>
            <th>Tarif(Rp)</th>
            <th>Total(Rp)</th>
            <th>Verif Ptg PNBP</th>
          </tr>
          @foreach($jenis as $key => $item)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->jenis_harga->jenis_pengujian}}</td>
            <td>{{$item->jumlah_contoh}}</td>
            <td>{{formatRupiah($item->harga_satuan)}}</td>
            <td>{{formatRupiah($item->total_harga)}}</td>
            <td>1</td>
          </tr>
          @endforeach
          <tr>
            <td
              colspan="5"
              style="text-align: center; font-weight: bold; padding: 10px"
            >
              Total Tagihan
            </td>
              <td class="totaltagihan">:{{$jumlah}}</td>
          </tr>
        </table>
        <br />
        @foreach($jenis as $item)
        <text style="font-style: italic">Terbilang : {{terbilang($item->total_harga)}} rupiah</text>
        @endforeach
        <br />
        <br />
        <text style="font-weight: bold">Catatan Tagihan</text>
        <br />
        <text
          >- Jumlah tagihan biaya pengujian yang tertera telah di verifikasi
          kebenarannya oleh petugas Pembantu Bendahara Penerimaan</text
        ><br />
        <text>- Biaya pengujian dibayar langsung</text><br />
        <text>- Abaikan tagihan ini jika telah melakukan pembayaran</text>
      </div>
    </div>
  </body>

</html>
