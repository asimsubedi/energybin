module.exports = function( grunt ){
    
    // Project Configuration Here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        //sass compile
        sass: {
            dist: {
                options: {
                    style: 'compact'
                },
                files: {
                    './src/css/main.css': './src/scss/main.scss'
                }
            }
        },
        
        //js and css concat
        concat: {
            options:{
                separator:"\n \n /*** New File ***/ "
            },
            js: { 
                src: [ 
                    './node_modules/jquery/dist/jquery.min.js',
                    './node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js'
                ],
                dest: './src/js/script.js'
            },
             css: {
                src: [
                     './src/css/main.css'
                ],
                
                dest: './src/css/main.css'
             }
            
        },

        //js minify
        uglify: {
            options: {
                report: 'gzip'
            },
            main: {
                src: ['./src/js/script.js'],
                dest: './src/js/script.min.js'
            }
        },

        //css minify
        cssmin: {
            options: {
                shorthandCompacting: false,
                roundingPrecision: -1,
                keepSpecialComments : 0,
                sourceMap: false
            },
            target: {
                files: [{
                    expand: true,
                    cwd: './src/css/',
                    src: ['*.css', '!*.min.css'],
                    dest: './assets/dist/css/',
                    ext: '.min.css'
                }]
            }
        },

        //copy content
        copy: {
            main: {
              files: [
                    { expand: true, cwd: './src/img', src: '**', dest: './assets/dist/img/', filter: 'isFile'},
                    { expand: true, cwd: './src/css', src: '*.css', dest: './assets/dist/css/', filter: 'isFile'},
                    { expand: true, cwd: './src/js', src: '*.js', dest: './assets/dist/js/', filter: 'isFile'},
              ]
          }
        },
        
        // Watch Changes
        watch: {
            options: { livereload: true },
            js : {
                files : ['./src/js/*.js', './src/js/**/*.js'],
                tasks : [ 'default' ]
            },
            css : {
                files : [
                    './src/scss/*.scss',
                    './src/scss/**/**/**/*.scss',
                    './src/scss/**/**/*.scss',
                    './src/scss/**/*.scss'
                    ],
                tasks : [ 'default']
            }
        } 

    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-sass');
  
    // Grunt Tasks
    grunt.registerTask('default', [ 'sass', 'concat', 'copy', 'uglify','cssmin'] );
}