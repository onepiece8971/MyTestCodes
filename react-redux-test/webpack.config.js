//var path = require('path')
const webpack = require('webpack');

module.exports = {
  entry:   [
    './index',
  ],
  output:  {
    path:       __dirname,
    filename:   'bundle.js',
    publicPath: '/',
  },
  plugins: [
    new webpack.optimize.OccurenceOrderPlugin(),
    new webpack.NoErrorsPlugin(),
  ],
  module:  {
    loaders: [
      {
        test:   /\.js$/,
        loader: 'babel',
        query:  {
          presets: ['es2015', 'react'],
        },
      },
    ],
  },
};