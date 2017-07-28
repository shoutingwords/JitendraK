    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDostOGgsJFEFgKCj3yE7VPm6uqe6SX0B0&sensor=false">
    </script>
    <script type="text/javascript">
      function initialize() {
        var myLatlng = new google.maps.LatLng(12.955432,77.7176132);
        var mapOptions = {
          zoom: 8,
          center: myLatlng
        };

        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'ShoutingWords'
        });
      }

      function loadScript() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
            'callback=initialize';
        document.body.appendChild(script);
      }

      window.onload = loadScript;
    </script>