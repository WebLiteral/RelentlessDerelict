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
            colors: {
                'dark':  '#0b0b0b',
                'light':  '#fafafa',
                'vintage-1': '#45191f',
                'vintage-2': '#7D1b16',
                'vintage-3': '#e0A14A',
                'vintage-4': '#EFDAAF',
                'vintage-5': '#2E7571',
                'vintage-6': '#524546',
          
            },
            boxShadow: {
                '3xl': '0 0 15px 0 black'
            },
            fontFamily: {
                bebas: ['bebas'],
                poppins: ['poppins'],
                engebrechtre: ['engebrechtre'],
        verdana: ['Verdana', 'Geneva', 'sans-serif'],
            },
            animation: {
                'fade-in': 'fadeIn 1s ease-in-out',
                'scale-in': 'scaleIn 2s ease-in-out',
            },
            keyframes: {
                fadeIn: {
                    '0%': {
                        opacity: '0'

                    },
                    '5%': {
                        opacity: '0'

                    },
                    '100%': {
                        opacity: '1'
                    },
                },
                scaleIn: {
                    '0%': {
                        transform: 'scale(1)',
                        opacity: '0',
                        filter: 'blur(5px)'

                    },
                    '5%': {
                        transform: 'scale(1.1)',
                        opacity: '0',
                        filter: 'blur(5px)'
                    },
                    '100%': {
                        transform: 'scale(1)',
                        opacity: '1',
                        filter: 'blur(0px)'
                    },
                },
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
