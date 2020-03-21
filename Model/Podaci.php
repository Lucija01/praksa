<?php
$json = '{
    "objekt": {
        "glavniPodaci": {
            "title": "Apartmani",
            "logo": {
                "url": "https://i.croatiaimages.com/a/desktop/images/logos/logo-adriatic.hr-hr.2fd85bab299.svg",
                "altText": "logo"
            },
            "naslov": "Apartmani uz more Kali(Ugljan) ",
            "slike": {
                "slika1": {
                    "url": "https://i.croatiaimages.com/private-accommodation/837/dalmatia-apartments-near-beach-property-3.jpg?v=0531ef9594",
                    "altText": "Kali, Ugljan, Objekt 837 - Apartmani blizu mora sa šljunčanom plažom.",
                    "titleText": "Objekt"
                },
                "slika2": {
                    "url": "https://i.croatiaimages.com/private-accommodation/837/dalmatia-apartments-near-beach-courtyard-1.jpg?v=0531ef9594",
                    "altText": "Kali, Ugljan, Dvorište 837 - Apartmani blizu mora sa šljunčanom plažom.",
                    "titleText": "Dvoriste"
                },
                "slika3": {
                    "url": "https://i.croatiaimages.com/places/292/dalmatia-ugljan-kali-croatia-1.jpg?v=902c1171df",
                    "altText": "Plaža  u mjestu Kali, Ugljan.",
                    "titleText": "Najbliza plaza"
                }
            },
            "opis": " Kuća 837 u mjestu Kali, Ugljan - Sjeverna Dalmacija ima smještajne jedinice tipa Apartman (2) i udaljena je 20 m od mora. Najbliža plaža ovom smještaju je šljunčana. U kući postoji više apartmana u kojima će vjerojatno boraviti drugi gosti za vrijeme vašeg ljetovanja. Tijekom vašeg boravka, domaćini će također biti u kući. U ovoj je kući moguć besplatni pristup Internetu. Oko kuće postoji dvorište površine 50 m2. Vez za čamac je dostupan, ali ga je potrebno rezervirati unaprijed. U blizini kuće se nalaze: Trgovina, Ljekarna, Bankomat, Restoran. Na udaljenosti većoj od kilometra nalaze se: Hitna medicinska pomoć, Noćni klub, Centar.",
            "maliNaslov": "Dostupni apartmani"
        },
        "jedinice": [
            {
                "id": "1",
                "nazivJedinice": "Apartman1",
                "title": "Apartmani",
                "logo": {
                    "url": "https://i.croatiaimages.com/a/desktop/images/logos/logo-adriatic.hr-hr.2fd85bab299.svg",
                    "altText": "logo"
                },
                "naslov": "Apartmani uz more Kali(Ugljan) ",
                "slike": {
                    "slika1": {
                        "url": "https://i.croatiaimages.com/private-accommodation/837/a-837-a/kali-apartment-living-room-1.jpg?v=0531ef9594",
                        "altText": "prva",
                        "titleText": "Objekt"
                    },
                    "slika2": {
                        "url": "https://i.croatiaimages.com/private-accommodation/837/a-837-a/kali-apartment-dining-room-1.jpg?v=0531ef9594",
                        "altText": "druga",
                        "titleText": "Dvoriste"
                    },
                    "slika3": {
                        "url": "https://i.croatiaimages.com/private-accommodation/837/a-837-a/kali-apartment-dining-room-1.jpg?v=0531ef9594",
                        "altText": "treca",
                        "titleText": " plaza"
                    }
                },
                "naslov2": "Opis smjestaja",
                "opis": "Apartman može primiti 5 gostiju. Ležajevi su raspoređeni u spavaćim sobama kojih ima 2, te u dnevnom boravku, unutar 57m2.<br> Gostima je na raspolaganju vlastiti balkon za uživanje u toplim ljetnim večerima. Dozvoljeno je pripremati hranu korištenjem zajedničkog roštilja.",
                "maliNaslov": "Cjenik",
                "Home": {
                    "homeLink": "../../index.php",
                    "homeNaziv": "Home"
                }
            },
            {
                "id": "2",
                "nazivJedinice": "Apartman2",
                "title": "Apartmani",
                "logo": {
                    "url": "https://i.croatiaimages.com/a/desktop/images/logos/logo-adriatic.hr-hr.2fd85bab299.svg",
                    "altText": "logo"
                },
                "naslov": "Apartmani uz more Kali(Ugljan) ",
                "slike": {
                    "slika1": {
                        "url": "https://i.croatiaimages.com/private-accommodation/837/a-837-b/kali-apartment-living-room-1.jpg?v=0531ef9594",
                        "altText": "slika1",
                        "titleText": "Smjestaj"
                    },
                    "slika2": {
                        "url": "https://i.croatiaimages.com/private-accommodation/837/a-837-b/kali-apartment-terrace-1.jpg?v=0531ef9594",
                        "altText": "slika2",
                        "titleText": "Smjestaj2"
                    },
                    "slika3": {
                        "url": "https://i.croatiaimages.com/private-accommodation/837/a-837-b/kali-apartment-terrace-1.jpg?v=0531ef9594",
                        "altText": "slika3",
                        "titleText": "Smjestaj3"
                    }
                },
                "naslov2": "Opis smjestaja",
                "opis": "Apartman može primiti 3 gostiju. Ležajevi su raspoređeni u spavaćim sobama kojih ima 1, te u dnevnom boravku, unutar 38m2.<br> Gosti mogu uživati u pogledu na more sa vlastite terase. Dozvoljeno je pripremati hranu korištenjem zajedničkog roštilja.",
                "maliNaslov": "Cjenik",
                "Home": {
                    "homeLink": "../../index.php",
                    "homeNaziv": "Home"
                }
            }
        ]
    }
}';


$jsonData = json_decode($json);
