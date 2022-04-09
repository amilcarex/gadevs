document.addEventListener('DOMContentLoaded', function () {

    var map = L.map('mapa').setView([10.148812, -64.677774], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([10.148812, -64.677774]).addTo(map)
        .bindPopup('GA Devs. 2021')
        .openPopup()


});
