import { exec } from 'child_process';
import { build } from 'esbuild';
import postcss from 'esbuild-postcss';
import eslint from 'esbuild-plugin-eslint';

const minify = process.argv.includes('--minify');
const watch = process.argv.includes('--watch');

exec('rm -rf dist', async () => {
  await build({
    entryPoints: [
      'source/agrocorner.js',
      'source/agrocorner.css'
    ],
    outdir: 'dist',
    bundle: true,
    incremental: true,
    sourcemap: watch,
    plugins: [
      eslint(),
      postcss()
    ],
    minify,
    watch
  });

  if (watch) {
    exec('php -S 0.0.0.0:9000 -t ../..', exec('open http://localhost:9000'));
  } else {
    exec('open dist');
  }
});
