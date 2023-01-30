const path = require('path');
const StylelintPlugin = require('stylelint-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const FixStyleOnlyEntriesPlugin = require("webpack-fix-style-only-entries");
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

const isProduction = process.env.NODE_ENV === 'production';

module.exports = {
  mode: process.env.NODE_ENV,
  entry: {
    styles: path.resolve(__dirname, 'assets/scss/styles.scss'),
  },
  output: {
    // path: path.resolve(__dirname, 'dist'),
    // clean: true,
    // filename: isProduction
    //   ? '[name].[contenthash].js'
    //   : '[name].js',
  },
  module: {
    rules: [
      // {
      //   test: /\.js$/,
      //   include: [path.resolve(__dirname, 'src')],
      //   loader: 'babel-loader',
      // },
      {
        test: /\.scss$/i,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
          'sass-loader',
        ],
      },
      {
        test: /\.(eot|svg|ttf|woff|woff2|png|jpg|gif)$/i,
        type: 'asset',
      },
    ],
  },
  plugins: [
    new StylelintPlugin({
      files: 'assets/scss/**/*.scss',
      fix: true,
    }),
    new FixStyleOnlyEntriesPlugin(),
    new MiniCssExtractPlugin({
      filename: isProduction
        ? '[name].[contenthash].css'
        : '[name].css',
    }),
    new BrowserSyncPlugin({
      files: '**/*',
      host: 'localhost',
      port: 3000,
      proxy: 'http://localhost:8000',
    }),
  ],
};
