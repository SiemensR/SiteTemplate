'use strict';
var path = require('path');
function absolutePath(file) {
  return path.join(__dirname, file);
}
module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
     watch: {
      css: {
        files: '**/*.scss',
        tasks: ['sass','cssmin']
      }
    },
    sass: {
      dist: {

        files: {
          './static/css/main.css' : './static/scss/main.scss'
        }
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
  },
 browserSync: {
    dev: {
        bsFiles: {
            src : './static/css/main.min.css'
        },
        options: {
          watchTask: true,
            proxy: "http://localhost:4040/SiteTemplate/SiteTemplate"
        }
    }
}
 /*   php: {
        dev: {
            options: {
                port: 8010,
                base: 'SiteTemplate/SiteTemplate'
            }
        }
    }, */   
});
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-browserify');
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.registerTask('default',['browserSync','watch']);
}