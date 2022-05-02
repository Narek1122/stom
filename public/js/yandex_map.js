
ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
            center: [55.792169, 37.793660],
            zoom: 15
        }, {
            searchControlProvider: 'yandex#search'
        }),
        myPieChart = new ymaps.Placemark([
            55.792169, 37.793660
        ], {
            // Data for generating a diagram.
            // data: [
            //     {weight: 8, color: '#0E4779'},
            //     {weight: 6, color: '#1E98FF'},
            //     {weight: 4, color: '#82CDFF'}
            // ],
            iconCaption: "Stomalina"
        }, {
            // Defining a custom placemark layout.
            // iconLayout: 'default#pieChart',
            // Radius of the diagram, in pixels.
            iconPieChartRadius: 30,
            // The radius of the central part of the layout.
            iconPieChartCoreRadius: 10,
            // Fill style for the core.
            iconPieChartCoreFillStyle: '#ffffff',
            // The style for lines between sectors and the outline of the diagram.
            iconPieChartStrokeStyle: '#ffffff',
            // Width of the sector dividing lines and diagram outline.
            iconPieChartStrokeWidth: 3,
            // Maximum width of the placemark caption.
            iconPieChartCaptionMaxWidth: 200
        });

    myMap.geoObjects
        .add(myPieChart);

        
}
