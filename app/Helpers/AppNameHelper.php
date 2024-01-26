<?php

if (!function_exists('splitAndWrapAppName')) {
    /**
     * Memisahkan nama aplikasi menjadi array perkata dan membungkusnya dalam elemen <span> dengan warna.
     *
     * @return string
     */
    function splitAndWrapAppName()
    {
        $appName = config('app.name'); // Ganti ini dengan cara mendapatkan nama aplikasi dari konfigurasi atau dari sumber lainnya
        $appNameArray = preg_split('/\s+|\W+/', $appName);

        $output = '';

        foreach ($appNameArray as $key => $word) {
            if ($key > 0) {
                $output .= ' '; // Tambahkan spasi sebelum kata kedua dan seterusnya
            }

            $class = ($key === 0) ? 'text-body-color' : '';
            $output .= '<span class="fs-4 ' . $class . '">' . e($word) . '</span>';
        }

        return $output;
    }
}

// initial name of the application

if (!function_exists('initialAppName')) {
    /**
     * Get the initial name of the application.
     *
     * @return string
     */
    function initialAppName()
    {
        $appName = config('app.name'); // Ganti ini dengan cara mendapatkan nama aplikasi dari konfigurasi atau dari sumber lainnya
        $appNameArray = preg_split('/\s+|\W+/', $appName);

        $output = '';

        foreach ($appNameArray as $key => $word) {
            if ($key > 0) {
                $output .= ' '; // Tambahkan spasi sebelum kata kedua dan seterusnya
            }

            if ($key === 1) {
                // Tambahkan tag span dengan class text-primary pada huruf kedua
                $output .= '<span class="text-primary">' . e($word[0]) . '</span>';
            } else {
                $output .= e($word[0]);
            }
        }

        return $output;
    }
}
