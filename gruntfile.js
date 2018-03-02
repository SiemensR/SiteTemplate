module.exports = function (grunt) {
  grunt.initConfig({
    // Watch task config
    watch: {
      sass: {
        files: "static/scss/*.scss",
        tasks: ['sass']
      }
    },
    // SASS task config
    sass: {
        dist: {
          options: {
            debugInfo:true,
            style: 'expanded',
            precision: 8,
noCache: true
          }, 
            files: {
                // destination         // source file
                "static/css/main.css" : "static/scss/main.scss"
            }
        }
    },
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
};