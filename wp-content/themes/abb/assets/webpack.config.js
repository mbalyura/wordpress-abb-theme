const path = require('path');
const StylelintPlugin = require('stylelint-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const FixStyleOnlyEntriesPlugin = require("webpack-fix-style-only-entries");
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
  mode: process.env.NODE_ENV,
  entry: {
    styles: path.resolve(__dirname, 'scss/styles.scss'),
  },
  output: {
    clean: true
  },
  module: {
    rules: [
      {
        test: /\.scss$/i,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
          'sass-loader',
        ],
      },
    ],
  },
  plugins: [
    new StylelintPlugin({
      files: 'scss/**/*.scss',
      fix: true,
    }),
    new FixStyleOnlyEntriesPlugin(),
    new MiniCssExtractPlugin({
      filename: 'main.css',
    }),
    new BrowserSyncPlugin({
      files: '../**/*',
      host: 'localhost',
      port: 3000,
      proxy: 'http://localhost:8000',
    }),
  ],
};
