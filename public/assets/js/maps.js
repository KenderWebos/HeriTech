let map;

async function initMap() {
    const { Map } = await google.maps.importLibrary("maps");
    const { AdvancedMarkerElement, PinElement } = await google.maps.importLibrary(
        "marker",
    );

    const pinGlyph = new PinElement({
        glyphColor: "white",
    });

    map = new Map(document.getElementById("map"), {
        center: { lat: -36.798217652937225, lng: -73.05635759079199 },
        zoom: 18,
        mapId: '3a95192313ba8145'
    });


    ubications = [
        { name: 'Gimnasio', q_events: 1, lat: -36.798217652937225, lng: -73.05635759079199 },
        { name: 'Biblioteca', q_events: 5, lat: -36.798226244052096, lng: -73.05541881765998 },
        { name: 'Facultad de Periodismo', q_events: 3, lat: -36.79880614208516, lng: -73.0553061648709 },
        { name: 'Facultad de Ingenieria',q_events: 2, lat: -36.797403640362816, lng: -73.05567899184173 },
        { name: 'Facultad de Educacion',q_events: 1, lat: -36.79831859841869, lng: -73.05404284435055 },
        { name: 'Tomas Moro', q_events: 9, lat: -36.798718083712934, lng: -73.05388861733778 },
        { name: 'Edificio Central', q_events: 3, lat: -36.79777203806005, lng: -73.05815325057253 },
        { name: 'Ciencias Economicas y Administrativas', q_events: 2, lat: -36.79866658792822, lng: -73.0564607766401 },

        { name: 'Capilla', q_events: 6, lat: -36.79740686206734, lng: -73.0560799820812 },
    ]

    ubications.forEach(element => {

        const iconImage = document.createElement("img");
        iconImage.src =
        "https://cdn-icons-png.freepik.com/256/9353/9353832.png";
        iconImage.style = "width:35px; height:auto;"
        const marker = new google.maps.marker.AdvancedMarkerElement({
            position: { lat: element.lat, lng: element.lng },
            map,
            content: iconImage,
            title: element.name,
        });
        const infowindow = new google.maps.InfoWindow({
            maxWidht: 100,
            content: '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h2 id="firstHeading" class="firstHeading">' + element.name + '</h2>' +
                '<div id="bodyContent">' +
                "<h3> Cantidad de Eventos: "+ element.q_events+" </h3><br>" +
                "Quisque tempor, urna sit amet iaculis laoreet, tellus dolor volutpat massa, at aliquam velit est sed magna. Integer vel semper urna, vitae placerat purus." +
                "</div>",
            ariaLabel: element.name,
        });
        marker.addListener("click", () => {
            infowindow.open({
                anchor: marker,
                map,
            });

        });
    });

    // GYM

    // const marker01 = new AdvancedMarkerElement({
    //     map,
    //     position: { lat: -36.798217652937225, lng: -73.05635759079199 },
    //     // content: pinGlyph.element,
    // });

    // // BIBLIOTECA

    // const marker02 = new AdvancedMarkerElement({
    //     map,
    //     position: { lat: -36.798226244052096, lng: -73.05541881765998 },
    //     // content: pinGlyph.element,
    // });

    // // PERIODISMO

    // const markerViewGlyph = new AdvancedMarkerElement({
    //     map,
    //     position: { lat: -36.79880614208516, lng: -73.0553061648709 },
    //     // content: pinGlyph.element,
    // });
}

initMap();