module.exports = {
  darkMode: false,
  purge: {
    // enabled: true,
    // content: [
    //   "../**.php",
    //   "../**/**.php",
    //   "./src/js/**.js"
    //   ]
    },
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      blue: {
        light: '#56ffdd',
        DEFAULT: '#485cc7',
      },
      red: {
        DEFAULT: '#d50032',
        dark: '#a30026'
      },
      gray: {
        dark: '#575756',
        DEFAULT: '#8a8e8f',
      },
      white: '#fff',
      black: '#000',
    },
    extend: {
      container: {
        center: true,
      },
      maxWidth: {
        '8xl': '90rem' 
      },
      width: {
        '15': '3.75rem',
        '26': '6.5rem',
      },
      margin: {
        '7.5': '1.875rem',
        '13': '3.25rem',
        '15': '3.75rem',
      },
      padding: {
        '7.5': '1.875rem',
        '13': '3.25rem',
        '15': '3.75rem',
      },
      spacing: {
        '7.5': '1.875rem',
        '13': '3.25rem',
        '15': '3.75rem',
      },
      fontFamily: {
        'sans': ['Raleway','ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
      },
      transitionDuration: {
        '250': '250ms',
      },
    },
  },
  variants: {},
  plugins: [],
}