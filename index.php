<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web GIS Kabupaten Sleman</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #27ae60;
            --accent-color: #3498db;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: white !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 1rem 2rem;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-color) !important;
        }

        .nav-link {
            color: var(--primary-color) !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--secondary-color) !important;
        }

        #container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
            gap: 2rem;
        }

        .header-section {
            text-align: center;
            margin-bottom: 2rem;
            padding: 2rem 0;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border-radius: 10px;
            width: 100%;
            max-width: 1200px;
        }

        .header-section h1 {
            color: white;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .header-section h2 {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.5rem;
            font-weight: 300;
        }

        #map {
            width: 100%;
            max-width: 1200px;
            height: 600px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border: 2px solid #fff;
        }

        #table-container {
            width: 100%;
            max-width: 1200px;
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 1rem;
        }

        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
        }

        .btn-warning {
            background-color: #f39c12;
            border: none;
            color: white;
        }

        .btn-danger {
            background-color: #e74c3c;
            border: none;
        }

        .modal-content {
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            background-color: var(--primary-color);
            color: white;
            border-radius: 12px 12px 0 0;
        }

        .modal-title {
            color: white;
        }

        .btn-close {
            filter: brightness(0) invert(1);
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 0.75rem;
        }

        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }

        .alert {
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            #container {
                padding: 1rem;
            }
            
            .header-section {
                padding: 1.5rem 0;
            }

            .header-section h1 {
                font-size: 2rem;
            }

            .header-section h2 {
                font-size: 1.2rem;
            }

            #map {
                height: 400px;
            }

            #table-container {
                padding: 1rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fa-solid fa-map-location-dot me-2"></i>
                Kabupaten Sleman
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="https://geoportal.slemankab.go.id/#/" target="_blank">
                            <i class="fa-solid fa-layer-group me-2"></i>Sumber Data
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#infoModal">
                            <i class="fa-solid fa-circle-info me-2"></i>Info
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <div id="container" class="container">
        <div class="header-section">
            <h1>Web GIS</h1>
            <h2>Kabupaten Sleman</h2>
        </div>

        <!-- Map -->
        <div id="map"></div>

        <!-- Table Container -->
        <div id="table-container">
            <!-- PHP code remains the same -->
            <?php
            // Your existing PHP code here
            ?>
        </div>
    </div>

    <!-- Info Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Info Pembuat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Nama</th>
                            <td>Muhammad Irfan</td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td>23/518541/SV/22995</td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>PG WEB B</td>
                        </tr>
                        <tr>
                            <th>Github</th>
                            <td><a href="https://github.com/miravann" target="_blank">github.com/miravann</a></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Your existing JavaScript/Leaflet code here
        var map = L.map("map").setView([-7.7681, 110.2957], 12);

        var osm = L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        });

        var Esri_WorldImagery = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
        });

        var rupabumiindonesia = L.tileLayer('https://geoservices.big.go.id/rbi/rest/services/BASEMAP/Rupabumi_Indonesia/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Badan Informasi Geospasial'
        });

        rupabumiindonesia.addTo(map);
        L.control.scale({ position: "bottomright", imperial: false }).addTo(map);

        // Base maps control
        var baseMaps = {
            "OpenStreetMap": osm,
            "Satellite": Esri_WorldImagery,
            "Rupabumi Indonesia": rupabumiindonesia
        };

        L.control.layers(baseMaps).addTo(map);

        function confirmDelete(kecamatan) {
            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: 'Apakah Anda yakin ingin menghapus data ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#e74c3c',
                cancelButtonColor: '#95a5a6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '?delete=' + kecamatan;
                }
            });
        }
    </script>
</body>

</html>