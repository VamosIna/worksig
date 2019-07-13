<div id="map" ></div>
        <div class="visible-lg visible-md">           
            <div id="sidemenu" class="well">     
                <div class="form-group">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <label>Cari Nama Atau Kategori</label>
                            <input type="text" class="form-control input-sm" id="myInput" onkeyup="myFunction()" placeholder="Search Location">   
                        </div>
                    </div>                    
                </div>
                <div class="list-group point-list-view">
                <table id = "myTable">
                <?php 
                $no = 1;
                foreach ($semua as $u) { ?>
                <tr>
                    <td>
                        <a target="_blank" href="<?php echo base_url()."c_user/detail/".$u->id_utama ?>" class="list-group-item point-item"> 
                        <h4 class="list-group-item-heading" ><?php echo $no.". ".$u->nama_utama ?></h4>
                        <p class="list-group-item-text">
                        <?php echo "Kategori : ".$u->nama_kategori ?>
                        </p> 
                        </a>
                    </td>
                </tr>
                    <?php 
                    $no++ ;
                    } ?>
                </table>
                </div>

            </div>
        </div>
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCF9IAT3wT0854y_7-Oph9JDmxL8tY8acU"></script>
        <script src="<?php echo base_url('assets/user/') ?>Bing.js"></script>

        <script type="text/javascript" src="https://leafletjs.com/examples/choropleth/us-states.js"></script>

       <script type="text/javascript">
       
        window.onload = function() {            
        var bingKey = "AlTq6EVcon6TNnja0zdhtpZOIqvNHsMLJaSdItdwSlX7sNYKhfdBotjP8clyPdDd";
        var mapBoxKey = "pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejh2N21nMzAxMmQzMnA5emRyN2lucW0ifQ.jSE-g2vsn48Ry928pqylcg";
        var cmd = new L.TileLayer('http://{s}.tile.cloudmade.com/4c09f91134dc40008537e4bbdf6b606e/22677/256/{z}/{x}/{y}.png');
        var mpn = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'});

        var gstl = new L.TileLayer('http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}');
        var grmp = new L.TileLayer('https://mt1.google.com/vt/lyrs=r&x={x}&y={y}&z={z}');
        var ghby = new L.TileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}');
        var gtrn = new L.TileLayer('https://mt1.google.com/vt/lyrs=t&x={x}&y={y}&z={z}');
        var groad = new L.TileLayer('https://mt1.google.com/vt/lyrs=h&x={x}&y={y}&z={z}'); 

        var bingAerial = new L.BingLayer(bingKey,{type: 'aerial'});
        var bingMapRoad = new L.BingLayer(bingKey,{type: 'road'});        
        var bingCanvas = new L.BingLayer(bingKey,{type : 'canvasLight'});
        var bingDark = new L.BingLayer(bingKey,{type : 'canvasDark'});

        var mapboxTiles = L.tileLayer('https://api.mapbox.com/v4/mapbox.streets/{z}/{x}/{y}.png?access_token=' + mapBoxKey, { 
            attribution: '© <a href="https://www.mapbox.com/feedback/">Mapbox</a> © <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'});

        var mapBoxLight = new L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=' + mapBoxKey, {
            id: 'mapbox.light',
            attribution: '© <a href="https://www.mapbox.com/feedback/">Mapbox</a> © <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'});

        var workingspaceLayer = new L.LayerGroup();
        var coffeeshopLayer = new L.LayerGroup();
        var publicplacesLayer = new L.LayerGroup();
        var wifiareaLayer = new L.LayerGroup();
        var libraryLayer = new L.LayerGroup();
        
        var baseMaps = { 'Google Maps':grmp, 'Google Hybrid' : ghby, 'GoogleSatellite' : gstl, 'Google Terrain': gtrn,'Google Road': groad, 'Cloudmade':cmd, 'Mapnik':mpn,'Bing Maps Road': bingMapRoad,'Bing Aerial':bingAerial, 'Bing Canvas':bingCanvas,'Bing Dark':bingDark, 'Map Box Tiles ': mapboxTiles, 'Map Box Light': mapBoxLight};
        var pointGroup = {'working space':workingspaceLayer, 'coffee shop':coffeeshopLayer, 'public spaces':publicplacesLayer, 'wifi area':wifiareaLayer,'library':libraryLayer};  

        var map = new L.Map('map', {
                    center: new L.LatLng(-7.966327817582477, 112.62072346321777),
                    zoom: 12 , 
                    layers: [grmp, workingspaceLayer, coffeeshopLayer, publicplacesLayer, wifiareaLayer, libraryLayer]
                });
            map.addControl(new L.Control.Scale());
            map.addControl(new L.Control.Layers(baseMaps, pointGroup));

            map.on('click', onMapClick);


            var popup = new L.Popup();

            function onMapClick(e) {
                var latlngStr = '(' + e.latlng.lat + ', ' + e.latlng.lng + ')';

                popup.setLatLng(e.latlng);
                popup.setContent("Koordinat yang Anda Pilih:<br/>" + latlngStr);
                map.openPopup(popup);
            }
            var iconWahana = L.icon({
                iconUrl: '<?php echo base_url('assets/user/') ?>working.png',
                //shadowUrl: 'leaf-shadow.png',

                iconSize:     [45, 47],
                shadowSize:   [0, 0],
                iconAnchor:   [22, 40],
                shadowAnchor: [4, 62], 
                popupAnchor:  [0, -30] 

            
            });
             var iconTaman = L.icon({
                iconUrl: '<?php echo base_url('assets/user/') ?>coffeshop.png',           
                iconSize:     [45, 47],
                shadowSize:   [0, 0],
                iconAnchor:   [22, 40],
                shadowAnchor: [4, 62], 
                popupAnchor:  [0, -30] 

            
            });
             var iconAlam = L.icon({
                iconUrl: '<?php echo base_url('assets/user/') ?>public.png',
                iconSize:     [45, 47],
                shadowSize:   [0, 0],
                iconAnchor:   [22, 40],
                shadowAnchor: [4, 62], 
                popupAnchor:  [0, -30] 

            
            });
             var iconSejarah = L.icon({
                iconUrl: '<?php echo base_url('assets/user/') ?>wifi.png',
                iconSize:     [45, 47],
                shadowSize:   [0, 0],
                iconAnchor:   [22, 40],
                shadowAnchor: [4, 62], 
                popupAnchor:  [0, -30] 

            
            });
             var iconRenang = L.icon({
                iconUrl: '<?php echo base_url('assets/user/') ?>library.png',
                iconSize:     [45, 47],
                shadowSize:   [0, 0],
                iconAnchor:   [22, 40],
                shadowAnchor: [4, 62], 
                popupAnchor:  [0, -30] 

            
            });


            <?php            
            foreach ($working as $u) { ?>
            var working = L.marker([<?php echo $u->lat.",".$u->long ?>],{icon:iconWahana, title: '<?php echo $u->nama_utama ?>'})
            .bindPopup('<center><img width="80px;" src="<?php echo base_url('assets/images/') . $u->gambar_utama ?>"></center><a href="<?php echo base_url()."c_user/detail/".$u->id_utama ?>" target="_blank"><?php echo $u->nama_utama ?>');            
              workingspaceLayer.addLayer(working);
            <?php
            } ?>

             <?php            
            foreach ($coffee as $u) { ?>
            var coffee = L.marker([<?php echo $u->lat.",".$u->long ?>],{icon: iconTaman, title: '<?php echo $u->nama_utama ?>'})
            .bindPopup('<center><img width="80px;" src="<?php echo base_url('assets/images/') . $u->gambar_utama ?>"></center><a href="<?php echo base_url()."c_user/detail/".$u->id_utama ?>" target="_blank"><?php echo $u->nama_utama ?>');            
             coffeeshopLayer.addLayer(coffee);    
            <?php
            } ?>

            <?php            
            foreach ($public as $u) { ?>
            var public = L.marker([<?php echo $u->lat.",".$u->long ?>],{icon: iconAlam, title: '<?php echo $u->nama_utama ?>'})
            .bindPopup('<center><img width="80px;" src="<?php echo base_url('assets/images/') . $u->gambar_utama ?>"></center><a href="<?php echo base_url()."c_user/detail/".$u->id_utama ?>" target="_blank"><?php echo $u->nama_utama ?>');            
            publicplacesLayer.addLayer(public); 
            <?php
            } ?>

             <?php            
            foreach ($wifi as $u) { ?>
            var wifi = L.marker([<?php echo $u->lat.",".$u->long ?>], {icon: iconSejarah, title: '<?php echo $u->nama_utama ?>'})
            .bindPopup('<center><img width="80px;" src="<?php echo base_url('assets/images/') . $u->gambar_utama ?>"></center><a href="<?php echo base_url()."c_user/detail/".$u->id_utama ?>" target="_blank"><?php echo $u->nama_utama ?>')            
            wifiareaLayer.addLayer(wifi);          
            <?php
            } ?>

             <?php            
            foreach ($library as $u) { ?>
            var library = L.marker([<?php echo $u->lat.",".$u->long ?>], {icon: iconRenang, title: '<?php echo $u->nama_utama ?>'})
            .bindPopup('<center><img width="80px;" src="<?php echo base_url('assets/images/') . $u->gambar_utama ?>"></center><a href="<?php echo base_url()."c_user/detail/".$u->id_utama ?>" target="_blank"><?php echo $u->nama_utama ?>');            
             libraryLayer.addLayer(library);      
            <?php
            } ?> 

            var info = L.control({position: 'bottomleft'});
                info.onAdd = function (map) {
                this._div = L.DomUtil.create('div', 'info');
                this.update();
                return this._div;
                };

                info.update = function (props) {
                this._div.innerHTML = 
                "<h4>Legenda</h4><img src='<?php echo base_url('assets/user/') ?>working.png'>working <br>"+
                "<img src='<?php echo base_url('assets/user/') ?>coffeshop.png'>coffee<br>"+
                "<img src='<?php echo base_url('assets/user/') ?>public.png'>public<br>"+
                "<img src='<?php echo base_url('assets/user/') ?>wifi.png'>wifi<br>"+
                "<img src='<?php echo base_url('assets/user/') ?>library.png'>library"
                };

          info.addTo(map);
            
                         
          
           // pop.addLayer(info);
            // pop.addLayer(geojson);
            // pop.addLayer(legend);
            
            }           
    </script>

    <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>