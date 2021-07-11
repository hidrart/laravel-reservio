const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                reservio: {
                    DEFAULT: '#45d8ff',
                    darker: '#76e5ff',
                },
            },
        },
    },

    variants: {
        extend: {},
    },

    plugins: [require('@tailwindcss/forms')],
};
