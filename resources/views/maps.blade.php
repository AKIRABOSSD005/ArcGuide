<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Map| ArcGuide</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/icons/logo.svg') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg bg-body-light px-5">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand mx-auto" href="{{ url('/') }}" onclick="reloadPage()">
                    <img src="{{ asset('assets/icons/logo.svg') }}" alt="Logo"
                        class="logo d-inline-block align-text-top" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About San Miguel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/spots') }}">Tourists Spots</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/maps') }}">Maps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/events') }}">Events</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="main">
            <div class="hero-section d-flex align-items-center" id="home">
                <div class="hero-content w-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-10 col-md-8 col-lg-7 text-start">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="map" style="height: 600px; width: 100%;"></div>


            <div class="footer">
                <div class="container text-center py-4">
                    <p class="mb-0" style="color: #123c63;">&copy; 2025 ArcGuide. All rights reserved.</p>
                    <p class="mb-0" style="color: #123c63;">Made with ❤️ by EGDD</p>
                </div>
            </div>
        </div>



    </div>



    <script src="{{ asset('assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQQWsi8gFQ4IK9c2GgWSnnbey0lq3K-_U&callback=initMap">
        </script>
    <script>
        function initMap() {
            const sanMiguel = { lat: 15.1503, lng: 120.9610 }; // San Miguel Bulacan center
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 12,
                center: sanMiguel,
            });

            const spots = [
                {
                    title: "San Miguel Welcome Arch Monument",
                    position: { lat: 15.118739916297795, lng: 120.9481741319795 },
                    description: "Selfie, Stopover",
                    image: "/assets/picutures/monumentArc.svg"
                },
                {
                    title: "Diocesan Shrine and Parish of San Miguel Archangel",
                    position: { lat: 15.14068068256509, lng: 120.97678221523331 },
                    description: "Pray, Sightseeing, Search for Maximo Viola’s tombstone",
                    image: "/assets/picutures/parishSMB.svg"
                },
                {
                    title: "Tecson Ancestral House",
                    position: { lat:15.138802324191047, lng:120.9710330123614},
                    description: "Sightseeing, Selfie, Historical Tour",
                    image: "/assets/picutures/tecsonHouse.svg"
                },
                {
                    title: "Simon Tecson Historical Marker",
                    position: { lat:15.138750541673685, lng:120.97109738537479 },
                    description: "Sightseeing, Selfie, Historical Tour",
                    image: "/assets/picutures/tecsonShrine.svg"
                },
                {
                    title: "Villacorte-Villaseñor Ancestral House",
                    position: { lat:15.140255524008701, lng:120.96938672400613},
                    description: "Sightseeing, Selfie",
                    image: "/assets/picutures/villasenor.svg"
                },
                {
                    title: "Sevilla Ancestral House",
                    position: { lat:15.139441314933999, lng:120.97324801605956},
                    description: "Sightseeing, Selfie",
                    image: "/assets/picutures/sevilla.svg"
                },
                {
                    title: "First Scout Ranger Regiment: Camp Tecson",
                    position: { lat:15.175862558771026, lng:121.04726617196899},
                    description: "Sightseeing, Selfie",
                    image: "/assets/picutures/camp-tecson.svg"
                },
                {
                    title: "Sibul Spring Resort",
                    position: { lat:15.167487023212374, lng:121.06062705342066 },
                    description: "A resort built in 1910 but now forgotten and no longer maintained. Place, Sightseeing, Selfie…",
                    image: "/assets/picutures/sibul-spring.svg"
                },
                {
                    title: "Malapad na Parang",
                    position: { lat:15.183778477910273, lng:121.07659988030663},
                    description: "Sightseeing, Selfie, Hiking",
                    image: "/assets/picutures/malapad-na-parang.svg"
                },
                {
                    title: "Mount Manalmon",
                    position: { lat:15.162922681266442, lng:121.09123031605986},
                    description: "Hiking, Camping",
                    image: "/assets/picutures/mt-manalmon.svg"
                },
                {
                    title: "Madlum Cave (Manalmon Cave)",
                    position: { lat:15.170738605720496, lng:121.08376266716795},
                    description: "Hiking, Spelunking, Sightseeing, Swimming",
                    image: "/assets/picutures/madlum-cave.svg"
                },
                {
                    title: "Bayukbok Caves",
                    position: { lat:15.17030054643203, lng:21.08266839880018 },
                    description: "Hiking, Spelunking, Sightseeing",
                    image: "/assets/picutures/bayukbok-caves.svg"
                },
                {
                    title: "Madlum Falls",
                    position: { lat:15.170216468334857, lng:121.08271147525761 },
                    description: "Hiking, Sightseeing, Swimming",
                    image: "/assets/picutures/madlum-falls.svg"
                },
                {
                    title: "Madlum River",
                    position: { lat:15.170216468334857, lng:121.08271147525761 },
                    description: "Sightseeing, Swimming",
                    image: "/assets/picutures/madlum-river.svg"
                },
                {
                    title: "Mount Gola",
                    position: { lat:15.163758148798458, lng:121.09393247188186 },
                    description: "Hiking, Hiking, Camping",
                    image: "/assets/picutures/mt-gola.svg"
                },
                {
                    title: "The Cabin Resorts",
                    position: { lat:15.153739803064282, lng:120.95006172484904 },
                    description: "Swimming, Archery, Kayaking, Bike, Badminton, Hotel, Fishing",
                    image: "/assets/picutures/cabin-resorts.svg"
                },
                {
                    title: "Kamote Resort",
                    position: { lat:15.117496303343799, lng:121.05885836633448 },
                    description: "Swimming, Picnic, Hiking, Fishing",
                    image: "/assets/picutures/kamote-resort.svg"
                },
                {
                    title: "Banal na Bundok",
                    position: { lat:15.125180514532936, lng:121.05861138537483 },
                    description: "Sightseeing, Picnic, Selfie",
                    image: "/assets/picutures/banal-na-bundok.svg"
                },
                {
                    title: "Biak-na-Bato National Park",
                    position: { lat:15.11082318428785, lng:121.07028210917954},
                    description: "Sightseeing, Hiking, Swimming, Picnic",
                    image: "/assets/picutures/biak-na-bato-park.svg"
                },
                {
                    title: "Bahay Paniki Cave",
                    position: { lat:15.11082318428785, lng:121.07028210917954 },
                    description: "Hiking, Spelunking, Sightseeing",
                    image: "/assets/picutures/bahay-paniki.svg"
                },
                {
                    title: "Aguinaldo Cave",
                    position: { lat:15.11082318428785, lng:121.07028210917954 },
                    description: "Hiking, Spelunking, Sightseeing",
                    image: "/assets/picutures/aguinaldo-cave.svg"
                },
                {
                    title: "Cuarto-Cuarto Cave",
                    position: { lat:15.11082318428785, lng:121.07028210917954 },
                    description: "Hiking, Spelunking, Sightseeing",
                    image: "/assets/picutures/cuarto-cuarto-cave.svg"
                },
                {
                    title: "Tilandong Falls",
                    position: { lat:15.11082318428785, lng:121.07028210917954 },
                    description: "Sightseeing, Hiking, Swimming, Picnic",
                    image: "/assets/picutures/tilandong-falls.svg"
                },
                {
                    title: "Tanggapan Cave",
                    position: {lat:15.11082318428785, lng:121.07028210917954 },
                    description: "Hiking, Spelunking, Sightseeing",
                    image: "/assets/picutures/tanggapan-cave.svg"
                },
                {
                    title: "Hospital Cave",
                    position: { lat:15.11082318428785, lng:121.07028210917954 },
                    description: "Hiking, Spelunking, Sightseeing",
                    image: "/assets/picutures/hospital-cave.svg"
                },
                {
                    title: "Imbakan Cave",
                    position: { lat:15.11082318428785, lng:121.07028210917954 },
                    description: "Hiking, Spelunking, Sightseeing",
                    image: "/assets/picutures/imbakan-cave.svg"
                },
                {
                    title: "Ambush Cave",
                    position: { lat:15.11082318428785, lng:121.07028210917954 },
                    description: "Hiking, Spelunking, Sightseeing",
                    image: "/assets/picutures/ambush-cave.svg"
                },
                {
                    title: "Pahingahan Cave",
                    position: { lat:15.11082318428785, lng:121.07028210917954 },
                    description: "Hiking, Spelunking, Sightseeing",
                    image: "/assets/picutures/pahingahan-cave.svg"
                },
                {
                    title: "Maningning Cave",
                    position: { lat:15.11082318428785, lng:121.07028210917954 },
                    description: "Hiking, Spelunking, Sightseeing",
                    image: "/assets/picutures/maningning-cave.svg"
                },
                {
                    title: "Mount Mabio (Mount Silid)",
                    position: { lat:15.113944068060727, lng:121.0968196677695 },
                    description: "Hiking, Sightseeing",
                    image: "/assets/picutures/mt-mabio.svg"
                },
                {
                    title: "Balaong River",
                    position: { lat:15.132992328037409, lng:121.04011869535444 },
                    description: "Swimming, Rafting, Picnic, Fishing",
                    image: "/assets/picutures/balaong-river.svg"
                }
            ];


            spots.forEach(spot => {
                const marker = new google.maps.Marker({
                    position: spot.position,
                    map: map,
                    title: spot.title,
                });

                const infoWindow = new google.maps.InfoWindow({
                    content: `
                <div style="max-width:200px">
                    <h6>${spot.title}</h6>
                    <img src="${spot.image}" style="width:100%;border-radius:8px" />
                    <p class="text-muted small">${spot.description}</p>
                </div>
            `,
                });

                marker.addListener("click", () => {
                    infoWindow.open(map, marker);
                });
            });
        }

    </script>

</body>

</html>