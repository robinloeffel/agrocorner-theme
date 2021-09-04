const { build } = require('esbuild');
const { exec } = require('child_process');
const del = require('del');
const open = require('open');
const postcss = require('esbuild-postcss');

const development = process.argv.includes('--dev');

const setup = async () => {
  await del('dist');

  await build({
    entryPoints: [ '.' ],
    entryNames: 'agrocorner',
    outdir: 'dist',
    bundle: true,
    incremental: true,
    sourcemap: development,
    minify: !development,
    watch: development,
    plugins: [ postcss() ]
  });

  exec('php -S 0.0.0.0:9000 -t ../..');
  open('http://localhost:9000');
};

setup();
