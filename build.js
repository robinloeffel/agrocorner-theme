const { exec } = require('child_process');
const { build } = require('esbuild');
const del = require('del');
const open = require('open');

const development = process.argv.includes('--dev');

del('dist');
exec('php -S 0.0.0.0:9000 -t ../..');

build({
  entryPoints: [ '.' ],
  entryNames: 'agrocorner',
  outdir: 'dist',
  bundle: true,
  incremental: true,
  minify: !development,
  sourcemap: development,
  watch: development
});

open('http://localhost:9000');
