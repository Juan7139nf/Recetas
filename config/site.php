<?php

return [
    'background' => 'bg-neutral-50 dark:bg-neutral-900',
    'bg-linear-to-t' => 'bg-linear-to-t from-orange-400 to-amber-400',
    'logo' => [
        'sm' => '',
        'md' => '',
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