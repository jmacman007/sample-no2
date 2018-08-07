module.exports = function(grunt) {

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            // 2. Configuration for concatinating files goes here.
            dist: {
                src: [
                    'library/js/libs/*.js', // All JS in the libs folder
                    'library/js/custom-scripts.js', // Custom Scripts
                ],
                dest: 'dist/js/production.js'
            }
        },
        uglify: {
            dist: {
                src: 'dist/js/production.js',
                dest: 'dist/js/production.min.js'
            }
        },
        imagemin: {
            dynamic: {
                files: [{
                    expand: true, // Enable dynamic expansion
                    cwd: 'library/img/', // source images (not compressed)
                    src: ['**/*.{png,jpg,gif}'], // Actual patterns to match
                    dest: 'dist/img/' // Destination of compressed files
                }]
            }
        }, //end imagemin
        less: {
            development: {
                options: {
                    compress: true,
                    yuicompress: false,
                    cleancss: true,
                    paths: ["less"]
                },
                files: {
                    "dist/css/production.css": "library/less/global.less"
                }
            }
        },
        cssmin: {
            add_banner: {
                options: {
                    banner: '/* Minified CSS File*/'
                },
                files: {
                    "dist/css/purestyles.min.css": "dist/css/purestyles.css"
                }
            }
        },
        purifycss: {
            options: {
                minify: true,
                info: true
            },
            target: {
                src: ['*.php', 'library/functions/*.php', 'includes/*.php', 'includes/loops/*.php', 'library/functions/*.php', 'dist/js/production.min.js'],
                css: ['dist/css/production.css'],
                dest: 'dist/css/purestyles.css'
            },
        },
        autoprefixer: {
            options: {
                safe: true
            },
            your_target: {
                src: 'dist/css/production.css'
            }
        },
        watch: {
            options: {
                livereload: true
            },
            src: {
                files: ['*.php', 'library/functions/*.php', 'includes/*.php', 'includes/loops/*.php', 'includes/mail/*.php', 'includes/modal-content/*.php']
            },
            scripts: {
                files: ['library/js/libs/*.js', 'library/js/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false
                }
            },
            css: {
                files: ['library/less/*.less', 'library/less/bootstrap/*.less', 'library/less/imports/*.less', 'library/font-awesome/less/*.less'],
                tasks: ['less', 'autoprefixer', 'purifycss', 'cssmin'],
                options: {
                    spawn: false,
                    debounceDelay: 250
                }
            },
            images: {
                files: ['library/img/*.{png,jpg,gif}'],
                tasks: ['imagemin'],
                options: {}
            },
            /* watch images added to src */
        }
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-purifycss');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['watch', ]);

};
