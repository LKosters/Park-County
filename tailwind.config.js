import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require("daisyui")],
    daisyui: {
        themes: [
            {
                politie_thema: {

                    "primary": "#004783",

                    "secondary": "#DF2F2A",

                    "accent": "#D7E70A",

                    "neutral": "#2b3440",

                    "base-100": "#ffffff",

                    "info": "#3abff8",

                    "success": "#36d399",

                    "warning": "#fbbd23",

                    "error": "#f87272",
                },
            },
        ],
    },
};
