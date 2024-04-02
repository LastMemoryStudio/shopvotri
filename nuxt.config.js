export default {
  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'Loveny - Không chỉ đếm ngày yêu',
    htmlAttrs: {
      lang: 'en'
    },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { name: 'format-detection', content: 'telephone=no' },
      { hid: 'robots', name: 'robots', content: 'index,follow,snippet,archive' },
      { property: 'og:title', content: 'Loveny.vn - Không chi đếm ngày yêu' },
      { property: 'og:url', content: 'https://loveny.vn' },
      { property: 'og:description', content: 'Hãy cùng đếm ngày yêu và chia sẻ mỗi ngày đều là ngày đặc biệt của chúng ta.' },
      { property: 'og:image', content: 'https://ik.imagekit.io/0lpnflx37/LastMemory/Logo/LoverCounter/log.png?updatedAt=1697546936452' },
      { property: 'og:type', content: 'website' },
      { property: 'og:locale', content: 'vi_VN' },
      { property: 'og:site_name', content: 'Loveny.vn' },
      { property: 'og:image:alt', content: 'Loveny.vn' },
      { property: 'og:image', content: 'https://ik.imagekit.io/0lpnflx37/LastMemory/Logo/LoverCounter/log.png?updatedAt=1697546936452' },
      { name: 'keywords', content: 'tình yêu, hạnh phúc, ngày yêu, đếm ngày yêu, Loveny.vn, loveny, loveny.vn' },
      { name: 'author', content: 'Memory Platform' },
      { name: 'description', content: 'Hãy cùng đếm ngày yêu và chia sẻ mỗi ngày đều là ngày đặc biệt của chúng ta.' },
      { name: 'google-site-verification', content: 'RFYnJhdOKuoiyNBCYZ8zhOEWSxaOTfbSwp2-3WjkVFw' },
    ],
    link: [
      { rel: 'stylesheet', href: 'https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css' },
      { rel: 'stylesheet', href: 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' },
      { rel: 'icon', type: 'image/png', href: 'https://ik.imagekit.io/0lpnflx37/LastMemory/Logo/LoverCounter/log.png?updatedAt=1697546936452' },
      { rel: 'canonical', href: 'https://www.loveny.vn' },
    ]
  },

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
    './assets/css/main.css'
  ],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
    '~/plugins/vue-tooltip',
    '~/plugins/vue-dropdown'
  ],


  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
    // https://go.nuxtjs.dev/tailwindcss
    '@nuxtjs/tailwindcss',
    '@nuxtjs/fontawesome',
    '@nuxtjs/axios',
    '@nuxtjs/vuetify'
    // '@nuxt-vite',
    // 'nuxt-swiper'
  ],

  vuetify: {
    /* module options */
  },

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
  ],

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
  },

  fontawesome: {
    icons: [
      
    ]
  },
  router: {
    // extendRoutes(routes, resolve) {
    //   routes.push({
    //     name: 'custom',
    //     path: '*',
    //     component: resolve(__dirname, 'pages/detail.vue')
    //   })
    // }
  }
}
