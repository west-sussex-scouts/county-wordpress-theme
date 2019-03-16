const webpack = require("webpack");
const path = require("path");
// const CleanWebpackPlugin = require("clean-webpack-plugin");

module.exports = () => {
    return {
        entry: {
            header: "./src/js/header.js",
            footer: "./src/js/footer.js"
        },
        output: {
            // filename: ".packed.js",
            path: path.resolve(__dirname, "assets", "js")
        },
        devtool: "source-map",
        plugins: [
            new webpack.ProvidePlugin({
                $: "jquery",
                jQuery: "jquery",
                Popper: ["popper.js", "default"],
                Alert: "exports-loader?Alert!bootstrap/js/dist/alert",
                Button: "exports-loader?Button!bootstrap/js/dist/button",
                Carousel: "exports-loader?Carousel!bootstrap/js/dist/carousel",
                Collapse: "exports-loader?Collapse!bootstrap/js/dist/collapse",
                Dropdown: "exports-loader?Dropdown!bootstrap/js/dist/dropdown",
                Modal: "exports-loader?Modal!bootstrap/js/dist/modal",
                Popover: "exports-loader?Popover!bootstrap/js/dist/popover",
                Scrollspy: "exports-loader?Scrollspy!bootstrap/js/dist/scrollspy",
                Tab: "exports-loader?Tab!bootstrap/js/dist/tab",
                Tooltip: "exports-loader?Tooltip!bootstrap/js/dist/tooltip",
                Util: "exports-loader?Util!bootstrap/js/dist/util"
            }),
        ],
        resolve: {
            extensions: [
                ".js"
            ],
            modules: [
                path.resolve(__dirname, "scripts"),
                "node_modules"
            ],
            alias: {
                jquery: "jquery/dist/jquery.slim.min.js"
            }
        },
        module: {
            rules: [
                {
                    test: /\.js$/,
                    exclude: /node_modules/,
                    use: {
                        loader: "babel-loader",
                        options: {
                            presets: ["env"]
                        }
                    }
                }
            ]
        }
    };
};