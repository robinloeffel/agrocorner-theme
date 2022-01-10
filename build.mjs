import { exec } from 'child_process';
import { build } from 'esbuild';
import postcss from 'esbuild-postcss';

const production = process.argv.includes('--prod');
const dist = process.argv.includes('--dist');

exec('rm -rf ./dist', async () => {
  await build({
    entryPoints: [
      './source/agrocorner.js',
      './source/agrocorner.css'
    ],
    outdir: './dist',
    bundle: true,
    incremental: true,
    sourcemap: !production && !dist,
    minify: production || dist,
    watch: !dist,
    plugins: [
      postcss()
    ]
  });

  if (dist) {
    exec('open ./dist');
  } else {
    exec('php -S 0.0.0.0:9000 -t ../..', exec('open http://localhost:9000'));
  }
});
