var path = require("path")

module.exports = {
  entry: "./resources/assets/jsx/app.jsx",
  output: {
    path: path.join(__dirname, "/public/js")
  },
  resolve: {
    alias: {
      components: path.resolve(__dirname, "resources/assets/jsx/components")
    },
    extensions: ['.js', '.jsx']
  },
  module: {
    rules: [
      {
        test: /\.(js|jsx)$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader"
        }
      },
      {
        test: /\.less$/,
        use: [
          {
            loader: "style-loader"
          },
          {
            loader: "css-loader",
            options: {
              sourceMap: true,
              importLoaders: 2,
              modules: {
                localIdentName: "[local]___[hash:base64:5]"
              }
            }
          },
          {
            loader: "less-loader"
          }
        ]
      }
    ]
  }
}

