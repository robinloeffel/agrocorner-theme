import { exec } from 'child_process';
import esbuild from 'esbuild';
import postcss from 'esbuild-postcss';
import eslint from 'esbuild-plugin-eslint';
import browserSync from 'browser-sync';
import path from 'path';

exec('rm -rf dist', async () => {
  if (process.argv.includes('--watch')) {
    // configure esbuild
    const context = await esbuild.context({
      entryPoints: [
        'source/agrocorner.js',
        'source/agrocorner.css'
      ],
      outdir: 'dist',
      bundle: true,
      sourcemap: true,
      plugins: [
        eslint(),
        postcss()
      ]
    });
    // run and watch
    await context.watch();

    // start the php server
    exec('php -S localhost:8080 -t ../..');

    // create a browser-sync instance
    const bs = browserSync.create();
    // create a chokidar instance via browser-sync
    const watcher = bs.watch('source/**/*');
    // tell chokidar to watch for file changes
    watcher.on('change', file => {
      // let browser-sync replace the changed files or reload the browser
      bs.reload(`*${path.extname(file)}`);
    });
    // initialize browser-sync on top of the php server
    bs.init({ proxy: 'localhost:8080' });
  } else {
    // run esbuild
    await esbuild.build({
      entryPoints: [
        'source/agrocorner.js',
        'source/agrocorner.css'
      ],
      outdir: 'dist',
      bundle: true,
      minify: true,
      plugins: [
        eslint(),
        postcss()
      ]
    });

    // open the dist directory in finder
    exec('open dist');
  }
});
