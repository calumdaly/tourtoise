//for GRUNT to work, you need to:
//1) make sure the "Grunt GLI" (command line interface) is installed GLOBALLY (npm install -g grunt-cli)
//2) Add package.json (only needs empty "dev dependencies" property) + a gruntfile in LOCAL project folder (or copy one from another project that uses the same modules you'll use)
//3) install grunt LOCALLY into project root directory (npm install grunt --save-dev). "devDependencies" = installed on development machine (not needed to run the code in production!)
//- ("node_modules" should appear in the project directory. If you've used a previous package file, all those modules will be installed using "npm-install")
//4) in gruntfile.js: configure TASKS (CONFIGURATION OBJECT name is often the same as its PLUGIN, like "less", here)
//5) in gruntfile.js: load your plugins (dependencies) with loadNPMTasks method (after settings)
//6) !! in gruntfile.js: create your default task. In command line, "grunt" will call all the tasks listed in this default

// N.B.1 Don't commit the node_modules folder (too big), you however commit "package.json" and "package-lock.json". If another user downloads the repo, they simply run "npm install" and all the devDependencies will be downloaded and installed!
// N.B.2 to uninstall: npm uninstall --save-dev <package_name> (the "save-dev" updates the devdependencies in package.json)

module.exports = function(grunt) { //grunt wrapper function, for configuration
  
  grunt.initConfig({ //initialise the configuration

    watch: { //watch the files detailed below for changes, then run through the rest when they're updated
      scripts: {
        files: [
        'assets/js/custom-full.js',
        'style-full.less',
        ],
        tasks: ['less', 'autoprefixer', 'cssmin', 'uglify'], //list the task that you want to run automatically (all of the tasks are listed in this example)
        options: {
          spawn: false,
        },
      },
    },

    less: { // store settings for "less" plugin
      development: {
        // options: {
        //   compress: true,
        //   plugins: //[ new (require('less-plugin-autoprefix'))({browsers : [ "last 2 versions" ]}) ] //AUTOPREFIX PLUGIN: npm install grunt-contrib-less less-plugin-autoprefix --save-dev
        // },
        files: {
          //destination: source (path from the package.json file)
          "style-full.css": "style-full.less"
        }
      }
    },


    autoprefixer: { //(you can add a plugin for less (above) to handle autoprefixing...)
      options: { //!! you CAN set the browser spec here, but it's more common to add a browserlist in package.json (often the browserlist default will suffice! For more info: https://github.com/browserslist/browserslist (can specify browsers to not support)
        cascade: false, //prevents the output being 'cascaded' - saves added whitespaces
      },
      target: {
        files: {
          'style-full.css': 'style-full.css',
        }
      }
    },
    //INSTALL AUTOPREFIXER LAST - IT CAN THROW ERRORS WHEN ADDING AS DEPENDENCY. JUST IGNORE - CHECK IF "GRUNT WATCH" RUNS 

    cssmin: {
      options: {
        mergeIntoShorthands: false,
        roundingPrecision: -1
      },
      target: {
        files: {
          'style.css': 'style-full.css', //spit out "style.css" from "style-full.css"
        }
      }
    },

    //!! for uglify PLEASE check the file charset. (Can update this on Sublime -> select 'Save With Encoding "UTF-8"' option)
    uglify: {
      target:{
        files: {
          'assets/js/custom.js':'assets/js/custom-full.js',
        }
      }
    }
  });


  //load the Grunt plugins we need (these should have been previously installed through npm)
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-autoprefixer');
  
  //!! create the default task (also know as an "alias task") - so you can just type "grunt" on the command line to fire this! 
  grunt.registerTask('default', ['less', 'autoprefixer', 'cssmin', 'uglify']);
 
};