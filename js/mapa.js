var jsvar = '<?=$cor1?>';

function myMap() {

var mapProp= {
  center:new google.maps.LatLng(11.126042648897803, -75.85847375879061),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}