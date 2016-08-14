module.exports = function (config) {
    config.set({
        basePath: '',
        frameworks: ['jasmine'],
        files: ['*.js'],
        exclude: ['karma.conf.js'],
        reporters: ['progress'],
        port: 9876,
        colors: true,
        logLevel: config.LOG_INFO,
        autoWatch: true,
        browsers: ['Firefox'],
        plugins : [
            'karma-firefox-launcher',
            'karma-jasmine'
        ],
        captureTimeout: 60000,
        singleRun: false
    });
};