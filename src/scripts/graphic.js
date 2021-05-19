function graphic(Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday){
    const el = document.getElementById('chart-area');
    const data = {
        categories: ['Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato', 'Domenica'],
        series: [
            {
                name: 'Media posti occupati',
                data: [Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday],
            },
        ],
    };
    const options = {
        chart: { title: 'Media posti occupati', width: 800, height: 400 },
        legend: {visible: false},
        exportMenu: {visible: false},
    };

    const chart = toastui.Chart.columnChart({ el, data, options });
}



