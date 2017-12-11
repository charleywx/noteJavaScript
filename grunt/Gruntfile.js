// 1、"wrapper" 函数
module.exports = function(grunt) {

    // 2、项目和任务配置
    grunt.initConfig({
        // 存储在package.json文件中的JSON元数据引入到grunt config中
        pkg: grunt.file.readJSON('package.json'),

        // 自定义任意数据。
        my_property: 'my_property',
        my_src_files: ['foo/*.js', 'bar/*.js'],

        concat: {
            options: {
                separator: ';'
            },
            dist: {
                src: ['src/**/*.js'],
                dest: 'dist/<%= pkg.name %>.js'
            }
        },
        uglify: {
            options: {
                // 压缩（minify）源码文件 文件顶部生成一个注释
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
            },
            dist: {
                files: {
                    'dist/<%= pkg.name %>.min.js': ['<%= concat.dist.dest %>']
                }
            },
            // 用于将一个js文件压缩为一个目标文件
            build: {
                src: 'src/<%= pkg.name %>.js',
                dest: 'build/<%= pkg.name %>.min.js'
            }
        },
        qunit: {
            files: ['test/**/*.html']
        },
        jshint: {
            files: ['Gruntfile.js', 'src/**/*.js', 'test/**/*.js'],
            options: {
                //这里是覆盖JSHint默认配置的选项
                globals: {
                    jQuery: true,
                    console: true,
                    module: true,
                    document: true
                }
            }
        },
        watch: {
            files: ['<%= jshint.files %>'],
            tasks: ['jshint', 'qunit']
        }
    });

    // 3、加载 Grunt 插件和任务
    // 加载包含 "uglify" 任务的插件。
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-qunit');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');

    // 4、自定义任务 
    grunt.registerTask('test', ['jshint', 'qunit']);
    // 默认被执行的任务列表。
    grunt.registerTask('default', ['jshint', 'qunit', 'concat', 'uglify']);

    // grunt.loadTasks 外部.js任务配置
};