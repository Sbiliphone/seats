function graphic(Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday, MondayS, TuesdayS, WednesdayS, ThursdayS, FridayS, SaturdayS, SundayS){
    const el = document.getElementById('chart-area');
    const data = {
        categories: ['Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato', 'Domenica'],
        series: [
            {
                name: 'Questo mese',
                data: [Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday],
            },
            {
              name: 'Scorso mese',
                data: [MondayS, TuesdayS, WednesdayS, ThursdayS, FridayS, SaturdayS, SundayS]
            },
        ],
    };
    const options = {
        chart: { title: 'Media posti occupati', width: 500, height: 500},

        exportMenu: {visible: false},
        theme: {
            series: {
                colors: ['#fc791e', 'black'],
            },
            yAxis: {max: 50},
        },

    };

    const chart = toastui.Chart.columnChart({ el, data, options });
}



