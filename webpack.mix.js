// const mix = require("laravel-mix");

let theme = process.env.npm_config_theme;

if (theme) {
  require(`${__dirname}/themes/${theme}/webpack.mix.js`);
} else {
  // default theme to compile if theme is not specified
  require(`${__dirname}/themes/theme-name/webpack.mix.js`);
}
