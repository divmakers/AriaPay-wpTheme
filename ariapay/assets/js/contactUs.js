var mapDesktop = L.map("mapDesktop").setView([36.2931, 59.5916], 13);
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(mapDesktop);
// L.control.locate().addTo(map);

var mapMobaile = L.map("mapMobaile").setView([36.2931, 59.5916], 13);
L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(mapMobaile);

var greenIcon = L.icon({
  iconUrl: localdata.assetsurl + "/images/contactUs-map.png",
  iconSize: [24, 30],
  shadowSize: [50, 64],
  iconAnchor: [22, 94],
  shadowAnchor: [4, 62],
  popupAnchor: [-3, -76],
});

L.marker([36.2931, 59.5916], { icon: greenIcon }).addTo(mapDesktop);
L.marker([36.2931, 59.5916], { icon: greenIcon }).addTo(mapMobaile);

$(document).ready(function () {
  $(".table-click").click(function () {
    $(".content").addClass("hidden");
    $(".table-click").removeClass("active-table");
    var contentID = $(this).attr("id").replace("btn", "content");
    $(`#${contentID}`).removeClass("hidden");
    $(this).addClass("active-table");
  });
});
