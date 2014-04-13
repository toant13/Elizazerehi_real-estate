$(function() {
    // location placeholder
    var location = null;
    
    // if we know the latitude/longitude
    location = new google.maps.LatLng(34.10565, -118.49216);
    // else we know the address
    var address = "12611 Promontory Rd, Los Angeles, CA 90049";

    // map options
    var options = {
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    // create a geocoder instance
    var geocoder = new google.maps.Geocoder();

    // map canvas instance
    var $map = $("#map_canvas");
    var map = new google.maps.Map($map[0], options);

    if (!location) {
        // let's geocode the address and get lat/lng
        geocoder.geocode(
            { 'address': address },
            function(results, status) {
                console.log(results);
                if (status == google.maps.GeocoderStatus.OK) {
                    location = results[0].geometry.location;
                    setupMarker();
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            }
        );
    } else {
        setupMarker();
    }
    
    function setupMarker() {
        // center on location
        map.setCenter(location);
        // set zoom level
        map.setZoom(13);
        // marker instance
        var marker = new google.maps.Marker({
            map: map,
            position: location
        });
        
        var contentString = '<h3><a target="_blank" href="https://maps.google.com/maps?q=12611%2BPromontory%2BRd.%2BLos%2BAngeles,%2BCA%2B90049&daddr=12611+Promontory+Rd,+Los+Angeles,+CA+90049&hl=en&geocode=%3BCZlN07TXTRe4FTVpCAId__Pv-Cl3FkIqyqLCgDFxT-BNkEzCHA&t=m&hnear=12611+Promontory+Rd,+Los+Angeles,+California+90049&z=12">12611 Promontory Rd</a></h3><p><strong>Los Angeles, CA 90049</strong></p><hr><p><a target="_blank" href="https://maps.google.com/maps?q=12611%2BPromontory%2BRd.%2BLos%2BAngeles,%2BCA%2B90049&daddr=12611+Promontory+Rd,+Los+Angeles,+CA+90049&hl=en&geocode=%3BCZlN07TXTRe4FTVpCAId__Pv-Cl3FkIqyqLCgDFxT-BNkEzCHA&t=m&hnear=12611+Promontory+Rd,+Los+Angeles,+California+90049&z=12">Directions</a>';

        // infowindow instance
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        
        // add event listener to marker click
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });
        
        // add link click handler for outgoing links
        $map.find("a[href^='http://']").live("click", function(){
            window.open(this.href);
            return false;
        });;
    }
});