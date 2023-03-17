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
      margin-left: 200px;
      margin-right: 200px;
      margin-top: 48px;
      margin-bottom: 48px;
    "
  >

  
      <div class="header">
            <table class="table-header" style="width: 100%;">
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
                    style="width: 50%; height: 11%"
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

      <div class="conten_table">
          <table style="border-style: hidden">
            <span>a. Bendahara Penerima/Bendahara Penerimaan Pembantu : Dinas Pertanian Provinsi Banten </span><br>
            <span>Telah menerima uang sebesar Rp.</span>
            
          </table>
      </div>

      <div class="body-content">
       
        <table style="width: 100%">
          <tr>
            <td>1. Test</td>
          </tr>
        </table>
        <br />
        <text>Saran</text>
        <table style="width: 100%">
          <tr>
            <td>1. Test</td>
          </tr>
        </table>
      </div>

      <div class="tanda_tangan">
        <table style="border-style: hidden">
          <tr>
            <td style="width: 85%">
              <span style="font-weight: bold">Kepala UPTD</span><br />
              <span>Pelanggan</span>
              <br />
              <br />
              <br />
              <br />

              <br /><br /><br /><br />

              <span>.......................</span>
            </td>
            <td style="float: right; width: 100%">
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
      </div> 
    </div>
  </table>
  </body>
</html>
