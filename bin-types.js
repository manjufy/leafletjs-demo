/**
 * Created by Manjunath Reddy <manju16832003@gmail.com> on 8/22/15.
 * Part of Cyberjaya City Hackathon, Malaysia, 22nd Sept 2015
 */
var greenIcon = L.icon({
    iconUrl: 'images/bin.png',
    iconSize: [38, 38], // size of the icon
    iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
});

var bin = L.icon({
    iconUrl: 'images/bin.png',
    iconSize: [38, 38], // size of the icon
    iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
});

var paper = [
    L.icon({
        iconUrl: 'images/paper.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/paper1.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/paper2.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/paper3.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/paper4.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    })
];


var plastic = [
    L.icon({
        iconUrl: 'images/plastic.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/plastic1.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/plastic2.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/plastic3.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/plastic4.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    })
];


var glass = [
    L.icon({
        iconUrl: 'images/glass.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/glass1.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/glass2.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/glass3.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/glass4.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    })
];

var can = [
    L.icon({
        iconUrl: 'images/can.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/can1.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/can2.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/can3.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/can4.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    })
];

var battery = [
    L.icon({
        iconUrl: 'images/battery.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/battery1.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/battery2.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/battery3.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    }),
    L.icon({
        iconUrl: 'images/battery4.png',
        iconSize: [38, 38], // size of the icon
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    })
];