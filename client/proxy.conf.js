const proxy = [{
  context: ['/api'],
  target: 'http://localhost:8000',
  secure: false,
  logLevel: 'debug',
  changeOrigin: true,
  pathRewrite: { '^/api': 'http://localhost:8000/api' }
}]

module.exports = proxy
