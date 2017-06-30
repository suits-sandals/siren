var debug = process.env.NODE_ENV !== "production";
var webpack = require('webpack');

module.exports = {

  entry: {
    example: [
      'babel-polyfill',
      __dirname + '/js/jsSrcPreactEx'
    ]
  },
  output: {
    path: __dirname + "/js",
    filename: "[name].bundle.js"
  },
  module: {
    rules: [
      {
        test: /\.jsx?$/i,
        exclude: [/node_modules/, /js\/jsSrc/],
        loader: 'babel'
      }
    ]
  },

  devtool: 'source-map'

};