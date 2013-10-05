'use strict';
var path = require('path');

module.exports = function (grunt) {
  // Project configuration.
  grunt.initConfig({
    copy: {
      main: {
        files: [
          {
            expand: true,
            cwd: 'STARTER',
            src: [
              '.gitignore',
              '*',
              '*/*',
              '!scss',
              '!scss/*',
              '!*.info.yml.txt',
              '!*.theme',
              '!STARTER.png'
            ],
            dest: '<%= themeName %>/'
          },
          {
            expand: true,
            cwd: 'STARTER',
            src: [
              '*.theme'
            ],
            dest: '<%= themeName %>/',
            rename: function(dest) {
              return dest + "<%= themeName %>.theme";
            }
          },
          {
            expand: true,
            cwd: 'STARTER',
            src: [
              '*.info.yml.txt'
            ],
            dest: '<%= themeName %>/',
            rename: function(dest) {
              return dest + "<%= themeName %>.info.yml";
            }
          },
          {
            expand: true,
            cwd: 'STARTER',
            src: [
              'STARTER.png'
            ],
            dest: '<%= themeName %>/',
            rename: function(dest) {
              return dest + "<%= themeName %>.png";
            }
          }
        ]
      },
      sass: {
        files: [
          {
            expand: true,
            cwd: 'STARTER/scss',
            src: [
              '**'
            ],
            dest: '<%= themeName %>/<%= syntax %>/'
          },
        ]
      }
    },
    replace: {
      theme: {
        src: [
          '<%= themeName %>/*.php',
          '<%= themeName %>/*.theme',
          '<%= themeName %>/*.info.yml.txt',
          '<%= themeName %>/js/*.js',
          '<%= themeName %>/*.txt',
          '<%= themeName %>/package.json'
        ],
        overwrite: true,
        replacements: [{
          from: /STARTER/i,
          to: '<%= themeName %>'
        }]
      },
      sass: {
        src: ['<%= themeName %>/config.rb'],
        overwrite: true,
        replacements: [{
          from: /\"scss\"/i,
          to: '\"sass\"'
        }]
      }
    },
    "sass-convert": {
      options: {
        to: "sass",
        from: "scss"
      },
      files: {
        src: ['<%= themeName %>/sass/**/*.scss'],
        dest: '.'
      }
    },
    clean: {
      scss: {
        src: ["<%= themeName %>/sass/**/*.scss"]
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-text-replace');
  grunt.loadNpmTasks('grunt-sass-convert');
  grunt.loadNpmTasks('grunt-contrib-clean');

  grunt.registerTask('subtheme', "Create a flight subtheme", function(themeName, syntax) {
    var sassCon = false;
    if (arguments.length === 0) {
      grunt.log.error(this.name + " cannot run without a theme name, use the form \"grunt subtheme:THEMENAME:SYNTAX\"");
    }
    else if (arguments.length === 1) {
      grunt.log.writeln(this.name + " running with theme name " + themeName + ", and scss syntax since nothing was specified");
      syntax = 'scss';
    }
    else if (arguments.length === 2) {
      if (syntax == "sass" || syntax == "scss") {
        grunt.log.writeln(this.name + " running with theme name " + themeName + ", and " + syntax + " syntax");
      }
      else {
        grunt.log.error(this.name + " syntax argument must be \"scss\" or \"sass\"");
      }
    }
    if (this.errorCount) { return false; }
    else {
      grunt.config.set('themeName', themeName);
      grunt.config.set('syntax', syntax);
      grunt.task.run('copy:main');
      grunt.task.run('copy:sass');
      grunt.task.run('replace:theme');
      if(syntax == "sass") {
        grunt.task.run('sass-convert');
        grunt.task.run('clean:scss');
        grunt.task.run('replace:sass');
      }
    }
  });
};
