var path = require('path');
var webpack = require('webpack');

module.exports = {
    devtool: 'eval',
    entry: {
        main: [
            'webpack-dev-server/client?http://localhost:3000',
            'webpack/hot/only-dev-server',
            './src/index'
        ]
    },
    output: {
        path: path.join(__dirname, 'static'),
        filename: 'bundle.js',
        publicPath: '/static/'
    },
    plugins: [
        new webpack.HotModuleReplacementPlugin()
    ],
    module: {
        loaders: [
            {
                test: /\.js$/,
                loaders: ['react-hot'],
                include: path.join(__dirname, 'src')
            },
            {
                test: /\.js$/,
                loader: 'babel',
                include: path.join(__dirname, 'src'),
                query: {
                    presets: ['react', 'es2015']
                }
            },
            {test: /\.css$/, loader: 'style!css'}
        ]
    }
};
