const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                poppins: ['Poppins'],
                logo : ['Dancing Script'],
            },
            backgroundImage : {
                'wakatobi-bg' : "url(https://lytdyebpbmdwzrrlazpl.supabase.co/storage/v1/object/sign/carevel-app/wakatobi-bg.png?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1cmwiOiJjYXJldmVsLWFwcC93YWthdG9iaS1iZy5wbmciLCJ0cmFuc2Zvcm1hdGlvbnMiOiIiLCJpYXQiOjE2NzE3MjMzOTEsImV4cCI6MTk4NzA4MzM5MX0.ysdTndCw5mwosWbHSKOzx6J8wDqr1FQaMNkUNMr16p0)",
                'suggestion-bg' : "url(https://lytdyebpbmdwzrrlazpl.supabase.co/storage/v1/object/sign/carevel-app/suggestion-bg.png?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1cmwiOiJjYXJldmVsLWFwcC9zdWdnZXN0aW9uLWJnLnBuZyIsInRyYW5zZm9ybWF0aW9ucyI6IiIsImlhdCI6MTY3MTg2MzQ5MiwiZXhwIjoxOTg3MjIzNDkyfQ.j2Er8dnK20-aKiNLzMdKeE-VkuCS3-oweuUUH7ujSmU)"
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
