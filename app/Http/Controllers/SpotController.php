<?php
// File: app/Http/Controllers/SpotController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpotController extends Controller
{
    public function spots()
    {
        $spots = [
            [
                'image' => 'assets/picutures/monumentArc.svg',
                'title' => 'San Miguel Welcome Arch Monument',
                'location' => 'Boundary of San Ildefonso and San Miguel National road',
                'description' => 'Selfie, Stopover',
            ],
            [
                'image' => 'assets/picutures/parishSMB.svg',
                'title' => 'Diocesan Shrine and Parish of San Miguel Archangel',
                'location' => 'Poblacion, San Miguel',
                'description' => 'Pray, Sightseeing, Search for Maximo Viola’s tombstone',
            ],
            [
                'image' => 'assets/picutures/tecsonHouse.svg',
                'title' => 'Tecson Ancestral House',
                'location' => 'Rizal St., San Miguel',
                'description' => 'Sightseeing, Selfie, Historical Tour',
            ],
            [
                'image' => 'assets/picutures/tecsonShrine.svg',
                'title' => 'Simon Tecson Historical Marker',
                'location' => 'Rizal St., San Miguel',
                'description' => 'Sightseeing, Selfie, Historical Tour',
            ],
            [
                'image' => 'assets/picutures/villasenor.svg',
                'title' => 'Villacorte‑Villaseñor Ancestral House',
                'location' => 'Rizal St., San Miguel',
                'description' => 'Sightseeing, Selfie',
            ],
            [
                'image' => 'assets/picutures/sevilla.svg',
                'title' => 'Sevilla Ancestral House',
                'location' => 'Tecson St., San Miguel',
                'description' => 'Sightseeing, Selfie',
            ],
            [
                'image' => 'assets/picutures/camp-tecson.svg',
                'title' => 'First Scout Ranger Regiment: Camp Tecson',
                'location' => 'Brgy. Sibul, San Miguel',
                'description' => 'Sightseeing, Selfie',
            ],
            [
                'image' => 'assets/picutures/sibul-spring.svg',
                'title' => 'Sibul Spring Resort',
                'location' => 'Brgy. Sibul, San Miguel',
                'description' => 'A resort built in 1910 but now forgotten and no longer maintained. Place, Sightseeing, Selfie…',
            ],
            [
                'image' => 'assets/picutures/malapad-na-parang.svg',
                'title' => 'Malapad na Parang',
                'location' => 'Sitio Brown, Brgy. Sibul, San Miguel',
                'description' => 'Sightseeing, Selfie, Hiking',
            ],
            [
                'image' => 'assets/picutures/mt-manalmon.svg',
                'title' => 'Mount Manalmon',
                'location' => 'Major jump-off: Sitio Madlum, Brgy. Sibul, San Miguel',
                'description' => 'Hiking, Camping',
            ],
            [
                'image' => 'assets/picutures/madlum-cave.svg',
                'title' => 'Madlum Cave (Manalmon Cave)',
                'location' => 'Sitio Madlum, Brgy. Sibul, San Miguel',
                'description' => 'Hiking, Spelunking, Sightseeing, Swimming',
            ],
            [
                'image' => 'assets/picutures/bayukbok-caves.svg',
                'title' => 'Bayukbok Cave',
                'location' => 'Sitio Madlum, Brgy. Sibul, San Miguel',
                'description' => 'Hiking, Spelunking, Sightseeing',
            ],
            [
                'image' => 'assets/picutures/madlum-falls.svg',
                'title' => 'Madlum Falls',
                'location' => 'Sitio Madlum, Brgy. Sibul, San Miguel',
                'description' => 'Hiking, Sightseeing, Swimming',
            ],
            [
                'image' => 'assets/picutures/madlum-river.svg',
                'title' => 'Madlum River',
                'location' => 'Sitio Madlum, Brgy. Sibul, San Miguel',
                'description' => 'Sightseeing, Swimming',
            ],
            [
                'image' => 'assets/picutures/mt-gola.svg',
                'title' => 'Mount Gola',
                'location' => 'Major jump-off: Sitio Madlum, Brgy. Sibul, San Miguel',
                'description' => 'Hiking, Hiking, Camping',
            ],
            [
                'image' => 'assets/picutures/cabin-resorts.svg',
                'title' => 'The Cabin Resorts',
                'location' => 'San Miguel',
                'description' => 'Swimming, Archery, Kayaking, Bike, Badminton, Hotel, Fishing',
            ],
            [
                'image' => 'assets/picutures/kamote-resort.svg',
                'title' => 'Kamote Resort',
                'location' => 'Sitio Balingkupang, Biak-na-Bato, San Miguel',
                'description' => 'Swimming, Picnic, Hiking, Fishing',
            ],
            [
                'image' => 'assets/picutures/banal-na-bundok.svg',
                'title' => 'Banal na Bundok',
                'location' => 'Sitio Balingkupang, Biak-na-Bato, San Miguel',
                'description' => 'Sightseeing, Picnic, Selfie',
            ],
            [
                'image' => 'assets/picutures/biak-na-bato-park.svg',
                'title' => 'Biak-na-Bato National Park',
                'location' => 'Biak-na-Bato, San Miguel',
                'description' => 'Sightseeing, Hiking, Swimming, Picnic',
            ],
            [
                'image' => 'assets/picutures/bahay-paniki.svg',
                'title' => 'Bahay Paniki Cave',
                'location' => 'Inside Biak-na-Bato National Park',
                'description' => 'Hiking, Spelunking, Sightseeing',
            ],
            [
                'image' => 'assets/picutures/aguinaldo-cave.svg',
                'title' => 'Aguinaldo Cave',
                'location' => 'Inside Biak-na-Bato National Park',
                'description' => 'Hiking, Spelunking, Sightseeing',
            ],
            [
                'image' => 'assets/picutures/cuarto-cuarto-cave.svg',
                'title' => 'Cuarto-Cuarto Cave',
                'location' => 'Inside Biak-na-Bato National Park',
                'description' => 'Hiking, Spelunking, Sightseeing',
            ],
            [
                'image' => 'assets/picutures/tilandong-falls.svg',
                'title' => 'Tilandong Falls',
                'location' => 'Inside Biak-na-Bato National Park',
                'description' => 'Sightseeing, Hiking, Swimming, Picnic',
            ],
            [
                'image' => 'assets/picutures/tanggapan-cave.svg',
                'title' => 'Tanggapan Cave',
                'location' => 'Inside Biak-na-Bato National Park',
                'description' => 'Hiking, Spelunking, Sightseeing',
            ],
            [
                'image' => 'assets/picutures/hospital-cave.svg',
                'title' => 'Hospital Cave',
                'location' => 'Inside Biak-na-Bato National Park',
                'description' => 'Hiking, Spelunking, Sightseeing',
            ],
            [
                'image' => 'assets/picutures/imbakan-cave.svg',
                'title' => 'Imbakan Cave',
                'location' => 'Inside Biak-na-Bato National Park',
                'description' => 'Hiking, Spelunking, Sightseeing',
            ],
            [
                'image' => 'assets/picutures/ambush-cave.svg',
                'title' => 'Ambush Cave',
                'location' => 'Inside Biak-na-Bato National Park',
                'description' => 'Hiking, Spelunking, Sightseeing',
            ],
            [
                'image' => 'assets/picutures/pahingahan-cave.svg',
                'title' => 'Pahingahan Cave',
                'location' => 'Inside Biak-na-Bato National Park',
                'description' => 'Hiking, Spelunking, Sightseeing',
            ],
            [
                'image' => 'assets/picutures/maningning-cave.svg',
                'title' => 'Maningning Cave',
                'location' => 'Inside Biak-na-Bato National Park',
                'description' => 'Hiking, Spelunking, Sightseeing',
            ],
            [
                'image' => 'assets/picutures/mt-mabio.svg',
                'title' => 'Mount Mabio (Mount Silid)',
                'location' => 'Biak-na-Bato, San Miguel',
                'description' => 'Hiking, Sightseeing',
            ],
            [
                'image' => 'assets/picutures/balaong-river.svg',
                'title' => 'Balaong River',
                'location' => 'San Miguel',
                'description' => 'Swimming, Rafting, Picnic, Fishing',
            ],
        ];

        $spotImage = 'assets/picutures/hero-spot.svg'; // optional hero image

        return view('spots', compact('spots', 'spotImage'));
    }
}