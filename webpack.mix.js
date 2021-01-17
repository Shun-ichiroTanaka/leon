const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

mix

// js
.js('resources/js/app.js', 'public/js')

// sass
.sass('resources/sass/app.scss', 'public/css')

// tailwind
.options({
    processCssUrls: false,
    postCss: [ tailwindcss('./tailwind.config.js') ],
}).purgeCss()

// ブラウザーリロード
.browserSync({
    files: [
        "resources/views/**/*.blade.php",
        "public/**/*.*"
    ],
    proxy: {
        target: "http://127.0.0.1:8000/",
    }
})

.version();
