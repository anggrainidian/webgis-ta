        <!-- Main Footer Start -->
        <footer class="main--footer main--footer-transparent">
                <p>Copyright &copy; <a href="#">AnggrainiDianS</a>. Politala.</p>
            </footer>
            <!-- Main Footer End -->
        </main>
        <!-- Main Container End -->
    </div>
    <!-- Wrapper End -->

    <!-- Scripts -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/jquery-ui.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/jquery.sparkline.min.js"></script>
    <script src="../../assets/js/raphael.min.js"></script>
    <script src="../../assets/js/morris.min.js"></script>
    <script src="../../assets/js/select2.min.js"></script>
    <script src="../../assets/js/jquery-jvectormap.min.js"></script>
    <script src="../../assets/js/jquery-jvectormap-world-mill.min.js"></script>
    <script src="../../assets/js/horizontal-timeline.min.js"></script>
    <script src="../../assets/js/jquery.validate.min.js"></script>
    <script src="../../assets/js/jquery.steps.min.js"></script>
    <script src="../../assets/js/dropzone.min.js"></script>
    <script src="../../assets/js/ion.rangeSlider.min.js"></script>
    <script src="../../assets/js/datatables.min.js"></script>
    <script src="../../assets/js/main.js"></script>

    <!-- Page Level Scripts -->

</body>
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>

   <script>
    <?php
        echo "var mymap = L.map('mapid').setView([-3.7694047, 114.8092691], 10);";
    ?>
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
}).addTo(mymap);
</script>
</html>
