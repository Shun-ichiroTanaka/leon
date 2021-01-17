// tailwind.config.js
module.exports = {
    important: true,

    purge: ['./src/**/*.html', './src/**/*.vue', './src/**/*.jsx'],
    theme: {
      textColor: {
        primary: '#2073FF',
        secondary: '#ffed4a',
        danger: '#F44989',
        white: '#F7F8FE',
        gray: '#C4C6CB',
        gray_two: "#AEB2B8"
      },
      colors: {
        primary: '#2073FF',
        danger: '#F44989',
        dark: '#242B38',
        dark_two: '#202630',
        white: '#ffffff',
        gray: '#C4C6CB',
      },
      borderColor: {
        dark: '#242B38',
        dark_two: '#202630',
        gray: '#C4C6CB',
        gray_two: "#AEB2B8"
      },
    //   backgroundColor: {
    //     dark: '#242B38',
    //     dark_two: '#202630',
    //   }
    },
    variants: {},
    plugins: []
  };
