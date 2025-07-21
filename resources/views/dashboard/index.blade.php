<div class="space-y-6">
    <!-- Metrics Start -->
    <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03]">
        <div class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
            <div>
                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">
                    Overview
                </h3>
            </div>
            <div class="flex gap-x-3.5">
                <div x-data="{selected: 'weekly'}"
                    class="inline-flex w-full items-center gap-0.5 rounded-lg bg-gray-100 p-0.5 dark:bg-gray-900">
                    <button @click="selected = 'weekly'"
                        :class="selected === 'weekly' ? 'shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800' : 'text-gray-500 dark:text-gray-400'"
                        class="text-theme-sm w-full rounded-md px-3 py-2 font-medium hover:text-gray-900 dark:hover:text-white shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800">
                        Weekly
                    </button>
                    <button @click="selected = 'monthly'"
                        :class="selected === 'monthly' ? 'shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800' : 'text-gray-500 dark:text-gray-400'"
                        class="text-theme-sm w-full rounded-md px-3 py-2 font-medium hover:text-gray-900 dark:hover:text-white text-gray-500 dark:text-gray-400">
                        Monthly
                    </button>
                    <button @click="selected = 'yearly'"
                        :class="selected === 'yearly' ? 'shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800' : 'text-gray-500 dark:text-gray-400'"
                        class="text-theme-sm w-full rounded-md px-3 py-2 font-medium hover:text-gray-900 dark:hover:text-white text-gray-500 dark:text-gray-400">
                        Yearly
                    </button>
                </div>
                <div>
                    <button
                        class="text-theme-sm shadow-theme-xs inline-flex items-center gap-2 rounded-lg border border-gray-300 bg-white px-4 py-2.5 font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                        <svg class="fill-white stroke-current dark:fill-gray-800" width="20" height="20"
                            viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.29004 5.90393H17.7067" stroke="" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M17.7075 14.0961H2.29085" stroke="" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path
                                d="M12.0826 3.33331C13.5024 3.33331 14.6534 4.48431 14.6534 5.90414C14.6534 7.32398 13.5024 8.47498 12.0826 8.47498C10.6627 8.47498 9.51172 7.32398 9.51172 5.90415C9.51172 4.48432 10.6627 3.33331 12.0826 3.33331Z"
                                fill="" stroke="" stroke-width="1.5"></path>
                            <path
                                d="M7.91745 11.525C6.49762 11.525 5.34662 12.676 5.34662 14.0959C5.34661 15.5157 6.49762 16.6667 7.91745 16.6667C9.33728 16.6667 10.4883 15.5157 10.4883 14.0959C10.4883 12.676 9.33728 11.525 7.91745 11.525Z"
                                fill="" stroke="" stroke-width="1.5"></path>
                        </svg>

                        <span class="hidden sm:block">Filter</span>
                    </button>
                </div>
            </div>
        </div>
        <div
            class="grid rounded-2xl border border-gray-200 bg-white sm:grid-cols-2 xl:grid-cols-4 dark:border-gray-800 dark:bg-gray-900">
            <div class="border-b border-gray-200 px-6 py-5 sm:border-r xl:border-b-0 dark:border-gray-800">
                <span class="text-sm text-gray-500 dark:text-gray-400">Total Revenue</span>
                <div class="mt-2 flex items-end gap-3">
                    <h4 class="text-title-xs sm:text-title-sm font-bold text-gray-800 dark:text-white/90">
                        $200,45.87
                    </h4>
                    <div>
                        <span
                            class="bg-success-50 text-success-600 dark:bg-success-500/15 dark:text-success-500 flex items-center gap-1 rounded-full py-0.5 pr-2.5 pl-2 text-sm font-medium">
                            +2.5%
                        </span>
                    </div>
                </div>
            </div>
            <div class="border-b border-gray-200 px-6 py-5 xl:border-r xl:border-b-0 dark:border-gray-800">
                <span class="text-sm text-gray-500 dark:text-gray-400">Active Users</span>
                <div class="mt-2 flex items-end gap-3">
                    <h4 class="text-title-xs sm:text-title-sm font-bold text-gray-800 dark:text-white/90">
                        9,528
                    </h4>
                    <div>
                        <span
                            class="bg-success-50 text-success-600 dark:bg-success-500/15 dark:text-success-500 flex items-center gap-1 rounded-full py-0.5 pr-2.5 pl-2 text-sm font-medium">
                            + 9.5%
                        </span>
                    </div>
                </div>
            </div>
            <div class="border-b border-gray-200 px-6 py-5 sm:border-r sm:border-b-0 dark:border-gray-800">
                <div>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Customer Lifetime Value</span>
                    <div class="mt-2 flex items-end gap-3">
                        <h4 class="text-title-xs sm:text-title-sm font-bold text-gray-800 dark:text-white/90">
                            $849.54
                        </h4>
                        <div>
                            <span
                                class="bg-error-50 text-error-600 dark:bg-error-500/15 dark:text-error-500 flex items-center gap-1 rounded-full py-0.5 pr-2.5 pl-2 text-sm font-medium">
                                -1.6%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-6 py-5">
                <span class="text-sm text-gray-500 dark:text-gray-400">Customer Acquisition Cost</span>
                <div class="mt-2 flex items-end gap-3">
                    <h4 class="text-title-xs sm:text-title-sm font-bold text-gray-800 dark:text-white/90">
                        9,528
                    </h4>
                    <div>
                        <span
                            class="bg-success-50 text-success-600 dark:bg-success-500/15 dark:text-success-500 flex items-center gap-1 rounded-full py-0.5 pr-2.5 pl-2 text-sm font-medium">
                            +3.5%
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Metrics End -->
    <div class="gap-5 space-y-5 sm:gap-6 sm:space-y-6 xl:grid xl:grid-cols-12 xl:space-y-0">
        <div class="xl:col-span-7 2xl:col-span-8">
            <div class="space-y-5 sm:space-y-6">
                <!-- Chart -->
                <div class="grid gap-5 sm:gap-6 lg:grid-cols-2">
                    <div
                        class="overflow-hidden rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
                        <div class="mb-6 flex justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                                    Churn Rate
                                </h3>
                                <p class="text-theme-sm mt-1 text-gray-500 dark:text-gray-400">
                                    Downgrade to Free plan
                                </p>
                            </div>
                            <div x-data="{openDropDown: false}" class="relative h-fit">
                                <button @click="openDropDown = !openDropDown"
                                    :class="openDropDown ? 'text-gray-700 dark:text-white' : 'text-gray-400 hover:text-gray-700 dark:hover:text-white'"
                                    class="text-gray-400 hover:text-gray-700 dark:hover:text-white">
                                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.2441 6C10.2441 5.0335 11.0276 4.25 11.9941 4.25H12.0041C12.9706 4.25 13.7541 5.0335 13.7541 6C13.7541 6.9665 12.9706 7.75 12.0041 7.75H11.9941C11.0276 7.75 10.2441 6.9665 10.2441 6ZM10.2441 18C10.2441 17.0335 11.0276 16.25 11.9941 16.25H12.0041C12.9706 16.25 13.7541 17.0335 13.7541 18C13.7541 18.9665 12.9706 19.75 12.0041 19.75H11.9941C11.0276 19.75 10.2441 18.9665 10.2441 18ZM11.9941 10.25C11.0276 10.25 10.2441 11.0335 10.2441 12C10.2441 12.9665 11.0276 13.75 11.9941 13.75H12.0041C12.9706 13.75 13.7541 12.9665 13.7541 12C13.7541 11.0335 12.9706 10.25 12.0041 10.25H11.9941Z"
                                            fill=""></path>
                                    </svg>
                                </button>
                                <div x-show="openDropDown" @click.outside="openDropDown = false"
                                    class="shadow-theme-lg dark:bg-gray-dark absolute top-full right-0 z-40 w-40 space-y-1 rounded-2xl border border-gray-200 bg-white p-2 dark:border-gray-800"
                                    style="display: none;">
                                    <button
                                        class="text-theme-xs flex w-full rounded-lg px-3 py-2 text-left font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300">
                                        View More
                                    </button>
                                    <button
                                        class="text-theme-xs flex w-full rounded-lg px-3 py-2 text-left font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                <h3 class="text-title-xs font-semibold text-gray-800 dark:text-white/90">
                                    4.26%
                                </h3>
                                <p class="text-theme-xs mt-1 text-gray-500 dark:text-gray-400">
                                    <span class="text-error-500 mr-1 inline-block">0.31%</span>
                                    than last Week
                                </p>
                            </div>
                            <div class="max-w-full">
                                <div id="chartTwentyOne" class="h-12 w-24" style="min-height: 60px;">
                                    <div id="apexchartswehxn2cs"
                                        class="apexcharts-canvas apexchartswehxn2cs apexcharts-theme-"
                                        style="width: 96px; height: 60px;"><svg id="SvgjsSvg1273" width="96" height="60"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)">
                                            <foreignObject x="0" y="0" width="96" height="60">
                                                <div xmlns="http://www.w3.org/1999/xhtml"
                                                    style="position: relative; height: 100%; width: 100%;">
                                                    <div class="apexcharts-legend" style="max-height: 30px;"></div>
                                                </div>
                                            </foreignObject>
                                            <rect id="SvgjsRect1277" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG1282" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1283" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1314" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1275" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 1)">
                                                <defs id="SvgjsDefs1274">
                                                    <clipPath id="gridRectMaskwehxn2cs">
                                                        <rect id="SvgjsRect1279" width="96" height="58" x="0" y="0"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectBarMaskwehxn2cs">
                                                        <rect id="SvgjsRect1280" width="102" height="64" x="-3" y="-3"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMaskwehxn2cs">
                                                        <rect id="SvgjsRect1281" width="96" height="58" x="0" y="0"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskwehxn2cs"></clipPath>
                                                    <clipPath id="nonForecastMaskwehxn2cs"></clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1288" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop1289" stop-opacity="0.6"
                                                            stop-color="rgba(239,68,68,0.6)" offset="0"></stop>
                                                        <stop id="SvgjsStop1290" stop-opacity="0.1"
                                                            stop-color="rgba(255,255,255,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1291" stop-opacity="0.1"
                                                            stop-color="rgba(255,255,255,0.1)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine1278" x1="0" y1="0" x2="0" y2="58" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="58"
                                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1">
                                                </line>
                                                <g id="SvgjsG1294" class="apexcharts-grid">
                                                    <g id="SvgjsG1295" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1298" x1="0" y1="0" x2="96" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1299" x1="0" y1="29" x2="96" y2="29"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1300" x1="0" y1="58" x2="96" y2="58"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1296" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1302" x1="0" y1="58" x2="96" y2="58"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine1301" x1="0" y1="1" x2="0" y2="58"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG1297" class="apexcharts-grid-borders"
                                                    style="display: none;"></g>
                                                <g id="SvgjsG1284"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1285" class="apexcharts-series" zIndex="0"
                                                        seriesName="ChurnxRate" data:longestSeries="true" rel="1"
                                                        data:realIndex="0">
                                                        <path id="SvgjsPath1292"
                                                            d="M0 29C5.6 29 10.4 46.39999999999998 16 46.39999999999998C21.6 46.39999999999998 26.4 23.19999999999999 32 23.19999999999999C37.6 23.19999999999999 42.4 40.599999999999994 48 40.599999999999994C53.6 40.599999999999994 58.4 52.20000000000002 64 52.20000000000002C69.6 52.20000000000002 74.4 46.39999999999998 80 46.39999999999998C85.6 46.39999999999998 90.4 42.920000000000016 96 42.920000000000016C96 42.920000000000016 96 42.920000000000016 96 58L0 58C0 58 0 29 0 29 "
                                                            fill="url(#SvgjsLinearGradient1288)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskwehxn2cs)"
                                                            pathTo="M 0 29C 5.6 29 10.4 46.39999999999998 16 46.39999999999998C 21.6 46.39999999999998 26.4 23.19999999999999 32 23.19999999999999C 37.6 23.19999999999999 42.4 40.599999999999994 48 40.599999999999994C 53.6 40.599999999999994 58.4 52.20000000000002 64 52.20000000000002C 69.6 52.20000000000002 74.4 46.39999999999998 80 46.39999999999998C 85.6 46.39999999999998 90.4 42.920000000000016 96 42.920000000000016C 96 42.920000000000016 96 42.920000000000016 96 58 L 0 58z"
                                                            pathFrom="M 0 290 L 0 290 L 16 290 L 32 290 L 48 290 L 64 290 L 80 290 L 96 290z">
                                                        </path>
                                                        <path id="SvgjsPath1293"
                                                            d="M0 29C5.6 29 10.4 46.39999999999998 16 46.39999999999998C21.6 46.39999999999998 26.4 23.19999999999999 32 23.19999999999999C37.6 23.19999999999999 42.4 40.599999999999994 48 40.599999999999994C53.6 40.599999999999994 58.4 52.20000000000002 64 52.20000000000002C69.6 52.20000000000002 74.4 46.39999999999998 80 46.39999999999998C85.6 46.39999999999998 90.4 42.920000000000016 96 42.920000000000016C96 42.920000000000016 96 42.920000000000016 96 42.920000000000016 "
                                                            fill="none" fill-opacity="1" stroke="#ef4444"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskwehxn2cs)"
                                                            pathTo="M 0 29C 5.6 29 10.4 46.39999999999998 16 46.39999999999998C 21.6 46.39999999999998 26.4 23.19999999999999 32 23.19999999999999C 37.6 23.19999999999999 42.4 40.599999999999994 48 40.599999999999994C 53.6 40.599999999999994 58.4 52.20000000000002 64 52.20000000000002C 69.6 52.20000000000002 74.4 46.39999999999998 80 46.39999999999998C 85.6 46.39999999999998 90.4 42.920000000000016 96 42.920000000000016"
                                                            pathFrom="M 0 290 L 0 290 L 16 290 L 32 290 L 48 290 L 64 290 L 80 290 L 96 290"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG1286"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <path id="SvgjsPath1318" d="M 0, 0 
           m -0, 0 
           a 0,0 0 1,0 0,0 
           a 0,0 0 1,0 -0,0" fill="#ef4444" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                    stroke-linecap="butt" stroke-width="2"
                                                                    stroke-dasharray="0" cx="0" cy="0" shape="circle"
                                                                    class="apexcharts-marker wmtbyh11n no-pointer-events"
                                                                    default-marker-size="0"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1287" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1303" x1="0" y1="0" x2="96" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1304" x1="0" y1="0" x2="96" y2="0"
                                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1305" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1306" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1315"
                                                    class="apexcharts-yaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1316"
                                                    class="apexcharts-xaxis-annotations apexcharts-hidden-element-shown">
                                                </g>
                                                <g id="SvgjsG1317"
                                                    class="apexcharts-point-annotations apexcharts-hidden-element-shown">
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0"
                                                style="order: 1;"><span class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(239, 68, 68);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="overflow-hidden rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
                        <div class="mb-6 flex justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                                    User Growth
                                </h3>
                                <p class="text-theme-sm mt-1 text-gray-500 dark:text-gray-400">
                                    New signups website + mobile
                                </p>
                            </div>
                            <div x-data="{openDropDown: false}" class="relative h-fit">
                                <button @click="openDropDown = !openDropDown"
                                    :class="openDropDown ? 'text-gray-700 dark:text-white' : 'text-gray-400 hover:text-gray-700 dark:hover:text-white'"
                                    class="text-gray-400 hover:text-gray-700 dark:hover:text-white">
                                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.2441 6C10.2441 5.0335 11.0276 4.25 11.9941 4.25H12.0041C12.9706 4.25 13.7541 5.0335 13.7541 6C13.7541 6.9665 12.9706 7.75 12.0041 7.75H11.9941C11.0276 7.75 10.2441 6.9665 10.2441 6ZM10.2441 18C10.2441 17.0335 11.0276 16.25 11.9941 16.25H12.0041C12.9706 16.25 13.7541 17.0335 13.7541 18C13.7541 18.9665 12.9706 19.75 12.0041 19.75H11.9941C11.0276 19.75 10.2441 18.9665 10.2441 18ZM11.9941 10.25C11.0276 10.25 10.2441 11.0335 10.2441 12C10.2441 12.9665 11.0276 13.75 11.9941 13.75H12.0041C12.9706 13.75 13.7541 12.9665 13.7541 12C13.7541 11.0335 12.9706 10.25 12.0041 10.25H11.9941Z"
                                            fill=""></path>
                                    </svg>
                                </button>
                                <div x-show="openDropDown" @click.outside="openDropDown = false"
                                    class="shadow-theme-lg dark:bg-gray-dark absolute top-full right-0 z-40 w-40 space-y-1 rounded-2xl border border-gray-200 bg-white p-2 dark:border-gray-800"
                                    style="display: none;">
                                    <button
                                        class="text-theme-xs flex w-full rounded-lg px-3 py-2 text-left font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300">
                                        View More
                                    </button>
                                    <button
                                        class="text-theme-xs flex w-full rounded-lg px-3 py-2 text-left font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                <h3 class="text-title-xs font-semibold text-gray-800 dark:text-white/90">
                                    3,768
                                </h3>
                                <p class="text-theme-xs mt-1 text-gray-500 dark:text-gray-400">
                                    <span class="text-success-600 mr-1 inline-block">+3.85%</span>
                                    than last Week
                                </p>
                            </div>
                            <div class="max-w-full">
                                <div id="chartTwentyTwo" class="h-12 w-24" style="min-height: 60px;">
                                    <div id="apexchartsgdi8ll8ak"
                                        class="apexcharts-canvas apexchartsgdi8ll8ak apexcharts-theme-"
                                        style="width: 96px; height: 60px;"><svg id="SvgjsSvg1736" width="96" height="60"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)">
                                            <foreignObject x="0" y="0" width="96" height="60">
                                                <div xmlns="http://www.w3.org/1999/xhtml"
                                                    style="position: relative; height: 100%; width: 100%;">
                                                    <div class="apexcharts-legend" style="max-height: 30px;"></div>
                                                </div>
                                            </foreignObject>
                                            <rect id="SvgjsRect1740" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG1745" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1746" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"></g>
                                            <g id="SvgjsG1777" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1738" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 1)">
                                                <defs id="SvgjsDefs1737">
                                                    <clipPath id="gridRectMaskgdi8ll8ak">
                                                        <rect id="SvgjsRect1742" width="96" height="58" x="0" y="0"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectBarMaskgdi8ll8ak">
                                                        <rect id="SvgjsRect1743" width="102" height="64" x="-3" y="-3"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMaskgdi8ll8ak">
                                                        <rect id="SvgjsRect1744" width="96" height="58" x="0" y="0"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskgdi8ll8ak"></clipPath>
                                                    <clipPath id="nonForecastMaskgdi8ll8ak"></clipPath>
                                                    <linearGradient id="SvgjsLinearGradient1751" x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop1752" stop-opacity="0.6"
                                                            stop-color="rgba(16,185,129,0.6)" offset="0"></stop>
                                                        <stop id="SvgjsStop1753" stop-opacity="0.1"
                                                            stop-color="rgba(255,255,255,0.1)" offset="1"></stop>
                                                        <stop id="SvgjsStop1754" stop-opacity="0.1"
                                                            stop-color="rgba(255,255,255,0.1)" offset="1"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <line id="SvgjsLine1741" x1="0" y1="0" x2="0" y2="58" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="58"
                                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1">
                                                </line>
                                                <g id="SvgjsG1757" class="apexcharts-grid">
                                                    <g id="SvgjsG1758" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1761" x1="0" y1="0" x2="96" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1762" x1="0" y1="29" x2="96" y2="29"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1763" x1="0" y1="58" x2="96" y2="58"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1759" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1765" x1="0" y1="58" x2="96" y2="58"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine1764" x1="0" y1="1" x2="0" y2="58"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG1760" class="apexcharts-grid-borders"
                                                    style="display: none;"></g>
                                                <g id="SvgjsG1747"
                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                    <g id="SvgjsG1748" class="apexcharts-series" zIndex="0"
                                                        seriesName="UserxGrowth" data:longestSeries="true" rel="1"
                                                        data:realIndex="0">
                                                        <path id="SvgjsPath1755"
                                                            d="M 0 43.49999999999994C 5.6 43.49999999999994 10.4 31.899999999999977 16 31.899999999999977C 21.6 31.899999999999977 26.4 26.100000000000023 32 26.100000000000023C 37.6 26.100000000000023 42.4 36.25 48 36.25C 53.6 36.25 58.4 21.75 64 21.75C 69.6 21.75 74.4 14.5 80 14.5C 85.6 14.5 90.4 4.639999999999986 96 4.639999999999986C 96 4.639999999999986 96 4.639999999999986 96 58 L 0 58z"
                                                            fill="url(#SvgjsLinearGradient1751)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskgdi8ll8ak)"
                                                            pathTo="M 0 43.49999999999994C 5.6 43.49999999999994 10.4 31.899999999999977 16 31.899999999999977C 21.6 31.899999999999977 26.4 26.100000000000023 32 26.100000000000023C 37.6 26.100000000000023 42.4 36.25 48 36.25C 53.6 36.25 58.4 21.75 64 21.75C 69.6 21.75 74.4 14.5 80 14.5C 85.6 14.5 90.4 4.639999999999986 96 4.639999999999986C 96 4.639999999999986 96 4.639999999999986 96 58 L 0 58z"
                                                            pathFrom="M 0 551 L 0 551 L 16 551 L 32 551 L 48 551 L 64 551 L 80 551 L 96 551z">
                                                        </path>
                                                        <path id="SvgjsPath1756"
                                                            d="M 0 43.49999999999994C 5.6 43.49999999999994 10.4 31.899999999999977 16 31.899999999999977C 21.6 31.899999999999977 26.4 26.100000000000023 32 26.100000000000023C 37.6 26.100000000000023 42.4 36.25 48 36.25C 53.6 36.25 58.4 21.75 64 21.75C 69.6 21.75 74.4 14.5 80 14.5C 85.6 14.5 90.4 4.639999999999986 96 4.639999999999986"
                                                            fill="none" fill-opacity="1" stroke="#10b981"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-area" index="0"
                                                            clip-path="url(#gridRectMaskgdi8ll8ak)"
                                                            pathTo="M 0 43.49999999999994C 5.6 43.49999999999994 10.4 31.899999999999977 16 31.899999999999977C 21.6 31.899999999999977 26.4 26.100000000000023 32 26.100000000000023C 37.6 26.100000000000023 42.4 36.25 48 36.25C 53.6 36.25 58.4 21.75 64 21.75C 69.6 21.75 74.4 14.5 80 14.5C 85.6 14.5 90.4 4.639999999999986 96 4.639999999999986"
                                                            pathFrom="M 0 551 L 0 551 L 16 551 L 32 551 L 48 551 L 64 551 L 80 551 L 96 551"
                                                            fill-rule="evenodd"></path>
                                                        <g id="SvgjsG1749"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <path id="SvgjsPath1781" d="M 0, 0 
           m -0, 0 
           a 0,0 0 1,0 0,0 
           a 0,0 0 1,0 -0,0" fill="#10b981" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                    stroke-linecap="butt" stroke-width="2"
                                                                    stroke-dasharray="0" cx="0" cy="0" shape="circle"
                                                                    class="apexcharts-marker wwwrfa8pf no-pointer-events"
                                                                    default-marker-size="0"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1750" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine1766" x1="0" y1="0" x2="96" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1767" x1="0" y1="0" x2="96" y2="0"
                                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1768" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1769" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1778" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1779" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1780" class="apexcharts-point-annotations"></g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0"
                                                style="order: 1;"><span class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(16, 185, 129);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Funnel Chart -->
                <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
                    <div class="mb-6 flex justify-between">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                                Conversion Funnel
                            </h3>
                        </div>
                        <div x-data="{openDropDown: false}" class="relative h-fit">
                            <button @click="openDropDown = !openDropDown"
                                :class="openDropDown ? 'text-gray-700 dark:text-white' : 'text-gray-400 hover:text-gray-700 dark:hover:text-white'"
                                class="text-gray-400 hover:text-gray-700 dark:hover:text-white">
                                <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.2441 6C10.2441 5.0335 11.0276 4.25 11.9941 4.25H12.0041C12.9706 4.25 13.7541 5.0335 13.7541 6C13.7541 6.9665 12.9706 7.75 12.0041 7.75H11.9941C11.0276 7.75 10.2441 6.9665 10.2441 6ZM10.2441 18C10.2441 17.0335 11.0276 16.25 11.9941 16.25H12.0041C12.9706 16.25 13.7541 17.0335 13.7541 18C13.7541 18.9665 12.9706 19.75 12.0041 19.75H11.9941C11.0276 19.75 10.2441 18.9665 10.2441 18ZM11.9941 10.25C11.0276 10.25 10.2441 11.0335 10.2441 12C10.2441 12.9665 11.0276 13.75 11.9941 13.75H12.0041C12.9706 13.75 13.7541 12.9665 13.7541 12C13.7541 11.0335 12.9706 10.25 12.0041 10.25H11.9941Z"
                                        fill=""></path>
                                </svg>
                            </button>
                            <div x-show="openDropDown" @click.outside="openDropDown = false"
                                class="shadow-theme-lg dark:bg-gray-dark absolute top-full right-0 z-40 w-40 space-y-1 rounded-2xl border border-gray-200 bg-white p-2 dark:border-gray-800"
                                style="display: none;">
                                <button
                                    class="text-theme-xs flex w-full rounded-lg px-3 py-2 text-left font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300">
                                    View More
                                </button>
                                <button
                                    class="text-theme-xs flex w-full rounded-lg px-3 py-2 text-left font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="custom-scrollbar max-w-full overflow-x-auto">
                        <div id="chartSeventeen" class="-ml-5 min-w-[700px] pl-2" style="min-height: 330px;">
                            <div id="apexcharts04mb6ttq" class="apexcharts-canvas apexcharts04mb6ttq apexcharts-theme-"
                                style="width: 692px; height: 315px;"><svg id="SvgjsSvg1782" width="692" height="315"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)">
                                    <foreignObject x="0" y="0" width="692" height="315">
                                        <div xmlns="http://www.w3.org/1999/xhtml"
                                            style="position: relative; height: 100%; width: 100%;">
                                            <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top"
                                                style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 157.5px;">
                                                <div class="apexcharts-legend-series" rel="1" seriesname="AdxImpression"
                                                    data:collapsed="false" style="margin: 0px 10px;"><span
                                                        class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                                        style="height: 10px; width: 10px; left: 0px; top: 0px;"><svg
                                                            id="SvgjsSvg1785" width="100%" height="100%"
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.dev">
                                                            <defs id="SvgjsDefs1786">
                                                                <clipPath id="gridRectMask04mb6ttq">
                                                                    <rect id="SvgjsRect1804" width="626.3516387939453"
                                                                        height="227.73000000000002" x="0" y="0" rx="0"
                                                                        ry="0" opacity="1" stroke-width="0"
                                                                        stroke="none" stroke-dasharray="0" fill="#fff">
                                                                    </rect>
                                                                </clipPath>
                                                                <clipPath id="gridRectBarMask04mb6ttq">
                                                                    <rect id="SvgjsRect1805" width="630.3516387939453"
                                                                        height="231.73000000000002" x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1" stroke-width="0"
                                                                        stroke="none" stroke-dasharray="0" fill="#fff">
                                                                    </rect>
                                                                </clipPath>
                                                                <clipPath id="gridRectMarkerMask04mb6ttq">
                                                                    <rect id="SvgjsRect1806" width="626.3516387939453"
                                                                        height="227.73000000000002" x="0" y="0" rx="0"
                                                                        ry="0" opacity="1" stroke-width="0"
                                                                        stroke="none" stroke-dasharray="0" fill="#fff">
                                                                    </rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMask04mb6ttq"></clipPath>
                                                                <clipPath id="nonForecastMask04mb6ttq"></clipPath>
                                                            </defs>
                                                            <path id="SvgjsPath1787" d="M 0, 0 
           m -5, 0 
           a 5,5 0 1,0 10,0 
           a 5,5 0 1,0 -10,0" fill="#2a31d8" fill-opacity="1" stroke-opacity="0.9" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0" cx="0" cy="0"
                                                                shape="circle"
                                                                class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                style="transform: translate(50%, 50%);"></path>
                                                        </svg></span><span class="apexcharts-legend-text" rel="1" i="0"
                                                        data:default-text="Ad%20Impression" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 14px; font-weight: 400; font-family: Outfit;">Ad
                                                        Impression</span></div>
                                                <div class="apexcharts-legend-series" rel="2"
                                                    seriesname="WebsitexSession" data:collapsed="false"
                                                    style="margin: 0px 10px;"><span class="apexcharts-legend-marker"
                                                        rel="2" data:collapsed="false"
                                                        style="height: 10px; width: 10px; left: 0px; top: 0px;"><svg
                                                            id="SvgjsSvg1788" width="100%" height="100%"
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.dev">
                                                            <defs id="SvgjsDefs1789"></defs>
                                                            <path id="SvgjsPath1790" d="M 0, 0 
           m -5, 0 
           a 5,5 0 1,0 10,0 
           a 5,5 0 1,0 -10,0" fill="#465fff" fill-opacity="1" stroke-opacity="0.9" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0" cx="0" cy="0"
                                                                shape="circle"
                                                                class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                style="transform: translate(50%, 50%);"></path>
                                                        </svg></span><span class="apexcharts-legend-text" rel="2" i="1"
                                                        data:default-text="Website%20Session" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 14px; font-weight: 400; font-family: Outfit;">Website
                                                        Session</span></div>
                                                <div class="apexcharts-legend-series" rel="3" seriesname="AppxDownload"
                                                    data:collapsed="false" style="margin: 0px 10px;"><span
                                                        class="apexcharts-legend-marker" rel="3" data:collapsed="false"
                                                        style="height: 10px; width: 10px; left: 0px; top: 0px;"><svg
                                                            id="SvgjsSvg1791" width="100%" height="100%"
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.dev">
                                                            <defs id="SvgjsDefs1792"></defs>
                                                            <path id="SvgjsPath1793" d="M 0, 0 
           m -5, 0 
           a 5,5 0 1,0 10,0 
           a 5,5 0 1,0 -10,0" fill="#7592ff" fill-opacity="1" stroke-opacity="0.9" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0" cx="0" cy="0"
                                                                shape="circle"
                                                                class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                style="transform: translate(50%, 50%);"></path>
                                                        </svg></span><span class="apexcharts-legend-text" rel="3" i="2"
                                                        data:default-text="App%20Download" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 14px; font-weight: 400; font-family: Outfit;">App
                                                        Download</span></div>
                                                <div class="apexcharts-legend-series" rel="4" seriesname="NewxUsers"
                                                    data:collapsed="false" style="margin: 0px 10px;"><span
                                                        class="apexcharts-legend-marker" rel="4" data:collapsed="false"
                                                        style="height: 10px; width: 10px; left: 0px; top: 0px;"><svg
                                                            id="SvgjsSvg1794" width="100%" height="100%"
                                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.dev">
                                                            <defs id="SvgjsDefs1795"></defs>
                                                            <path id="SvgjsPath1796" d="M 0, 0 
           m -5, 0 
           a 5,5 0 1,0 10,0 
           a 5,5 0 1,0 -10,0" fill="#c2d6ff" fill-opacity="1" stroke-opacity="0.9" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0" cx="0" cy="0"
                                                                shape="circle"
                                                                class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                style="transform: translate(50%, 50%);"></path>
                                                        </svg></span><span class="apexcharts-legend-text" rel="4" i="3"
                                                        data:default-text="New%20Users" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 14px; font-weight: 400; font-family: Outfit;">New
                                                        Users</span></div>
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                cursor: pointer;
                                                margin-right: 1px;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG1807" class="apexcharts-datalabels-group"
                                        transform="translate(0, 0) scale(1)"></g>
                                    <g id="SvgjsG1808" class="apexcharts-datalabels-group"
                                        transform="translate(0, 0) scale(1)"></g>
                                    <g id="SvgjsG1927" class="apexcharts-yaxis" rel="0"
                                        transform="translate(13.984375, 0)">
                                        <g id="SvgjsG1928" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1930"
                                                font-family="Outfit, sans-serif" x="20" y="51.666666666666664"
                                                text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Outfit, sans-serif;">
                                                <tspan id="SvgjsTspan1931">120</tspan>
                                                <title>120</title>
                                            </text><text id="SvgjsText1933" font-family="Outfit, sans-serif" x="20"
                                                y="89.62166666666667" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Outfit, sans-serif;">
                                                <tspan id="SvgjsTspan1934">100</tspan>
                                                <title>100</title>
                                            </text><text id="SvgjsText1936" font-family="Outfit, sans-serif" x="20"
                                                y="127.57666666666668" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Outfit, sans-serif;">
                                                <tspan id="SvgjsTspan1937">80</tspan>
                                                <title>80</title>
                                            </text><text id="SvgjsText1939" font-family="Outfit, sans-serif" x="20"
                                                y="165.5316666666667" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Outfit, sans-serif;">
                                                <tspan id="SvgjsTspan1940">60</tspan>
                                                <title>60</title>
                                            </text><text id="SvgjsText1942" font-family="Outfit, sans-serif" x="20"
                                                y="203.4866666666667" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Outfit, sans-serif;">
                                                <tspan id="SvgjsTspan1943">40</tspan>
                                                <title>40</title>
                                            </text><text id="SvgjsText1945" font-family="Outfit, sans-serif" x="20"
                                                y="241.44166666666672" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Outfit, sans-serif;">
                                                <tspan id="SvgjsTspan1946">20</tspan>
                                                <title>20</title>
                                            </text><text id="SvgjsText1948" font-family="Outfit, sans-serif" x="20"
                                                y="279.3966666666667" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Outfit, sans-serif;">
                                                <tspan id="SvgjsTspan1949">0</tspan>
                                                <title>0</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1784" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(43.984375, 48)">
                                        <defs id="SvgjsDefs1783">
                                            <linearGradient id="SvgjsLinearGradient1799" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1800" stop-opacity="0.4"
                                                    stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop1801" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1802" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <rect id="SvgjsRect1803" width="30.534642391204834" height="227.73000000000002"
                                            x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                            fill="url(#SvgjsLinearGradient1799)" class="apexcharts-xcrosshairs"
                                            y2="227.73000000000002" filter="none" fill-opacity="0.9"></rect>
                                        <g id="SvgjsG1886" class="apexcharts-grid">
                                            <g id="SvgjsG1887" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1891" x1="0" y1="37.955000000000005"
                                                    x2="626.3516387939453" y2="37.955000000000005" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1892" x1="0" y1="75.91000000000001"
                                                    x2="626.3516387939453" y2="75.91000000000001" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1893" x1="0" y1="113.86500000000001"
                                                    x2="626.3516387939453" y2="113.86500000000001" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1894" x1="0" y1="151.82000000000002"
                                                    x2="626.3516387939453" y2="151.82000000000002" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1895" x1="0" y1="189.77500000000003"
                                                    x2="626.3516387939453" y2="189.77500000000003" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1896" x1="0" y1="227.73000000000005"
                                                    x2="626.3516387939453" y2="227.73000000000005" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1888" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine1898" x1="0" y1="227.73000000000002"
                                                x2="626.3516387939453" y2="227.73000000000002" stroke="transparent"
                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1897" x1="0" y1="1" x2="0" y2="227.73000000000002"
                                                stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1889" class="apexcharts-grid-borders">
                                            <line id="SvgjsLine1890" x1="0" y1="0" x2="626.3516387939453" y2="0"
                                                stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1809" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG1810" class="apexcharts-series" seriesName="AdxImpression"
                                                rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1814"
                                                    d="M 23.879656229019165 227.73100000000002 L 23.879656229019165 144.23000000000002 L 54.414298620224 144.23000000000002 L 54.414298620224 227.73100000000002 z"
                                                    fill="rgba(42,49,216,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 23.879656229019165 227.73100000000002 L 23.879656229019165 144.23000000000002 L 54.414298620224 144.23000000000002 L 54.414298620224 227.73100000000002 z"
                                                    pathFrom="M 23.879656229019165 227.73100000000002 L 23.879656229019165 227.73100000000002 L 54.414298620224 227.73100000000002 L 54.414298620224 227.73100000000002 L 54.414298620224 227.73100000000002 L 54.414298620224 227.73100000000002 L 54.414298620224 227.73100000000002 L 23.879656229019165 227.73100000000002 z"
                                                    cy="144.229" cx="102.17361107826233" j="0" val="44"
                                                    barHeight="83.501" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1816"
                                                    d="M 102.17361107826233 227.73100000000002 L 102.17361107826233 123.35475000000001 L 132.70825346946717 123.35475000000001 L 132.70825346946717 227.73100000000002 z"
                                                    fill="rgba(42,49,216,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 102.17361107826233 227.73100000000002 L 102.17361107826233 123.35475000000001 L 132.70825346946717 123.35475000000001 L 132.70825346946717 227.73100000000002 z"
                                                    pathFrom="M 102.17361107826233 227.73100000000002 L 102.17361107826233 227.73100000000002 L 132.70825346946717 227.73100000000002 L 132.70825346946717 227.73100000000002 L 132.70825346946717 227.73100000000002 L 132.70825346946717 227.73100000000002 L 132.70825346946717 227.73100000000002 L 102.17361107826233 227.73100000000002 z"
                                                    cy="123.35375" cx="180.4675659275055" j="1" val="55"
                                                    barHeight="104.37625000000001" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1818"
                                                    d="M 180.4675659275055 227.73100000000002 L 180.4675659275055 149.92325000000002 L 211.00220831871033 149.92325000000002 L 211.00220831871033 227.73100000000002 z"
                                                    fill="rgba(42,49,216,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 180.4675659275055 227.73100000000002 L 180.4675659275055 149.92325000000002 L 211.00220831871033 149.92325000000002 L 211.00220831871033 227.73100000000002 z"
                                                    pathFrom="M 180.4675659275055 227.73100000000002 L 180.4675659275055 227.73100000000002 L 211.00220831871033 227.73100000000002 L 211.00220831871033 227.73100000000002 L 211.00220831871033 227.73100000000002 L 211.00220831871033 227.73100000000002 L 211.00220831871033 227.73100000000002 L 180.4675659275055 227.73100000000002 z"
                                                    cy="149.92225000000002" cx="258.7615207767486" j="2" val="41"
                                                    barHeight="77.80775" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1820"
                                                    d="M 258.7615207767486 227.73100000000002 L 258.7615207767486 100.58175000000001 L 289.29616316795347 100.58175000000001 L 289.29616316795347 227.73100000000002 z"
                                                    fill="rgba(42,49,216,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 258.7615207767486 227.73100000000002 L 258.7615207767486 100.58175000000001 L 289.29616316795347 100.58175000000001 L 289.29616316795347 227.73100000000002 z"
                                                    pathFrom="M 258.7615207767486 227.73100000000002 L 258.7615207767486 227.73100000000002 L 289.29616316795347 227.73100000000002 L 289.29616316795347 227.73100000000002 L 289.29616316795347 227.73100000000002 L 289.29616316795347 227.73100000000002 L 289.29616316795347 227.73100000000002 L 258.7615207767486 227.73100000000002 z"
                                                    cy="100.58075000000001" cx="337.0554756259918" j="3" val="67"
                                                    barHeight="127.14925000000001" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1822"
                                                    d="M 337.0554756259918 227.73100000000002 L 337.0554756259918 185.98050000000003 L 367.59011801719663 185.98050000000003 L 367.59011801719663 227.73100000000002 z"
                                                    fill="rgba(42,49,216,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 337.0554756259918 227.73100000000002 L 337.0554756259918 185.98050000000003 L 367.59011801719663 185.98050000000003 L 367.59011801719663 227.73100000000002 z"
                                                    pathFrom="M 337.0554756259918 227.73100000000002 L 337.0554756259918 227.73100000000002 L 367.59011801719663 227.73100000000002 L 367.59011801719663 227.73100000000002 L 367.59011801719663 227.73100000000002 L 367.59011801719663 227.73100000000002 L 367.59011801719663 227.73100000000002 L 337.0554756259918 227.73100000000002 z"
                                                    cy="185.97950000000003" cx="415.34943047523495" j="4" val="22"
                                                    barHeight="41.7505" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1824"
                                                    d="M 415.34943047523495 227.73100000000002 L 415.34943047523495 146.12775000000002 L 445.8840728664398 146.12775000000002 L 445.8840728664398 227.73100000000002 z"
                                                    fill="rgba(42,49,216,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 415.34943047523495 227.73100000000002 L 415.34943047523495 146.12775000000002 L 445.8840728664398 146.12775000000002 L 445.8840728664398 227.73100000000002 z"
                                                    pathFrom="M 415.34943047523495 227.73100000000002 L 415.34943047523495 227.73100000000002 L 445.8840728664398 227.73100000000002 L 445.8840728664398 227.73100000000002 L 445.8840728664398 227.73100000000002 L 445.8840728664398 227.73100000000002 L 445.8840728664398 227.73100000000002 L 415.34943047523495 227.73100000000002 z"
                                                    cy="146.12675000000002" cx="493.6433853244781" j="5" val="43"
                                                    barHeight="81.60325" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1826"
                                                    d="M 493.6433853244781 227.73100000000002 L 493.6433853244781 123.35475000000001 L 524.1780277156829 123.35475000000001 L 524.1780277156829 227.73100000000002 z"
                                                    fill="rgba(42,49,216,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 493.6433853244781 227.73100000000002 L 493.6433853244781 123.35475000000001 L 524.1780277156829 123.35475000000001 L 524.1780277156829 227.73100000000002 z"
                                                    pathFrom="M 493.6433853244781 227.73100000000002 L 493.6433853244781 227.73100000000002 L 524.1780277156829 227.73100000000002 L 524.1780277156829 227.73100000000002 L 524.1780277156829 227.73100000000002 L 524.1780277156829 227.73100000000002 L 524.1780277156829 227.73100000000002 L 493.6433853244781 227.73100000000002 z"
                                                    cy="123.35375" cx="571.9373401737213" j="6" val="55"
                                                    barHeight="104.37625000000001" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1828"
                                                    d="M 571.9373401737213 227.73100000000002 L 571.9373401737213 149.92325000000002 L 602.4719825649261 149.92325000000002 L 602.4719825649261 227.73100000000002 z"
                                                    fill="rgba(42,49,216,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 571.9373401737213 227.73100000000002 L 571.9373401737213 149.92325000000002 L 602.4719825649261 149.92325000000002 L 602.4719825649261 227.73100000000002 z"
                                                    pathFrom="M 571.9373401737213 227.73100000000002 L 571.9373401737213 227.73100000000002 L 602.4719825649261 227.73100000000002 L 602.4719825649261 227.73100000000002 L 602.4719825649261 227.73100000000002 L 602.4719825649261 227.73100000000002 L 602.4719825649261 227.73100000000002 L 571.9373401737213 227.73100000000002 z"
                                                    cy="149.92225000000002" cx="650.2312950229644" j="7" val="41"
                                                    barHeight="77.80775" barWidth="30.534642391204834"></path>
                                                <g id="SvgjsG1812" class="apexcharts-bar-goals-markers">
                                                    <g id="SvgjsG1813" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1815" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1817" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1819" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1821" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1823" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1825" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1827" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1829" class="apexcharts-series" seriesName="WebsitexSession"
                                                rel="2" data:realIndex="1">
                                                <path id="SvgjsPath1833"
                                                    d="M 23.879656229019165 144.23100000000002 L 23.879656229019165 119.56025000000002 L 54.414298620224 119.56025000000002 L 54.414298620224 144.23100000000002 z"
                                                    fill="rgba(70,95,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 23.879656229019165 144.23100000000002 L 23.879656229019165 119.56025000000002 L 54.414298620224 119.56025000000002 L 54.414298620224 144.23100000000002 z"
                                                    pathFrom="M 23.879656229019165 144.23100000000002 L 23.879656229019165 144.23100000000002 L 54.414298620224 144.23100000000002 L 54.414298620224 144.23100000000002 L 54.414298620224 144.23100000000002 L 54.414298620224 144.23100000000002 L 54.414298620224 144.23100000000002 L 23.879656229019165 144.23100000000002 z"
                                                    cy="119.55925000000002" cx="102.17361107826233" j="0" val="13"
                                                    barHeight="24.67075" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1835"
                                                    d="M 102.17361107826233 123.35575000000001 L 102.17361107826233 79.70750000000001 L 132.70825346946717 79.70750000000001 L 132.70825346946717 123.35575000000001 z"
                                                    fill="rgba(70,95,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 102.17361107826233 123.35575000000001 L 102.17361107826233 79.70750000000001 L 132.70825346946717 79.70750000000001 L 132.70825346946717 123.35575000000001 z"
                                                    pathFrom="M 102.17361107826233 123.35575000000001 L 102.17361107826233 123.35575000000001 L 132.70825346946717 123.35575000000001 L 132.70825346946717 123.35575000000001 L 132.70825346946717 123.35575000000001 L 132.70825346946717 123.35575000000001 L 132.70825346946717 123.35575000000001 L 102.17361107826233 123.35575000000001 z"
                                                    cy="79.7065" cx="180.4675659275055" j="1" val="23"
                                                    barHeight="43.648250000000004" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1837"
                                                    d="M 180.4675659275055 149.92425000000003 L 180.4675659275055 111.96925000000002 L 211.00220831871033 111.96925000000002 L 211.00220831871033 149.92425000000003 z"
                                                    fill="rgba(70,95,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 180.4675659275055 149.92425000000003 L 180.4675659275055 111.96925000000002 L 211.00220831871033 111.96925000000002 L 211.00220831871033 149.92425000000003 z"
                                                    pathFrom="M 180.4675659275055 149.92425000000003 L 180.4675659275055 149.92425000000003 L 211.00220831871033 149.92425000000003 L 211.00220831871033 149.92425000000003 L 211.00220831871033 149.92425000000003 L 211.00220831871033 149.92425000000003 L 211.00220831871033 149.92425000000003 L 180.4675659275055 149.92425000000003 z"
                                                    cy="111.96825000000001" cx="258.7615207767486" j="2" val="20"
                                                    barHeight="37.955000000000005" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1839"
                                                    d="M 258.7615207767486 100.58275000000002 L 258.7615207767486 85.40075000000002 L 289.29616316795347 85.40075000000002 L 289.29616316795347 100.58275000000002 z"
                                                    fill="rgba(70,95,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 258.7615207767486 100.58275000000002 L 258.7615207767486 85.40075000000002 L 289.29616316795347 85.40075000000002 L 289.29616316795347 100.58275000000002 z"
                                                    pathFrom="M 258.7615207767486 100.58275000000002 L 258.7615207767486 100.58275000000002 L 289.29616316795347 100.58275000000002 L 289.29616316795347 100.58275000000002 L 289.29616316795347 100.58275000000002 L 289.29616316795347 100.58275000000002 L 289.29616316795347 100.58275000000002 L 258.7615207767486 100.58275000000002 z"
                                                    cy="85.39975000000001" cx="337.0554756259918" j="3" val="8"
                                                    barHeight="15.182" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1841"
                                                    d="M 337.0554756259918 185.98150000000004 L 337.0554756259918 161.31075000000004 L 367.59011801719663 161.31075000000004 L 367.59011801719663 185.98150000000004 z"
                                                    fill="rgba(70,95,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 337.0554756259918 185.98150000000004 L 337.0554756259918 161.31075000000004 L 367.59011801719663 161.31075000000004 L 367.59011801719663 185.98150000000004 z"
                                                    pathFrom="M 337.0554756259918 185.98150000000004 L 337.0554756259918 185.98150000000004 L 367.59011801719663 185.98150000000004 L 367.59011801719663 185.98150000000004 L 367.59011801719663 185.98150000000004 L 367.59011801719663 185.98150000000004 L 367.59011801719663 185.98150000000004 L 337.0554756259918 185.98150000000004 z"
                                                    cy="161.30975000000004" cx="415.34943047523495" j="4" val="13"
                                                    barHeight="24.67075" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1843"
                                                    d="M 415.34943047523495 146.12875000000003 L 415.34943047523495 94.88950000000003 L 445.8840728664398 94.88950000000003 L 445.8840728664398 146.12875000000003 z"
                                                    fill="rgba(70,95,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 415.34943047523495 146.12875000000003 L 415.34943047523495 94.88950000000003 L 445.8840728664398 94.88950000000003 L 445.8840728664398 146.12875000000003 z"
                                                    pathFrom="M 415.34943047523495 146.12875000000003 L 415.34943047523495 146.12875000000003 L 445.8840728664398 146.12875000000003 L 445.8840728664398 146.12875000000003 L 445.8840728664398 146.12875000000003 L 445.8840728664398 146.12875000000003 L 445.8840728664398 146.12875000000003 L 415.34943047523495 146.12875000000003 z"
                                                    cy="94.88850000000002" cx="493.6433853244781" j="5" val="27"
                                                    barHeight="51.239250000000006" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1845"
                                                    d="M 493.6433853244781 123.35575000000001 L 493.6433853244781 98.68500000000002 L 524.1780277156829 98.68500000000002 L 524.1780277156829 123.35575000000001 z"
                                                    fill="rgba(70,95,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 493.6433853244781 123.35575000000001 L 493.6433853244781 98.68500000000002 L 524.1780277156829 98.68500000000002 L 524.1780277156829 123.35575000000001 z"
                                                    pathFrom="M 493.6433853244781 123.35575000000001 L 493.6433853244781 123.35575000000001 L 524.1780277156829 123.35575000000001 L 524.1780277156829 123.35575000000001 L 524.1780277156829 123.35575000000001 L 524.1780277156829 123.35575000000001 L 524.1780277156829 123.35575000000001 L 493.6433853244781 123.35575000000001 z"
                                                    cy="98.68400000000001" cx="571.9373401737213" j="6" val="13"
                                                    barHeight="24.67075" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1847"
                                                    d="M 571.9373401737213 149.92425000000003 L 571.9373401737213 106.27600000000002 L 602.4719825649261 106.27600000000002 L 602.4719825649261 149.92425000000003 z"
                                                    fill="rgba(70,95,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 571.9373401737213 149.92425000000003 L 571.9373401737213 106.27600000000002 L 602.4719825649261 106.27600000000002 L 602.4719825649261 149.92425000000003 z"
                                                    pathFrom="M 571.9373401737213 149.92425000000003 L 571.9373401737213 149.92425000000003 L 602.4719825649261 149.92425000000003 L 602.4719825649261 149.92425000000003 L 602.4719825649261 149.92425000000003 L 602.4719825649261 149.92425000000003 L 602.4719825649261 149.92425000000003 L 571.9373401737213 149.92425000000003 z"
                                                    cy="106.27500000000002" cx="650.2312950229644" j="7" val="23"
                                                    barHeight="43.648250000000004" barWidth="30.534642391204834"></path>
                                                <g id="SvgjsG1831" class="apexcharts-bar-goals-markers">
                                                    <g id="SvgjsG1832" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1834" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1836" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1838" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1840" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1842" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1844" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1846" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1848" class="apexcharts-series" seriesName="AppxDownload"
                                                rel="3" data:realIndex="2">
                                                <path id="SvgjsPath1852"
                                                    d="M 23.879656229019165 119.56125000000003 L 23.879656229019165 98.68600000000004 L 54.414298620224 98.68600000000004 L 54.414298620224 119.56125000000003 z"
                                                    fill="rgba(117,146,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 23.879656229019165 119.56125000000003 L 23.879656229019165 98.68600000000004 L 54.414298620224 98.68600000000004 L 54.414298620224 119.56125000000003 z"
                                                    pathFrom="M 23.879656229019165 119.56125000000003 L 23.879656229019165 119.56125000000003 L 54.414298620224 119.56125000000003 L 54.414298620224 119.56125000000003 L 54.414298620224 119.56125000000003 L 54.414298620224 119.56125000000003 L 54.414298620224 119.56125000000003 L 23.879656229019165 119.56125000000003 z"
                                                    cy="98.68500000000003" cx="102.17361107826233" j="0" val="11"
                                                    barHeight="20.87525" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1854"
                                                    d="M 102.17361107826233 79.70850000000002 L 102.17361107826233 47.44675000000001 L 132.70825346946717 47.44675000000001 L 132.70825346946717 79.70850000000002 z"
                                                    fill="rgba(117,146,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 102.17361107826233 79.70850000000002 L 102.17361107826233 47.44675000000001 L 132.70825346946717 47.44675000000001 L 132.70825346946717 79.70850000000002 z"
                                                    pathFrom="M 102.17361107826233 79.70850000000002 L 102.17361107826233 79.70850000000002 L 132.70825346946717 79.70850000000002 L 132.70825346946717 79.70850000000002 L 132.70825346946717 79.70850000000002 L 132.70825346946717 79.70850000000002 L 132.70825346946717 79.70850000000002 L 102.17361107826233 79.70850000000002 z"
                                                    cy="47.44575000000001" cx="180.4675659275055" j="1" val="17"
                                                    barHeight="32.26175" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1856"
                                                    d="M 180.4675659275055 111.97025000000002 L 180.4675659275055 83.50400000000002 L 211.00220831871033 83.50400000000002 L 211.00220831871033 111.97025000000002 z"
                                                    fill="rgba(117,146,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 180.4675659275055 111.97025000000002 L 180.4675659275055 83.50400000000002 L 211.00220831871033 83.50400000000002 L 211.00220831871033 111.97025000000002 z"
                                                    pathFrom="M 180.4675659275055 111.97025000000002 L 180.4675659275055 111.97025000000002 L 211.00220831871033 111.97025000000002 L 211.00220831871033 111.97025000000002 L 211.00220831871033 111.97025000000002 L 211.00220831871033 111.97025000000002 L 211.00220831871033 111.97025000000002 L 180.4675659275055 111.97025000000002 z"
                                                    cy="83.50300000000001" cx="258.7615207767486" j="2" val="15"
                                                    barHeight="28.466250000000002" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1858"
                                                    d="M 258.7615207767486 85.40175000000002 L 258.7615207767486 56.93550000000001 L 289.29616316795347 56.93550000000001 L 289.29616316795347 85.40175000000002 z"
                                                    fill="rgba(117,146,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 258.7615207767486 85.40175000000002 L 258.7615207767486 56.93550000000001 L 289.29616316795347 56.93550000000001 L 289.29616316795347 85.40175000000002 z"
                                                    pathFrom="M 258.7615207767486 85.40175000000002 L 258.7615207767486 85.40175000000002 L 289.29616316795347 85.40175000000002 L 289.29616316795347 85.40175000000002 L 289.29616316795347 85.40175000000002 L 289.29616316795347 85.40175000000002 L 289.29616316795347 85.40175000000002 L 258.7615207767486 85.40175000000002 z"
                                                    cy="56.934500000000014" cx="337.0554756259918" j="3" val="15"
                                                    barHeight="28.466250000000002" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1860"
                                                    d="M 337.0554756259918 161.31175000000005 L 337.0554756259918 121.45900000000005 L 367.59011801719663 121.45900000000005 L 367.59011801719663 161.31175000000005 z"
                                                    fill="rgba(117,146,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 337.0554756259918 161.31175000000005 L 337.0554756259918 121.45900000000005 L 367.59011801719663 121.45900000000005 L 367.59011801719663 161.31175000000005 z"
                                                    pathFrom="M 337.0554756259918 161.31175000000005 L 337.0554756259918 161.31175000000005 L 367.59011801719663 161.31175000000005 L 367.59011801719663 161.31175000000005 L 367.59011801719663 161.31175000000005 L 367.59011801719663 161.31175000000005 L 367.59011801719663 161.31175000000005 L 337.0554756259918 161.31175000000005 z"
                                                    cy="121.45800000000004" cx="415.34943047523495" j="4" val="21"
                                                    barHeight="39.85275" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1862"
                                                    d="M 415.34943047523495 94.89050000000003 L 415.34943047523495 68.32200000000003 L 445.8840728664398 68.32200000000003 L 445.8840728664398 94.89050000000003 z"
                                                    fill="rgba(117,146,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 415.34943047523495 94.89050000000003 L 415.34943047523495 68.32200000000003 L 445.8840728664398 68.32200000000003 L 445.8840728664398 94.89050000000003 z"
                                                    pathFrom="M 415.34943047523495 94.89050000000003 L 415.34943047523495 94.89050000000003 L 445.8840728664398 94.89050000000003 L 445.8840728664398 94.89050000000003 L 445.8840728664398 94.89050000000003 L 445.8840728664398 94.89050000000003 L 445.8840728664398 94.89050000000003 L 415.34943047523495 94.89050000000003 z"
                                                    cy="68.32100000000003" cx="493.6433853244781" j="5" val="14"
                                                    barHeight="26.5685" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1864"
                                                    d="M 493.6433853244781 98.68600000000002 L 493.6433853244781 64.52650000000003 L 524.1780277156829 64.52650000000003 L 524.1780277156829 98.68600000000002 z"
                                                    fill="rgba(117,146,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 493.6433853244781 98.68600000000002 L 493.6433853244781 64.52650000000003 L 524.1780277156829 64.52650000000003 L 524.1780277156829 98.68600000000002 z"
                                                    pathFrom="M 493.6433853244781 98.68600000000002 L 493.6433853244781 98.68600000000002 L 524.1780277156829 98.68600000000002 L 524.1780277156829 98.68600000000002 L 524.1780277156829 98.68600000000002 L 524.1780277156829 98.68600000000002 L 524.1780277156829 98.68600000000002 L 493.6433853244781 98.68600000000002 z"
                                                    cy="64.52550000000002" cx="571.9373401737213" j="6" val="18"
                                                    barHeight="34.1595" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1866"
                                                    d="M 571.9373401737213 106.27700000000003 L 571.9373401737213 68.32200000000003 L 602.4719825649261 68.32200000000003 L 602.4719825649261 106.27700000000003 z"
                                                    fill="rgba(117,146,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="2"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 571.9373401737213 106.27700000000003 L 571.9373401737213 68.32200000000003 L 602.4719825649261 68.32200000000003 L 602.4719825649261 106.27700000000003 z"
                                                    pathFrom="M 571.9373401737213 106.27700000000003 L 571.9373401737213 106.27700000000003 L 602.4719825649261 106.27700000000003 L 602.4719825649261 106.27700000000003 L 602.4719825649261 106.27700000000003 L 602.4719825649261 106.27700000000003 L 602.4719825649261 106.27700000000003 L 571.9373401737213 106.27700000000003 z"
                                                    cy="68.32100000000003" cx="650.2312950229644" j="7" val="20"
                                                    barHeight="37.955000000000005" barWidth="30.534642391204834"></path>
                                                <g id="SvgjsG1850" class="apexcharts-bar-goals-markers">
                                                    <g id="SvgjsG1851" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1853" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1855" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1857" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1859" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1861" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1863" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1865" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1867" class="apexcharts-series" seriesName="NewxUsers" rel="4"
                                                data:realIndex="3">
                                                <path id="SvgjsPath1871"
                                                    d="M 23.879656229019165 98.68700000000004 L 23.879656229019165 68.83425000000003 C 23.879656229019165 63.834250000000026 28.87965622901916 58.83425000000003 33.87965622901916 58.83425000000003 L 44.414298620224 58.83425000000003 C 49.414298620224 58.83425000000003 54.414298620224 63.834250000000026 54.414298620224 68.83425000000003 L 54.414298620224 98.68700000000004 z "
                                                    fill="rgba(194,214,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="3"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 23.879656229019165 98.68700000000004 L 23.879656229019165 68.83425000000003 C 23.879656229019165 63.834250000000026 28.87965622901916 58.83425000000003 33.87965622901916 58.83425000000003 L 44.414298620224 58.83425000000003 C 49.414298620224 58.83425000000003 54.414298620224 63.834250000000026 54.414298620224 68.83425000000003 L 54.414298620224 98.68700000000004 z "
                                                    pathFrom="M 23.879656229019165 98.68700000000004 L 23.879656229019165 98.68700000000004 L 54.414298620224 98.68700000000004 L 54.414298620224 98.68700000000004 L 54.414298620224 98.68700000000004 L 54.414298620224 98.68700000000004 L 54.414298620224 98.68700000000004 L 23.879656229019165 98.68700000000004 z"
                                                    cy="58.833250000000035" cx="102.17361107826233" j="0" val="21"
                                                    barHeight="39.85275" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1873"
                                                    d="M 102.17361107826233 47.447750000000006 L 102.17361107826233 44.163500000000006 C 102.17361107826233 39.163500000000006 107.17361107826233 34.163500000000006 112.17361107826233 34.163500000000006 L 122.70825346946717 34.163500000000006 C 127.70825346946717 34.163500000000006 132.70825346946717 39.163500000000006 132.70825346946717 44.163500000000006 L 132.70825346946717 47.447750000000006 z "
                                                    fill="rgba(194,214,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="3"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 102.17361107826233 47.447750000000006 L 102.17361107826233 44.163500000000006 C 102.17361107826233 39.163500000000006 107.17361107826233 34.163500000000006 112.17361107826233 34.163500000000006 L 122.70825346946717 34.163500000000006 C 127.70825346946717 34.163500000000006 132.70825346946717 39.163500000000006 132.70825346946717 44.163500000000006 L 132.70825346946717 47.447750000000006 z "
                                                    pathFrom="M 102.17361107826233 47.447750000000006 L 102.17361107826233 47.447750000000006 L 132.70825346946717 47.447750000000006 L 132.70825346946717 47.447750000000006 L 132.70825346946717 47.447750000000006 L 132.70825346946717 47.447750000000006 L 132.70825346946717 47.447750000000006 L 102.17361107826233 47.447750000000006 z"
                                                    cy="34.16250000000001" cx="180.4675659275055" j="1" val="7"
                                                    barHeight="13.28425" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1875"
                                                    d="M 180.4675659275055 83.50500000000002 L 180.4675659275055 46.061250000000015 C 180.4675659275055 41.061250000000015 185.4675659275055 36.061250000000015 190.4675659275055 36.061250000000015 L 201.00220831871033 36.061250000000015 C 206.00220831871033 36.061250000000015 211.00220831871033 41.061250000000015 211.00220831871033 46.061250000000015 L 211.00220831871033 83.50500000000002 z "
                                                    fill="rgba(194,214,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="3"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 180.4675659275055 83.50500000000002 L 180.4675659275055 46.061250000000015 C 180.4675659275055 41.061250000000015 185.4675659275055 36.061250000000015 190.4675659275055 36.061250000000015 L 201.00220831871033 36.061250000000015 C 206.00220831871033 36.061250000000015 211.00220831871033 41.061250000000015 211.00220831871033 46.061250000000015 L 211.00220831871033 83.50500000000002 z "
                                                    pathFrom="M 180.4675659275055 83.50500000000002 L 180.4675659275055 83.50500000000002 L 211.00220831871033 83.50500000000002 L 211.00220831871033 83.50500000000002 L 211.00220831871033 83.50500000000002 L 211.00220831871033 83.50500000000002 L 211.00220831871033 83.50500000000002 L 180.4675659275055 83.50500000000002 z"
                                                    cy="36.06025000000002" cx="258.7615207767486" j="2" val="25"
                                                    barHeight="47.44375" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1877"
                                                    d="M 258.7615207767486 56.93650000000001 L 258.7615207767486 42.265750000000004 C 258.7615207767486 37.265750000000004 263.7615207767486 32.265750000000004 268.7615207767486 32.265750000000004 L 279.29616316795347 32.265750000000004 C 284.29616316795347 32.265750000000004 289.29616316795347 37.265750000000004 289.29616316795347 42.265750000000004 L 289.29616316795347 56.93650000000001 z "
                                                    fill="rgba(194,214,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="3"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 258.7615207767486 56.93650000000001 L 258.7615207767486 42.265750000000004 C 258.7615207767486 37.265750000000004 263.7615207767486 32.265750000000004 268.7615207767486 32.265750000000004 L 279.29616316795347 32.265750000000004 C 284.29616316795347 32.265750000000004 289.29616316795347 37.265750000000004 289.29616316795347 42.265750000000004 L 289.29616316795347 56.93650000000001 z "
                                                    pathFrom="M 258.7615207767486 56.93650000000001 L 258.7615207767486 56.93650000000001 L 289.29616316795347 56.93650000000001 L 289.29616316795347 56.93650000000001 L 289.29616316795347 56.93650000000001 L 289.29616316795347 56.93650000000001 L 289.29616316795347 56.93650000000001 L 258.7615207767486 56.93650000000001 z"
                                                    cy="32.26475000000001" cx="337.0554756259918" j="3" val="13"
                                                    barHeight="24.67075" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1879"
                                                    d="M 337.0554756259918 121.46000000000005 L 337.0554756259918 89.70950000000005 C 337.0554756259918 84.70950000000005 342.0554756259918 79.70950000000005 347.0554756259918 79.70950000000005 L 357.59011801719663 79.70950000000005 C 362.59011801719663 79.70950000000005 367.59011801719663 84.70950000000005 367.59011801719663 89.70950000000005 L 367.59011801719663 121.46000000000005 z "
                                                    fill="rgba(194,214,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="3"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 337.0554756259918 121.46000000000005 L 337.0554756259918 89.70950000000005 C 337.0554756259918 84.70950000000005 342.0554756259918 79.70950000000005 347.0554756259918 79.70950000000005 L 357.59011801719663 79.70950000000005 C 362.59011801719663 79.70950000000005 367.59011801719663 84.70950000000005 367.59011801719663 89.70950000000005 L 367.59011801719663 121.46000000000005 z "
                                                    pathFrom="M 337.0554756259918 121.46000000000005 L 337.0554756259918 121.46000000000005 L 367.59011801719663 121.46000000000005 L 367.59011801719663 121.46000000000005 L 367.59011801719663 121.46000000000005 L 367.59011801719663 121.46000000000005 L 367.59011801719663 121.46000000000005 L 337.0554756259918 121.46000000000005 z"
                                                    cy="79.70850000000004" cx="415.34943047523495" j="4" val="22"
                                                    barHeight="41.7505" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1881"
                                                    d="M 415.34943047523495 68.32300000000004 L 415.34943047523495 63.14100000000003 C 415.34943047523495 58.14100000000003 420.34943047523495 53.14100000000003 425.34943047523495 53.14100000000003 L 435.8840728664398 53.14100000000003 C 440.8840728664398 53.14100000000003 445.8840728664398 58.14100000000003 445.8840728664398 63.14100000000003 L 445.8840728664398 68.32300000000004 z "
                                                    fill="rgba(194,214,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="3"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 415.34943047523495 68.32300000000004 L 415.34943047523495 63.14100000000003 C 415.34943047523495 58.14100000000003 420.34943047523495 53.14100000000003 425.34943047523495 53.14100000000003 L 435.8840728664398 53.14100000000003 C 440.8840728664398 53.14100000000003 445.8840728664398 58.14100000000003 445.8840728664398 63.14100000000003 L 445.8840728664398 68.32300000000004 z "
                                                    pathFrom="M 415.34943047523495 68.32300000000004 L 415.34943047523495 68.32300000000004 L 445.8840728664398 68.32300000000004 L 445.8840728664398 68.32300000000004 L 445.8840728664398 68.32300000000004 L 445.8840728664398 68.32300000000004 L 445.8840728664398 68.32300000000004 L 415.34943047523495 68.32300000000004 z"
                                                    cy="53.14000000000003" cx="493.6433853244781" j="5" val="8"
                                                    barHeight="15.182" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1883"
                                                    d="M 493.6433853244781 64.52750000000003 L 493.6433853244781 40.36800000000002 C 493.6433853244781 35.36800000000002 498.6433853244781 30.368000000000027 503.6433853244781 30.368000000000027 L 514.1780277156829 30.368000000000027 C 519.1780277156829 30.368000000000027 524.1780277156829 35.36800000000002 524.1780277156829 40.36800000000002 L 524.1780277156829 64.52750000000003 z "
                                                    fill="rgba(194,214,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="3"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 493.6433853244781 64.52750000000003 L 493.6433853244781 40.36800000000002 C 493.6433853244781 35.36800000000002 498.6433853244781 30.368000000000027 503.6433853244781 30.368000000000027 L 514.1780277156829 30.368000000000027 C 519.1780277156829 30.368000000000027 524.1780277156829 35.36800000000002 524.1780277156829 40.36800000000002 L 524.1780277156829 64.52750000000003 z "
                                                    pathFrom="M 493.6433853244781 64.52750000000003 L 493.6433853244781 64.52750000000003 L 524.1780277156829 64.52750000000003 L 524.1780277156829 64.52750000000003 L 524.1780277156829 64.52750000000003 L 524.1780277156829 64.52750000000003 L 524.1780277156829 64.52750000000003 L 493.6433853244781 64.52750000000003 z"
                                                    cy="30.367000000000026" cx="571.9373401737213" j="6" val="18"
                                                    barHeight="34.1595" barWidth="30.534642391204834"></path>
                                                <path id="SvgjsPath1885"
                                                    d="M 571.9373401737213 68.32300000000004 L 571.9373401737213 40.36800000000002 C 571.9373401737213 35.36800000000002 576.9373401737213 30.368000000000027 581.9373401737213 30.368000000000027 L 592.4719825649261 30.368000000000027 C 597.4719825649261 30.368000000000027 602.4719825649261 35.36800000000002 602.4719825649261 40.36800000000002 L 602.4719825649261 68.32300000000004 z "
                                                    fill="rgba(194,214,255,1)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="3"
                                                    clip-path="url(#gridRectBarMask04mb6ttq)"
                                                    pathTo="M 571.9373401737213 68.32300000000004 L 571.9373401737213 40.36800000000002 C 571.9373401737213 35.36800000000002 576.9373401737213 30.368000000000027 581.9373401737213 30.368000000000027 L 592.4719825649261 30.368000000000027 C 597.4719825649261 30.368000000000027 602.4719825649261 35.36800000000002 602.4719825649261 40.36800000000002 L 602.4719825649261 68.32300000000004 z "
                                                    pathFrom="M 571.9373401737213 68.32300000000004 L 571.9373401737213 68.32300000000004 L 602.4719825649261 68.32300000000004 L 602.4719825649261 68.32300000000004 L 602.4719825649261 68.32300000000004 L 602.4719825649261 68.32300000000004 L 602.4719825649261 68.32300000000004 L 571.9373401737213 68.32300000000004 z"
                                                    cy="30.367000000000026" cx="650.2312950229644" j="7" val="20"
                                                    barHeight="37.955000000000005" barWidth="30.534642391204834"></path>
                                                <g id="SvgjsG1869" class="apexcharts-bar-goals-markers">
                                                    <g id="SvgjsG1870" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1872" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1874" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1876" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1878" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1880" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1882" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                    <g id="SvgjsG1884" className="apexcharts-bar-goals-groups"
                                                        class="apexcharts-hidden-element-shown"
                                                        clip-path="url(#gridRectMarkerMask04mb6ttq)"></g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1811" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG1830" class="apexcharts-datalabels" data:realIndex="1"></g>
                                            <g id="SvgjsG1849" class="apexcharts-datalabels" data:realIndex="2"></g>
                                            <g id="SvgjsG1868" class="apexcharts-datalabels" data:realIndex="3"></g>
                                        </g>
                                        <line id="SvgjsLine1899" x1="0" y1="0" x2="626.3516387939453" y2="0"
                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1900" x1="0" y1="0" x2="626.3516387939453" y2="0"
                                            stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1901" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1902" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText1904"
                                                    font-family="Outfit, sans-serif" x="39.14697742462158"
                                                    y="255.73000000000002" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Outfit, sans-serif;">
                                                    <tspan id="SvgjsTspan1905">Jan</tspan>
                                                    <title>Jan</title>
                                                </text><text id="SvgjsText1907" font-family="Outfit, sans-serif"
                                                    x="117.44093227386475" y="255.73000000000002" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Outfit, sans-serif;">
                                                    <tspan id="SvgjsTspan1908">Feb</tspan>
                                                    <title>Feb</title>
                                                </text><text id="SvgjsText1910" font-family="Outfit, sans-serif"
                                                    x="195.7348871231079" y="255.73000000000002" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Outfit, sans-serif;">
                                                    <tspan id="SvgjsTspan1911">Mar</tspan>
                                                    <title>Mar</title>
                                                </text><text id="SvgjsText1913" font-family="Outfit, sans-serif"
                                                    x="274.0288419723511" y="255.73000000000002" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Outfit, sans-serif;">
                                                    <tspan id="SvgjsTspan1914">Apr</tspan>
                                                    <title>Apr</title>
                                                </text><text id="SvgjsText1916" font-family="Outfit, sans-serif"
                                                    x="352.32279682159424" y="255.73000000000002" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Outfit, sans-serif;">
                                                    <tspan id="SvgjsTspan1917">May</tspan>
                                                    <title>May</title>
                                                </text><text id="SvgjsText1919" font-family="Outfit, sans-serif"
                                                    x="430.6167516708374" y="255.73000000000002" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Outfit, sans-serif;">
                                                    <tspan id="SvgjsTspan1920">Jun</tspan>
                                                    <title>Jun</title>
                                                </text><text id="SvgjsText1922" font-family="Outfit, sans-serif"
                                                    x="508.91070652008057" y="255.73000000000002" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Outfit, sans-serif;">
                                                    <tspan id="SvgjsTspan1923">Jul</tspan>
                                                    <title>Jul</title>
                                                </text><text id="SvgjsText1925" font-family="Outfit, sans-serif"
                                                    x="587.2046613693237" y="255.73000000000002" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Outfit, sans-serif;">
                                                    <tspan id="SvgjsTspan1926">Aug</tspan>
                                                    <title>Aug</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1950" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1951" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1952" class="apexcharts-point-annotations"></g>
                                    </g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0"
                                        style="order: 1;"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(42, 49, 216);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Outfit, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-1"
                                        style="order: 2;"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(70, 95, 255);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Outfit, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-2"
                                        style="order: 3;"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(117, 146, 255);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Outfit, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-3"
                                        style="order: 4;"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(194, 214, 255);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Outfit, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Funnel Chart End -->
                <!-- Invoice Table -->
                <div class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]">
                    <div class="px-6 py-4">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                            Recent Invoices
                        </h3>
                    </div>
                    <div class="custom-scrollbar overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-gray-50 dark:bg-gray-900">
                                    <th
                                        class="px-6 py-4 text-left text-sm font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                        Serial No:
                                    </th>
                                    <th
                                        class="px-6 py-4 text-left text-sm font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                        Close Date
                                    </th>
                                    <th
                                        class="px-6 py-4 text-left text-sm font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                        User
                                    </th>
                                    <th
                                        class="px-6 py-4 text-left text-sm font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                        Amount
                                    </th>
                                    <th
                                        class="px-6 py-4 text-left text-sm font-medium whitespace-nowrap text-gray-500 dark:text-gray-400">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-800">
                                <tr>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        #DF429
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        April 28, 2016
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        Jenny Wilson
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        $473.85
                                    </td>
                                    <td class="px-6 py-4 text-left">
                                        <span
                                            class="bg-success-50 text-theme-xs text-success-600 dark:bg-success-500/15 dark:text-success-500 rounded-full px-2 py-0.5 font-medium">
                                            Complete
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        #HTY274
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        October 30, 2017
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        Wade Warren
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        $293.01
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        <span
                                            class="bg-success-50 text-theme-xs text-success-600 dark:bg-success-500/15 dark:text-success-500 rounded-full px-2 py-0.5 font-medium">
                                            Complete
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        #LKE600
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        May 29, 2017
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        Darlene Robertson
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        $782.01
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        <span
                                            class="bg-warning-50 text-theme-xs text-warning-600 dark:bg-warning-500/15 dark:text-warning-500 rounded-full px-2 py-0.5 font-medium">
                                            Pending
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        #HRP447
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        May 20, 2015
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        Arlene McCoy
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        $202.87
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        <span
                                            class="bg-error-50 text-theme-xs text-error-600 dark:bg-error-500/15 dark:text-error-500 rounded-full px-2 py-0.5 font-medium">
                                            Cancelled
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        #WRH647
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        March 13, 2014
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        Bessie Cooper
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        $490.51
                                    </td>
                                    <td
                                        class="px-6 py-4 text-left text-sm whitespace-nowrap text-gray-700 dark:text-gray-400">
                                        <span
                                            class="bg-success-50 text-theme-xs text-success-600 dark:bg-success-500/15 dark:text-success-500 rounded-full px-2 py-0.5 font-medium">
                                            Complete
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-y-6 xl:col-span-5 2xl:col-span-4">
            <!-- Product Performance -->
            <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="mb-6 flex justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                            Product Performance
                        </h3>
                    </div>
                    <div x-data="{openDropDown: false}" class="relative h-fit">
                        <button @click="openDropDown = !openDropDown"
                            :class="openDropDown ? 'text-gray-700 dark:text-white' : 'text-gray-400 hover:text-gray-700 dark:hover:text-white'"
                            class="text-gray-400 hover:text-gray-700 dark:hover:text-white">
                            <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.2441 6C10.2441 5.0335 11.0276 4.25 11.9941 4.25H12.0041C12.9706 4.25 13.7541 5.0335 13.7541 6C13.7541 6.9665 12.9706 7.75 12.0041 7.75H11.9941C11.0276 7.75 10.2441 6.9665 10.2441 6ZM10.2441 18C10.2441 17.0335 11.0276 16.25 11.9941 16.25H12.0041C12.9706 16.25 13.7541 17.0335 13.7541 18C13.7541 18.9665 12.9706 19.75 12.0041 19.75H11.9941C11.0276 19.75 10.2441 18.9665 10.2441 18ZM11.9941 10.25C11.0276 10.25 10.2441 11.0335 10.2441 12C10.2441 12.9665 11.0276 13.75 11.9941 13.75H12.0041C12.9706 13.75 13.7541 12.9665 13.7541 12C13.7541 11.0335 12.9706 10.25 12.0041 10.25H11.9941Z"
                                    fill=""></path>
                            </svg>
                        </button>
                        <div x-show="openDropDown" @click.outside="openDropDown = false"
                            class="shadow-theme-lg dark:bg-gray-dark absolute top-full right-0 z-40 w-40 space-y-1 rounded-2xl border border-gray-200 bg-white p-2 dark:border-gray-800"
                            style="display: none;">
                            <button
                                class="text-theme-xs flex w-full rounded-lg px-3 py-2 text-left font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300">
                                View More
                            </button>
                            <button
                                class="text-theme-xs flex w-full rounded-lg px-3 py-2 text-left font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
                <div x-data="{selected: 'daily'}">
                    <div class="flex w-full items-center gap-0.5 rounded-lg bg-gray-100 p-0.5 dark:bg-gray-900">
                        <button @click="selected = 'daily'"
                            :class="selected === 'daily' ? 'shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800' : 'text-gray-500 dark:text-gray-400'"
                            class="text-theme-sm w-full rounded-md px-3 py-2 font-medium hover:text-gray-900 dark:hover:text-white shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800">
                            Daily Sales
                        </button>
                        <button @click="selected = 'online'"
                            :class="selected === 'online' ? 'shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800' : 'text-gray-500 dark:text-gray-400'"
                            class="text-theme-sm w-full rounded-md px-3 py-2 font-medium hover:text-gray-900 dark:hover:text-white text-gray-500 dark:text-gray-400">
                            Online Sales
                        </button>
                        <button @click="selected = 'new'"
                            :class="selected === 'new' ? 'shadow-theme-xs text-gray-900 dark:text-white bg-white dark:bg-gray-800' : 'text-gray-500 dark:text-gray-400'"
                            class="text-theme-sm w-full rounded-md px-3 py-2 font-medium hover:text-gray-900 dark:hover:text-white text-gray-500 dark:text-gray-400">
                            New Users
                        </button>
                    </div>
                    <!-- Tab Panels -->
                    <div class="mt-4">
                        <!-- Daily Sales Panel -->
                        <div x-show="selected === 'daily'" class="space-y-4">
                            <div
                                class="grid grid-cols-2 justify-between gap-10 divide-x divide-gray-100 rounded-xl border border-gray-100 bg-white py-4 dark:divide-gray-800 dark:border-gray-800 dark:bg-gray-800/[0.03]">
                                <div class="px-5">
                                    <span class="block text-sm text-gray-500 dark:text-gray-400">Digital Product</span>
                                    <div class="mt-1 flex items-center gap-2">
                                        <span
                                            class="bg-success-50 dark:bg-success-500/15 text-success-600 inline-flex size-5 items-center justify-center rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 12 12" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.56462 1.62411C5.70194 1.47091 5.90136 1.37451 6.12329 1.37451C6.1236 1.37451 6.1239 1.37451 6.12421 1.37451C6.3163 1.37434 6.50845 1.4475 6.65505 1.594L9.65514 4.59199C9.94814 4.88478 9.94831 5.35966 9.65552 5.65265C9.36272 5.94565 8.88785 5.94581 8.59486 5.65302L6.87329 3.93267L6.87329 10.1252C6.87329 10.5394 6.53751 10.8752 6.12329 10.8752C5.70908 10.8752 5.37329 10.5394 5.37329 10.1252L5.37329 3.93597L3.65516 5.65301C3.36218 5.94581 2.8873 5.94566 2.5945 5.65267C2.3017 5.35968 2.30185 4.88481 2.59484 4.59201L5.56462 1.62411Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <h4 class="text-xl font-semibold text-gray-800 dark:text-white/90">
                                            790
                                        </h4>
                                    </div>
                                </div>
                                <div class="px-5">
                                    <span class="block text-sm text-gray-500 dark:text-gray-400">Physical Product</span>
                                    <div class="mt-1 flex items-center gap-2">
                                        <span
                                            class="bg-error-50 dark:bg-error-500/15 text-error-600 inline-flex size-5 items-center justify-center rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 12 12" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.31462 10.3761C5.45194 10.5293 5.65136 10.6257 5.87329 10.6257C5.8736 10.6257 5.8739 10.6257 5.87421 10.6257C6.0663 10.6259 6.25845 10.5527 6.40505 10.4062L9.40514 7.4082C9.69814 7.11541 9.69831 6.64054 9.40552 6.34754C9.11273 6.05454 8.63785 6.05438 8.34486 6.34717L6.62329 8.06753L6.62329 1.875C6.62329 1.46079 6.28751 1.125 5.87329 1.125C5.45908 1.125 5.12329 1.46079 5.12329 1.875L5.12329 8.06422L3.40516 6.34719C3.11218 6.05439 2.6373 6.05454 2.3445 6.34752C2.0517 6.64051 2.05185 7.11538 2.34484 7.40818L5.31462 10.3761Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <h4 class="text-xl font-semibold text-gray-800 dark:text-white/90">
                                            572
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-xl border border-gray-100 px-5 py-4 dark:border-gray-800">
                                <div class="mb-3 flex items-start justify-between">
                                    <div>
                                        <span class="text-theme-sm font-medium text-gray-500 dark:text-gray-400">Average
                                            Daily Sales</span>
                                        <h3 class="text-title-sm font-semibold text-gray-800 dark:text-white/90">
                                            $2,950
                                        </h3>
                                    </div>
                                    <div>
                                        <span
                                            class="bg-error-50 text-error-600 dark:bg-error-500/15 dark:text-error-500 flex items-center gap-1 rounded-full py-0.5 pr-2.5 pl-2 text-sm font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 12 12" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.31462 10.3761C5.45194 10.5293 5.65136 10.6257 5.87329 10.6257C5.8736 10.6257 5.8739 10.6257 5.87421 10.6257C6.0663 10.6259 6.25845 10.5527 6.40505 10.4062L9.40514 7.4082C9.69814 7.11541 9.69831 6.64054 9.40552 6.34754C9.11273 6.05454 8.63785 6.05438 8.34486 6.34717L6.62329 8.06753L6.62329 1.875C6.62329 1.46079 6.28751 1.125 5.87329 1.125C5.45908 1.125 5.12329 1.46079 5.12329 1.875L5.12329 8.06422L3.40516 6.34719C3.11218 6.05439 2.6373 6.05454 2.3445 6.34752C2.0517 6.64051 2.05185 7.11538 2.34484 7.40818L5.31462 10.3761Z"
                                                    fill="currentColor"></path>
                                            </svg>0.52%</span>
                                    </div>
                                </div>
                                <!-- Chart -->
                                <div class="overflow-x-auto">
                                    <div id="chartEighteen" class="-ml-3" style="min-height: 215px;">
                                        <div id="apexchartsis6nbjsf"
                                            class="apexcharts-canvas apexchartsis6nbjsf apexcharts-theme-"
                                            style="width: 308px; height: 200px;"><svg id="SvgjsSvg1953" width="308"
                                                height="200" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)">
                                                <foreignObject x="0" y="0" width="308" height="200">
                                                    <div xmlns="http://www.w3.org/1999/xhtml"
                                                        style="position: relative; height: 100%; width: 100%;">
                                                        <div class="apexcharts-legend" style="max-height: 100px;"></div>
                                                    </div>
                                                </foreignObject>
                                                <g id="SvgjsG1966" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                                <g id="SvgjsG1967" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                                <g id="SvgjsG2023" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(18.015625, 0)">
                                                    <g id="SvgjsG2024" class="apexcharts-yaxis-texts-g"><text
                                                            id="SvgjsText2026" font-family="Outfit, sans-serif" x="20"
                                                            y="33.666666666666664" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Outfit, sans-serif;">
                                                            <tspan id="SvgjsTspan2027">400</tspan>
                                                            <title>400</title>
                                                        </text><text id="SvgjsText2029" font-family="Outfit, sans-serif"
                                                            x="20" y="66.34916666666666" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Outfit, sans-serif;">
                                                            <tspan id="SvgjsTspan2030">300</tspan>
                                                            <title>300</title>
                                                        </text><text id="SvgjsText2032" font-family="Outfit, sans-serif"
                                                            x="20" y="99.03166666666667" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Outfit, sans-serif;">
                                                            <tspan id="SvgjsTspan2033">200</tspan>
                                                            <title>200</title>
                                                        </text><text id="SvgjsText2035" font-family="Outfit, sans-serif"
                                                            x="20" y="131.71416666666667" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Outfit, sans-serif;">
                                                            <tspan id="SvgjsTspan2036">100</tspan>
                                                            <title>100</title>
                                                        </text><text id="SvgjsText2038" font-family="Outfit, sans-serif"
                                                            x="20" y="164.39666666666668" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Outfit, sans-serif;">
                                                            <tspan id="SvgjsTspan2039">0</tspan>
                                                            <title>0</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1955" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(48.015625, 30)">
                                                    <defs id="SvgjsDefs1954">
                                                        <linearGradient id="SvgjsLinearGradient1958" x1="0" y1="0"
                                                            x2="0" y2="1">
                                                            <stop id="SvgjsStop1959" stop-opacity="0.4"
                                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                            <stop id="SvgjsStop1960" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                            <stop id="SvgjsStop1961" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMaskis6nbjsf">
                                                            <rect id="SvgjsRect1963" width="249.984375" height="130.73"
                                                                x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectBarMaskis6nbjsf">
                                                            <rect id="SvgjsRect1964" width="257.984375" height="138.73"
                                                                x="-4" y="-4" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMaskis6nbjsf">
                                                            <rect id="SvgjsRect1965" width="249.984375" height="130.73"
                                                                x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskis6nbjsf"></clipPath>
                                                        <clipPath id="nonForecastMaskis6nbjsf"></clipPath>
                                                    </defs>
                                                    <rect id="SvgjsRect1962" width="18.570267857142856" height="130.73"
                                                        x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke-dasharray="3" fill="url(#SvgjsLinearGradient1958)"
                                                        class="apexcharts-xcrosshairs" y2="130.73" filter="none"
                                                        fill-opacity="0.9"></rect>
                                                    <g id="SvgjsG1987" class="apexcharts-grid">
                                                        <g id="SvgjsG1988" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine1992" x1="0" y1="32.6825" x2="249.984375"
                                                                y2="32.6825" stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1993" x1="0" y1="65.365" x2="249.984375"
                                                                y2="65.365" stroke="#e0e0e0" stroke-dasharray="0"
                                                                stroke-linecap="butt" class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine1994" x1="0" y1="98.04749999999999"
                                                                x2="249.984375" y2="98.04749999999999" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1989" class="apexcharts-gridlines-vertical"></g>
                                                        <line id="SvgjsLine1997" x1="0" y1="130.73" x2="249.984375"
                                                            y2="130.73" stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1996" x1="0" y1="1" x2="0" y2="130.73"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1990" class="apexcharts-grid-borders">
                                                        <line id="SvgjsLine1991" x1="0" y1="0" x2="249.984375" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1995" x1="0" y1="130.73" x2="249.984375"
                                                            y2="130.73" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1968"
                                                        class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG1969" class="apexcharts-series" rel="1"
                                                            seriesName="Sales" data:realIndex="0">
                                                            <path id="SvgjsPath1974"
                                                                d="M 10.570892857142857 128.731 L 10.570892857142857 85.8244 C 10.570892857142857 81.8244 14.570892857142859 77.8244 18.57089285714286 77.8244 L 18.57089285714286 77.8244 C 21.856026785714285 77.8244 25.14116071428571 81.8244 25.14116071428571 85.8244 L 25.14116071428571 128.731 z "
                                                                fill="rgba(70,95,255,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="4"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectBarMaskis6nbjsf)"
                                                                pathTo="M 10.570892857142857 128.731 L 10.570892857142857 85.8244 C 10.570892857142857 81.8244 14.570892857142859 77.8244 18.57089285714286 77.8244 L 18.57089285714286 77.8244 C 21.856026785714285 77.8244 25.14116071428571 81.8244 25.14116071428571 85.8244 L 25.14116071428571 128.731 z "
                                                                pathFrom="M 10.570892857142857 128.731 L 10.570892857142857 128.731 L 25.14116071428571 128.731 L 25.14116071428571 128.731 L 25.14116071428571 128.731 L 25.14116071428571 128.731 L 25.14116071428571 128.731 L 10.570892857142857 128.731 z"
                                                                cy="75.82339999999999" cx="42.28294642857143" j="0"
                                                                val="168" barHeight="54.9066"
                                                                barWidth="18.570267857142856"></path>
                                                            <path id="SvgjsPath1976"
                                                                d="M 46.28294642857143 128.731 L 46.28294642857143 14.903374999999992 C 46.28294642857143 10.903374999999992 50.28294642857143 6.903374999999992 54.28294642857143 6.903374999999992 L 54.28294642857143 6.903374999999992 C 57.56808035714286 6.903374999999992 60.85321428571429 10.903374999999992 60.85321428571429 14.903374999999992 L 60.85321428571429 128.731 z "
                                                                fill="rgba(70,95,255,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="4"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectBarMaskis6nbjsf)"
                                                                pathTo="M 46.28294642857143 128.731 L 46.28294642857143 14.903374999999992 C 46.28294642857143 10.903374999999992 50.28294642857143 6.903374999999992 54.28294642857143 6.903374999999992 L 54.28294642857143 6.903374999999992 C 57.56808035714286 6.903374999999992 60.85321428571429 10.903374999999992 60.85321428571429 14.903374999999992 L 60.85321428571429 128.731 z "
                                                                pathFrom="M 46.28294642857143 128.731 L 46.28294642857143 128.731 L 60.85321428571429 128.731 L 60.85321428571429 128.731 L 60.85321428571429 128.731 L 60.85321428571429 128.731 L 60.85321428571429 128.731 L 46.28294642857143 128.731 z"
                                                                cy="4.902374999999992" cx="77.995" j="1" val="385"
                                                                barHeight="125.827625" barWidth="18.570267857142856">
                                                            </path>
                                                            <path id="SvgjsPath1978"
                                                                d="M 81.995 128.731 L 81.995 75.039175 C 81.995 71.039175 85.995 67.039175 89.995 67.039175 L 89.995 67.039175 C 93.28013392857143 67.039175 96.56526785714286 71.039175 96.56526785714286 75.039175 L 96.56526785714286 128.731 z "
                                                                fill="rgba(70,95,255,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="4"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectBarMaskis6nbjsf)"
                                                                pathTo="M 81.995 128.731 L 81.995 75.039175 C 81.995 71.039175 85.995 67.039175 89.995 67.039175 L 89.995 67.039175 C 93.28013392857143 67.039175 96.56526785714286 71.039175 96.56526785714286 75.039175 L 96.56526785714286 128.731 z "
                                                                pathFrom="M 81.995 128.731 L 81.995 128.731 L 96.56526785714286 128.731 L 96.56526785714286 128.731 L 96.56526785714286 128.731 L 96.56526785714286 128.731 L 96.56526785714286 128.731 L 81.995 128.731 z"
                                                                cy="65.038175" cx="113.70705357142857" j="2" val="201"
                                                                barHeight="65.691825" barWidth="18.570267857142856">
                                                            </path>
                                                            <path id="SvgjsPath1980"
                                                                d="M 117.70705357142857 128.731 L 117.70705357142857 43.33714999999999 C 117.70705357142857 39.33714999999999 121.70705357142857 35.33714999999999 125.70705357142857 35.33714999999999 L 125.70705357142857 35.33714999999999 C 128.9921875 35.33714999999999 132.27732142857144 39.33714999999999 132.27732142857144 43.33714999999999 L 132.27732142857144 128.731 z "
                                                                fill="rgba(70,95,255,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="4"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectBarMaskis6nbjsf)"
                                                                pathTo="M 117.70705357142857 128.731 L 117.70705357142857 43.33714999999999 C 117.70705357142857 39.33714999999999 121.70705357142857 35.33714999999999 125.70705357142857 35.33714999999999 L 125.70705357142857 35.33714999999999 C 128.9921875 35.33714999999999 132.27732142857144 39.33714999999999 132.27732142857144 43.33714999999999 L 132.27732142857144 128.731 z "
                                                                pathFrom="M 117.70705357142857 128.731 L 117.70705357142857 128.731 L 132.27732142857144 128.731 L 132.27732142857144 128.731 L 132.27732142857144 128.731 L 132.27732142857144 128.731 L 132.27732142857144 128.731 L 117.70705357142857 128.731 z"
                                                                cy="33.33614999999999" cx="149.41910714285714" j="3"
                                                                val="298" barHeight="97.39385"
                                                                barWidth="18.570267857142856"></path>
                                                            <path id="SvgjsPath1982"
                                                                d="M 153.41910714285714 128.731 L 153.41910714285714 79.61472499999999 C 153.41910714285714 75.61472499999999 157.41910714285714 71.61472499999999 161.41910714285714 71.61472499999999 L 161.41910714285714 71.61472499999999 C 164.70424107142856 71.61472499999999 167.989375 75.61472499999999 167.989375 79.61472499999999 L 167.989375 128.731 z "
                                                                fill="rgba(70,95,255,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="4"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectBarMaskis6nbjsf)"
                                                                pathTo="M 153.41910714285714 128.731 L 153.41910714285714 79.61472499999999 C 153.41910714285714 75.61472499999999 157.41910714285714 71.61472499999999 161.41910714285714 71.61472499999999 L 161.41910714285714 71.61472499999999 C 164.70424107142856 71.61472499999999 167.989375 75.61472499999999 167.989375 79.61472499999999 L 167.989375 128.731 z "
                                                                pathFrom="M 153.41910714285714 128.731 L 153.41910714285714 128.731 L 167.989375 128.731 L 167.989375 128.731 L 167.989375 128.731 L 167.989375 128.731 L 167.989375 128.731 L 153.41910714285714 128.731 z"
                                                                cy="69.61372499999999" cx="185.13116071428573" j="4"
                                                                val="187" barHeight="61.116275"
                                                                barWidth="18.570267857142856"></path>
                                                            <path id="SvgjsPath1984"
                                                                d="M 189.13116071428573 128.731 L 189.13116071428573 77.000125 C 189.13116071428573 73.000125 193.13116071428573 69.000125 197.13116071428573 69.000125 L 197.13116071428573 69.000125 C 200.41629464285717 69.000125 203.70142857142858 73.000125 203.70142857142858 77.000125 L 203.70142857142858 128.731 z "
                                                                fill="rgba(70,95,255,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="4"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectBarMaskis6nbjsf)"
                                                                pathTo="M 189.13116071428573 128.731 L 189.13116071428573 77.000125 C 189.13116071428573 73.000125 193.13116071428573 69.000125 197.13116071428573 69.000125 L 197.13116071428573 69.000125 C 200.41629464285717 69.000125 203.70142857142858 73.000125 203.70142857142858 77.000125 L 203.70142857142858 128.731 z "
                                                                pathFrom="M 189.13116071428573 128.731 L 189.13116071428573 128.731 L 203.70142857142858 128.731 L 203.70142857142858 128.731 L 203.70142857142858 128.731 L 203.70142857142858 128.731 L 203.70142857142858 128.731 L 189.13116071428573 128.731 z"
                                                                cy="66.99912499999999" cx="220.84321428571428" j="5"
                                                                val="195" barHeight="63.730875"
                                                                barWidth="18.570267857142856"></path>
                                                            <path id="SvgjsPath1986"
                                                                d="M 224.84321428571428 128.731 L 224.84321428571428 81.9025 C 224.84321428571428 77.9025 228.84321428571428 73.9025 232.84321428571428 73.9025 L 232.84321428571428 73.9025 C 236.12834821428572 73.9025 239.41348214285713 77.9025 239.41348214285713 81.9025 L 239.41348214285713 128.731 z "
                                                                fill="rgba(70,95,255,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="4"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectBarMaskis6nbjsf)"
                                                                pathTo="M 224.84321428571428 128.731 L 224.84321428571428 81.9025 C 224.84321428571428 77.9025 228.84321428571428 73.9025 232.84321428571428 73.9025 L 232.84321428571428 73.9025 C 236.12834821428572 73.9025 239.41348214285713 77.9025 239.41348214285713 81.9025 L 239.41348214285713 128.731 z "
                                                                pathFrom="M 224.84321428571428 128.731 L 224.84321428571428 128.731 L 239.41348214285713 128.731 L 239.41348214285713 128.731 L 239.41348214285713 128.731 L 239.41348214285713 128.731 L 239.41348214285713 128.731 L 224.84321428571428 128.731 z"
                                                                cy="71.9015" cx="256.55526785714284" j="6" val="180"
                                                                barHeight="58.8285" barWidth="18.570267857142856">
                                                            </path>
                                                            <g id="SvgjsG1971" class="apexcharts-bar-goals-markers">
                                                                <g id="SvgjsG1973"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMaskis6nbjsf)"></g>
                                                                <g id="SvgjsG1975"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMaskis6nbjsf)"></g>
                                                                <g id="SvgjsG1977"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMaskis6nbjsf)"></g>
                                                                <g id="SvgjsG1979"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMaskis6nbjsf)"></g>
                                                                <g id="SvgjsG1981"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMaskis6nbjsf)"></g>
                                                                <g id="SvgjsG1983"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMaskis6nbjsf)"></g>
                                                                <g id="SvgjsG1985"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMaskis6nbjsf)"></g>
                                                            </g>
                                                            <g id="SvgjsG1972"
                                                                class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1970"
                                                            class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1998" x1="0" y1="0" x2="249.984375" y2="0"
                                                        stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1999" x1="0" y1="0" x2="249.984375" y2="0"
                                                        stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG2000" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG2001" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"><text id="SvgjsText2003"
                                                                font-family="Outfit, sans-serif" x="17.856026785714285"
                                                                y="158.73" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Outfit, sans-serif;">
                                                                <tspan id="SvgjsTspan2004">Mon</tspan>
                                                                <title>Mon</title>
                                                            </text><text id="SvgjsText2006"
                                                                font-family="Outfit, sans-serif" x="53.568080357142854"
                                                                y="158.73" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Outfit, sans-serif;">
                                                                <tspan id="SvgjsTspan2007">Tue</tspan>
                                                                <title>Tue</title>
                                                            </text><text id="SvgjsText2009"
                                                                font-family="Outfit, sans-serif" x="89.28013392857142"
                                                                y="158.73" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Outfit, sans-serif;">
                                                                <tspan id="SvgjsTspan2010">Wed</tspan>
                                                                <title>Wed</title>
                                                            </text><text id="SvgjsText2012"
                                                                font-family="Outfit, sans-serif" x="124.9921875"
                                                                y="158.73" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Outfit, sans-serif;">
                                                                <tspan id="SvgjsTspan2013">Thu</tspan>
                                                                <title>Thu</title>
                                                            </text><text id="SvgjsText2015"
                                                                font-family="Outfit, sans-serif" x="160.70424107142856"
                                                                y="158.73" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Outfit, sans-serif;">
                                                                <tspan id="SvgjsTspan2016">Fri</tspan>
                                                                <title>Fri</title>
                                                            </text><text id="SvgjsText2018"
                                                                font-family="Outfit, sans-serif" x="196.4162946428571"
                                                                y="158.73" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Outfit, sans-serif;">
                                                                <tspan id="SvgjsTspan2019">Sat</tspan>
                                                                <title>Sat</title>
                                                            </text><text id="SvgjsText2021"
                                                                font-family="Outfit, sans-serif" x="232.12834821428567"
                                                                y="158.73" text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Outfit, sans-serif;">
                                                                <tspan id="SvgjsTspan2022">Sun</tspan>
                                                                <title>Sun</title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG2040" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG2041" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG2042" class="apexcharts-point-annotations"></g>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0"
                                                    style="order: 1;"><span class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(70, 95, 255);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Outfit, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Online Sales Panel -->
                        <div x-show="selected === 'online'" class="space-y-4" style="display: none;">
                            <div
                                class="grid grid-cols-2 justify-between gap-10 divide-x divide-gray-100 rounded-xl border border-gray-100 py-4 dark:divide-gray-800 dark:border-gray-800">
                                <div class="px-5">
                                    <span class="block text-sm text-gray-500 dark:text-gray-400">Digital Product</span>
                                    <div class="mt-1 flex items-center gap-2">
                                        <span
                                            class="bg-success-50 dark:bg-success-500/15 text-success-600 inline-flex size-5 items-center justify-center rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 12 12" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.56462 1.62411C5.70194 1.47091 5.90136 1.37451 6.12329 1.37451C6.1236 1.37451 6.1239 1.37451 6.12421 1.37451C6.3163 1.37434 6.50845 1.4475 6.65505 1.594L9.65514 4.59199C9.94814 4.88478 9.94831 5.35966 9.65552 5.65265C9.36272 5.94565 8.88785 5.94581 8.59486 5.65302L6.87329 3.93267L6.87329 10.1252C6.87329 10.5394 6.53751 10.8752 6.12329 10.8752C5.70908 10.8752 5.37329 10.5394 5.37329 10.1252L5.37329 3.93597L3.65516 5.65301C3.36218 5.94581 2.8873 5.94566 2.5945 5.65267C2.3017 5.35968 2.30185 4.88481 2.59484 4.59201L5.56462 1.62411Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <h4 class="text-xl font-semibold text-gray-800 dark:text-white/90">
                                            8,490
                                        </h4>
                                    </div>
                                </div>
                                <div class="px-5">
                                    <span class="block text-sm text-gray-500 dark:text-gray-400">Physical Product</span>
                                    <div class="mt-1 flex items-center gap-2">
                                        <span
                                            class="bg-error-50 dark:bg-error-500/15 text-error-600 inline-flex size-5 items-center justify-center rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 12 12" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.31462 10.3761C5.45194 10.5293 5.65136 10.6257 5.87329 10.6257C5.8736 10.6257 5.8739 10.6257 5.87421 10.6257C6.0663 10.6259 6.25845 10.5527 6.40505 10.4062L9.40514 7.4082C9.69814 7.11541 9.69831 6.64054 9.40552 6.34754C9.11273 6.05454 8.63785 6.05438 8.34486 6.34717L6.62329 8.06753L6.62329 1.875C6.62329 1.46079 6.28751 1.125 5.87329 1.125C5.45908 1.125 5.12329 1.46079 5.12329 1.875L5.12329 8.06422L3.40516 6.34719C3.11218 6.05439 2.6373 6.05454 2.3445 6.34752C2.0517 6.64051 2.05185 7.11538 2.34484 7.40818L5.31462 10.3761Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <h4 class="text-xl font-semibold text-gray-800 dark:text-white/90">
                                            950
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-xl border border-gray-100 px-5 py-4 dark:border-gray-800">
                                <div class="mb-3 flex items-start justify-between">
                                    <div>
                                        <span class="text-theme-sm font-medium text-gray-500 dark:text-gray-400">Total
                                            Online Sales</span>
                                        <h3 class="text-title-sm font-semibold text-gray-800 dark:text-white/90">
                                            $59,410
                                        </h3>
                                    </div>
                                    <div>
                                        <span
                                            class="bg-success-50 text-success-600 dark:bg-success-500/15 dark:text-success-500 flex items-center gap-1 rounded-full py-0.5 pr-2.5 pl-2 text-sm font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 12 12" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.56462 1.62411C5.70194 1.47091 5.90136 1.37451 6.12329 1.37451C6.1236 1.37451 6.12391 1.37451 6.12421 1.37451C6.3163 1.37434 6.50845 1.4475 6.65505 1.594L9.65514 4.59199C9.94814 4.88478 9.94831 5.35966 9.65552 5.65265C9.36272 5.94565 8.88785 5.94581 8.59486 5.65302L6.87329 3.93267L6.87329 10.1252C6.87329 10.5394 6.53751 10.8752 6.12329 10.8752C5.70908 10.8752 5.37329 10.5394 5.37329 10.1252L5.37329 3.93597L3.65516 5.65301C3.36218 5.94581 2.8873 5.94566 2.5945 5.65267C2.3017 5.35968 2.30185 4.88481 2.59484 4.59201L5.56462 1.62411Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            0.52%</span>
                                    </div>
                                </div>
                                <!-- Chart -->
                                <div class="custom-scrollbar max-w-full overflow-x-auto">
                                    <div id="chartNineteen" class="-ml-3 w-full" style="min-height: 215px;">
                                        <div id="apexchartss0rda78ji" class="apexcharts-canvas apexchartss0rda78ji"
                                            style="width: 0px; height: 200px;"><svg id="SvgjsSvg1365" width="0"
                                                height="200" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)">
                                                <foreignObject x="0" y="0" width="0" height="200">
                                                    <div xmlns="http://www.w3.org/1999/xhtml"
                                                        style="position: relative; height: 100%; width: 100%;">
                                                        <div class="apexcharts-legend"></div>
                                                    </div>
                                                </foreignObject>
                                                <g id="SvgjsG1367" class="apexcharts-inner apexcharts-graphical">
                                                    <defs id="SvgjsDefs1366"></defs>
                                                </g>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- New Users Panel -->
                        <div x-show="selected === 'new'" class="space-y-4" style="display: none;">
                            <div
                                class="grid grid-cols-2 justify-between gap-4 rounded-xl border border-gray-100 py-4 dark:border-gray-800">
                                <div class="px-5">
                                    <div class="flex -space-x-3">
                                        <img src="src/images/user/user-01.jpg"
                                            class="size-12 rounded-full ring-2 ring-white dark:ring-gray-800/90" alt="">
                                        <img src="src/images/user/user-02.jpg"
                                            class="size-12 rounded-full ring-2 ring-white dark:ring-gray-800/90" alt="">
                                        <img src="src/images/user/user-03.jpg"
                                            class="size-12 rounded-full ring-2 ring-white dark:ring-gray-800/90" alt="">
                                        <div
                                            class="inline-flex size-12 shrink-0 items-center justify-center rounded-full bg-gray-200 text-sm font-medium text-gray-700 ring-2 ring-white dark:ring-gray-800/90">
                                            10+
                                        </div>
                                    </div>
                                </div>
                                <div class="px-5">
                                    <span class="block text-sm text-gray-500 dark:text-gray-400">Added last month</span>
                                    <div class="mt-1 flex items-center gap-2">
                                        <h4 class="text-xl font-semibold text-gray-800 dark:text-white/90">
                                            8,490
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-xl border border-gray-100 px-5 py-4 dark:border-gray-800">
                                <div class="mb-3 flex items-start justify-between">
                                    <div>
                                        <span class="text-theme-sm font-medium text-gray-500 dark:text-gray-400">Total
                                            New Users</span>
                                        <h3 class="text-title-sm font-semibold text-gray-800 dark:text-white/90">
                                            5.9K
                                        </h3>
                                    </div>
                                    <div>
                                        <span
                                            class="bg-success-50 text-success-600 dark:bg-success-500/15 dark:text-success-500 flex items-center gap-1 rounded-full py-0.5 pr-2.5 pl-2 text-sm font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 12 12" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.56462 1.62411C5.70194 1.47091 5.90136 1.37451 6.12329 1.37451C6.1236 1.37451 6.12391 1.37451 6.12421 1.37451C6.3163 1.37434 6.50845 1.4475 6.65505 1.594L9.65514 4.59199C9.94814 4.88478 9.94831 5.35966 9.65552 5.65265C9.36272 5.94565 8.88785 5.94581 8.59486 5.65302L6.87329 3.93267L6.87329 10.1252C6.87329 10.5394 6.53751 10.8752 6.12329 10.8752C5.70908 10.8752 5.37329 10.5394 5.37329 10.1252L5.37329 3.93597L3.65516 5.65301C3.36218 5.94581 2.8873 5.94566 2.5945 5.65267C2.3017 5.35968 2.30185 4.88481 2.59484 4.59201L5.56462 1.62411Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            0.52%</span>
                                    </div>
                                </div>
                                <!-- Chart -->
                                <div>
                                    <div id="chartTwenty" class="-ml-2 w-full" style="min-height: 215px;">
                                        <div id="apexchartst80irr3e" class="apexcharts-canvas apexchartst80irr3e"
                                            style="width: 0px; height: 200px;"><svg id="SvgjsSvg1368" width="0"
                                                height="200" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)">
                                                <foreignObject x="0" y="0" width="0" height="200">
                                                    <div xmlns="http://www.w3.org/1999/xhtml"
                                                        style="position: relative; height: 100%; width: 100%;">
                                                        <div class="apexcharts-legend"></div>
                                                    </div>
                                                </foreignObject>
                                                <g id="SvgjsG1370" class="apexcharts-inner apexcharts-graphical">
                                                    <defs id="SvgjsDefs1369"></defs>
                                                </g>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Performance End -->

            <!-- Activities  -->
            <div class="rounded-2xl border border-gray-200 bg-white p-6 dark:border-gray-800 dark:bg-white/[0.03]">
                <div class="mb-6 flex justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white/90">
                            Activities
                        </h3>
                    </div>
                    <div x-data="{openDropDown: false}" class="relative h-fit">
                        <button @click="openDropDown = !openDropDown"
                            :class="openDropDown ? 'text-gray-700 dark:text-white' : 'text-gray-400 hover:text-gray-700 dark:hover:text-white'"
                            class="text-gray-400 hover:text-gray-700 dark:hover:text-white">
                            <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.2441 6C10.2441 5.0335 11.0276 4.25 11.9941 4.25H12.0041C12.9706 4.25 13.7541 5.0335 13.7541 6C13.7541 6.9665 12.9706 7.75 12.0041 7.75H11.9941C11.0276 7.75 10.2441 6.9665 10.2441 6ZM10.2441 18C10.2441 17.0335 11.0276 16.25 11.9941 16.25H12.0041C12.9706 16.25 13.7541 17.0335 13.7541 18C13.7541 18.9665 12.9706 19.75 12.0041 19.75H11.9941C11.0276 19.75 10.2441 18.9665 10.2441 18ZM11.9941 10.25C11.0276 10.25 10.2441 11.0335 10.2441 12C10.2441 12.9665 11.0276 13.75 11.9941 13.75H12.0041C12.9706 13.75 13.7541 12.9665 13.7541 12C13.7541 11.0335 12.9706 10.25 12.0041 10.25H11.9941Z"
                                    fill=""></path>
                            </svg>
                        </button>
                        <div x-show="openDropDown" @click.outside="openDropDown = false"
                            class="shadow-theme-lg dark:bg-gray-dark absolute top-full right-0 z-40 w-40 space-y-1 rounded-2xl border border-gray-200 bg-white p-2 dark:border-gray-800"
                            style="display: none;">
                            <button
                                class="text-theme-xs flex w-full rounded-lg px-3 py-2 text-left font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300">
                                View More
                            </button>
                            <button
                                class="text-theme-xs flex w-full rounded-lg px-3 py-2 text-left font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <!-- Timeline line -->
                    <div class="absolute top-6 bottom-10 left-5 w-px bg-gray-200 dark:bg-gray-800"></div>

                    <!-- Francisco Grbbs -->
                    <div class="relative mb-6 flex">
                        <div class="z-10 flex-shrink-0">
                            <img src="src/images/user/user-01.jpg" alt="Francisco Grbbs"
                                class="size-10 rounded-full object-cover ring-4 ring-white dark:ring-gray-800">
                        </div>
                        <div class="ml-4">
                            <div class="mb-1 flex items-center gap-1">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 5.0625H14.0625L12.5827 8.35084C12.4506 8.64443 12.4506 8.98057 12.5827 9.27416L14.0625 12.5625H10.125C9.50368 12.5625 9 12.0588 9 11.4375V10.875M3.9375 10.875H9M3.9375 3.375H7.875C8.49632 3.375 9 3.87868 9 4.5V10.875M3.9375 15.9375V2.0625"
                                        stroke="#12B76A" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                                <p class="text-theme-xs text-success-500 font-medium">New invoice</p>
                            </div>
                            <div class="flex items-baseline">
                                <h3 class="text-theme-sm font-medium text-gray-800 dark:text-white/90">
                                    Francisco Grbbs
                                </h3>
                                <span class="text-theme-sm ml-2 font-normal text-gray-500 dark:text-gray-400">created
                                    invoice</span>
                            </div>
                            <p class="text-theme-sm font-normal text-gray-500 dark:text-gray-400">
                                PQ-4491C
                            </p>
                            <p class="text-theme-xs mt-1 text-gray-400">Just Now</p>
                        </div>
                    </div>

                    <!-- Courtney Henry -->
                    <div class="relative mb-6 flex">
                        <div class="z-10 flex-shrink-0">
                            <img src="src/images/user/user-03.jpg" alt="Courtney Henry"
                                class="size-10 rounded-full object-cover ring-4 ring-white dark:ring-gray-800">
                        </div>
                        <div class="ml-4">
                            <div class="flex items-baseline">
                                <h3 class="text-theme-sm font-semibold text-gray-800 dark:text-white/90">
                                    Courtney Henry
                                </h3>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">created invoice</span>
                            </div>
                            <p class="text-theme-sm font-normal text-gray-500 dark:text-gray-400">
                                HK-234G
                            </p>
                            <p class="text-theme-xs mt-1 text-gray-400">15 minutes ago</p>
                        </div>
                    </div>

                    <!-- Bessie Cooper -->
                    <div class="relative mb-6 flex">
                        <div class="z-10 flex-shrink-0">
                            <img src="src/images/user/user-04.jpg" alt="Bessie Cooper"
                                class="size-10 rounded-full object-cover ring-4 ring-white dark:ring-gray-800">
                        </div>
                        <div class="ml-4">
                            <div class="flex items-baseline">
                                <h3 class="text-theme-sm font-semibold text-gray-800 dark:text-white/90">
                                    Bessie Cooper
                                </h3>
                                <span class="text-theme-sm ml-2 text-gray-500 dark:text-gray-400">created invoice</span>
                            </div>
                            <p class="text-theme-sm font-normal text-gray-500 dark:text-gray-400">
                                LH-2891C
                            </p>
                            <p class="text-theme-xs mt-1 text-gray-400">5 months ago</p>
                        </div>
                    </div>

                    <!-- Theresa Web -->
                    <div class="relative flex">
                        <div class="z-10 flex-shrink-0">
                            <img src="src/images/user/user-05.jpg" alt="Theresa Web"
                                class="size-10 rounded-full object-cover ring-4 ring-white dark:ring-gray-800">
                        </div>
                        <div class="ml-4">
                            <div class="flex items-baseline">
                                <h3 class="text-theme-sm font-semibold text-gray-800 dark:text-white/90">
                                    Theresa Web
                                </h3>
                                <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">created invoice</span>
                            </div>
                            <p class="text-theme-sm font-normal text-gray-500 dark:text-gray-400">
                                CK-125NH
                            </p>
                            <p class="text-theme-xs mt-1 text-gray-400">2 weeks ago</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Activities End -->
        </div>
    </div>
</div>