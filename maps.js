// function initMap() {
//     // 初始化地图
//     var map = new google.maps.Map(document.getElementById('map'), {
//         center: {lat: 44.6989939, lng: 10.6299336}, // 设置地图中心点的经纬度
//         zoom: 12 // 设置地图缩放级别
//     });

//     // 地址信息和对应的经纬度
//     var locations = [
//         {title: 'Poliambulatorio San Michele, Reggio Emilia', address: 'Via Monte San Michele 5/d, 42121 Reggio Emilia', latLng: {lat: 44.6989939, lng: 10.6299336}},
//         {title: 'Centro Medico Lazzaro Spallanzani, Reggio Emilia', address: 'Via Fratelli Cervi 75/b, 42124 Reggio Emilia', latLng: {lat: 44.6989939, lng: 10.6299336}},
//         {title: 'Centro Palmer, Reggio Emilia', address: 'Via Gianbattista Isacchi 8, 42124 Reggio Emilia', latLng: {lat: 44.6989939, lng: 10.6299336}},
//         {title: 'Poliambulatorio Futura, Scandiano', address: 'Strada Statale 467 n. 26/I, 42019 Scandiano RE', latLng: {lat: 44.6989939, lng: 10.6299336}},
//         {title: 'Check-Up Service Srl, Reggio Emilia', address: 'Via Aristotele 109, 42122 Reggio Emilia', latLng: {lat: 44.6989939, lng: 10.6299336}}
//     ];

//     // 在地图上添加标记（marker）
//     locations.forEach(function(location) {
//         var marker = new google.maps.Marker({
//             position: location.latLng, // 设置标记位置的经纬度
//             map: map, // 将标记添加到地图上
//             title: location.title // 设置标记标题
//         });

//         // 添加信息窗口
//         var infowindow = new google.maps.InfoWindow({
//             content: '<h2>' + location.title + '</h2><p>' + location.address + '</p>'
//         });

//         // 点击标记时显示信息窗口
//         marker.addListener('click', function() {
//             infowindow.open(map, marker);
//         });
//     });
// }








