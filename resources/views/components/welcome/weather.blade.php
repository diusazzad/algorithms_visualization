<!-- component -->
<!-- This is an example component -->
<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        {{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.11/tailwind.min.css'> --}}
        <script src='https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.3.2/cdn.js'></script>
    </head>

    <body>

        <div class=" h-fit bg-gray-100 flex items-center">
            <div class="w-fit max-w-sm mx-auto">
                <div class="bg-white shadow rounded-lg p-5 dark:bg-gray-800 w-full" x-data="{
                    weatherData: null,
                    fetchWeatherData() {
                        fetch('https://api.weatherapi.com/v1/forecast.json?key=ff9b41622f994b1287a73535210809&q=Guwahati&days=3')
                            .then(response => response.json())
                            .then(json => this.weatherData = json)
                    },
                    formattedDateDisplay(date) {
                        const options = {
                            weekday: 'long',
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric'
                        };

                        return (new Date(date)).toLocaleDateString('en-US', options);
                    }
                }"
                    x-init="fetchWeatherData()" x-cloak>
                    <h2 class="font-bold text-gray-800 text-lg dark:text-gray-400"
                        x-text="formattedDateDisplay(new Date())"></h2>

                    <template x-if="weatherData != null">
                        <div>
                            <div class="flex mt-4 mb-2">
                                <div class="flex-1">
                                    <div class="text-gray-600 text-sm dark:text-gray-400"
                                        x-text="weatherData.location.name +', '+ weatherData.location.region"></div>
                                    <div class="text-3xl font-bold text-gray-800 dark:text-gray-300"
                                        x-html="`${weatherData.current.temp_c} &deg;C`"></div>
                                    <div x-text="weatherData.current.condition.text"
                                        class="text-xs text-gray-600 dark:text-gray-400"></div>
                                </div>
                                <div class="w-24">
                                    <img :src="`https:${weatherData.current.condition.icon}`"
                                        :alt="weatherData.current.condition.text" loading="lazy">
                                </div>
                            </div>

                            <div class="flex space-x-2 justify-between border-t dark:border-gray-500">
                                <template x-for="(forecast, key) in weatherData.forecast.forecastday.splice(1)">
                                    <div class="flex-1 text-center pt-3"
                                        :class="{ 'border-r dark:border-gray-500': key == 0 }">
                                        <div x-text="`${forecast.date.split('-')[2]}/${forecast.date.split('-')[1]}/${forecast.date.split('-')[0]}`"
                                            class="text-xs text-gray-500 dark:text-gray-400"></div>
                                        <img :src="`https:${forecast.day.condition.icon}`"
                                            :alt="forecast.day.condition.text" loading="lazy" class="mx-auto">
                                        <div x-html="`${forecast.day.maxtemp_c} &deg;C`"
                                            class="font-semibold text-gray-800 mt-1.5 dark:text-gray-300"></div>
                                        <div x-text="forecast.day.condition.text"
                                            class="text-xs text-gray-600 dark:text-gray-400"></div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </template>

                    <template x-if="weatherData == null">
                        <div class="animate-pulse">
                            <div class="flex mt-4 mb-5">
                                <div class="flex-1">
                                    <div class="rounded h-2 mb-1.5 bg-gray-200 w-1/2"></div>
                                    <div class="bg-gray-200 rounded h-4"></div>
                                    <div class="rounded h-2 mt-1.5 bg-gray-200 w-1/2"></div>
                                </div>
                                <div class="w-24">
                                    <div class="w-12 h-12 rounded-full bg-gray-100 mx-auto"></div>
                                </div>
                            </div>

                            <div class="flex space-x-2 justify-between border-t h-32 dark:border-gray-500">
                                <div class="flex-1 text-center pt-4 border-r px-5 dark:border-gray-500">
                                    <div class="rounded h-2 mb-2 bg-gray-200 w-1/2 mx-auto"></div>
                                    <div class="w-12 h-12 rounded-full bg-gray-100 mx-auto mb-2"></div>
                                    <div class="rounded h-3 mt-1 bg-gray-200 mt-1.5 mx-auto"></div>
                                    <div class="rounded h-2 mt-1 bg-gray-200 w-1/2 mx-auto"></div>

                                </div>
                                <div class="flex-1 text-center pt-4 px-5">
                                    <div class="rounded h-2 mb-2 bg-gray-200 w-1/2 mx-auto"></div>
                                    <div class="w-12 h-12 rounded-full bg-gray-100 mx-auto mb-2"></div>
                                    <div class="rounded h-3 mt-1 bg-gray-200 mt-1.5 mx-auto"></div>
                                    <div class="rounded h-2 mt-1 bg-gray-200 w-1/2 mx-auto"></div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </body>

    </html>
