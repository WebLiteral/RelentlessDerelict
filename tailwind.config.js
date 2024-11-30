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
                datatrash: ['datatrash'],
                mainmenu: ['Niagara'],
                cambria: ['Cambria'],
                oldenglish: ['OldEnglish'],
                splash: ['SquadaOne'],
                bebas: ['BebasNeue'],
            },

            spacing: {
                '1.5': '0.375rem', // This is the equivalent of 6px
              },


        },
    },

    plugins: [
        function ({ addUtilities }) {
            addUtilities({
                '.bg-checkered': {
                    'background-image': 'repeating-conic-gradient(#000000 0% 25%, #ffffff 0% 50%)',
                    'background-position': '0 0, 16px 16px',
                    'background-size': '32px 32px',
                    'background-color': '#ffffff',
                },
                '.bg-stripe': {
                    'background-image': 'linear-gradient(0deg, transparent 50%, #000000 50%)',
                    'background-size': '30px 30px',
                    'background-color': '#ffffff',
                },
            })
        },
    ]
};
