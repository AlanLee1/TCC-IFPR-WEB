@extends('Painel.Layout.index')

@section('content')
    <section class="content">
        <div id="mapa"></div>
    </section>
@endsection

<script>
    let map;

    function initMap() {

      var myLatLng = {lat: -26.5690975, lng: -52.3295087};
      var myLatLnga = {lat: -26.000000, lng: -52.3295087};

      var map = new google.maps.Map(document.getElementById('mapa'), {
          zoom: 14,
          center: myLatLng
      });

      var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          animation: google.maps.Animation.DROP,
          icon: {url: "placeholder.png"},
          title: 'Hello World!'
      });

      var marker = new google.maps.Marker({
          position: myLatLnga,
          map: map,
          animation: google.maps.Animation.DROP,
          icon: {url: "placeholder.png"},
          title: 'Hello World!'
      });

    }
</script>
