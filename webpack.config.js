var debug = process.env.NODE_ENV !== "production";
var webpack = require('webpack');

module.exports = {

  entry: {
    example: [
      'babel-polyfill',
      __dirname + '/js/jsSrcPreactEx/index.js'
    ]
  },
  output: {
    path: __dirname + "/js",
    filename: "[name].bundle.js"
  },
  module: {
    rules: [
      {
        test: /\.jsx?$/,
        loader: 'babel-loader',
        exclude: /node_modules/,
        options: {
          plugins: ['transform-runtime', 'UglifyJsPlugin'],
          presets: ['es2015', "react"]
        }
      }
    ]
  },
  plugins: [
    new webpack.optimize.UglifyJsPlugin({
      compress: {
        warnings: false,
      },
      output: {
        comments: false,
      },
    })
  ]

};