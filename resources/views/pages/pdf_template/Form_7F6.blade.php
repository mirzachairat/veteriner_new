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

    .header {
      position: relative;
      top: 20px;
      /* left: 0; */
      width: 100%;
      padding: 20px;
      /* height: 150px; */
      display: block;
      /* background: yellow; */
      align-items: center;
    }

    .content {
      margin-top: 30px;
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

    .inner-content * {
      letter-spacing: 0.3px;
    }

    .inner-content p {
      line-height: 10px;
      margin-left: 45px;
      /* margin-bottom: 5px; */
      text-indent: 1%;
    }

    .has-padding td {
      /* padding: 4px; */
      font-size: 12px;
      padding: 1px;
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
    table,
    th,
    td {
      /* border: 1px solid; */
      /* border-spacing: 100px; */
      padding: 1em;
    }
    img {
      padding: 0.5em;
    }
  </style>

  <body
    style="
      margin-left: 70px;
      margin-right: 60px;
      margin-top: 48px;
      margin-bottom: 48px;
    "
  >
    <<div class="header">
      <table class="has-padding" style="width: 100%">
        <tr>
          <td
            style="
              border: 1px solid #000;
              border-right: 0px;
              text-align: right;
              vertical-align: middle !important;
              background-color: #d4d4d4d4;
              width: 10%;
            "
          >
            <img
              style="width: 90px"
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Coat_of_arms_of_Banten.png/1200px-Coat_of_arms_of_Banten.png"
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
              padding: 15px 10px 15px;
            "
          >
            <span class="bold-text">UNIT PELAKSANA TEKNIS DAERAH</span><br />
            <span class="bold-text">PELAYANAN DAN PENGUJIAN VETERINER</span
            ><br />
            <span class="bold-text">DINAS PERTANIAN PROVINSI BANTEN</span><br />
            <br />
            <span class="bold-text" style="font-size: 35px">FORMULIR</span
            ><br />
          </td>
          <td
            style="
              border: 1px solid #000;
              text-align: left;
              vertical-align: middle !important;
              background-color: #d4d4d4d4;
              padding: 15px 10px 15px;
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
              padding: 15px 6px 15px;
            "
          >
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
              padding: 28px 6px 26px;
            "
          >
            <span class="bold-text">7 F 6</span><br />
            <span class="bold-text">1 dari 1</span><br />
            <span class="bold-text">4/0</span><br />
            <span class="bold-text">21 Januari 2022</span><br />
            <span class="bold-text">-</span><br />
            <span class="bold-text"></span><br />
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
              padding: 15px 10px 15px;
            "
          >
            <span class="bold-text" style="font-size: 25px"
              >KESIMPULAN / DIAGNOSA</span
            ><br />
          </td>
        </tr>
      </table>
    </div>

    <div class="content">
      <table class="bodysurat" style="width: 100%">
        <tr>
          <td>No.Contoh Uji</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>No. Epi</td>
          <td>:</td>
          <td>{{$no_epi}}</td>
        </tr>
        <tr>
          <td>Kesimpulan</td>
          <td>:</td>
          <td>{{$kesimpulan}}</td>
        </tr>
        <tr>
          <td>Catatan</td>
          <td>:</td>
          <td>{{$catatan}}</td>
        </tr>
        <tr>
          <td>Saran</td>
          <td>:</td>
          <td>{{$saran}}</td>
        </tr>
      </table>
      <div style="display: block; height: 50px; width: 100%"></div>
    </div>
    <div class="tanda-tangan">
      <div>
        <text style="margin-right: 300%"
          >Serang, .......................,20.....</text
        >
        <table style="width: 100%">
          <tr>
            <td>
              <div style="text-align: center">
                <span>Menyetujui</span><br />
                <span>Kepala UPTD</span>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br /><br /><br /><br />

                <span>.......................</span>
              </div>
            </td>
            <td>
              <div style="text-align: center">
                <span>Penanggung Jawab Teknis</span><br />
                <span>/Penyelia</span>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br /><br /><br /><br />

                <span>.......................</span>
              </div>
            </td>
            <td style="width: 10px">
              <div class="float-right" style="text-align: center">
                <span>Penguji</span><br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br /><br /><br /><br />

                <span>.......................</span>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>
