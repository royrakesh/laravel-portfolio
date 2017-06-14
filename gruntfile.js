module.exports = function(grunt) {

grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-cssmin');

grunt.task.registerTask('default', ['uglify', 'cssmin']);



  grunt.initConfig({
  	pkg: grunt.file.readJSON('package.json'),

    uglify:{
         t1:{
    		 files:{
    			'public/assets/dist/main.min.js' : ['public/assets/js/*.js']
    		},
        options: {
             banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
         }
       }
    },
    cssmin: {
      t2:{
           files:{
          'public/assets/dist/main.min.css' : ['public/assets/css/*.css']
        },
    }
   }

  });

};