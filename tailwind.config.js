import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    safelist: ['text-white', "md:block"],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', 'sans-serif'],
                poppins: ['Poppins']
            },
        },
    },

    plugins: [forms],
};

module.exports = {

    plugins: [
        require('flowbite/plugin')
    ],

    content: [
        "./node_modules/flowbite/**/*.js"
    ]

}