<div class="">
    <script>
        function getTailwindThemeMode() {
            const theme = document.documentElement.getAttribute("data-theme");
            return theme === "dark" ? "dark" : "light";
        }
    </script>

    <div class="mt-8 bg-white dark:bg-neutral-800 rounded-lg shadow p-4">
        <h2 class="text-lg font-semibold mb-4">Top 5 Usuarios con Más Recetas</h2>
        <div id="userChart"></div>
    </div>

    <div class="p-6">
        <h1 class="text-2xl font-bold mb-6">Panel de Administración</h1>

        <div class="bg-white dark:bg-neutral-800 rounded-lg shadow p-4">
            <h2 class="text-lg font-semibold mb-4">Recetas por Categoría</h2>
            <div id="chart"></div>
        </div>
    </div>

    <div class="mt-8 bg-white dark:bg-neutral-800 rounded-lg shadow p-4">
        <h2 class="text-lg font-semibold mb-4">Top 5 Recetas Mejor Calificadas</h2>
        <div id="ratingChart"></div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const themeMode = getTailwindThemeMode();

            // 📊 Recetas por Categoría
            const chartData = @json($dataRecetasPorCategoria);
            const chart = new ApexCharts(document.querySelector("#chart"), {
                chart: {
                    type: 'bar',
                    height: 400
                },
                series: [{
                    name: 'Recetas',
                    data: chartData.map(item => item.count)
                }],
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
                    mode: themeMode
                }
            });
            chart.render();

            // ⭐ Top Recetas Mejor Calificadas
            const ratingData = @json($topCalificaciones);
            const ratingChart = new ApexCharts(document.querySelector("#ratingChart"), {
                chart: {
                    type: 'bar',
                    height: 400
                },
                series: [{
                    name: 'Promedio',
                    data: ratingData.map(item => item.avg)
                }],
                xaxis: {
                    categories: ratingData.map(item => item.title),
                    labels: {
                        style: {
                            colors: '#9ca3af'
                        }
                    }
                },
                colors: ['#60a5fa'],
                tooltip: {
                    y: {
                        formatter: val => val + " ⭐"
                    }
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
                    type: 'bar',
                    height: 400
                },
                series: [{
                    name: 'Recetas',
                    data: userData.map(item => item.count)
                }],
                xaxis: {
                    categories: userData.map(item => item.name),
                    labels: {
                        style: {
                            colors: '#9ca3af'
                        }
                    }
                },
                colors: ['#f472b6'],
                theme: {
                    mode: themeMode
                }
            });
            userChart.render();
        });
    </script>

</div>
