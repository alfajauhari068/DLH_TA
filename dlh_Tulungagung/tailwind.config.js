/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: 'var(--primary)',
        'primary-dark': 'var(--primary-dark)',
        'primary-green': 'var(--primary-green)',
        'light-green': 'var(--light-green)',
        accent: 'var(--accent)',
        background: 'var(--background)',
        danger: 'var(--danger)',
        white: 'var(--white)',
        'gray-900': 'var(--gray-900)',
        'gray-700': 'var(--gray-700)',
        'gray-500': 'var(--gray-500)',
        'gray-100': 'var(--gray-100)',
      },
      borderRadius: {
        'none': 'var(--radius-none)',
        'sm': 'var(--radius-sm)',
        'md': 'var(--radius-md)',
        'lg': 'var(--radius-lg)',
        'xl': 'var(--radius-xl)',
        '2xl': 'var(--radius-2xl)',
        '3xl': 'var(--radius-3xl)',
        'full': 'var(--radius-full)',
      },
      boxShadow: {
        'xs': 'var(--shadow-xs)',
        'sm': 'var(--shadow-sm)',
        'md': 'var(--shadow-md)',
        'xl': 'var(--shadow-xl)',
        'glass': 'var(--shadow-glass)',
        'floating': 'var(--shadow-floating)',
      },
      zIndex: {
        'dropdown': 'var(--z-dropdown)',
        'navbar': 'var(--z-navbar)',
        'modal': 'var(--z-modal)',
        'toast': 'var(--z-toast)',
      },
      blur: {
        'sm': 'var(--blur-sm)',
        'md': 'var(--blur-md)',
        'xl': 'var(--blur-xl)',
      },
      animation: {
        'fade-in': 'fadeIn 300ms ease-out',
        'fade-up': 'fadeUp 400ms ease-out',
        'fade-down': 'fadeDown 400ms ease-out',
        'scale-up': 'scaleUp 300ms ease-out',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
        fadeUp: {
          '0%': { opacity: '0', transform: 'translateY(10px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        fadeDown: {
          '0%': { opacity: '0', transform: 'translateY(-10px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        scaleUp: {
          '0%': { opacity: '0', transform: 'scale(0.95)' },
          '100%': { opacity: '1', transform: 'scale(1)' },
        }
      }
    },
  },
  plugins: [],
}
