    @extends('layout/template')

    @section('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <style>
        #map{
            width: 100%;
            height: calc(100vh - 56px);
        }
    </style>
@endsection

    @section('content')
    <div id="map"></div>
    @endsection

    @section('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

<script>
var map = L.map('map').setView([-7.795755043820887, 110.38420400809983], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([-7.795755043820887, 110.38420400809983]).addTo(map)
    .bindPopup('Punya Reza')
    .openPopup();
</script>
@endsection
</body>

</html>
