<?php

wp_enqueue_style('tailwind-styles', get_template_directory_uri().'/css/theme.css', array(), 1.0);

wp_enqueue_scripts( 'vue', get_template_directory_uri() . 'src/js/vue.min.js', array(), 1.0);