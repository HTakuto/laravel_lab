<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoogleMap表示</title>
</head>
<body>
    <div id="map" style="height:500px"></div>

    <script>
        function initMap() {
            // Google Maps API キーを設定
            var apiKey = '{{ env('YOUR_API_KEY') }}';

            // マップを表示する位置の緯度経度を設定
            var latitude = 35.6585769;
            var longitude = 139.7454506;

            // マップを表示
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: latitude, lng: longitude},
                zoom: 13
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('YOUR_API_KEY') }}&callback=initMap" async defer></script>
</body>
</html>
