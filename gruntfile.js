'use strict';
var path = require('path');
function absolutePath(file) {
  return path.join(__dirname, file);
}
module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      dist: {

        files: {
          './static/css/main.css' : './static/scss/main.scss'
        }
      }
    },
    watch: {
      css: {
        files: '**/*.scss',
        tasks: ['sass']
      }
    },
    cssmin: {
      options: {
        sourceMap: true
      },
      absolute: {
        files: [{
          src: [
            './static/css/main.css'
          ].map(absolutePath),
          dest: absolutePath('./static/css/main.min.css')
        }]
}
  }
});
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.registerTask('default',['watch']);
}