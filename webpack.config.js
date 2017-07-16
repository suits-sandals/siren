var debug = process.env.NODE_ENV !== 'production';
var webpack = require('webpack');

module.exports = {
  entry: {
    app: ['babel-polyfill', __dirname + '/js/jsSrcPreactEx']
  },
  output: {
    path: __dirname + '/js',
    filename: '[name].bundle.js'
  },
  module: {
    rules: [
      {
        test: /\.jsx?$/,
        exclude: /node_modules/,
        use: 'babel-loader'
      }
    ]
  },

  devtool: 'source-map'
};
