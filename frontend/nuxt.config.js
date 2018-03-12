module.exports = {
  /*
  ** Headers of the page
  */
  head: {
    title: 'Ride & Share',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: 'carpooling, rideshare' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },
  css: [
    '~/assets/stylesheets/Theme36/home/home.css',
    '~/assets/stylesheets/Theme36/home/homemenu.css',
    '~/assets/stylesheets/Theme36/home/homemedia.css',
    '~/assets/stylesheets/Theme36/EN/lang.css',
    '~/assets/stylesheets/Theme36/home/application.css',
    '~/assets/stylesheets/Theme36/home/slimmenu.css',
    '~/assets/stylesheets/Theme36/home/application.css'
  ],
  js: [

  ],
  /*
  ** Customize the progress bar color
  */
  loading: { color: '#3B8070' },
  /*
  ** Build configuration
  */
  build: {
    /*
    ** Run ESLint on save
    */
    extend (config, { isDev, isClient }) {
      if (isDev && isClient) {
        config.module.rules.push({
          enforce: 'pre',
          test: /\.(js|vue)$/,
          loader: 'eslint-loader',
          exclude: /(node_modules)/
        })
      }
    }
  }
}
