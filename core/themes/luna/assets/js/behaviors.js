/**
 * @file
 * Placeholder file for custom sub-theme behaviors.
 *
 */
(function ($, Drupal) {

    'use strict';
  
    /**
     * Example drupal behavior
     */
    Drupal.behaviors.exampleBehavior = {
      attach: function (context, settings) {
        $('.example', context).once('example-behavior').each(function () {
  
        });
      }
    };
  
  })(jQuery, Drupal);