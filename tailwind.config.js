/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1536px',
              },
              fontSize: {
                '7xl': '5rem', // Customize h1
                '8xl': '6rem', // Customize h2
                '9xl': '7rem', // Customize h3
                '10xl': '8rem', // Customize h4
                '11xl': '9rem', // Customize h5
                '12xl': '10rem', // Customize h6
                '13xl': '11rem', // Customize h7
                '14xl': '12rem', // Customize h8
                '15xl': '13rem', // Customize h9
                '16xl': '14rem', // Customize h10
                '17xl': '15rem', // Customize h11
                '18xl': '16rem', // Customize h12
              },
              fontFamily: {
                sans: ['Nunito', 'Arial', 'sans-serif'],
                serif: ['Times New Roman', 'serif'],
                // Add more font families as needed
              },
        },


    },
    plugins: [],
}
