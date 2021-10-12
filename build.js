const { build } = require('esbuild');
const { exec } = require('child_process');
const del = require('del');
const open = require('open');
const postcss = require('esbuild-postcss');

const prod = process.argv.includes('--prod');
const dist = process.argv.includes('--dist');

const setup = async () => {
  await del('dist');

  await build({
    entryPoints: [
      'source/agrocorner.js',
      'source/agrocorner.css'
    ],
    outdir: 'dist',
    bundle: true,
    sourcemap: !prod && !dist,
    minify: prod || dist,
    watch: !dist,
    plugins: [ postcss() ]
  });

  exec('php -S 0.0.0.0:9000 -t ../..');

  if (dist) {
    open('dist');
  } else {
    open('http://localhost:9000');
  }
};

setup();
