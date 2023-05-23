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
    .table-header span {
      line-height: 1.5em;
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
      margin-top: 10rem;
      width: 100%;
      vertical-align: middle;
      font-size: 12px;
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
    .tanda_bukti{
      text-align: center;
      margin-top: 20px;
      margin-bottom: 20px;
    }
    .first tr td{
      border-style: none;
      line-height: 1.5rem;
    }

    .body-content{
      font-size: 12px;
    }
  </style>

  <body
    style="
      margin-left: 100px;
      margin-right: 50px;
      margin-top: 48px;
      margin-bottom: 48px;
    "
  >
      <div class="header">
        <table class="table-header" style="width: 100%;border-style:hidden">
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
                style="width: 90%; height: 8%"
                src="assets/images/banten.png"
                alt=""
              />
            </td>
            <td
              style="
                text-align: center;
                vertical-align: middle !important;
                width: 50%;
                line-hight: 100%;
              "
            >
              <span class="bold-text" style="font-size: 20px"
                >PEMERINTAH PROVINSI BANTEN</span
              ><br />
              <span class="bold-text" style="font-size: 28px"
                >DINAS PERTANIAN</span
              ><br />
              <span class="bold-text" style="font-size: 15px"
                >UPTD PELAYANAN DAN PENGUJIAN VETERINER</span
              ><br />
              <span class="bold-text" style="font-size: 10px"
                >Jl. Raya Cilegon KM.04 Drangong - Serang 42162 Telp. (0254)
                7913148 Fax. (0254) 7913148</span
              ><br />
            </td>
          </tr>
        </table>
        <div class="hr-line">
          <hr class="hr-new1" />
          <hr class="hr-new2" />
        </div>
      </div>    

      <div class="content_table">
          <div class="tanda_bukti">
            <text style="font-weight: bold;text-decoration: underline">TANDA BUKTI PEMBAYARAN</text><br>
            <span>No.Bukti :......................... </span>
          </div>
          <div class="body-content">
            <table class="first" style="width: 100%; border-style:hidden">
              <tr>
                <td colspan="6">a. Bendahara Penerima/Bendahara Penerimaan Pembantu : Dinas Pertanian Provinsi Banten</td>
              <td></td>
              </tr>
              <tr>  
                <td colspan="5">Telah menerima uang sebesar {{formatRupiah($jumlah)}}</td>  
              </tr>
              <tr>  
                 <td>b.(...................................................)</td>
              </tr>

              @foreach($user as $item)
              <tr>  
                <td style="width: 10%">c. dari:</td>
                <td>Nama/Nama Perusahaan</td>
                <td>:</td>
                <td colspan="4">{{$item->nama}} / {{$item->instansi}}</td>
              </tr>
              <tr>
                <td></td>
                <td style="width: 30%">Alamat</td>
                <td>:</td>
                <td colspan="4">{{$item->alamat}}</td>
              </tr>
              @endforeach
              <br>
              <br>
              <tr>
                <td>d. Sebagai pembayaran</td>
                  @foreach ($jenis as $item)
                  <td colspan="8">Biaya pengujian Sebanyak {{$item->jumlah_contoh}} dengan jenis uji {{$item->jenis_pengujian}} dan jenis sampel {{$item->jenis_sampel}}</td>
                  @endforeach
                <td></td>
                <td></td>  
              </tr>
            </table>
          </div>  
          <table style="float:right;margin-top:2rem; text-align:center">
            <tr>
                <td style="width:300px">Kode Rekening</td>
                <td style="width: 100px">Jumlah<br>(Rp)</td>
            </tr>
            <tr>
              <td style="width: 300px"></td> 
              <td style="width: 100px">{{formatRupiah($jumlah)}}</td>
            </tr>
          </table>
      </div>

      <div class="tanda_tangan">
        <h6><span style="font-weight: bold">Tanggal di terima uang</span></h6>
        <br><br>
        <table style="border-style: hidden; width: 100%;">
          <tr>
              <td style="text-align: center">
                <span>Mengetahui,</span><br />
                <span>Petugas/Bendahara Penerima Pembantu</span>
                <br />
                <br />
                <br />
                <br />
                <br /><br /><br /><br />
                <span>.......................</span>
              </td>
              <td style="width:30%">
                <span></span><br>
                <span>Pembayaran/Penyetor</span><br />
                <br />
                <br />
                <br />
                <br />
                <br /><br /><br /><br />
                @foreach($user as $item )
                <span>{{$item->nama}}</span>
                @endforeach
              </td>
          </tr>
        </table>
      </div> 
  </body>
</html>
