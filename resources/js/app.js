/** @type {import('tailwindcss').Config} */

export default {
  darkMode: 'class', // enable dark mode toggle
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      keyframes: {
        'fade-in': {
          '0%': { opacity: 0, transform: 'translateY(20px)' },
          '100%': { opacity: 1, transform: 'translateY(0)' },
        },
        'slide-up': {
          '0%': { opacity: 0, transform: 'translateY(30px)' },
          '100%': { opacity: 1, transform: 'translateY(0)' },
        },
        'bounce-slow': {
          '0%, 100%': { transform: 'translateY(0)' },
          '50%': { transform: 'translateY(-10px)' },
        },
        'float': {
          '0%, 100%': { transform: 'translateY(0)' },
          '50%': { transform: 'translateY(-12px)' },
        },
        'fadeInUp': {
      '0%': { opacity: '0', transform: 'translateY(20px)' },
      '100%': { opacity: '1', transform: 'translateY(0)' },
    },
      },
      animation: {
        'fade-in': 'fade-in 1s ease-out forwards',
        'fade-in-delay': 'fade-in 1.5s ease-out forwards',
        'fade-in-delay-2': 'fade-in 2s ease-out forwards',
        'slide-up': 'slide-up 1s ease-out forwards',
        'bounce-slow': 'bounce-slow 3s infinite',
        'float': 'float 4s ease-in-out infinite',
        'fadeInUp': 'fadeInUp 0.8s ease-out forwards',
      },
    },
  },
  plugins: [],
}
