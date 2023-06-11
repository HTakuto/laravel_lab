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
            var tokyoTower = { lat: 35.6585769, lng: 139.7454506 };

            // マップを表示
            var map = new google.maps.Map(document.getElementById('map'), {
                center: tokyoTower,
                zoom: 13
            });

            // 東京タワーの位置にピンを追加
            var marker = new google.maps.Marker({
                position: tokyoTower,
                map: map,
                title: '東京タワー'
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('YOUR_API_KEY') }}&callback=initMap" async defer></script>
</body>
</html>
