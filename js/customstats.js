/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',');
            
var numbertoscroll1 =209258;
var numbertoscroll2 =10184;
var numbertoscroll3 =38124;
var numbertoscroll4 =1092258;

var $win=$(window);

$(window).scroll(function () {
    console.log('Scrolling Happens');
       $('#students').animateNumber(
  {
    number: numbertoscroll1,
    numberStep: comma_separator_number_step
  },10000
          
);

$('#tutors').animateNumber(
  {
    number: numbertoscroll2,
    numberStep: comma_separator_number_step
  },10000
);

$('#assignment').animateNumber(
  {
    number: numbertoscroll3,
    numberStep: comma_separator_number_step
  },10000
);

$('#question-answer').on('focus',function (){
        console.log('Scrolling Shit');
});
$('#question-answer').animateNumber(
  {
    number: numbertoscroll4,
    numberStep: comma_separator_number_step
  },10000
);




});


 

