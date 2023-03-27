@extends('layouts.main')


@section('page_css')
  <!-- Load Leaflet from CDN -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />
<style>
    #mapid { min-height: 500px; }
    </style>
@endsection

@section('content')    
<div class="card">
    <div class="card-body" id="mapid"></div>
</div>
@endsection

@section('script')
<!-- Make sure you put this AFTER Leaflet's CSS -->
 <!-- Load Esri Leaflet from CDN -->
 <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
<script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
<script>
     var map = L.map('mapid').setView([{{ config('leaflet.map_center_latitude') }}, {{ config('leaflet.map_center_longitude') }}], {{ config('leaflet.zoom_level') }});
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    var markers = L.markerClusterGroup();

    $(function(){
        $.ajax({
            url: "/mapview/titik",
            type: 'GET',
            success: function(data) {
                $.each(data, function( key, value ) {
                    L.marker([value.latitude, value.longitude]).addTo(map)
                        .bindPopup('[value.nama<br> Easily customizable.]')
                        .openPopup();
                })
            },
            error: function(data) {

            }
        });
    })
</script>
@endsection