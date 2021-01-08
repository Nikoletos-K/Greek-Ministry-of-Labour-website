jQuery(document).ready(function($) {
  "use strict";

  //Contact
  $('form.php-email-form').submit(function() {
   
    var f = $(this).find('.form-group'),
      ferror = false,
      emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

    f.children('input').each(function() { // run all inputs
     
      var i = $(this); // current input
      var rule = i.attr('data-rule');

      if (rule !== undefined) {
        var ierror = false; // error flag for current input
        var pos = rule.indexOf(':', 0);
        if (pos >= 0) {
          var exp = rule.substr(pos + 1, rule.length);
          rule = rule.substr(0, pos);
        } else {
          rule = rule.substr(pos + 1, rule.length);
        }

        switch (rule) {
          case 'required':
            if (i.val() === '') {
              ferror = ierror = true;
            }
            break;

          case 'minlen':
            if (i.val().length < parseInt(exp)) {
              ferror = ierror = true;
            }
            break;

          case 'email':
            if (!emailExp.test(i.val())) {
              ferror = ierror = true;
            }
            break;

          case 'checked':
            if (! i.is(':checked')) {
              ferror = ierror = true;
            }
            break;

          case 'regexp':
            exp = new RegExp(exp);
            if (!exp.test(i.val())) {
              ferror = ierror = true;
            }
            break;
        }
        i.next('.validate').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
      }
    });
  
    f.children('select').each(function() { // run all inputs
      
      var i = $(this); // current input
      // var rule = i.attr('data-rule');
      var ierror = false; // error flag for current input

      if(document.getElementById('role').value === 'default') {
        ferror = ierror = true;
      } 

      i.next('.validate').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');

    });    

    f.children('textarea').each(function() { // run all inputs

      var i = $(this); // current input
      var rule = i.attr('data-rule');

      if (rule !== undefined) {
        var ierror = false; // error flag for current input
        var pos = rule.indexOf(':', 0);
        if (pos >= 0) {
          var exp = rule.substr(pos + 1, rule.length);
          rule = rule.substr(0, pos);
        } else {
          rule = rule.substr(pos + 1, rule.length);
        }

        switch (rule) {
          case 'required':
            if (i.val() === '') {
              ferror = ierror = true;
            }
            break;

          case 'minlen':
            if (i.val().length < parseInt(exp)) {
              ferror = ierror = true;
            }
            break;
        }
        i.next('.validate').html((ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
      }
    });

    if (ferror) return false;
    else var str = $(this).serialize();

    var this_form = $(this);
    var action = $(this).attr('action');

    if( ! action ) {
      this_form.find('.loading').slideUp();
      this_form.find('.error-message').slideDown().html('The form action property is not set!');
      return false;
    }
    
    this_form.find('.sent-message').slideUp();
    this_form.find('.error-message').slideUp();
    this_form.find('.loading').slideDown();
    
    $.ajax({
      type: "POST",
      url: action,
      data: str,
      success: function(msg) {

        var pos = msg.indexOf(':', 0);
        if (pos >= 0) {
          var exp = msg.substr(pos + 1, msg.length);
          var rule = msg.substr(0, pos);

          if (rule == 'OK') {
            this_form.find('.loading').slideUp();
            this_form.find('.sent-message').slideDown().html(window.location.pathname);
            this_form.find("input:not(input[type=submit]), textarea").val('');
            window.location.assign(exp);
            // window.location.pathname = exp;
            
          } else {
            this_form.find('.loading').slideUp();
            this_form.find('.error-message').slideDown().html(msg);
            // this_form.find("input:not(input[type=submit]), textarea").val('');
          }
           

        } else {
          
          if (msg == 'OK') {
            this_form.find('.loading').slideUp();
            this_form.find('.sent-message').slideDown();
            this_form.find("input:not(input[type=submit]), textarea").val('');

            
          } else {
            this_form.find('.loading').slideUp();
            this_form.find('.error-message').slideDown().html(msg);
            // this_form.find("input:not(input[type=submit]), textarea").val('');
          }
 
        }
      }
    });
    
    return false;
  });
});
