const env = require("postcss-preset-env");

/** @type {import("postcss-load-config").Config} */
module.exports = {
  plugins: [ env() ]
};
