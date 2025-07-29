<div class="mt-10 mx-4">
    <script>
        function getTailwindThemeMode() {
            const theme = document.documentElement.getAttribute("data-theme");
            return theme === "dark" ? "dark" : "light";
        }
    </script>
    <h1 class="text-2xl font-bold mb-6 text-black dark:text-white">Panel de Administración</h1>

    <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
        <div class="mt-8 bg-white dark:bg-neutral-800 rounded-lg shadow p-4">
            <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">Top 5 Usuarios con Más Recetas</h2>
            <div id="userChart" class="mb-6"></div>
        </div>

        <div class="mt-8 bg-white dark:bg-neutral-800 rounded-lg shadow p-4">
            <h2 class="text-lg font-semibold mb-4 text-black dark:text-white">Top 7 Recetas Mejor Calificadas</h2>
            <div id="ratingChart"></div>
        </div>
    </div>

    <div class="p-6">
        <div class="bg-white dark:bg-neutral-800 rounded-lg shadow p-4">
            <h2 class="text-lg font-semibold mb-4 text-black dark:text-white">Recetas por Categoría</h2>
            <div id="chart"></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const themeMode = getTailwindThemeMode();

            // 📊 Recetas por Categoría
            const chartData = @json($dataRecetasPorCategoria);
            const chart = new ApexCharts(document.querySelector("#chart"), {
                chart: {
                    type: 'bar',
                    height: 800
                },
                series: [{
                    name: 'Recetas',
                    data: chartData.map(item => item.count)
                }],
                plotOptions: {
                    bar: {
                        horizontal: true,
                        borderRadius: 4,
                        borderRadiusApplication: 'end'
                    }
                },
                dataLabels: {
                    enabled: false
                },
                xaxis: {
                    categories: chartData.map(item => item.name),
                    labels: {
                        style: {
                            colors: '#9ca3af'
                        }
                    }
                },
                colors: ['#34d399'],
                theme: {
                    mode: themeMode // 'light' o 'dark'
                }
            });

            chart.render();

            // ⭐ Top Recetas Mejor Calificadas
            const ratingData = @json($topCalificaciones);
            const ratingChart = new ApexCharts(document.querySelector("#ratingChart"), {
                chart: {
                    type: 'polarArea',
                    height: 400
                },
                series: ratingData.map(item => item.avg),
                labels: ratingData.map(item => item.title),
                stroke: {
                    colors: ['#fff']
                },
                fill: {
                    opacity: 0.8
                },
                tooltip: {
                    y: {
                        formatter: val => val + " ⭐"
                    }
                },
                legend: {
                    position: 'bottom'
                },
                theme: {
                    mode: themeMode
                }
            });

            ratingChart.render();

            // 👤 Top Usuarios con más Recetas
            const userData = @json($topUsuariosConRecetas);
            const userChart = new ApexCharts(document.querySelector("#userChart"), {
                chart: {
                    type: 'donut',
                    height: 400
                },
                series: userData.map(item => item.count),
                labels: userData.map(item => item.name),
                colors: ['#f472b6', '#facc15', '#60a5fa', '#34d399', '#c084fc'],
                legend: {
                    position: 'bottom',
                    labels: {
                        colors: '#9ca3af'
                    }
                },
                theme: {
                    mode: themeMode
                }
            });

            userChart.render();
        });
    </script>

</div>
