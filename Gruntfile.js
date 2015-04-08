module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        search: {
            findClass: {
                files: {
                    src: ["**/*"]
                },
                options: {
                    searchString: "PeThemeService",
                    logFormat: "console",
                    onMatch: function (match) {
                        console.log(match);
                    }
                }
            }
        }
    });

    // Load the plugin that provides the "uglify" task.
    //grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-search');

    // Default task(s).
    grunt.registerTask('default', ['search']);

};