
module.exports = function(grunt) {

grunt.registerTask('speak', function() {
    console.log("I'm Speaking");
});

grunt.registerTask('yell', function() {
    console.log("I'm yelling");
});

grunt.registerTask('both', ['speak', 'yell']);

grunt.initConfig({
    concat: {
        js: {
            src: ['js/1.js', 'js/2.js'],
            dest: 'build/js/script.js',
        },
        css: {
            src: ['css/1.css', 'css/2.css'],
            dest: 'build/css/script.js',
        },
    },
    watch: {
        js: {
            files: ['js/**/*.js'],
            tasks: ['concat'],
        },
        css: {
            files: ['css/**/*.css'],
            tasks: ['concat'],
        },
    },
});

grunt.loadNpmTasks('grunt-contrib-concat');
grunt.loadNpmTasks('grunt-contrib-watch');
};