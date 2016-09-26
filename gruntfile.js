module.exports = function(grunt){






// CONFIGURE TASKS
grunt.initConfig({
	pkg:grunt.file.readJSON('package.json'),
	uglify:{
		build:{
			src: 'src/js/*.js',
			dest: 'js/script.min.js'
		},
		dev:{
			options:{
				beautify:true,
				mangle: false,
				compress: false,
				preserveComments: 'all'
			},
			src: 'src/js/*.js',
			dest: 'js/script.min.js'
		}

	},
	sass: {
		dev: {
			options: {
				outputStyle: 'expanded',

			},
			files: {
				'css/styles.css' : 'src/scss/application.scss'
			}
		}
	},
	watch: {
		js: {
			files: ['src/js/*.js'],
			tasks: ['uglify:dev']
		},
		css:{
			files: ['src/scss/**/*.scss'],
			tasks: ['sass:dev']
		}
}

});


//LOAD PLUGINS
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-sass');


//REGISTER TASKS
grunt.registerTask('default', [ 'uglify:dev','sass:dev']);
grunt.registerTask('build', [ 'uglify:build']);
grunt.registerTask('dev', [ 'uglify:dev']);
};