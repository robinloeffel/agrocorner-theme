import browserSync from "@rbnlffl/esbuild-plugin-browser-sync";
import browserslist from "browserslist-to-esbuild";
import esbuild from "esbuild";
import eslint from "esbuild-plugin-eslint";
import { sassPlugin as sass } from "esbuild-sass-plugin";
import { exec } from "node:child_process";
import postcss from "postcss";
import postcssEnv from "postcss-preset-env";

const watch = process.argv.includes("--watch");

/** @type {esbuild.BuildOptions} */
const config = {
  entryPoints: [
    "./source/agrocorner.ts",
    "./source/agrocorner.scss"
  ],
  outdir: "./dist",
  bundle: true,
  target: browserslist(),
  sourcemap: watch,
  minify: !watch,
  plugins: [
    eslint(),
    sass({
      transform: async(source, directory) => {
        const processor = postcss([ postcssEnv() ]);
        const { css } = await processor.process(source, {
          from: directory
        });
        return css;
      }
    }),
    watch && browserSync({
      proxy: "localhost:8080",
      notify: false,
      ui: false
    })
  ].filter(Boolean),
  loader: {
    ".woff2": "copy"
  },
  assetNames: "assets/[name]"
};

exec("rm -rf dist", async() => {
  if (watch) {
    exec("php -S localhost:8080 -t ../..");
    const build = await esbuild.context(config);
    await build.watch();
  } else {
    await esbuild.build(config);
    exec("open dist");
  }
});
