import { exec } from "node:child_process";
import esbuild from "esbuild";
import { sassPlugin as sass } from "esbuild-sass-plugin";
import eslint from "esbuild-plugin-eslint";
import browserSync from "@rbnlffl/esbuild-plugin-browser-sync";
import postcss from "postcss";
import postcssrc from "postcss-load-config";

const watch = process.argv.includes("--watch");

/** @type {esbuild.BuildOptions} */
const config = {
  entryPoints: [
    "source/agrocorner.ts",
    "source/agrocorner.scss"
  ],
  outdir: "dist",
  bundle: true,
  sourcemap: watch,
  minify: !watch,
  plugins: [
    eslint(),
    sass({
      transform: async (source, directory) => {
        const postcssConfig = await postcssrc();
        const postcssProcessor = postcss(postcssConfig.plugins);
        const { css } = await postcssProcessor.process(source, {
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
  ].filter(Boolean)
};

exec("rm -rf dist", async () => {
  if (watch) {
    const build = await esbuild.context(config);
    await build.watch();
    exec("php -S localhost:8080 -t ../..");
  } else {
    await esbuild.build(config);
    exec("open dist");
  }
});
