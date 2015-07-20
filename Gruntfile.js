module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    uglify: {
      build: {
        src: ['js/libs/navigation.js', 'js/libs/skip-link-focus-fix.js'],
        dest: 'js/build/global.min.js'
      }
    },
	
		sass: {
			dist: {
				options: {
					style: 'expanded'
				},
				files: {
					'style.css': 'sass/style.scss'
				}
			}
		},

		watch: {
			css: {
				files: 'sass/*.scss',
				tasks: ['sass'],
			},
		},

  });

  // Load the plugins.
  grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['watch']);

};