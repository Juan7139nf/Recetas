<?php

return [
    'background' => 'bg-neutral-50 dark:bg-neutral-900',
    'bg-linear-to-t' => 'bg-linear-to-t from-orange-400 to-amber-400',
    'bg-linear-to-b' => 'bg-linear-to-b from-orange-400 to-amber-400',
    'bg-linear-to-r' => 'bg-linear-to-tr from-orange-400 to-amber-400',
    'bg-linear-to-l' => 'bg-linear-to-tr from-orange-400 to-amber-400',
    'bg-linear-to-tr' => 'bg-linear-to-tr from-orange-400 to-amber-400',
    'bg-linear-to-tl' => 'bg-linear-to-tl from-orange-400 to-amber-400',
    'bg-linear-to-br' => 'bg-linear-to-br from-orange-400 to-amber-400',
    'bg-linear-to-bl' => 'bg-linear-to-bl from-orange-400 to-amber-400',
    'logo' => [
        'sm' => '',
        'md' => '<div class="w-full flex items-center justify-center">
                <div class="flex items-center space-x-2">
                    <img src=":img" alt="Logo"
                        class="w-10 h-10 mx-auto shadow-md bg-linear-to-tr from-red-700 to-amber-400 p-1 rounded-tl-3xl rounded-tr-xl rounded-br-3xl">
                    <span
                        class="font-sans font-extrabold text-4xl bg-linear-to-r from-30% from-amber-400 to-orange-400 bg-clip-text text-transparent ml-1 hidden md:block">:title</span>
                </div>
            </div>',
        'lg' => '<div class="w-full flex items-center justify-center py-5">
                    <div class="flex items-center space-x-2">
                        <img src=":img" alt="Logo"
                            class="w-15 h-15 mx-auto shadow-md bg-linear-to-tr from-red-700 to-amber-400 p-1 rounded-tl-4xl rounded-tr-2xl rounded-br-4xl">
                        <span
                            class="font-sans font-extrabold text-6xl bg-linear-to-r from-30% from-amber-400 to-orange-400 bg-clip-text text-transparent ml-1.5">:title</span>
                    </div>
                </div>',
    ],
];