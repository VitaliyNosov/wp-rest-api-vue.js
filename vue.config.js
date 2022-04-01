const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true,
  // add webpack add proxy
  filenameHashing: false,
  productionSourceMap: false,
  configureWebpack: (config) => {
    return{
      devServer:{
        proxy:{
          '/wp-json': {
            target: 'http://wp-rest-api/',
            secure: false,
            changeOrigin: true
          }
        }
      }
    }
  }
  
})


// add proxy

// module.exports = {
//   filenameHashing: false,
//   productionSourceMap: false,
//   configureWebpack: (config) => {
//     return{
//       devServer:{
//         proxy:{
//           '/wp-json': {
//             target: 'http://wp-rest-api/',
//             secure: false,
//             changeOrigin: true
//           }
//         }
//       }
//     }
//   }
// }
